@php
    $locale = $locale ?? 'de';
    $page = $page ?? 'home';
    $isEnglish = $locale === 'en';
    $alternateLocale = $isEnglish ? 'de' : 'en';
    $alternateLabel = $isEnglish ? 'DE' : 'EN';

    $copy = [
        'de' => [
            'title' => 'EnergiAI - KI-gestütztes Energiemanagement',
            'description' => 'EnergiAI verbindet reale Gebäude- und Energiedaten mit verständlicher Analyse für Kommunen, Schulen und öffentliche Infrastruktur.',
            'nav' => ['Plattform', 'Lösungen', 'Live-Daten', 'Datenqualität', 'Anmelden'],
            'eyebrow' => 'AI-powered energy. Smarter cities.',
            'headline' => 'Energie verstehen. Intelligent handeln.',
            'lead' => 'EnergiAI verbindet reale Gebäude- und Energiedaten mit verständlicher Analyse – für Kommunen, Schulen und öffentliche Infrastruktur.',
            'primary' => 'Live-Daten ansehen',
            'secondary' => 'Gebäude anbinden',
            'status' => 'Demoobjekt: Sporthalle, Rheinland',
            'status_text' => 'Die Werte auf dieser Seite sind als Demoansicht markiert. Reale Messdaten, berechnete Kennzahlen, Schätzungen und ausgeschlossene Rohwerte werden getrennt dargestellt.',
            'metrics' => [
                ['label' => 'Aktuelle Last', 'value' => '18,4 kW', 'kind' => 'Gemessen'],
                ['label' => 'Heute', 'value' => '214 kWh', 'kind' => 'Berechnet'],
                ['label' => 'Datenalter', 'value' => '12 min', 'kind' => 'Demo'],
            ],
            'section_eyebrow' => 'Lösung',
            'section_title' => 'Von Rohdaten zu Entscheidungen.',
            'cards' => [
                ['title' => 'Monitoring', 'text' => 'Was passiert gerade? Grafana zeigt Last, Klima, Zählerstände und Verfügbarkeit auf Basis nachvollziehbarer Messreihen.'],
                ['title' => 'Analyse', 'text' => 'Warum passiert es? EnergiAI markiert Ausreißer, Grundlasten, Nutzungszeiten und Datenlücken mit erklärbarer Einordnung.'],
                ['title' => 'Optimierung', 'text' => 'Was sollte geändert werden? Empfehlungen werden mit Quelle, Zeitraum, Einheit und Datenqualität verbunden.'],
            ],
            'data_title' => 'Gebäude im Blick',
            'data_text' => 'EnergiAI ist für reale Betriebsdaten gedacht: stündliche Messwerte, Raumklima, Verbrauchsprofile und Zustände aus vorhandenen Systemen.',
            'signals' => ['Stromverbrauch', 'Wärmebedarf', 'Temperatur', 'Luftfeuchte', 'Anomalien', 'Berichte'],
            'steps' => [
                ['title' => 'Daten importieren', 'text' => 'Vorhandene Messreihen werden unverändert übernommen und nachvollziehbar bereinigt.'],
                ['title' => 'Muster erkennen', 'text' => 'Die Analyse markiert Ausreißer, Vergleichswerte und Zeiträume mit auffälligem Verbrauch.'],
                ['title' => 'Maßnahmen steuern', 'text' => 'Technik, Verwaltung und Reporting arbeiten auf derselben Datenbasis.'],
            ],
            'contact_title' => 'Pilot für kommunale Gebäude vorbereiten.',
            'contact_text' => 'Für erste Gespräche reichen vorhandene Exportdateien, Sensorlisten oder ein einzelnes Gebäude als Startpunkt.',
            'contact' => 'hello@energiai.de',
            'footer' => 'Picologic GmbH · Weyertal 5 · 50837 Köln · hello@energiai.de',
            'legal' => 'Impressum',
            'theme' => 'Theme',
            'live_title' => 'Öffentliche Live-Demo',
            'live_text' => 'Diese Demo zeigt eine datenschutzsichere, anonymisierte Ansicht. Interne Grafana-Dashboards und Kundendaten bleiben getrennt.',
            'quality_title' => 'Datenqualität sichtbar',
            'quality_items' => [
                ['label' => 'Gemessen', 'value' => 'Temperatur 21,6 °C', 'status' => 'OK'],
                ['label' => 'Berechnet', 'value' => 'Tagesverbrauch 214 kWh', 'status' => 'OK'],
                ['label' => 'Geschätzt', 'value' => 'CO₂ 82 kg', 'status' => 'Faktor dokumentiert'],
                ['label' => 'Ausgeschlossen', 'value' => '2.013.530,55 °C', 'status' => 'Unplausibler Rohwert'],
            ],
            'ai_title' => 'Beispielhafte EnergiAI-Interpretation',
            'ai_text' => 'Beispiel: Die höchste plausible Temperatur im Demozeitraum liegt innerhalb der Nutzungszeit. Ein extrem hoher Rohwert wurde als unplausibel erkannt und aus Maxima, Durchschnitt und Empfehlung ausgeschlossen.',
        ],
        'en' => [
            'title' => 'EnergiAI - AI-powered energy management',
            'description' => 'EnergiAI connects real building and energy data with understandable analysis for municipalities, schools and public infrastructure.',
            'nav' => ['Platform', 'Solutions', 'Live data', 'Data quality', 'Login'],
            'eyebrow' => 'AI-powered energy. Smarter cities.',
            'headline' => 'Understand energy. Act intelligently.',
            'lead' => 'EnergiAI connects real building and energy data with understandable analysis for municipalities, schools and public infrastructure.',
            'primary' => 'View live data',
            'secondary' => 'Connect a building',
            'status' => 'Demo object: sports hall, Rhineland',
            'status_text' => 'Values on this page are marked as demo data. Real measurements, calculated metrics, estimates and excluded raw values are shown separately.',
            'metrics' => [
                ['label' => 'Current load', 'value' => '18.4 kW', 'kind' => 'Measured'],
                ['label' => 'Today', 'value' => '214 kWh', 'kind' => 'Calculated'],
                ['label' => 'Freshness', 'value' => '12 min', 'kind' => 'Demo'],
            ],
            'section_eyebrow' => 'Solution',
            'section_title' => 'From raw data to decisions.',
            'cards' => [
                ['title' => 'Monitoring', 'text' => 'What is happening? Grafana shows load, climate, meter readings and availability from traceable time series.'],
                ['title' => 'Analysis', 'text' => 'Why is it happening? EnergiAI marks outliers, baselines, usage windows and data gaps with explainable context.'],
                ['title' => 'Optimization', 'text' => 'What should change? Recommendations are tied to source, time range, unit and data-quality status.'],
            ],
            'data_title' => 'Buildings in view',
            'data_text' => 'EnergiAI is designed for real operational data: hourly readings, indoor climate, usage profiles and states from existing systems.',
            'signals' => ['Power usage', 'Heat demand', 'Temperature', 'Humidity', 'Anomalies', 'Reports'],
            'steps' => [
                ['title' => 'Import data', 'text' => 'Existing time series are preserved and cleaned in a traceable way.'],
                ['title' => 'Detect patterns', 'text' => 'The analysis highlights outliers, benchmarks and periods with unusual demand.'],
                ['title' => 'Guide action', 'text' => 'Engineering, administration and reporting work from the same data base.'],
            ],
            'contact_title' => 'Prepare a pilot for public buildings.',
            'contact_text' => 'Existing exports, sensor lists or a single building are enough for a first conversation.',
            'contact' => 'hello@energiai.de',
            'footer' => 'Picologic GmbH · Weyertal 5 · 50837 Köln · hello@energiai.de',
            'legal' => 'Legal notice',
            'theme' => 'Theme',
            'live_title' => 'Public live demo',
            'live_text' => 'This demo shows a privacy-safe anonymized view. Internal Grafana dashboards and customer data remain separated.',
            'quality_title' => 'Visible data quality',
            'quality_items' => [
                ['label' => 'Measured', 'value' => 'Temperature 21.6 °C', 'status' => 'OK'],
                ['label' => 'Calculated', 'value' => 'Daily energy 214 kWh', 'status' => 'OK'],
                ['label' => 'Estimated', 'value' => 'CO₂ 82 kg', 'status' => 'Factor documented'],
                ['label' => 'Excluded', 'value' => '2,013,530.55 °C', 'status' => 'Implausible raw value'],
            ],
            'ai_title' => 'Example EnergiAI interpretation',
            'ai_text' => 'Example: The highest plausible temperature in the demo period is within usage hours. An extreme raw value was detected as implausible and excluded from maxima, averages and recommendations.',
        ],
    ][$locale];
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $copy['title'] }}</title>
    <meta name="description" content="{{ $copy['description'] }}">
    <meta property="og:title" content="{{ $copy['title'] }}">
    <meta property="og:description" content="{{ $copy['description'] }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/assets/fulllogo_transparent.png">
    <script>
        (function () {
            var requested = new URLSearchParams(window.location.search).get('theme');
            var saved = localStorage.getItem('energiai-theme');
            var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            var theme = requested === 'dark' || requested === 'light' ? requested : saved || (prefersDark ? 'dark' : 'light');
            if (requested === 'dark' || requested === 'light') {
                localStorage.setItem('energiai-theme', requested);
            }
            document.documentElement.dataset.theme = theme;
        })();
    </script>
    <style>
        :root {
            color-scheme: light;
            --brand-deep-blue: #0F3562;
            --brand-logo-blue: #144B8B;
            --brand-energy-green: #28A745;
            --brand-digital-signal: #3F59F6;
            --series-electricity: #144B8B;
            --series-savings: #28A745;
            --series-water: #00A6A6;
            --series-heat: #F2A51A;
            --series-forecast: #8854D0;
            --series-anomaly: #E05263;
            --canvas: #F7FAFF;
            --surface: #FFFFFF;
            --soft-ui: #EDF4FC;
            --border: #D8E4F1;
            --text: #0F2742;
            --muted: #61748A;
            --shadow: rgba(15, 53, 98, 0.16);
        }

        [data-theme="dark"] {
            color-scheme: dark;
            --canvas: #071523;
            --surface: #0D2137;
            --soft-ui: #122D49;
            --border: #203F5E;
            --text: #EDF4FC;
            --muted: #9DB1C6;
            --shadow: rgba(0, 0, 0, 0.34);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--canvas);
            color: var(--text);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.5;
        }

        a {
            color: inherit;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 10;
            border-bottom: 1px solid var(--border);
            background: color-mix(in srgb, var(--canvas) 90%, transparent);
            backdrop-filter: blur(14px);
        }

        .header-inner,
        .section-inner,
        .footer-inner {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        .header-inner {
            display: flex;
            min-height: 76px;
            align-items: center;
            justify-content: space-between;
            gap: 28px;
        }

        .brand-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 148px;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 8px 12px;
            background: #FFFFFF;
        }

        .brand-link img {
            display: block;
            width: 148px;
            height: auto;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 22px;
            color: var(--muted);
            font-size: 0.92rem;
            font-weight: 760;
        }

        .nav a {
            text-decoration: none;
        }

        .language-switch {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 34px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--surface);
            color: var(--brand-logo-blue);
            text-decoration: none;
        }

        .theme-switch {
            min-width: 42px;
            height: 34px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--surface);
            color: var(--text);
            cursor: pointer;
            font-weight: 800;
        }

        .hero {
            min-height: calc(86vh - 76px);
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(360px, 0.92fr);
            gap: 48px;
            align-items: center;
            padding: 40px 0 54px;
        }

        .eyebrow {
            margin: 0 0 18px;
            color: var(--brand-energy-green);
            font-size: 0.82rem;
            font-weight: 900;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        h1,
        h2,
        h3,
        p {
            margin-top: 0;
        }

        h1 {
            max-width: 820px;
            margin-bottom: 26px;
            color: var(--text);
            font-size: clamp(2.6rem, 5.3vw, 5rem);
            line-height: 0.98;
            letter-spacing: 0;
        }

        .lead {
            max-width: 700px;
            margin-bottom: 0;
            color: var(--muted);
            font-size: clamp(1.06rem, 1.8vw, 1.32rem);
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 34px;
        }

        .button {
            display: inline-flex;
            min-height: 48px;
            align-items: center;
            justify-content: center;
            padding: 0 18px;
            border: 1px solid var(--brand-digital-signal);
            border-radius: 8px;
            background: var(--brand-digital-signal);
            color: #fff;
            font-weight: 850;
            text-decoration: none;
        }

        .button.secondary {
            border-color: var(--border);
            background: var(--surface);
            color: var(--text);
        }

        .hero-visual {
            position: relative;
            min-height: 520px;
            overflow: hidden;
            border-radius: 8px;
            background:
                linear-gradient(150deg, rgba(15, 53, 98, 0.96), rgba(20, 75, 139, 0.82)),
                radial-gradient(circle at 78% 20%, rgba(40, 167, 69, 0.34), transparent 32%);
            box-shadow: 0 28px 90px var(--shadow);
        }

        .hero-visual::before {
            position: absolute;
            inset: 0;
            content: "";
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.08) 1px, transparent 1px);
            background-size: 42px 42px;
            mask-image: linear-gradient(180deg, rgba(0, 0, 0, 0.9), transparent);
        }

        .mark {
            position: absolute;
            top: 28px;
            right: 28px;
            width: min(280px, 46%);
            opacity: 0.95;
        }

        .dashboard {
            position: absolute;
            right: 28px;
            bottom: 28px;
            left: 28px;
            display: grid;
            gap: 14px;
            z-index: 1;
        }

        .status-panel,
        .metric-panel {
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 8px;
            background: color-mix(in srgb, var(--surface) 92%, transparent);
        }

        .status-panel {
            padding: 22px;
        }

        .status-label {
            margin-bottom: 10px;
            color: var(--brand-energy-green);
            font-size: 0.78rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .status-panel p {
            margin-bottom: 0;
            color: var(--text);
        }

        .metric-panel {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .metric {
            min-height: 112px;
            padding: 18px;
            border-right: 1px solid var(--border);
        }

        .metric:last-child {
            border-right: 0;
        }

        .metric span {
            display: block;
            color: var(--muted);
            font-size: 0.83rem;
            font-weight: 720;
        }

        .metric strong {
            display: block;
            margin-top: 8px;
            color: var(--text);
            font-size: clamp(1.35rem, 2vw, 1.85rem);
            line-height: 1.08;
        }

        .metric em {
            display: inline-flex;
            margin-top: 12px;
            border-radius: 999px;
            padding: 3px 8px;
            background: var(--soft-ui);
            color: var(--muted);
            font-size: 0.72rem;
            font-style: normal;
            font-weight: 850;
        }

        .signal-line {
            position: absolute;
            left: 38px;
            right: 38px;
            top: 46%;
            height: 120px;
            z-index: 0;
        }

        .signal-line svg {
            width: 100%;
            height: 100%;
        }

        .section {
            border-top: 1px solid var(--border);
            background: var(--surface);
        }

        .section.alt {
            background: var(--surface);
        }

        .section-inner {
            padding: 70px 0;
        }

        .section-kicker {
            margin-bottom: 12px;
            color: var(--brand-energy-green);
            font-size: 0.8rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .section-title {
            max-width: 720px;
            margin-bottom: 28px;
            color: var(--text);
            font-size: clamp(2rem, 4vw, 3.8rem);
            line-height: 1.02;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .card,
        .data-panel,
        .step {
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--surface);
        }

        .card {
            padding: 24px;
        }

        .card h3,
        .step h3 {
            margin-bottom: 10px;
            color: var(--text);
            font-size: 1.08rem;
        }

        .card p,
        .step p,
        .data-copy p,
        .contact p {
            margin-bottom: 0;
            color: var(--muted);
        }

        .data-layout {
            display: grid;
            grid-template-columns: minmax(0, 0.9fr) minmax(360px, 1.1fr);
            gap: 26px;
            align-items: stretch;
        }

        .data-copy {
            padding: 8px 0;
        }

        .data-panel {
            padding: 26px;
            background: linear-gradient(145deg, var(--surface), var(--soft-ui));
        }

        .signals {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .signals li {
            min-height: 54px;
            display: flex;
            align-items: center;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 0 14px;
            background: rgba(255, 255, 255, 0.74);
            color: #27445e;
            font-weight: 780;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            counter-reset: steps;
        }

        .step {
            min-height: 190px;
            padding: 24px;
            counter-increment: steps;
        }

        .step::before {
            display: inline-flex;
            width: 34px;
            height: 34px;
            align-items: center;
            justify-content: center;
            margin-bottom: 22px;
            border-radius: 8px;
            background: var(--brand-energy-green);
            color: #fff;
            content: counter(steps);
            font-weight: 900;
        }

        .live-layout {
            display: grid;
            grid-template-columns: minmax(0, 0.95fr) minmax(360px, 1.05fr);
            gap: 24px;
            align-items: stretch;
        }

        .grafana-frame,
        .quality-panel,
        .ai-panel {
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--surface);
        }

        .grafana-frame {
            min-height: 430px;
            overflow: hidden;
        }

        .grafana-topbar {
            display: flex;
            min-height: 48px;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            border-bottom: 1px solid var(--border);
            padding: 0 16px;
            color: var(--muted);
            font-size: 0.84rem;
            font-weight: 800;
        }

        .live-dot {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--brand-energy-green);
        }

        .live-dot::before {
            width: 9px;
            height: 9px;
            border-radius: 999px;
            background: var(--brand-energy-green);
            content: "";
        }

        .chart {
            height: 250px;
            padding: 24px 18px 8px;
        }

        .chart svg {
            width: 100%;
            height: 100%;
        }

        .chart-legend {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            padding: 0 18px 18px;
            color: var(--muted);
            font-size: 0.82rem;
            font-weight: 760;
        }

        .legend-item {
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .legend-swatch {
            width: 18px;
            height: 3px;
            border-radius: 999px;
            background: var(--series-electricity);
        }

        .legend-swatch.heat {
            background: var(--series-heat);
        }

        .legend-swatch.forecast {
            background: var(--series-forecast);
        }

        .quality-panel,
        .ai-panel {
            padding: 22px;
        }

        .quality-panel h3,
        .ai-panel h3 {
            margin-bottom: 16px;
            color: var(--text);
        }

        .quality-list {
            display: grid;
            gap: 10px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .quality-list li {
            display: grid;
            grid-template-columns: minmax(90px, 0.42fr) minmax(0, 1fr);
            gap: 10px;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 12px;
            background: var(--soft-ui);
        }

        .quality-label {
            color: var(--brand-logo-blue);
            font-weight: 900;
        }

        .quality-value {
            color: var(--text);
            font-weight: 820;
        }

        .quality-status {
            grid-column: 2;
            color: var(--muted);
            font-size: 0.86rem;
        }

        .ai-panel {
            margin-top: 14px;
            border-color: color-mix(in srgb, var(--brand-digital-signal) 34%, var(--border));
        }

        .source-note {
            margin-top: 18px;
            color: var(--muted);
            font-size: 0.88rem;
        }

        .contact {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 28px;
            align-items: center;
            border-radius: 8px;
            padding: 34px;
            background: var(--brand-deep-blue);
            color: #fff;
        }

        .contact h2 {
            margin-bottom: 10px;
            font-size: clamp(1.7rem, 3vw, 2.8rem);
            line-height: 1.05;
        }

        .contact p {
            color: rgba(255, 255, 255, 0.74);
        }

        .contact .button {
            border-color: #fff;
            background: #fff;
            color: var(--brand-deep-blue);
        }

        footer {
            border-top: 1px solid var(--border);
            background: var(--surface);
        }

        .footer-inner {
            display: flex;
            min-height: 86px;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            color: var(--muted);
            font-size: 0.92rem;
        }

        .footer-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            gap: 12px 18px;
        }

        .footer-meta a {
            color: var(--brand-logo-blue);
            font-weight: 800;
            text-decoration: none;
        }

        .footer-inner img {
            width: 124px;
            height: auto;
        }

        @media (max-width: 900px) {
            .nav a:not(.language-switch) {
                display: none;
            }

            .hero,
            .data-layout,
            .live-layout,
            .contact {
                grid-template-columns: 1fr;
            }

            .hero {
                min-height: auto;
                padding-top: 38px;
            }

            .hero-visual {
                min-height: 540px;
            }

            .card-grid,
            .steps {
                grid-template-columns: 1fr;
            }

            .metric-panel {
                grid-template-columns: 1fr;
            }

            .metric {
                border-right: 0;
                border-bottom: 1px solid var(--border);
            }

            .metric:last-child {
                border-bottom: 0;
            }

            .grafana-frame {
                min-height: 380px;
            }
        }

        @media (max-width: 560px) {
            .header-inner,
            .section-inner,
            .footer-inner {
                width: min(100% - 28px, 1180px);
            }

            .brand-link img {
                width: 138px;
            }

            h1 {
                font-size: 2.78rem;
            }

            .hero-visual {
                min-height: 500px;
            }

            .mark {
                width: 190px;
            }

            .dashboard {
                right: 16px;
                bottom: 16px;
                left: 16px;
            }

            .signals {
                grid-template-columns: 1fr;
            }

            .quality-list li {
                grid-template-columns: 1fr;
            }

            .quality-status {
                grid-column: auto;
            }

            .footer-inner {
                flex-direction: column;
                align-items: flex-start;
                padding: 24px 0;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand-link" href="/?lang={{ $locale }}" aria-label="EnergiAI">
                <img src="/assets/fulllogo_transparent.png" alt="EnergiAI">
            </a>
            <nav class="nav" aria-label="Primary">
                <a href="/platform?lang={{ $locale }}#data">{{ $copy['nav'][0] }}</a>
                <a href="/solutions?lang={{ $locale }}#solution">{{ $copy['nav'][1] }}</a>
                <a href="/live?lang={{ $locale }}">{{ $copy['nav'][2] }}</a>
                <a href="/live?lang={{ $locale }}#quality">{{ $copy['nav'][3] }}</a>
                <a href="/login">{{ $copy['nav'][4] }}</a>
                <button class="theme-switch" type="button" data-theme-toggle aria-label="{{ $copy['theme'] }}">◐</button>
                <a class="language-switch" href="/?lang={{ $alternateLocale }}" aria-label="Switch language">{{ $alternateLabel }}</a>
            </nav>
        </div>
    </header>

    <main>
        @if ($page !== 'live')
        <section class="section alt">
            <div class="section-inner hero">
                <div>
                    <p class="eyebrow">{{ $copy['eyebrow'] }}</p>
                    <h1>{{ $copy['headline'] }}</h1>
                    <p class="lead">{{ $copy['lead'] }}</p>
                    <div class="actions">
                        <a class="button" href="/live?lang={{ $locale }}">{{ $copy['primary'] }}</a>
                        <a class="button secondary" href="#contact">{{ $copy['secondary'] }}</a>
                    </div>
                </div>

                <div class="hero-visual" aria-label="EnergiAI monitoring dashboard preview">
                    <img class="mark" src="/assets/icononly_transparent.png" alt="">
                    <div class="signal-line" aria-hidden="true">
                        <svg viewBox="0 0 600 120" preserveAspectRatio="none">
                            <path d="M0 78 C70 20 118 32 160 62 C206 94 236 92 286 44 C336 -4 392 20 430 54 C475 94 520 94 600 28" fill="none" stroke="var(--series-electricity)" stroke-width="5" stroke-linecap="round"/>
                            <path d="M0 92 C80 54 124 62 174 82 C230 104 270 92 320 66 C374 38 414 48 464 82 C510 112 548 104 600 72" fill="none" stroke="var(--series-savings)" stroke-width="5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="dashboard">
                        <div class="status-panel">
                            <div class="status-label">{{ $copy['status'] }}</div>
                            <p>{{ $copy['status_text'] }}</p>
                        </div>
                        <div class="metric-panel">
                            @foreach ($copy['metrics'] as $metric)
                                <div class="metric">
                                    <span>{{ $metric['label'] }}</span>
                                    <strong>{{ $metric['value'] }}</strong>
                                    <em>{{ $metric['kind'] }}</em>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <section class="section" id="live">
            <div class="section-inner live-layout">
                <div>
                    <p class="section-kicker">{{ $copy['nav'][2] }}</p>
                    <h2 class="section-title">{{ $copy['live_title'] }}</h2>
                    <p class="lead">{{ $copy['live_text'] }}</p>
                    <p class="source-note">
                        Demoquelle: anonymisierte Sporthalle Rheinland · Zeitraum: kuratierter Beispielausschnitt · echte Grafana-Panels werden nach Freigabe als eingeschränkte Viewer-Embeds ersetzt.
                    </p>
                </div>
                <div class="grafana-frame" aria-label="Grafana-style demo panel">
                    <div class="grafana-topbar">
                        <span>{{ $copy['status'] }}</span>
                        <span class="live-dot">Demo online</span>
                    </div>
                    <div class="chart" aria-hidden="true">
                        <svg viewBox="0 0 620 240" preserveAspectRatio="none">
                            <path d="M0 204 H620" stroke="var(--border)"/>
                            <path d="M0 152 H620" stroke="var(--border)"/>
                            <path d="M0 100 H620" stroke="var(--border)"/>
                            <path d="M0 48 H620" stroke="var(--border)"/>
                            <path d="M0 168 C70 138 120 142 172 112 C226 78 272 92 326 118 C386 148 434 138 492 92 C540 54 580 66 620 42" fill="none" stroke="var(--series-electricity)" stroke-width="5" stroke-linecap="round"/>
                            <path d="M0 132 C74 124 128 98 186 106 C250 116 292 92 340 72 C408 44 456 68 506 88 C552 108 588 96 620 76" fill="none" stroke="var(--series-heat)" stroke-width="5" stroke-linecap="round"/>
                            <path d="M0 188 C86 176 132 178 190 166 C260 152 316 160 374 138 C444 112 510 118 620 104" fill="none" stroke="var(--series-forecast)" stroke-width="4" stroke-dasharray="10 10" stroke-linecap="round"/>
                            <circle cx="530" cy="54" r="8" fill="var(--series-anomaly)"/>
                        </svg>
                    </div>
                    <div class="chart-legend">
                        <span class="legend-item"><span class="legend-swatch"></span>Electricity</span>
                        <span class="legend-item"><span class="legend-swatch heat"></span>Heat</span>
                        <span class="legend-item"><span class="legend-swatch forecast"></span>Forecast</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section alt" id="quality">
            <div class="section-inner live-layout">
                <div class="quality-panel">
                    <h3>{{ $copy['quality_title'] }}</h3>
                    <ul class="quality-list">
                        @foreach ($copy['quality_items'] as $item)
                            <li>
                                <span class="quality-label">{{ $item['label'] }}</span>
                                <span class="quality-value">{{ $item['value'] }}</span>
                                <span class="quality-status">{{ $item['status'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="ai-panel">
                    <h3>{{ $copy['ai_title'] }}</h3>
                    <p>{{ $copy['ai_text'] }}</p>
                    <p class="source-note">Status: Beispielinterpretation, nicht als produktiver Live-AI-Output ausgegeben.</p>
                </div>
            </div>
        </section>

        <section class="section" id="solution">
            <div class="section-inner">
                <p class="section-kicker">{{ $copy['section_eyebrow'] }}</p>
                <h2 class="section-title">{{ $copy['section_title'] }}</h2>
                <div class="card-grid">
                    @foreach ($copy['cards'] as $card)
                        <article class="card">
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['text'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section alt" id="data">
            <div class="section-inner data-layout">
                <div class="data-copy">
                    <p class="section-kicker">{{ $copy['nav'][1] }}</p>
                    <h2 class="section-title">{{ $copy['data_title'] }}</h2>
                    <p>{{ $copy['data_text'] }}</p>
                </div>
                <div class="data-panel">
                    <ul class="signals">
                        @foreach ($copy['signals'] as $signal)
                            <li>{{ $signal }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <section class="section" id="workflow">
            <div class="section-inner">
                <p class="section-kicker">{{ $copy['nav'][2] }}</p>
                <div class="steps">
                    @foreach ($copy['steps'] as $step)
                        <article class="step">
                            <h3>{{ $step['title'] }}</h3>
                            <p>{{ $step['text'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section alt" id="contact">
            <div class="section-inner">
                <div class="contact">
                    <div>
                        <h2>{{ $copy['contact_title'] }}</h2>
                        <p>{{ $copy['contact_text'] }}</p>
                    </div>
                    <a class="button" href="mailto:{{ $copy['contact'] }}">{{ $copy['contact'] }}</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-inner">
            <img src="/assets/fulllogo_transparent.png" alt="EnergiAI">
            <div class="footer-meta">
                <span>{{ $copy['footer'] }}</span>
                <a href="/impressum?lang={{ $locale }}">{{ $copy['legal'] }}</a>
            </div>
        </div>
    </footer>
    <script>
        document.querySelector('[data-theme-toggle]')?.addEventListener('click', function () {
            var current = document.documentElement.dataset.theme === 'dark' ? 'dark' : 'light';
            var next = current === 'dark' ? 'light' : 'dark';
            document.documentElement.dataset.theme = next;
            localStorage.setItem('energiai-theme', next);
        });
    </script>
</body>
</html>
