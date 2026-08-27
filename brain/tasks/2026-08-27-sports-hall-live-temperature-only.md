# Codex Task: Reduce the dashboard to the live sports hall temperature

**Status:** Ready  
**Priority:** High  
**Repository:** `magnetix-cgn/energiai`  
**Target branch:** `main`  
**Codex-ready:** Yes

## Objective

Simplify the current EnergiAI measurement view so it displays exactly one live value: the current temperature in the sports hall.

The existing page currently exposes unrelated data-quality, energy-consumption, CO₂, example, and timestamp content. Remove all of it from this view.

## Required result

Render one clean, centered temperature card using the existing EnergiAI dark visual language.

The card must contain only:

- label: `Temperatur Sporthalle`
- the current live temperature value in degrees Celsius
- a small live-status indicator

The live temperature must continue to come from the existing application data source. Do not hardcode the example value `25,1 °C`.

## Scope

1. Locate the view/component that renders the current measurement dashboard.
2. Preserve the existing temperature data integration and its refresh/update behavior.
3. Remove every unrelated card, value, status, explanation, and auxiliary panel from this page.
4. Make the temperature the dominant visual element.
5. Keep the layout responsive and readable on desktop and mobile.
6. Retain the existing EnergiAI colors and general typography unless a minimal adjustment is needed for the simplified layout.

## Remove completely

- `Datenqualität sichtbar`
- measured/calculated/estimated classifications
- daily consumption
- CO₂ values
- example interpretation panel
- explanatory copy
- visible update date/time
- any other metric or navigation element on this specific display

## Functional requirements

- The displayed temperature is populated dynamically from the existing backend/API/data binding.
- Existing polling, push, or refresh logic remains functional.
- The live indicator must reflect real data state if such state already exists.
- If no explicit connection state exists, show the live indicator only after a valid current temperature value has been received.
- Do not introduce a second data source.
- Do not alter ingestion, storage, authentication, or unrelated dashboard routes.

## UI requirements

- One centered card within the available viewport.
- `Temperatur Sporthalle` is clearly visible.
- Temperature value is the largest text.
- Unit is formatted as `°C`.
- Live status is visually subordinate to the value.
- No placeholder/demo values in production.
- No horizontal overflow at 320 px viewport width.

## Acceptance criteria

- [ ] The page shows exactly one metric.
- [ ] That metric is the live sports hall temperature.
- [ ] The value is obtained from the existing live data integration.
- [ ] No daily consumption, CO₂, data-quality, example, or timestamp content remains.
- [ ] Loading and unavailable-data states do not display a fabricated temperature.
- [ ] The page works at 320 px mobile width and on desktop.
- [ ] Existing automated tests pass.
- [ ] A focused test covers successful temperature rendering and the unavailable-data state.
- [ ] No unrelated files or functionality are changed.

## Verification

Run the repository's documented test and formatting commands. Then verify manually:

1. Open the temperature view with a valid live reading.
2. Confirm only `Temperatur Sporthalle`, the live value, its unit, and the live indicator appear.
3. Interrupt or mock the live source.
4. Confirm no stale or invented temperature is presented as live.
5. Check the page at 320 px width and a standard desktop viewport.

## Deliverable

Commit the implementation with a concise message such as:

```
feat: simplify sports hall temperature display
```

Include a short implementation summary and test evidence in the pull request or completion report.
