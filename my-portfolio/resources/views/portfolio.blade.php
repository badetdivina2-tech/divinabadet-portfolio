<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Bernadette A. Divina, a fourth-year BSIT student from Bucay, Abra who is always ready to learn, one error at a time.">
    <meta name="theme-color" content="#f6f2ea">
    <meta property="og:title" content="Bernadette A. Divina | IT Student &amp; Portfolio">
    <meta property="og:description" content="Fourth-year BSIT student, civic-tech explorer, and lifelong learner from Abra, Philippines.">
    <meta property="og:type" content="website">
    <title>Bernadette A. Divina | Portfolio</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300..700;1,9..144,300..700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --paper: #f6f2ea;
            --paper-soft: #fbf8f2;
            --paper-deep: #eee8dc;
            --ink: #14201a;
            --ink-soft: #3a4a41;
            --muted: #6f7b73;
            --line: #ddd6c7;
            --line-strong: #c9c0ad;
            --green: #245741;
            --green-deep: #163526;
            --green-soft: #dfe9dc;
            --green-bright: #4f9373;
            --clay: #bd734b;
            --gold: #c2a05b;
            --white: #fffdf8;
            --shadow: 0 24px 60px rgba(20, 32, 26, 0.12);
            --radius-lg: 30px;
            --radius-md: 20px;
            --radius-sm: 12px;
            --max: 1180px;
        }

        *,
        *::before,
        *::after { box-sizing: border-box; }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            margin: 0;
            font-family: 'Manrope', ui-sans-serif, system-ui, -apple-system, 'Segoe UI', sans-serif;
            background:
                radial-gradient(1100px 600px at 88% -8%, rgba(194, 160, 91, 0.16), transparent 62%),
                radial-gradient(900px 620px at -10% 12%, rgba(79, 147, 115, 0.12), transparent 58%),
                var(--paper);
            color: var(--ink);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        ::selection {
            background: var(--green);
            color: var(--white);
        }

        img { display: block; max-width: 100%; height: auto; }
        a { color: inherit; text-decoration: none; }

        h1, h2, h3, h4 {
            font-family: 'Fraunces', Georgia, 'Times New Roman', serif;
            font-weight: 400;
            line-height: 1.02;
            letter-spacing: -0.035em;
            margin: 0;
        }

        p { margin: 0; }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .skip-link {
            position: fixed;
            top: 12px;
            left: 12px;
            z-index: 200;
            padding: 10px 16px;
            border-radius: 999px;
            background: var(--green-deep);
            color: var(--white);
            font-weight: 700;
            transform: translateY(-160%);
            transition: transform 0.2s ease;
        }

        .skip-link:focus { transform: translateY(0); }

        .wrap {
            width: min(var(--max), calc(100% - 48px));
            margin-inline: auto;
        }

        /* ---------- Header ---------- */

        .site-header {
            position: sticky;
            top: 0;
            z-index: 80;
            backdrop-filter: blur(14px);
            background: rgba(246, 242, 234, 0.82);
            border-bottom: 1px solid rgba(201, 192, 173, 0.45);
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            min-height: 78px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            letter-spacing: 0.01em;
        }

        .brand-mark {
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: var(--green);
            color: var(--white);
            font-family: 'Fraunces', Georgia, serif;
            font-size: 1.05rem;
            letter-spacing: 0;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.16);
        }

        .brand-text {
            display: grid;
            line-height: 1.15;
        }

        .brand-text strong {
            font-size: 0.95rem;
            letter-spacing: 0.01em;
        }

        .brand-text span {
            font-size: 0.68rem;
            font-weight: 600;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .site-nav {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .site-nav a {
            position: relative;
            font-size: 0.74rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--ink-soft);
            padding: 6px 0;
        }

        .site-nav a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 1.5px;
            background: var(--green);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.28s ease;
        }

        .site-nav a:hover::after,
        .site-nav a:focus-visible::after { transform: scaleX(1); transform-origin: left; }

        .header-cta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 20px;
            border-radius: 999px;
            background: var(--green-deep);
            color: var(--white);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            transition: background 0.22s ease, transform 0.22s ease;
        }

        .header-cta:hover { background: var(--green); transform: translateY(-1px); }

        .header-cta svg { width: 14px; height: 14px; }

        .nav-toggle {
            display: none;
            width: 44px;
            height: 44px;
            border: 1px solid var(--line-strong);
            border-radius: 50%;
            background: transparent;
            color: var(--ink);
            cursor: pointer;
            place-items: center;
        }

        .nav-toggle svg { width: 20px; height: 20px; }

        /* ---------- Hero ---------- */

        .hero {
            padding: clamp(54px, 8vw, 104px) 0 clamp(40px, 6vw, 72px);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.08fr) minmax(0, 0.92fr);
            gap: clamp(36px, 6vw, 84px);
            align-items: center;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 8px 15px 8px 12px;
            border: 1px solid var(--line-strong);
            border-radius: 999px;
            background: rgba(255, 253, 248, 0.6);
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.13em;
            text-transform: uppercase;
            color: var(--ink-soft);
        }

        .status::before {
            content: '';
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--green-bright);
            box-shadow: 0 0 0 4px rgba(79, 147, 115, 0.16);
        }

        .hero h1 {
            margin-top: 24px;
            font-size: clamp(3.3rem, 7.4vw, 6.2rem);
            font-weight: 300;
            line-height: 0.93;
            letter-spacing: -0.05em;
        }

        .hero h1 em {
            display: block;
            font-style: italic;
            font-weight: 400;
            color: var(--green);
        }

        .hero-role {
            margin-top: 26px;
            font-size: 0.76rem;
            font-weight: 800;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--clay);
        }

        .hero-bio {
            margin-top: 18px;
            max-width: 48ch;
            font-size: clamp(1rem, 1.25vw, 1.1rem);
            color: var(--ink-soft);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 30px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 50px;
            padding: 0 24px;
            border-radius: 999px;
            border: 1px solid transparent;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.01em;
            cursor: pointer;
            transition: transform 0.22s ease, background 0.22s ease, color 0.22s ease, box-shadow 0.22s ease;
        }

        .btn svg { width: 15px; height: 15px; }

        .btn-primary {
            background: var(--green);
            color: var(--white);
            box-shadow: 0 14px 28px rgba(36, 87, 65, 0.24);
        }

        .btn-primary:hover { background: var(--green-deep); transform: translateY(-2px); }

        .btn-ghost {
            background: transparent;
            color: var(--ink);
            border-color: var(--line-strong);
        }

        .btn-ghost:hover { background: var(--white); transform: translateY(-2px); }

        .hero-meta {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 38px;
            padding-top: 24px;
            border-top: 1px solid var(--line);
        }

        .meta-label {
            display: block;
            margin-bottom: 4px;
            font-size: 0.64rem;
            font-weight: 800;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .meta-value {
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--ink);
            overflow-wrap: anywhere;
        }

        .meta-value a:hover { color: var(--green); }

        .hero-visual {
            position: relative;
            justify-self: end;
            width: min(100%, 470px);
        }

        .portrait-frame {
            position: relative;
            padding: 14px;
            border: 1px solid rgba(201, 192, 173, 0.8);
            border-radius: 250px 250px 30px 30px;
        }

        .portrait-frame::before {
            content: '';
            position: absolute;
            inset: -14px;
            border: 1px solid rgba(36, 87, 65, 0.18);
            border-radius: inherit;
            pointer-events: none;
        }

        .portrait-frame img {
            width: 100%;
            aspect-ratio: 4 / 4.7;
            object-fit: cover;
            object-position: center top;
            border-radius: 238px 238px 20px 20px;
            background: var(--paper-deep);
        }

        .float-card {
            position: absolute;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 17px;
            border: 1px solid rgba(255, 255, 255, 0.7);
            border-radius: 16px;
            background: rgba(255, 253, 248, 0.92);
            box-shadow: 0 18px 40px rgba(20, 32, 26, 0.14);
            backdrop-filter: blur(8px);
        }

        .float-card small {
            display: block;
            font-size: 0.6rem;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .float-card strong {
            display: block;
            font-size: 0.85rem;
            line-height: 1.3;
        }

        .float-card .dot {
            flex: none;
            display: grid;
            place-items: center;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--green-soft);
            color: var(--green);
        }

        .float-card .dot svg { width: 16px; height: 16px; }

        .float-location { left: -26px; bottom: 56px; }

        .float-focus { right: -22px; top: 84px; }

        .spin-badge {
            position: absolute;
            right: -18px;
            bottom: -28px;
            display: grid;
            place-items: center;
            width: 108px;
            height: 108px;
            border-radius: 50%;
            background: var(--green-deep);
            color: var(--paper);
            box-shadow: var(--shadow);
        }

        .spin-badge span {
            font-size: 0.55rem;
            font-weight: 800;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            text-align: center;
            line-height: 1.5;
        }

        .spin-badge::before {
            content: '';
            position: absolute;
            inset: 8px;
            border: 1px dashed rgba(246, 242, 234, 0.4);
            border-radius: 50%;
        }

        /* ---------- Stats ---------- */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
            margin-top: 18px;
        }

        .stat {
            padding: 26px 22px;
            text-align: center;
            border-right: 1px solid var(--line);
        }

        .stat:last-child { border-right: 0; }

        .stat strong {
            display: block;
            font-family: 'Fraunces', Georgia, serif;
            font-weight: 400;
            font-size: clamp(1.9rem, 3.4vw, 2.7rem);
            line-height: 1;
            letter-spacing: -0.03em;
        }

        .stat span {
            display: block;
            margin-top: 8px;
            font-size: 0.64rem;
            font-weight: 800;
            letter-spacing: 0.17em;
            text-transform: uppercase;
            color: var(--muted);
        }

        /* ---------- Section shell ---------- */

        .section {
            padding: clamp(64px, 9vw, 118px) 0;
        }

        .section-head {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 28px;
            margin-bottom: clamp(36px, 5vw, 60px);
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.68rem;
            font-weight: 800;
            letter-spacing: 0.19em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .eyebrow::before {
            content: '';
            width: 34px;
            height: 1px;
            background: var(--clay);
        }

        .section-head h2 {
            margin-top: 16px;
            font-size: clamp(2.3rem, 4.8vw, 3.8rem);
            font-weight: 300;
            letter-spacing: -0.045em;
        }

        .section-head h2 em { font-style: italic; color: var(--green); }

        .section-head p {
            max-width: 36ch;
            font-size: 0.95rem;
            color: var(--muted);
        }

        /* ---------- About / education ---------- */

        .about-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(0, 0.85fr);
            gap: clamp(32px, 5vw, 72px);
            align-items: start;
        }

        .about-copy p {
            color: var(--ink-soft);
            font-size: clamp(1rem, 1.2vw, 1.08rem);
        }

        .about-copy p + p { margin-top: 18px; }

        .about-copy .lead {
            font-size: clamp(1.45rem, 2.3vw, 1.95rem);
            font-family: 'Fraunces', Georgia, serif;
            font-weight: 300;
            line-height: 1.28;
            letter-spacing: -0.025em;
            color: var(--ink);
        }

        .pull-quote {
            margin-top: 30px;
            padding: 22px 24px;
            border-left: 2px solid var(--clay);
            background: rgba(255, 253, 248, 0.55);
            border-radius: 0 14px 14px 0;
            font-family: 'Fraunces', Georgia, serif;
            font-style: italic;
            font-size: 1.08rem;
            color: var(--ink-soft);
        }

        .info-card {
            padding: 26px;
            border: 1px solid var(--line);
            border-radius: var(--radius-md);
            background: rgba(255, 253, 248, 0.62);
        }

        .info-card h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
        }

        .fact-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 14px;
        }

        .fact-list li {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 16px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(221, 214, 199, 0.7);
        }

        .fact-list li:last-child { border-bottom: 0; padding-bottom: 0; }

        .fact-list .k {
            flex: none;
            font-size: 0.66rem;
            font-weight: 800;
            letter-spacing: 0.13em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .fact-list .v {
            font-size: 0.88rem;
            font-weight: 700;
            text-align: right;
        }

        .education { margin-top: 34px; }

        .education h3,
        .mini-heading {
            font-size: 1.3rem;
            margin-bottom: 18px;
        }

        .timeline {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 0;
        }

        .timeline li {
            position: relative;
            padding: 0 0 26px 30px;
            border-left: 1px solid var(--line-strong);
        }

        .timeline li:last-child { padding-bottom: 0; }

        .timeline li::before {
            content: '';
            position: absolute;
            left: -5px;
            top: 7px;
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--paper);
            border: 2px solid var(--green);
        }

        .timeline time {
            display: block;
            margin-bottom: 4px;
            font-size: 0.64rem;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--clay);
        }

        .timeline strong {
            display: block;
            font-size: 0.98rem;
            line-height: 1.4;
        }

        .timeline span {
            display: block;
            margin-top: 3px;
            font-size: 0.86rem;
            color: var(--muted);
        }

        /* ---------- Project ---------- */

        .project-feature {
            position: relative;
            overflow: hidden;
            padding: clamp(28px, 4vw, 52px);
            border-radius: var(--radius-lg);
            background:
                radial-gradient(900px 500px at 100% 0%, rgba(79, 147, 115, 0.26), transparent 60%),
                var(--green-deep);
            color: var(--paper);
            box-shadow: var(--shadow);
        }

        .project-feature::after {
            content: '';
            position: absolute;
            right: -90px;
            top: -90px;
            width: 320px;
            height: 320px;
            border: 1px solid rgba(246, 242, 234, 0.12);
            border-radius: 50%;
            pointer-events: none;
        }

        .project-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(0, 0.88fr) minmax(0, 1.12fr);
            gap: clamp(30px, 4.5vw, 60px);
            align-items: center;
        }

        .project-kicker {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 0.66rem;
            font-weight: 800;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #b9cdb8;
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #8fd3ad;
            box-shadow: 0 0 0 5px rgba(143, 211, 173, 0.14);
        }

        .project-feature h3 {
            margin-top: 20px;
            font-size: clamp(2.6rem, 5vw, 4rem);
            font-weight: 300;
            letter-spacing: -0.045em;
            line-height: 0.96;
        }

        .project-feature h3 em { font-style: italic; color: #b9d9c2; }

        .project-sub {
            margin-top: 10px;
            font-size: 0.7rem;
            font-weight: 800;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: #9fb7a4;
        }

        .project-feature p {
            margin-top: 20px;
            max-width: 48ch;
            font-size: 0.98rem;
            color: #d7e2d7;
        }

        .tag-row {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 24px;
        }

        .tag {
            padding: 7px 13px;
            border: 1px solid rgba(246, 242, 234, 0.22);
            border-radius: 999px;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            color: #e4ede4;
        }

        .project-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 28px;
        }

        .btn-light {
            background: var(--paper);
            color: var(--green-deep);
        }

        .btn-light:hover { background: var(--white); transform: translateY(-2px); }

        .btn-outline-light {
            background: transparent;
            color: var(--paper);
            border-color: rgba(246, 242, 234, 0.36);
        }

        .btn-outline-light:hover { background: rgba(246, 242, 234, 0.1); transform: translateY(-2px); }

        .project-metrics {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-top: 30px;
            padding-top: 24px;
            border-top: 1px solid rgba(246, 242, 234, 0.16);
        }

        .project-metrics strong {
            display: block;
            font-family: 'Fraunces', Georgia, serif;
            font-size: 1.55rem;
            font-weight: 400;
            line-height: 1;
            color: var(--white);
        }

        .project-metrics span {
            display: block;
            margin-top: 6px;
            font-size: 0.6rem;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #9fb7a4;
        }

        .browser-frame {
            overflow: hidden;
            border: 1px solid rgba(246, 242, 234, 0.18);
            border-radius: 18px;
            background: #0d1a13;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.34);
        }

        .browser-bar {
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 11px 14px;
            border-bottom: 1px solid rgba(246, 242, 234, 0.1);
            background: rgba(246, 242, 234, 0.04);
        }

        .browser-bar i {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(246, 242, 234, 0.24);
        }

        .browser-bar span {
            margin-left: 8px;
            padding: 3px 12px;
            border-radius: 999px;
            background: rgba(246, 242, 234, 0.07);
            font-size: 0.58rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            color: #a9bdaa;
        }

        .shot-button {
            display: block;
            width: 100%;
            padding: 0;
            border: 0;
            background: none;
            cursor: zoom-in;
        }

        .shot-button img {
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .shot-button:hover img { transform: scale(1.025); }

        .shot-caption {
            margin-top: 12px;
            font-size: 0.72rem;
            color: #9fb7a4;
            text-align: center;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 20px;
        }

        .gallery-card {
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: var(--radius-md);
            background: var(--paper-soft);
            text-align: left;
        }

        .gallery-card button {
            display: block;
            width: 100%;
            padding: 0;
            border: 0;
            background: none;
            cursor: zoom-in;
        }

        .gallery-card img {
            width: 100%;
            aspect-ratio: 16 / 10;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-card:hover img { transform: scale(1.035); }

        .gallery-card .caption {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 13px 16px;
            font-size: 0.76rem;
            font-weight: 700;
            color: var(--ink-soft);
        }

        .gallery-card .caption svg { width: 14px; height: 14px; color: var(--muted); flex: none; }

        /* ---------- Certificate ---------- */

        .certificate-card {
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(0, 0.85fr);
            gap: 0;
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            background: var(--paper-soft);
            box-shadow: 0 18px 44px rgba(20, 32, 26, 0.06);
        }

        .certificate-visual {
            position: relative;
            padding: clamp(20px, 3vw, 34px);
            border-right: 1px solid var(--line);
            background:
                linear-gradient(135deg, rgba(36, 87, 65, 0.06), rgba(194, 160, 91, 0.09));
        }

        .certificate-visual button {
            display: block;
            width: 100%;
            padding: 0;
            border: 0;
            border-radius: 10px;
            background: none;
            cursor: zoom-in;
            box-shadow: 0 16px 36px rgba(20, 32, 26, 0.14);
        }

        .certificate-visual img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.45s ease;
        }

        .certificate-visual button:hover img { transform: scale(1.012); }

        .certificate-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: clamp(28px, 4vw, 48px);
        }

        .cert-meta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            align-self: flex-start;
            padding: 7px 13px;
            border-radius: 999px;
            background: var(--green-soft);
            color: var(--green);
            font-size: 0.64rem;
            font-weight: 800;
            letter-spacing: 0.13em;
            text-transform: uppercase;
        }

        .certificate-body h3 {
            margin-top: 18px;
            font-size: clamp(1.7rem, 2.8vw, 2.35rem);
            font-weight: 300;
            line-height: 1.1;
        }

        .certificate-body > p {
            margin-top: 14px;
            color: var(--muted);
            font-size: 0.94rem;
        }

        .cert-details {
            list-style: none;
            margin: 24px 0 0;
            padding: 0;
            display: grid;
            gap: 12px;
        }

        .cert-details li {
            display: flex;
            align-items: baseline;
            gap: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(221, 214, 199, 0.75);
            font-size: 0.88rem;
        }

        .cert-details li:last-child { border-bottom: 0; padding-bottom: 0; }

        .cert-details .k {
            flex: none;
            width: 92px;
            font-size: 0.62rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .cert-details .v { font-weight: 700; }

        .certificate-body .btn { margin-top: 26px; align-self: flex-start; }

        /* ---------- Contact ---------- */

        .contact-panel {
            position: relative;
            overflow: hidden;
            padding: clamp(40px, 6vw, 76px);
            border-radius: var(--radius-lg);
            background:
                radial-gradient(700px 380px at 85% 15%, rgba(79, 147, 115, 0.3), transparent 60%),
                var(--green-deep);
            color: var(--paper);
            text-align: center;
        }

        .contact-panel::before,
        .contact-panel::after {
            content: '';
            position: absolute;
            border: 1px solid rgba(246, 242, 234, 0.1);
            border-radius: 50%;
            pointer-events: none;
        }

        .contact-panel::before {
            width: 420px;
            height: 420px;
            left: -160px;
            bottom: -220px;
        }

        .contact-panel::after {
            width: 260px;
            height: 260px;
            right: -80px;
            top: -110px;
        }

        .contact-panel .eyebrow {
            justify-content: center;
            color: #9fb7a4;
        }

        .contact-panel .eyebrow::before { background: #8fd3ad; }

        .contact-panel h2 {
            position: relative;
            z-index: 1;
            margin: 18px auto 0;
            max-width: 15ch;
            font-size: clamp(2.5rem, 5.4vw, 4.4rem);
            font-weight: 300;
            line-height: 1;
            letter-spacing: -0.045em;
        }

        .contact-panel h2 em { font-style: italic; color: #b9d9c2; }

        .contact-panel > p {
            position: relative;
            z-index: 1;
            margin: 20px auto 0;
            max-width: 46ch;
            font-size: 0.98rem;
            color: #d7e2d7;
        }

        .social-row {
            position: relative;
            z-index: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            max-width: 900px;
            margin: 42px auto 0;
            padding-top: 30px;
            border-top: 1px solid rgba(246, 242, 234, 0.16);
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 10px 17px;
            border: 1px solid rgba(246, 242, 234, 0.24);
            border-radius: 999px;
            background: rgba(246, 242, 234, 0.04);
            color: #e4ede4;
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.03em;
            transition: background 0.22s ease, border-color 0.22s ease, color 0.22s ease, transform 0.22s ease;
        }

        .social-link:hover {
            background: rgba(246, 242, 234, 0.12);
            border-color: rgba(246, 242, 234, 0.42);
            color: var(--white);
            transform: translateY(-2px);
        }

        .social-link svg { width: 15px; height: 15px; flex: none; }

        /* ---------- Footer ---------- */

        .site-footer {
            padding: 34px 0 44px;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding-top: 26px;
            border-top: 1px solid var(--line);
            font-size: 0.78rem;
            color: var(--muted);
        }

        .footer-brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            color: var(--ink-soft);
        }

        .footer-brand .brand-mark { width: 30px; height: 30px; font-size: 0.8rem; }

        .to-top {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 0.68rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--ink-soft);
        }

        .to-top svg { width: 13px; height: 13px; }

        .to-top:hover { color: var(--green); }

        /* ---------- Lightbox ---------- */

        .lightbox {
            position: fixed;
            inset: 0;
            z-index: 150;
            display: grid;
            place-items: center;
            padding: 24px;
            background: rgba(10, 20, 15, 0.85);
            backdrop-filter: blur(6px);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.25s ease, visibility 0.25s ease;
        }

        .lightbox.is-open { opacity: 1; visibility: visible; }

        .lightbox-inner {
            position: relative;
            width: min(1100px, 100%);
            max-height: 88vh;
        }

        .lightbox img {
            width: 100%;
            max-height: 78vh;
            object-fit: contain;
            border-radius: 12px;
            background: #0b140f;
            box-shadow: 0 40px 90px rgba(0, 0, 0, 0.5);
        }

        .lightbox caption,
        .lightbox .lb-caption {
            display: block;
            margin-top: 14px;
            color: #cdd8ce;
            font-size: 0.8rem;
            text-align: center;
        }

        .lb-close,
        .lb-nav {
            display: grid;
            place-items: center;
            border: 1px solid rgba(246, 242, 234, 0.28);
            border-radius: 50%;
            background: rgba(246, 242, 234, 0.08);
            color: var(--paper);
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .lb-close:hover,
        .lb-nav:hover { background: rgba(246, 242, 234, 0.2); }

        .lb-close {
            position: absolute;
            top: -52px;
            right: 0;
            width: 42px;
            height: 42px;
        }

        .lb-close svg { width: 18px; height: 18px; }

        .lb-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 46px;
            height: 46px;
        }

        .lb-nav svg { width: 18px; height: 18px; }

        .lb-prev { left: -60px; }
        .lb-next { right: -60px; }

        /* ---------- Reveal ---------- */

        .reveal {
            opacity: 0;
            transform: translateY(26px);
            transition: opacity 0.7s cubic-bezier(0.22, 1, 0.36, 1), transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ---------- Responsive ---------- */

        @media (max-width: 980px) {
            .site-nav { gap: 22px; }
            .hero-grid { grid-template-columns: 1fr; }
            .hero-visual { justify-self: center; width: min(100%, 430px); margin-top: 18px; }
            .about-grid,
            .project-grid,
            .certificate-card { grid-template-columns: 1fr; }
            .certificate-visual { border-right: 0; border-bottom: 1px solid var(--line); }
            .project-metrics { max-width: 460px; }
            .lb-prev { left: 8px; }
            .lb-next { right: 8px; }
        }

        @media (max-width: 820px) {
            .header-cta { display: none; }
            .nav-toggle { display: grid; }

            .site-nav {
                position: absolute;
                top: calc(100% + 1px);
                left: 0;
                right: 0;
                display: grid;
                gap: 0;
                padding: 8px 24px 24px;
                background: var(--paper);
                border-bottom: 1px solid var(--line);
                box-shadow: 0 24px 40px rgba(20, 32, 26, 0.08);
                opacity: 0;
                visibility: hidden;
                transform: translateY(-8px);
                transition: opacity 0.22s ease, transform 0.22s ease, visibility 0.22s ease;
            }

            .site-nav.is-open {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .site-nav a {
                padding: 14px 0;
                border-bottom: 1px solid rgba(221, 214, 199, 0.6);
                font-size: 0.8rem;
            }

            .site-nav a:last-child { border-bottom: 0; }

            .section-head { flex-direction: column; align-items: flex-start; }
            .section-head p { max-width: 52ch; }
            .gallery { grid-template-columns: 1fr 1fr; }
            .gallery-card:last-child { grid-column: 1 / -1; }
            .hero-meta { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 560px) {
            .wrap { width: calc(100% - 32px); }
            .hero { padding-top: 36px; }
            .hero h1 { font-size: clamp(2.9rem, 15vw, 4rem); }
            .hero-meta { grid-template-columns: 1fr; gap: 14px; }
            .stats { grid-template-columns: 1fr 1fr; }
            .stat { padding: 20px 12px; }
            .stat:nth-child(2) { border-right: 0; }
            .stat:nth-child(1),
            .stat:nth-child(2) { border-bottom: 1px solid var(--line); }
            .gallery { grid-template-columns: 1fr; }
            .gallery-card:last-child { grid-column: auto; }
            .project-metrics { grid-template-columns: 1fr 1fr; }
            .project-feature,
            .contact-panel { border-radius: 24px; }
            .float-location { left: -6px; bottom: 24px; }
            .float-focus { right: -4px; top: 42px; }
            .spin-badge { width: 88px; height: 88px; right: -4px; bottom: -20px; }
            .spin-badge span { font-size: 0.48rem; }
            .footer-inner { flex-direction: column; align-items: flex-start; gap: 14px; }
            .lb-close { top: -50px; }
            .lb-nav { width: 38px; height: 38px; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            .reveal { opacity: 1; transform: none; }
        }
    </style>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header">
        <div class="wrap header-inner">
            <a class="brand" href="#top" aria-label="Bernadette Divina, home">
                <span class="brand-mark" aria-hidden="true">BD</span>
                <span class="brand-text">
                    <strong>Bernadette Divina</strong>
                    <span>IT Student</span>
                </span>
            </a>

            <nav class="site-nav" id="site-nav" aria-label="Main navigation">
                <a href="#about">About</a>
                <a href="#education">Education</a>
                <a href="#projects">Projects</a>
                <a href="#certificate">Certificate</a>
                <a href="#contact">Contact</a>
            </nav>

            <a class="header-cta" href="mailto:badetdivina2@gmail.com">
                Let's talk
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <button class="nav-toggle" id="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="site-nav">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </header>

    <main id="main">
        <div id="top"></div>

        <section class="hero" aria-labelledby="hero-title">
            <div class="wrap">
                <div class="hero-grid">
                    <div class="hero-copy">
                        <span class="status">4th Year BSIT Student &middot; Open to opportunities</span>

                        <h1 id="hero-title">
                            Bernadette
                            <em>A. Divina</em>
                        </h1>

                        <p class="hero-role">Information Technology &middot; Bucay, Abra</p>

                        <p class="hero-bio">
                            Hello! I'm an IT student who enjoys exploring technology, learning new skills,
                            and discovering how things work. I may not know everything about computers,
                            but I'm always ready to learn&mdash;one error at a time.
                        </p>

                        <div class="hero-actions">
                            <a class="btn btn-primary" href="#projects">
                                View my work
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a class="btn btn-ghost" href="mailto:badetdivina2@gmail.com">Get in touch</a>
                        </div>

                        <div class="hero-meta">
                            <div>
                                <span class="meta-label">Email</span>
                                <span class="meta-value"><a href="mailto:badetdivina2@gmail.com">badetdivina2@gmail.com</a></span>
                            </div>
                            <div>
                                <span class="meta-label">Phone</span>
                                <span class="meta-value"><a href="tel:+639979377343">0997 937 7343</a></span>
                            </div>
                            <div>
                                <span class="meta-label">Location</span>
                                <span class="meta-value">Dugong, Bucay, Abra</span>
                            </div>
                        </div>
                    </div>

                    <div class="hero-visual">
                        <div class="portrait-frame">
                            <img src="{{ asset('images/bernadette-divina.jpg') }}" alt="Portrait of Bernadette A. Divina" width="1024" height="1024">
                        </div>

                        <div class="float-card float-location">
                            <span class="dot" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M12 21s7-5.6 7-11a7 7 0 1 0-14 0c0 5.4 7 11 7 11Z" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="12" cy="10" r="2.6"/>
                                </svg>
                            </span>
                            <span>
                                <small>Based in</small>
                                <strong>Abra, Philippines</strong>
                            </span>
                        </div>

                        <div class="float-card float-focus">
                            <span class="dot" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path d="M4 5h16v12H4z" stroke-linejoin="round"/>
                                    <path d="M8 21h8M12 17v4" stroke-linecap="round"/>
                                </svg>
                            </span>
                            <span>
                                <small>Currently</small>
                                <strong>Learning by building</strong>
                            </span>
                        </div>

                        <div class="spin-badge" aria-hidden="true">
                            <span>One error<br>at a time</span>
                        </div>
                    </div>
                </div>

                <div class="stats" role="list" aria-label="Quick facts">
                    <div class="stat" role="listitem">
                        <strong>4th</strong>
                        <span>Year BSIT</span>
                    </div>
                    <div class="stat" role="listitem">
                        <strong>01</strong>
                        <span>Featured project</span>
                    </div>
                    <div class="stat" role="listitem">
                        <strong>01</strong>
                        <span>Certificate</span>
                    </div>
                    <div class="stat" role="listitem">
                        <strong>&infin;</strong>
                        <span>Curiosity</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="about" aria-labelledby="about-title">
            <div class="wrap">
                <div class="section-head reveal">
                    <div>
                        <span class="eyebrow">01 &mdash; About</span>
                        <h2 id="about-title">A learner first,<br><em>a builder next.</em></h2>
                    </div>
                    <p>
                        Curious about how technology works and motivated by the process of figuring
                        things out. Every project is a chance to learn something new.
                    </p>
                </div>

                <div class="about-grid">
                    <div class="about-copy reveal">
                        <p class="lead">
                            I'm an Information Technology student from Dugong, Bucay, Abra. I enjoy
                            exploring technology, picking up new skills, and understanding the details
                            behind how things work.
                        </p>
                        <p>
                            I may not know everything about computers yet, but I'm always ready to
                            learn. Whether it's debugging a stubborn error, designing a cleaner
                            interface, or exploring a new tool, I approach every challenge with
                            patience and curiosity.
                        </p>
                        <p>
                            Outside of coursework, I like experimenting with web projects and
                            learning how technology can be useful to the people around me&mdash;especially
                            in communities like my own.
                        </p>

                        <blockquote class="pull-quote">
                            &ldquo;I may not know everything about computers, but I'm always ready to
                            learn&mdash;one error at a time.&rdquo;
                        </blockquote>
                    </div>

                    <aside class="reveal" aria-label="Quick information">
                        <div class="info-card">
                            <h3>Quick info</h3>
                            <ul class="fact-list">
                                <li>
                                    <span class="k">Full name</span>
                                    <span class="v">Bernadette A. Divina</span>
                                </li>
                                <li>
                                    <span class="k">Course</span>
                                    <span class="v">BS Information Technology</span>
                                </li>
                                <li>
                                    <span class="k">Year level</span>
                                    <span class="v">4th Year</span>
                                </li>
                                <li>
                                    <span class="k">School</span>
                                    <span class="v">Data Center College of the Philippines</span>
                                </li>
                                <li>
                                    <span class="k">Hometown</span>
                                    <span class="v">Dugong, Bucay, Abra</span>
                                </li>
                                <li>
                                    <span class="k">Status</span>
                                    <span class="v">Open to opportunities</span>
                                </li>
                            </ul>
                        </div>

                        <div class="education" id="education">
                            <h3 class="mini-heading">Educational background</h3>
                            <ol class="timeline">
                                <li>
                                    <time datetime="2026">2026 &mdash; 2027</time>
                                    <strong>Data Center College of the Philippines</strong>
                                    <span>4th Year &middot; BS Information Technology</span>
                                </li>
                                <li>
                                    <time datetime="2022">2022 &mdash; 2023</time>
                                    <strong>Dugong National High School</strong>
                                    <span>Secondary Education</span>
                                </li>
                            </ol>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="section" id="projects" aria-labelledby="projects-title">
            <div class="wrap">
                <div class="section-head reveal">
                    <div>
                        <span class="eyebrow">02 &mdash; Selected work</span>
                        <h2 id="projects-title">Things I've built<br><em>and learned from.</em></h2>
                    </div>
                    <p>
                        A growing collection of projects. There's one featured so far, with more
                        to come as I keep learning.
                    </p>
                </div>

                <article class="project-feature reveal">
                    <div class="project-grid">
                        <div>
                            <span class="project-kicker"><span class="pulse-dot" aria-hidden="true"></span>Featured project</span>
                            <h3>Sarak<em>.</em></h3>
                            <p class="project-sub">Civic map infrastructure for Bangued, Abra</p>

                            <p>
                                Sarak is an interactive community map that helps residents and
                                visitors find everyday essentials around Bangued. It brings coffee
                                shops, fast food chains, groceries, hospitals, and pharmacies into
                                one searchable map&mdash;with category filters, multiple map views,
                                location lookup, and community-driven place contributions.
                            </p>

                            <div class="tag-row" aria-label="Project features">
                                <span class="tag">Interactive map</span>
                                <span class="tag">Category filters</span>
                                <span class="tag">Leaflet &middot; OSM</span>
                                <span class="tag">Dark map view</span>
                                <span class="tag">Community places</span>
                            </div>

                            <div class="project-actions">
                                <button class="btn btn-light" type="button" data-lightbox="0">
                                    View screenshots
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                        <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <a class="btn btn-outline-light" href="https://github.com/badetdivina2-tech" target="_blank" rel="noopener">
                                    GitHub profile
                                </a>
                            </div>

                            <div class="project-metrics">
                                <div>
                                    <strong>43</strong>
                                    <span>Places mapped</span>
                                </div>
                                <div>
                                    <strong>05</strong>
                                    <span>Categories</span>
                                </div>
                                <div>
                                    <strong>03</strong>
                                    <span>Map views</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="browser-frame">
                                <div class="browser-bar" aria-hidden="true">
                                    <i></i><i></i><i></i>
                                    <span>sarak &mdash; bangued, abra</span>
                                </div>
                                <button class="shot-button" type="button" data-lightbox="0" aria-label="Enlarge Sarak overview screenshot">
                                    <img src="{{ asset('images/sarak-overview.png') }}" alt="Sarak map showing categories and place markers around Bangued, Abra" width="1920" height="960" loading="lazy">
                                </button>
                            </div>
                            <p class="shot-caption">Sarak overview &mdash; categories, places, and map filters</p>
                        </div>
                    </div>
                </article>

                <div class="gallery reveal" aria-label="Sarak screenshots">
                    <figure class="gallery-card">
                        <button type="button" data-lightbox="1" aria-label="Enlarge street-level map screenshot">
                            <img src="{{ asset('images/sarak-street.png') }}" alt="Street-level view of Sarak showing Taft Avenue and nearby establishments" width="1920" height="960" loading="lazy">
                        </button>
                        <figcaption class="caption">
                            Street-level browsing
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3M3 16v3a2 2 0 0 0 2 2h3m8 0h3a2 2 0 0 0 2-2v-3" stroke-linecap="round"/>
                            </svg>
                        </figcaption>
                    </figure>

                    <figure class="gallery-card">
                        <button type="button" data-lightbox="2" aria-label="Enlarge dark map screenshot">
                            <img src="{{ asset('images/sarak-dark.png') }}" alt="Sarak dark map view with place markers along Taft Avenue" width="1920" height="960" loading="lazy">
                        </button>
                        <figcaption class="caption">
                            Sarak dark map view
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3M3 16v3a2 2 0 0 0 2 2h3m8 0h3a2 2 0 0 0 2-2v-3" stroke-linecap="round"/>
                            </svg>
                        </figcaption>
                    </figure>

                    <figure class="gallery-card">
                        <button type="button" data-lightbox="3" aria-label="Enlarge about and credits dialog screenshot">
                            <img src="{{ asset('images/sarak-about.png') }}" alt="About Sarak dialog showing credits and data sources" width="1920" height="960" loading="lazy">
                        </button>
                        <figcaption class="caption">
                            Credits &amp; data sources
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3M3 16v3a2 2 0 0 0 2 2h3m8 0h3a2 2 0 0 0 2-2v-3" stroke-linecap="round"/>
                            </svg>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <section class="section" id="certificate" aria-labelledby="certificate-title">
            <div class="wrap">
                <div class="section-head reveal">
                    <div>
                        <span class="eyebrow">03 &mdash; Recognition</span>
                        <h2 id="certificate-title">Certificates &amp;<br><em>milestones.</em></h2>
                    </div>
                    <p>
                        A record of the trainings and events that have shaped how I think about
                        technology and innovation.
                    </p>
                </div>

                <article class="certificate-card reveal">
                    <div class="certificate-visual">
                        <button type="button" data-lightbox="4" aria-label="Enlarge DICT certificate of participation">
                            <img src="{{ asset('images/certificate-dict-startups.png') }}" alt="DICT Certificate of Participation awarded to Bernadette A. Divina for the Philippine Startup Challenge XI webinar series" width="1122" height="793" loading="lazy">
                        </button>
                    </div>

                    <div class="certificate-body">
                        <span class="cert-meta">DICT &middot; Region CAR</span>
                        <h3>Certificate of Participation</h3>
                        <p>
                            For joining the webinar series <em>"Understanding Startups &amp; Getting
                            Your Idea Ready for the Philippine Startup Challenge XI,"</em> held via
                            Zoom on September 7, 2026.
                        </p>

                        <ul class="cert-details">
                            <li>
                                <span class="k">Issued by</span>
                                <span class="v">DICT Cordillera Administrative Region</span>
                            </li>
                            <li>
                                <span class="k">Date</span>
                                <span class="v">September 7, 2026</span>
                            </li>
                            <li>
                                <span class="k">Certificate no.</span>
                                <span class="v">COP-WSII-2026-023</span>
                            </li>
                            <li>
                                <span class="k">Focus</span>
                                <span class="v">Startups &amp; idea development</span>
                            </li>
                        </ul>

                        <button class="btn btn-primary" type="button" data-lightbox="4">
                            View certificate
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </article>
            </div>
        </section>

        <section class="section" id="contact" aria-labelledby="contact-title">
            <div class="wrap">
                <div class="contact-panel reveal">
                    <span class="eyebrow">04 &mdash; Contact</span>
                    <h2 id="contact-title">Let's build something,<br><em>one error at a time.</em></h2>
                    <p>
                        I'm open to opportunities, collaborations, and conversations about
                        technology. The best way to reach me is by email.
                    </p>

                    <div class="social-row" aria-label="Contact and social media">
                        <a class="social-link" href="mailto:badetdivina2@gmail.com">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="3" y="5" width="18" height="14" rx="2"/>
                                <path d="m3.5 7 8.5 6 8.5-6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Email
                        </a>
                        <a class="social-link" href="tel:+639979377343">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M7 4h3l2 5-2.5 1.5a12 12 0 0 0 4 4L15 12l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 5 6a2 2 0 0 1 2-2Z" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Phone
                        </a>
                        <a class="social-link" href="https://www.facebook.com/badet.divina" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12Z"/>
                            </svg>
                            Facebook
                        </a>
                        <a class="social-link" href="https://m.me/badet.divina" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.654V24l4.088-2.242c1.092.3 2.246.464 3.443.464 6.627 0 12-4.975 12-11.111C24 4.974 18.627 0 12 0Zm1.191 14.963-3.055-3.26-5.963 3.26 6.558-6.96 3.13 3.26 5.888-3.26-6.558 6.96Z"/>
                            </svg>
                            Messenger
                        </a>
                        <a class="social-link" href="https://www.instagram.com/dtlmchrdvn" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.2" cy="6.8" r="1.1" fill="currentColor" stroke="none"/>
                            </svg>
                            Instagram
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="wrap footer-inner">
            <span class="footer-brand">
                <span class="brand-mark" aria-hidden="true">BD</span>
                <span>&copy; {{ date('Y') }} Bernadette A. Divina</span>
            </span>
            <span>Built with Laravel &middot; One error at a time</span>
            <a class="to-top" href="#top">
                Back to top
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M12 19V5M6 11l6-6 6 6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </footer>

    <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer" hidden>
        <div class="lightbox-inner">
            <button class="lb-close" id="lb-close" type="button" aria-label="Close image viewer">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M6 6l12 12M18 6L6 18" stroke-linecap="round"/>
                </svg>
            </button>
            <button class="lb-nav lb-prev" id="lb-prev" type="button" aria-label="Previous image">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M15 6l-6 6 6 6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <img id="lb-image" src="" alt="">
            <span class="lb-caption" id="lb-caption"></span>
            <button class="lb-nav lb-next" id="lb-next" type="button" aria-label="Next image">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>

    <script>
        (function () {
            var navToggle = document.getElementById('nav-toggle');
            var siteNav = document.getElementById('site-nav');

            function closeNav() {
                siteNav.classList.remove('is-open');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.setAttribute('aria-label', 'Open menu');
            }

            navToggle.addEventListener('click', function () {
                var isOpen = siteNav.classList.toggle('is-open');
                navToggle.setAttribute('aria-expanded', String(isOpen));
                navToggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
            });

            siteNav.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', closeNav);
            });

            document.addEventListener('click', function (event) {
                if (!siteNav.contains(event.target) && !navToggle.contains(event.target)) {
                    closeNav();
                }
            });

            var revealItems = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window) {
                var observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

                revealItems.forEach(function (item) { observer.observe(item); });
            } else {
                revealItems.forEach(function (item) { item.classList.add('is-visible'); });
            }

            var slides = [
                {
                    src: '{{ asset('images/sarak-overview.png') }}',
                    caption: 'Sarak overview - categories, places, and map filters'
                },
                {
                    src: '{{ asset('images/sarak-street.png') }}',
                    caption: 'Sarak - street-level browsing around Taft Avenue'
                },
                {
                    src: '{{ asset('images/sarak-dark.png') }}',
                    caption: 'Sarak - dark map view'
                },
                {
                    src: '{{ asset('images/sarak-about.png') }}',
                    caption: 'Sarak - credits and data sources'
                },
                {
                    src: '{{ asset('images/certificate-dict-startups.png') }}',
                    caption: 'DICT Certificate of Participation - Philippine Startup Challenge XI'
                }
            ];

            var lightbox = document.getElementById('lightbox');
            var lbImage = document.getElementById('lb-image');
            var lbCaption = document.getElementById('lb-caption');
            var lbClose = document.getElementById('lb-close');
            var lbPrev = document.getElementById('lb-prev');
            var lbNext = document.getElementById('lb-next');
            var currentIndex = 0;
            var lastFocused = null;

            function renderSlide(index) {
                currentIndex = (index + slides.length) % slides.length;
                lbImage.src = slides[currentIndex].src;
                lbImage.alt = slides[currentIndex].caption;
                lbCaption.textContent = slides[currentIndex].caption;
            }

            function openLightbox(index) {
                lastFocused = document.activeElement;
                renderSlide(index);
                lightbox.hidden = false;
                requestAnimationFrame(function () {
                    lightbox.classList.add('is-open');
                });
                document.body.style.overflow = 'hidden';
                lbClose.focus();
            }

            function closeLightbox() {
                lightbox.classList.remove('is-open');
                document.body.style.overflow = '';
                window.setTimeout(function () {
                    lightbox.hidden = true;
                }, 250);
                if (lastFocused) { lastFocused.focus(); }
            }

            document.querySelectorAll('[data-lightbox]').forEach(function (trigger) {
                trigger.addEventListener('click', function () {
                    openLightbox(parseInt(trigger.getAttribute('data-lightbox'), 10));
                });
            });

            lbClose.addEventListener('click', closeLightbox);
            lbPrev.addEventListener('click', function () { renderSlide(currentIndex - 1); });
            lbNext.addEventListener('click', function () { renderSlide(currentIndex + 1); });

            lightbox.addEventListener('click', function (event) {
                if (event.target === lightbox) { closeLightbox(); }
            });

            document.addEventListener('keydown', function (event) {
                if (lightbox.hasAttribute('hidden')) { return; }
                if (event.key === 'Escape') { closeLightbox(); }
                if (event.key === 'ArrowLeft') { renderSlide(currentIndex - 1); }
                if (event.key === 'ArrowRight') { renderSlide(currentIndex + 1); }
            });
        })();
    </script>
</body>
</html>
