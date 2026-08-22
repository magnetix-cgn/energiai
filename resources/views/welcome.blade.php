<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EnergiAI - KI-gestuetztes Energiemonitoring</title>
    <meta name="description" content="EnergiAI entwickelt KI-gestuetztes Energiemonitoring fuer Kommunen, Schulen und oeffentliche Gebaeude.">
    <style>
        :root {
            color-scheme: light;
            --ink: #123047;
            --muted: #5a6972;
            --line: #d7e3e8;
            --surface: #f7faf8;
            --panel: #ffffff;
            --accent: #16806b;
            --accent-2: #e8b84a;
            --deep: #17384f;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--surface);
            color: var(--ink);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.5;
        }

        a {
            color: inherit;
        }

        .page {
            min-height: 100vh;
        }

        .hero {
            min-height: 82vh;
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(320px, 0.95fr);
            gap: 48px;
            align-items: center;
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
            padding: 36px 0 48px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 56px;
        }

        .brand img {
            width: 174px;
            height: auto;
        }

        .eyebrow {
            margin: 0 0 18px;
            color: var(--accent);
            font-size: 0.82rem;
            font-weight: 800;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        h1 {
            max-width: 780px;
            margin: 0;
            color: var(--deep);
            font-size: clamp(3.2rem, 8vw, 7.8rem);
            line-height: 0.94;
            letter-spacing: 0;
        }

        .lead {
            max-width: 660px;
            margin: 28px 0 0;
            color: var(--muted);
            font-size: clamp(1.05rem, 2vw, 1.35rem);
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 34px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 18px;
            border: 1px solid var(--deep);
            border-radius: 8px;
            background: var(--deep);
            color: #fff;
            font-weight: 800;
            text-decoration: none;
        }

        .button.secondary {
            background: transparent;
            color: var(--deep);
        }

        .visual {
            position: relative;
            min-height: 520px;
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: 8px;
            background:
                linear-gradient(135deg, rgba(22, 128, 107, 0.18), rgba(232, 184, 74, 0.18)),
                url("https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1200&q=85") center/cover;
        }

        .visual::after {
            position: absolute;
            inset: 0;
            content: "";
            background: linear-gradient(180deg, rgba(18, 48, 71, 0.05), rgba(18, 48, 71, 0.48));
        }

        .metric-panel {
            position: absolute;
            right: 24px;
            bottom: 24px;
            z-index: 1;
            width: min(360px, calc(100% - 48px));
            padding: 22px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 18px 50px rgba(18, 48, 71, 0.18);
        }

        .metric-row {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 18px;
            align-items: baseline;
            padding: 13px 0;
            border-bottom: 1px solid var(--line);
        }

        .metric-row:last-child {
            border-bottom: 0;
        }

        .metric-label {
            color: var(--muted);
            font-size: 0.9rem;
        }

        .metric-value {
            color: var(--deep);
            font-size: 1.45rem;
            font-weight: 900;
        }

        .section {
            border-top: 1px solid var(--line);
            background: var(--panel);
        }

        .section-inner {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
            padding: 44px 0 56px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .card {
            padding: 22px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #fff;
        }

        .card h2 {
            margin: 0 0 12px;
            font-size: 1.1rem;
            line-height: 1.25;
        }

        .card p {
            margin: 0;
            color: var(--muted);
        }

        footer {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
            padding: 26px 0 34px;
            color: var(--muted);
            font-size: 0.92rem;
        }

        @media (max-width: 820px) {
            .hero {
                min-height: auto;
                grid-template-columns: 1fr;
                gap: 28px;
                padding-top: 26px;
            }

            .brand {
                margin-bottom: 34px;
            }

            .brand img {
                width: 146px;
            }

            .visual {
                min-height: 420px;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="hero" aria-labelledby="hero-title">
            <div>
                <div class="brand">
                    <img src="/assets/fulllogo_transparent.png" alt="EnergiAI">
                </div>
                <p class="eyebrow">Energiemonitoring fuer oeffentliche Gebaeude</p>
                <h1 id="hero-title">EnergiAI</h1>
                <p class="lead">
                    KI-gestuetztes Energiemonitoring fuer Kommunen, Schulen und oeffentliche Gebaeude:
                    Daten zusammenfuehren, Verbrauch verstehen, Einsparpotenziale sichtbar machen.
                </p>
                <div class="actions">
                    <a class="button" href="mailto:hello@energiai.de">Kontakt aufnehmen</a>
                    <a class="button secondary" href="#ansatz">Ansatz ansehen</a>
                </div>
            </div>
            <div class="visual" role="img" aria-label="Solaranlage und Gebaeude als Symbol fuer Energiemonitoring">
                <div class="metric-panel" aria-label="EnergiAI Monitoring Kennzahlen">
                    <div class="metric-row">
                        <span class="metric-label">Gebaeudefokus</span>
                        <span class="metric-value">24/7</span>
                    </div>
                    <div class="metric-row">
                        <span class="metric-label">Datenbasis</span>
                        <span class="metric-value">Live</span>
                    </div>
                    <div class="metric-row">
                        <span class="metric-label">Ziel</span>
                        <span class="metric-value">CO2</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="ansatz">
            <div class="section-inner">
                <div class="grid">
                    <article class="card">
                        <h2>Kommunale Transparenz</h2>
                        <p>Verbrauchsdaten aus Gebaeuden werden zentral sichtbar und fuer Verwaltung, Technik und Reporting nutzbar.</p>
                    </article>
                    <article class="card">
                        <h2>KI-gestuetzte Analyse</h2>
                        <p>Anomalien, Lastprofile und Einsparpotenziale werden automatisch erkannt und nachvollziehbar aufbereitet.</p>
                    </article>
                    <article class="card">
                        <h2>Pragmatische Integration</h2>
                        <p>EnergiAI ist fuer bestehende Infrastruktur gedacht: schrittweise einfuehrbar, offen dokumentiert und betreibbar.</p>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer>
        Picologic GmbH · Universitaetstr. 3 · 56070 Koblenz · hello@energiai.de
    </footer>
</body>
</html>
