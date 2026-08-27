# Codex Task: Ingest real electricity meter data and calculate CO₂ emissions

**Status:** Ready  
**Priority:** High  
**Repository:** `magnetix-cgn/energiai`  
**Target branch:** `main`  
**Codex-ready:** Yes

## Objective

Replace the current placeholder or estimated electricity-consumption and CO₂ values with data derived from the real electricity meter.

The scheduled ingestion job must read the actual cumulative meter value, persist it, calculate interval and daily electricity consumption from consecutive readings, and calculate CO₂ emissions from that measured consumption using a documented emission factor.

No fabricated, random, demo, or fixed production values are permitted.

## Data semantics

Keep the provenance of every value explicit:

- **Measured:** cumulative electricity meter reading in `kWh`
- **Calculated:** interval consumption and daily consumption derived from measured meter readings
- **Calculated estimate:** CO₂ emissions derived from measured consumption and an external/documented emissions factor

Formula:

```text
consumption_kwh = current_meter_kwh - previous_meter_kwh
co2_kg = consumption_kwh * emission_factor_kg_co2e_per_kwh
```

The electricity consumption is not an estimate. Only the CO₂ result depends on an emissions factor.

## Scope

1. Locate the existing cron job/scheduled command and the electricity-meter integration.
2. Determine the meter interface already available in the deployment, for example an existing API, Modbus, MQTT, database feed, or device endpoint.
3. Read the real cumulative import register in `kWh`.
4. Store raw readings with meter identity, source timestamp, ingestion timestamp, unit, quality state, and source/provenance.
5. Calculate consumption only from two valid chronological readings from the same meter/register.
6. Aggregate calculated interval consumption into the local calendar day used by the site while storing timestamps in UTC.
7. Calculate CO₂ using a configurable, versioned emissions factor.
8. Expose the real calculated values through the existing backend/data contract used by EnergiAI.
9. Remove or disable all production fallback values such as `214 kWh` and `82 kg`.
10. Add structured logging and monitoring for ingestion failures and implausible readings.

## Cron job requirements

- Use the repository's existing scheduler/cron mechanism.
- Prevent overlapping executions with a lock.
- Make ingestion idempotent for the same meter, register, and source timestamp.
- Apply an explicit timeout and bounded retry behavior.
- Exit non-zero when no valid reading can be obtained.
- Log structured fields including meter ID, register, source timestamp, reading, unit, calculated delta, factor version, and outcome.
- Never emit credentials or complete authenticated URLs into logs.
- Do not overwrite the last valid reading when ingestion fails.
- Do not substitute a demo value on failure.

## Meter validation

Reject or quarantine a reading when:

- it is older than the last accepted source timestamp;
- it uses an unexpected unit or register;
- it is negative or malformed;
- the cumulative value decreases without a documented meter replacement/reset event;
- the calculated delta exceeds a configurable plausibility threshold;
- the source is unavailable or authentication fails.

A meter replacement/reset must be handled as an explicit event and must not create a negative or extremely large consumption value.

## CO₂ factor requirements

The emissions factor must:

- be configurable, not embedded in presentation code;
- use the unit `kg CO₂e/kWh`;
- include source organization, source URL/reference, applicable geography, publication year, valid-from date, and version;
- be selected explicitly for the meter/site;
- be stored with each calculated CO₂ result so historical results remain reproducible after factor updates.

Do not silently invent or auto-update a factor. If no approved factor is configured, publish the measured consumption but mark CO₂ as unavailable.

## Data model

Reuse existing tables/models where suitable. Otherwise add minimal persistence for:

### Meter reading

- meter ID
- register ID
- cumulative value
- unit
- source timestamp
- ingestion timestamp
- source/provenance
- quality status
- unique idempotency key

### Calculated consumption

- meter ID
- period start/end
- consumption in `kWh`
- IDs of both source readings
- calculation timestamp
- quality status

### Calculated CO₂

- consumption record ID
- emissions value in `kg CO₂e`
- factor value and unit
- factor source/version
- calculation timestamp

Use UTC and ISO 8601 at storage/API boundaries.

## API and UI contract

- Return an explicit provenance/quality field: `measured`, `calculated`, `unavailable`, or `invalid`.
- Return the timestamp of the newest source reading.
- Never label calculated consumption as measured.
- Never label CO₂ as measured.
- Never return stale data as live without a visible stale/unavailable state.
- Do not reintroduce consumption or CO₂ cards into the temperature-only view defined by:
  `brain/tasks/2026-08-27-sports-hall-live-temperature-only.md`.
- Make the values available to the appropriate EnergiAI data/reporting view or API for later presentation.

## Tests

Add automated tests for:

1. two valid increasing readings;
2. duplicate cron execution/idempotency;
3. unavailable meter;
4. authentication or timeout failure;
5. stale/out-of-order reading;
6. decreasing meter value;
7. explicit meter reset/replacement;
8. implausibly high delta;
9. daily aggregation across midnight and timezone conversion;
10. CO₂ calculation with a configured factor;
11. missing emissions factor;
12. factor version change without rewriting historical results;
13. no placeholder/demo fallback after any failure.

## Acceptance criteria

- [ ] The cron job ingests a real cumulative electricity-meter reading.
- [ ] Daily consumption is derived from actual consecutive readings.
- [ ] CO₂ is derived from actual consumption and a documented factor.
- [ ] Raw readings and calculated records are traceable and reproducible.
- [ ] The job is locked, idempotent, timeout-bounded, and safely retryable.
- [ ] Invalid readings cannot corrupt totals.
- [ ] Missing data is shown as unavailable, never replaced by a fake number.
- [ ] `214 kWh`, `82 kg`, and other fixed demo values are absent from production paths.
- [ ] Tests cover the required failure and calculation cases.
- [ ] Existing temperature ingestion and the temperature-only display continue to work.
- [ ] No secrets are committed or logged.

## Agent execution notes

Before implementation, inspect the deployment configuration and existing scheduler to identify the real meter endpoint and register. Reuse configured secrets through the existing secret mechanism. Do not guess credentials, meter IDs, registers, or the emissions factor.

If the real meter endpoint/register is not configured, implement the adapter and validation contract, add documented configuration placeholders, and stop with a precise blocker report rather than inserting sample production data.

## Verification evidence

The completion report must include:

- files and migrations changed;
- cron/scheduler entry used;
- sanitized example of one accepted raw meter reading;
- sanitized example of the calculated consumption;
- emissions factor metadata and calculation example;
- automated test results;
- one manual cron run result;
- confirmation that no demo values are used in production.

## Suggested commit message

```
feat: derive energy and CO2 from real meter data
```
