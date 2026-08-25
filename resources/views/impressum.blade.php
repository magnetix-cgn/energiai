@php
    $locale = $locale ?? 'de';
    $isEnglish = $locale === 'en';
    $title = $isEnglish ? 'Legal notice' : 'Impressum';
    $description = $isEnglish
        ? 'Legal provider information for EnergiAI by Picologic GmbH.'
        : 'Impressum und Anbieterkennzeichnung für EnergiAI der Picologic GmbH.';
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - EnergiAI</title>
    <meta name="description" content="{{ $description }}">
    <style>
        :root {
            color-scheme: light;
            --brand-deep-blue: #0F3562;
            --brand-logo-blue: #144B8B;
            --brand-energy-green: #28A745;
            --canvas: #F7FAFF;
            --surface: #FFFFFF;
            --soft-ui: #EDF4FC;
            --border: #D8E4F1;
            --text: #0F2742;
            --muted: #61748A;
        }

        [data-theme="dark"] {
            color-scheme: dark;
            --canvas: #071523;
            --surface: #0D2137;
            --soft-ui: #122D49;
            --border: #203F5E;
            --text: #EDF4FC;
            --muted: #9DB1C6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--canvas);
            color: var(--text);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.55;
        }

        a {
            color: var(--brand-logo-blue);
        }

        .site-header,
        footer {
            border-bottom: 1px solid var(--border);
            background: var(--surface);
        }

        footer {
            border-top: 1px solid var(--border);
            border-bottom: 0;
        }

        .header-inner,
        .section-inner,
        .footer-inner {
            width: min(980px, calc(100% - 40px));
            margin: 0 auto;
        }

        .header-inner,
        .footer-inner {
            display: flex;
            min-height: 76px;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand-link {
            display: inline-flex;
            align-items: center;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 8px 12px;
            background: #fff;
        }

        .brand-link img {
            display: block;
            width: 148px;
            height: auto;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 18px;
            color: var(--muted);
            font-size: 0.92rem;
            font-weight: 800;
        }

        .nav a {
            text-decoration: none;
        }

        .section-inner {
            padding: 76px 0;
        }

        .kicker {
            margin: 0 0 12px;
            color: var(--brand-energy-green);
            font-size: 0.8rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        h1 {
            margin: 0 0 28px;
            font-size: clamp(2.4rem, 5vw, 4.8rem);
            line-height: 1;
        }

        h2 {
            margin: 0 0 12px;
            font-size: 1.25rem;
        }

        p {
            margin: 0 0 8px;
        }

        .legal-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .legal-card {
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 22px;
            background: var(--surface);
        }

        .notice {
            margin-top: 16px;
            border: 1px solid color-mix(in srgb, var(--brand-energy-green) 34%, var(--border));
            border-radius: 8px;
            padding: 18px 22px;
            background: var(--soft-ui);
            color: var(--muted);
        }

        .footer-inner {
            color: var(--muted);
            font-size: 0.92rem;
        }

        .footer-inner img {
            width: 124px;
            height: auto;
        }

        @media (max-width: 720px) {
            .legal-grid {
                grid-template-columns: 1fr;
            }

            .header-inner,
            .footer-inner {
                align-items: flex-start;
                flex-direction: column;
                padding: 20px 0;
            }
        }

        @media print {
            .site-header,
            footer {
                display: none;
            }

            body {
                background: #fff;
                color: #000;
            }

            .section-inner {
                width: auto;
                padding: 0;
            }

            .legal-card,
            .notice {
                break-inside: avoid;
            }
        }
    </style>
    <script>
        (function () {
            var saved = localStorage.getItem('energiai-theme');
            if (saved === 'dark' || saved === 'light') {
                document.documentElement.dataset.theme = saved;
            }
        })();
    </script>
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand-link" href="/?lang={{ $locale }}" aria-label="EnergiAI">
                <img src="/assets/fulllogo_transparent.png" alt="EnergiAI">
            </a>
            <nav class="nav" aria-label="Primary">
                <a href="/?lang={{ $locale }}">{{ $isEnglish ? 'Home' : 'Startseite' }}</a>
                <a href="/live?lang={{ $locale }}">{{ $isEnglish ? 'Live data' : 'Live-Daten' }}</a>
                <a href="/impressum?lang={{ $isEnglish ? 'de' : 'en' }}">{{ $isEnglish ? 'DE' : 'EN' }}</a>
            </nav>
        </div>
    </header>

    <main>
        <section>
            <div class="section-inner">
                <p class="kicker">{{ $isEnglish ? 'Provider information' : 'Anbieterkennzeichnung' }}</p>
                <h1>{{ $title }}</h1>

                <div class="legal-grid">
                    <article class="legal-card">
                        <h2>{{ $isEnglish ? 'Information according to Section 5 DDG' : 'Angaben gemäß § 5 DDG' }}</h2>
                        <p><strong>Picologic GmbH</strong></p>
                        <p>Weyertal 5</p>
                        <p>50837 Köln</p>
                        <p>Deutschland</p>
                    </article>

                    <article class="legal-card">
                        <h2>{{ $isEnglish ? 'Represented by' : 'Vertreten durch' }}</h2>
                        <p>Geschäftsführer: Thiemo Komischke</p>
                    </article>

                    <article class="legal-card">
                        <h2>{{ $isEnglish ? 'Contact' : 'Kontakt' }}</h2>
                        <p>E-Mail: <a href="mailto:hello@energiai.de">hello@energiai.de</a></p>
                        <p>Website: <a href="https://energiai.de/">https://energiai.de/</a></p>
                    </article>

                    <article class="legal-card">
                        <h2>{{ $isEnglish ? 'Register information' : 'Registerangaben' }}</h2>
                        <p>Registergericht: Amtsgericht Koblenz</p>
                        <p>Registernummer: HRB 25213</p>
                    </article>

                    <article class="legal-card">
                        <h2>{{ $isEnglish ? 'Responsible for editorial content' : 'Verantwortlich für journalistisch-redaktionelle Inhalte' }}</h2>
                        <p>Thiemo Komischke</p>
                        <p>Weyertal 5</p>
                        <p>50837 Köln</p>
                        <p>Deutschland</p>
                    </article>
                </div>

                <div class="notice">
                    <p><strong>{{ $isEnglish ? 'Legal review note:' : 'Hinweis zur rechtlichen Prüfung:' }}</strong></p>
                    <p>{{ $isEnglish
                        ? 'This page implements the confirmed provider data from the EnergiAI task. It does not replace qualified legal review for the final public release.'
                        : 'Diese Seite setzt die im EnergiAI-Task bestätigten Anbieterangaben um. Sie ersetzt keine qualifizierte rechtliche Prüfung vor der finalen Veröffentlichung.' }}</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-inner">
            <img src="/assets/fulllogo_transparent.png" alt="EnergiAI">
            <span>Picologic GmbH · Weyertal 5 · 50837 Köln · hello@energiai.de</span>
        </div>
    </footer>
</body>
</html>
