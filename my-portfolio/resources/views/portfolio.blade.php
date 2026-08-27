<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divina Rose | Portfolio</title>
    <style>
        :root {
            --bg: #f5f7ff;
            --panel: #ffffff;
            --panel-alt: #eef2ff;
            --primary: #4f46e5;
            --secondary: #0f172a;
            --muted: #475569;
            --accent: #ec4899;
            --line: rgba(79, 70, 229, 0.12);
            --shadow: 0 20px 45px rgba(15, 23, 42, 0.1);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #f8faff 0%, #eef2ff 45%, #fff7fb 100%);
            color: var(--secondary);
            line-height: 1.6;
        }

        a { color: inherit; text-decoration: none; }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 48px 20px 80px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }

        .brand {
            font-size: 1.1rem;
            letter-spacing: 0.12em;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--primary);
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 18px;
            font-size: 0.95rem;
            color: var(--muted);
        }

        .nav a {
            transition: color 0.2s ease;
        }

        .nav a:hover {
            color: var(--primary);
        }

        .hero {
            display: grid;
            grid-template-columns: 1.3fr 0.7fr;
            gap: 24px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid var(--line);
            border-radius: 24px;
            box-shadow: var(--shadow);
            padding: 28px;
        }

        .eyebrow {
            display: inline-block;
            background: rgba(79, 70, 229, 0.08);
            color: var(--primary);
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 8px 14px;
            margin-bottom: 12px;
        }

        h1 {
            margin: 0;
            font-size: clamp(2.6rem, 5vw, 4.1rem);
            line-height: 1.05;
            letter-spacing: -0.05em;
        }

        .role {
            font-size: 1.08rem;
            font-weight: 700;
            color: var(--primary);
            margin-top: 12px;
        }

        .bio {
            margin-top: 18px;
            max-width: 620px;
            font-size: 1.02rem;
            color: var(--muted);
        }

        .cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 0 18px;
            border-radius: 12px;
            border: 1px solid transparent;
            font-weight: 700;
        }

        .btn.primary {
            background: linear-gradient(135deg, var(--primary), #7c3aed);
            color: #fff;
            box-shadow: 0 12px 22px rgba(79, 70, 229, 0.2);
        }

        .btn.secondary {
            background: var(--panel-alt);
            color: var(--secondary);
            border-color: rgba(79, 70, 229, 0.12);
        }

        .contact-grid {
            margin-top: 28px;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .contact-item {
            background: #f8f9ff;
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 15px 16px;
        }

        .label {
            display: block;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 4px;
        }

        .contact-item a,
        .contact-item span {
            font-weight: 600;
            color: var(--secondary);
        }

        .profile-panel {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(180deg, #eef2ff 0%, #fff0f6 100%);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 24px 20px;
        }

        .avatar {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin: 0 auto 18px;
            display: grid;
            place-items: center;
            font-size: 3rem;
            font-weight: 700;
            color: white;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border: 6px solid rgba(255,255,255,0.9);
            box-shadow: 0 18px 28px rgba(79, 70, 229, 0.22);
        }

        .mini-card {
            background: rgba(255,255,255,0.75);
            border: 1px solid rgba(79, 70, 229, 0.08);
            border-radius: 16px;
            padding: 18px 16px;
        }

        .mini-card h3 {
            margin: 0 0 16px;
            font-size: 1.15rem;
        }

        .facts {
            display: grid;
            gap: 10px;
        }

        .fact-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            border-bottom: 1px solid rgba(15, 23, 42, 0.08);
            padding-bottom: 8px;
            font-size: 0.95rem;
        }

        .fact-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .fact-row span {
            color: var(--muted);
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
            margin-top: 30px;
        }

        .panel {
            background: rgba(255,255,255,0.9);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 24px 22px;
            box-shadow: 0 12px 26px rgba(15, 23, 42, 0.06);
        }

        .panel h3 {
            margin: 0 0 14px;
            font-size: 1.2rem;
        }

        .panel p,
        .panel li {
            color: var(--muted);
        }

        .edu-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 18px;
        }

        .edu-item {
            padding: 14px 16px;
            border-radius: 14px;
            background: #f8f9ff;
            border: 1px solid rgba(79, 70, 229, 0.08);
        }

        .edu-item strong {
            display: block;
            margin-bottom: 4px;
            color: var(--secondary);
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 12px;
            border-radius: 999px;
            background: #edf2ff;
            color: var(--primary);
            border: 1px solid rgba(79, 70, 229, 0.1);
            font-size: 0.82rem;
            font-weight: 700;
        }

        .projects-section {
            margin-top: 30px;
            background: rgba(255,255,255,0.92);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 24px 22px;
            box-shadow: 0 12px 26px rgba(15, 23, 42, 0.06);
        }

        .projects-section h3 {
            margin: 0 0 18px;
            font-size: 1.3rem;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .project-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 18px;
            overflow: hidden;
        }

        .project-visual {
            height: 140px;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.12), rgba(236, 72, 153, 0.12));
            border-bottom: 1px solid var(--line);
        }

        .project-body {
            padding: 16px;
        }

        .project-body h4 {
            margin: 0 0 8px;
            font-size: 1.06rem;
        }

        .project-body p {
            margin: 0 0 12px;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .github-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 999px;
            background: #111827;
            color: #fff;
            font-size: 0.85rem;
            font-weight: 700;
        }

        .github-link svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        @media (max-width: 860px) {
            .hero,
            .content-grid,
            .project-grid {
                grid-template-columns: 1fr;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
        }

        @media (max-width: 560px) {
            .container {
                padding-left: 16px;
                padding-right: 16px;
            }

            .hero,
            .projects-section,
            .panel {
                padding: 20px 16px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="topbar">
            <div class="brand">Divina Rose</div>
            <nav class="nav" aria-label="Main navigation">
                <a href="#about">About</a>
                <a href="#education">Education</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>

        <main>
            <section class="hero" id="about">
                <div>
                    <span class="eyebrow">Basic Information</span>
                    <h1>Bernadette A. Divina</h1>
                    <div class="role">Bachelor of Science in Information Technology</div>
                    <p class="bio">
                        
                    </p>

                    <div class="cta-row">
                        <a class="btn primary" href="mailto:divina@example.com">Email Me</a>
                        <a class="btn secondary" href="#projects">View Projects</a>
                    </div>

                    <div class="contact-grid" id="contact">
                        <div class="contact-item">
                            <span class="label">Email</span>
                            <a href="mailto:divina@example.com">divina@example.com</a>
                        </div>
                        <div class="contact-item">
                            <span class="label">Phone</span>
                            <span>+63 912 345 6789</span>
                        </div>
                        <div class="contact-item">
                            <span class="label">Location</span>
                            <span>Manila, Philippines</span>
                        </div>
                        <div class="contact-item">
                            <span class="label">GitHub</span>
                            <a href="https://github.com/divina" target="_blank" rel="noopener">github.com/divina</a>
                        </div>
                    </div>
                </div>

                <aside class="profile-panel" aria-label="Profile summary">
                    <div class="avatar" aria-label="Profile picture placeholder">DR</div>

                    <div class="mini-card">
                        <h3>Quick Info</h3>
                        <div class="facts">
                            <div class="fact-row">
                                <span>Name</span>
                                <strong>Bernadette A. Divina</strong>
                            </div>
                            <div class="fact-row">
                                <span>Role</span>
                                <strong>Developer</strong>
                            </div>
                            <div class="fact-row">
                                <span>Availability</span>
                                <strong>Open to Work</strong>
                            </div>
                            <div class="fact-row">
                                <span>Focus</span>
                                <strong>Web Design</strong>
                            </div>
                        </div>
                    </div>
                </aside>
            </section>

            <section class="content-grid">
                <article class="panel" id="education">
                    <h3>Educational Background</h3>
                    <ul class="edu-list">
                        <li class="edu-item">
                            <strong>Bachelor of Science in Information Technology</strong>
                            <span>University of the Philippines - 2017 to 2021</span>
                        </li>
                        <li class="edu-item">
                            <strong>Web Development Certification</strong>
                            <span>Google Career Certificates - 2022</span>
                        </li>
                        <li class="edu-item">
                            <strong>UI/UX Design Fundamentals</strong>
                            <span>Design School Academy - 2023</span>
                        </li>
                    </ul>
                </article>

            <section class="projects-section" id="projects">
                <h3>Projects</h3>
                    <article class="project-card">
                        <div class="project-visual" aria-hidden="true"></div>
                        <div class="project-body">
                            <h4>Travel Blog Landing Page</h4>
                            <p>A storytelling landing page for a travel brand, combining vivid imagery and a smooth mobile-friendly layout.</p>
                            <a class="github-link" href="https://github.com/badetdivina2-tech/badetdivina1-makerportfolio.git" target="_blank" rel="noopener" aria-label="View travel blog landing page on GitHub">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.39 7.86 10.9.58.11.79-.25.79-.56v-2.17c-3.2.7-3.88-1.54-3.88-1.54-.52-1.33-1.27-1.68-1.27-1.68-1.04-.71.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.75 2.68 1.24 3.33.95.1-.74.4-1.24.73-1.53-2.55-.29-5.23-1.28-5.23-5.69 0-1.26.45-2.29 1.18-3.09-.12-.29-.51-1.46.11-3.04 0 0 .96-.31 3.15 1.18A10.9 10.9 0 0 1 12 6.8c.97 0 1.95.13 2.86.38 2.19-1.49 3.15-1.18 3.15-1.18.62 1.58.23 2.75.11 3.04.73.8 1.18 1.83 1.18 3.09 0 4.42-2.69 5.4-5.25 5.68.41.36.78 1.08.78 2.18v3.24c0 .31.21.67.8.56A11.51 11.51 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5z"/>
                                </svg>
                                GitHub Repo
                            </a>
                        </div>
                    </article>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
