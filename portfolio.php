<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Portfolio of Elmira A. Despo, BSIT student majoring in Business Analytics. Web and mobile systems, data analytics, and certifications.">
<title>Elmira A. Despo | Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;1,6..72,400&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<style>
:root {
  --ink: #2e1f22;
  --body: #54444a;
  --muted: #7a686e;
  --white: #ffffff;
  --paper: #fdfafa;
  --tint-50: #fbf5f5;
  --tint-100: #f5eaeb;
  --tint-200: #ead3d6;
  --tint-300: #d9b3b8;
  --maroon: #8b3a47;
  --maroon-deep: #6e2a36;
  --line: rgba(139, 58, 71, 0.18);
  --side-w: 320px;
  --serif: 'Newsreader', Georgia, serif;
  --sans: 'Public Sans', system-ui, sans-serif;
}

*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; font-size: 16px; scroll-padding-top: 24px; }
body { font-family: var(--sans); background: var(--paper); color: var(--body); line-height: 1.65; overflow-x: hidden; }
h1, h2, h3, h4 { color: var(--ink); font-family: var(--serif); font-weight: 500; }
a { color: inherit; }
:focus-visible { outline: 2px solid var(--maroon); outline-offset: 3px; }

::-webkit-scrollbar { width: 8px; }
::-webkit-scrollbar-track { background: var(--tint-50); }
::-webkit-scrollbar-thumb { background: var(--tint-300); border-radius: 4px; }

/* ---------- SIDEBAR ---------- */
.sidebar {
  position: fixed; top: 0; left: 0; bottom: 0; width: var(--side-w);
  background: var(--tint-100); border-right: 1px solid var(--line);
  padding: 2.5rem 2rem 2rem; display: flex; flex-direction: column; overflow-y: auto;
}
.side-photo { width: 100%; height: 290px; border-radius: 6px; overflow: hidden; border: 1px solid var(--tint-300); background: var(--white); margin-bottom: 1.4rem; }
.side-photo img { width: 100%; height: 100%; object-fit: cover; object-position: center 15%; display: block; }
.side-name { font-family: var(--serif); color: var(--ink); font-size: 1.6rem; line-height: 1.15; font-weight: 600; margin-bottom: 0.35rem; }
.side-role { font-size: 0.88rem; color: var(--muted); line-height: 1.5; }

.side-nav { list-style: none; margin: 2.25rem 0; border-top: 1px solid var(--line); }
.side-nav a {
  display: block; padding: 0.7rem 0 0.7rem 0.9rem; border-bottom: 1px solid var(--line);
  font-size: 0.92rem; font-weight: 500; color: var(--body); text-decoration: none;
  border-left: 3px solid transparent; margin-left: -0.9rem; padding-left: 0.9rem;
  transition: color 0.2s, border-color 0.2s, background 0.2s;
}
.side-nav a:hover { color: var(--maroon-deep); background: var(--tint-50); }
.side-nav a.active { color: var(--maroon-deep); border-left-color: var(--maroon); background: var(--tint-50); }

.side-foot { margin-top: auto; }
.side-links { display: flex; gap: 0.6rem; margin-bottom: 1rem; }
.side-links a {
  width: 38px; height: 38px; border-radius: 6px; background: var(--white); border: 1px solid var(--line);
  display: flex; align-items: center; justify-content: center; color: var(--maroon); text-decoration: none; font-size: 0.9rem;
  transition: background 0.2s, color 0.2s;
}
.side-links a:hover { background: var(--maroon); color: var(--white); }
.side-copy { font-size: 0.74rem; color: var(--muted); }

/* ---------- TOP BAR (mobile) ---------- */
.topbar {
  display: none; position: fixed; top: 0; left: 0; right: 0; height: 60px; z-index: 1000;
  background: var(--tint-100); border-bottom: 1px solid var(--line);
  padding: 0 1.25rem; align-items: center; justify-content: space-between;
}
.topbar-brand { font-family: var(--serif); font-size: 1.2rem; font-weight: 600; color: var(--ink); text-decoration: none; }
.hamburger { display: flex; flex-direction: column; gap: 5px; cursor: pointer; padding: 6px; background: none; border: none; }
.hamburger span { display: block; width: 24px; height: 2px; background: var(--maroon-deep); border-radius: 2px; transition: transform 0.25s, opacity 0.25s; }
.hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.hamburger.open span:nth-child(2) { opacity: 0; }
.hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
.mobile-menu { display: none; position: fixed; top: 60px; left: 0; right: 0; z-index: 999; background: var(--tint-50); border-bottom: 1px solid var(--line); padding: 0.5rem 1.25rem 1rem; }
.mobile-menu.open { display: block; }
.mobile-menu a { display: block; padding: 0.75rem 0; border-bottom: 1px solid var(--line); font-size: 0.95rem; font-weight: 500; color: var(--body); text-decoration: none; }
.mobile-menu a:last-child { border-bottom: none; }

/* ---------- MAIN ---------- */
main { margin-left: var(--side-w); }
.block { padding: 4.5rem 3.5rem; border-top: 1px solid var(--line); }
.block:first-child { border-top: none; padding-top: 5rem; }
.inner { max-width: none; }
.block-title { font-size: 2rem; line-height: 1.2; margin-bottom: 2rem; }

/* About */
.about-photo-mobile { display: none; }
.lead { font-size: clamp(2rem, 3.6vw, 2.9rem); line-height: 1.15; font-weight: 500; letter-spacing: -0.01em; max-width: 22ch; margin-bottom: 1.5rem; }
.about-text { font-size: 1.08rem; line-height: 1.8; max-width: 80ch; margin-bottom: 1.75rem; }
.btn { display: inline-flex; align-items: center; gap: 0.55rem; padding: 0.75rem 1.4rem; border-radius: 4px; font-family: var(--sans); font-size: 0.9rem; font-weight: 600; text-decoration: none; transition: background 0.2s, border-color 0.2s, color 0.2s; }
.btn-solid { background: var(--maroon); color: var(--white); border: 1px solid var(--maroon); }
.btn-solid:hover { background: var(--maroon-deep); border-color: var(--maroon-deep); }
.btn-line { background: transparent; color: var(--maroon-deep); border: 1px solid var(--tint-300); }
.btn-line:hover { background: var(--tint-100); border-color: var(--maroon); }
.btn-row { display: flex; gap: 0.75rem; flex-wrap: wrap; }

.facts { margin-top: 3rem; display: grid; grid-template-columns: repeat(3, 1fr); border-top: 1px solid var(--line); }
.fact { padding: 1rem 1.25rem 1rem 0; border-bottom: 1px solid var(--line); }
.fact:not(:nth-child(3n+1)) { padding-left: 1.25rem; border-left: 1px solid var(--line); }
.fact dt { font-size: 0.8rem; color: var(--muted); margin-bottom: 0.15rem; }
.fact dd { font-size: 0.95rem; font-weight: 500; color: var(--ink); overflow-wrap: anywhere; }
.fact dd a { text-decoration: none; }
.fact dd a:hover { color: var(--maroon); text-decoration: underline; }

/* Education */
.edu-row { display: grid; grid-template-columns: 150px 1fr; gap: 1.5rem; padding: 1.4rem 0; border-bottom: 1px solid var(--line); }
.edu-row:first-of-type { border-top: 1px solid var(--line); }
.edu-year { font-weight: 600; color: var(--maroon); font-size: 0.95rem; padding-top: 0.2rem; }
.edu-row h3 { font-size: 1.2rem; line-height: 1.35; margin-bottom: 0.2rem; }
.edu-row p { font-size: 0.92rem; color: var(--muted); }
.edu-row .edu-major { color: var(--maroon-deep); font-weight: 500; }

/* Skills */
.skill-row { display: grid; grid-template-columns: 220px 1fr; gap: 1.5rem; align-items: start; padding: 1.15rem 0; border-bottom: 1px solid var(--line); }
.skill-row:first-of-type { border-top: 1px solid var(--line); }
.skill-name { display: flex; align-items: center; gap: 0.75rem; font-family: var(--sans); font-size: 0.95rem; font-weight: 600; color: var(--ink); }
.skill-name i { width: 20px; text-align: center; color: var(--maroon); }
.pills { display: flex; flex-wrap: wrap; gap: 0.4rem; }
.pill { background: var(--tint-100); color: var(--maroon-deep); font-size: 0.82rem; font-weight: 500; padding: 0.25rem 0.7rem; border-radius: 3px; }

/* Projects */
.project-list { display: flex; flex-direction: column; gap: 1.25rem; }
.project { display: grid; grid-template-columns: 380px 1fr; background: var(--white); border: 1px solid var(--line); border-radius: 6px; overflow: hidden; transition: border-color 0.2s; }
.project:hover { border-color: var(--maroon); }
.project-img { position: relative; min-height: 230px; background: var(--tint-100); display: flex; align-items: center; justify-content: center; overflow: hidden; border-right: 1px solid var(--line); }
.project-img img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: top; }
.project-ph { display: flex; flex-direction: column; align-items: center; gap: 0.5rem; color: var(--maroon); }
.project-ph i { font-size: 2.2rem; opacity: 0.6; }
.project-ph span { font-size: 0.82rem; color: var(--muted); }
.project-body { padding: 1.75rem 2rem; justify-content: center; display: flex; flex-direction: column; gap: 0.5rem; }
.project-type { font-size: 0.82rem; font-weight: 600; color: var(--maroon); }
.project-body h3 { font-size: 1.28rem; line-height: 1.3; }
.project-body p { font-size: 0.95rem; line-height: 1.7; color: var(--body); }
.project-body .pills { margin-top: 0.5rem; }

/* Certificates */
.tabs { display: flex; gap: 1.75rem; border-bottom: 1px solid var(--line); margin-bottom: 1.75rem; flex-wrap: wrap; }
.tab { background: none; border: none; font-family: var(--sans); font-size: 0.95rem; font-weight: 500; color: var(--muted); padding: 0.6rem 0; cursor: pointer; border-bottom: 2px solid transparent; margin-bottom: -1px; transition: color 0.2s, border-color 0.2s; }
.tab:hover { color: var(--maroon-deep); }
.tab.active { color: var(--maroon-deep); border-bottom-color: var(--maroon); }
.panel { display: none; }
.panel.active { display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 1.25rem; }
.panel.wide.active { grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); }
.cert { background: var(--white); border: 1px solid var(--line); border-radius: 6px; overflow: hidden; cursor: zoom-in; transition: border-color 0.2s; }
.cert:hover { border-color: var(--maroon); }
.cert-img { aspect-ratio: 4 / 3; background: var(--tint-50); border-bottom: 1px solid var(--line); }
.cert-img img { width: 100%; height: 100%; object-fit: contain; display: block; }
.cert-body { padding: 0.95rem 1.1rem; }
.cert-body h4 { font-family: var(--sans); font-size: 0.92rem; font-weight: 600; line-height: 1.4; }
.cert-body small { display: block; font-size: 0.8rem; color: var(--muted); margin-top: 0.15rem; font-weight: 400; }

/* Lightbox */
.lightbox { position: fixed; inset: 0; background: rgba(46, 31, 34, 0.82); display: none; align-items: center; justify-content: center; z-index: 2000; padding: 2rem; cursor: zoom-out; }
.lightbox.open { display: flex; }
.lightbox img { max-width: min(1000px, 100%); max-height: 100%; border-radius: 6px; background: var(--white); }

/* Back to top */
#back-top { position: fixed; bottom: 1.75rem; right: 1.75rem; width: 42px; height: 42px; background: var(--maroon); color: var(--white); border: none; border-radius: 6px; display: flex; align-items: center; justify-content: center; cursor: pointer; opacity: 0; pointer-events: none; transition: opacity 0.25s, background 0.2s; z-index: 500; }
#back-top.show { opacity: 1; pointer-events: auto; }
#back-top:hover { background: var(--maroon-deep); }

@media (prefers-reduced-motion: reduce) {
  html { scroll-behavior: auto; }
  * { transition: none !important; }
}

/* ---------- RESPONSIVE ---------- */
@media (max-width: 1280px) {
  .facts { grid-template-columns: repeat(2, 1fr); }
  .fact:not(:nth-child(3n+1)) { padding-left: 0; border-left: none; }
  .fact:nth-child(even) { padding-left: 1.25rem; border-left: 1px solid var(--line); }
  .project { grid-template-columns: 300px 1fr; }
}
@media (max-width: 960px) {
  .sidebar { display: none; }
  .topbar { display: flex; }
  main { margin-left: 0; padding-top: 60px; }
  html { scroll-padding-top: 76px; }
  .block { padding: 3.5rem 1.5rem; }
  .block:first-child { padding-top: 2.5rem; }
  .about-photo-mobile { display: block; width: 160px; height: 190px; border-radius: 6px; overflow: hidden; border: 1px solid var(--tint-300); margin-bottom: 1.5rem; }
  .about-photo-mobile img { width: 100%; height: 100%; object-fit: cover; object-position: center 18%; display: block; }
  .lead { max-width: none; }
}
@media (max-width: 700px) {
  .project { grid-template-columns: 1fr; }
  .project-img { min-height: 170px; border-right: none; border-bottom: 1px solid var(--line); }
  .edu-row, .skill-row { grid-template-columns: 1fr; gap: 0.5rem; }
  .facts { grid-template-columns: 1fr; }
  .fact:nth-child(n) { padding-left: 0; border-left: none; }
  .block-title { font-size: 1.7rem; }
}
</style>
</head>
<body>

<!-- SIDEBAR (desktop) -->
<aside class="sidebar">
  <div class="side-photo"><img src="images/me.png" alt="Elmira A. Despo"></div>
  <div class="side-name">Elmira A. Despo</div>
  <div class="side-role">BS Information Technology<br>Major in Business Analytics</div>

  <ul class="side-nav" id="sideNav">
    <li><a href="#about" class="active">About</a></li>
    <li><a href="#education">Education</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#certificates">Certificates</a></li>
  </ul>

  <div class="side-foot">
    <div class="side-links">
      <a href="mailto:elmiraaquinodespo@gmail.com" title="Email" aria-label="Email"><i class="fas fa-envelope"></i></a>
      <a href="https://github.com/elmiraclee" target="_blank" rel="noopener" title="GitHub profile" aria-label="GitHub profile"><i class="fab fa-github"></i></a>
      <a href="tel:09551665289" title="Phone" aria-label="Phone"><i class="fas fa-phone"></i></a>
    </div>
    <div class="side-copy">&copy; <?php echo date('Y'); ?> Elmira A. Despo</div>
  </div>
</aside>

<!-- TOP BAR (mobile) -->
<header class="topbar">
  <a class="topbar-brand" href="#about">Elmira A. Despo</a>
  <button class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false"><span></span><span></span><span></span></button>
</header>
<nav class="mobile-menu" id="mobileMenu">
  <a href="#about">About</a>
  <a href="#education">Education</a>
  <a href="#skills">Skills</a>
  <a href="#projects">Projects</a>
  <a href="#certificates">Certificates</a>
</nav>

<main>

  <!-- ABOUT -->
  <section class="block" id="about">
    <div class="inner">
      <div class="about-photo-mobile"><img src="images/me.png" alt="Elmira A. Despo"></div>
      <h1 class="lead">Web and mobile systems, built with data in mind.</h1>
      <p class="about-text">I&rsquo;m a fourth-year Bachelor of Science in Information Technology student majoring in Business Analytics at Batangas State University &ndash; ARASOF Nasugbu. I build web and mobile systems, from an HR management system and a resort booking platform to a campus queue system, and I work with data through cleaning, analysis, and dashboards.</p>
      <div class="btn-row">
        <a href="#projects" class="btn btn-solid">View projects</a>
        <a href="files/CV_Despo.pdf" class="btn btn-line" target="_blank" rel="noopener"><i class="fas fa-file-pdf"></i> View CV</a>
      </div>

      <dl class="facts">
        <div class="fact"><dt>Email</dt><dd><a href="mailto:elmiraaquinodespo@gmail.com">elmiraaquinodespo@gmail.com</a></dd></div>
        <div class="fact"><dt>Phone</dt><dd><a href="tel:09551665289">0955 166 5289</a></dd></div>
        <div class="fact"><dt>Location</dt><dd>Malaruhatan, Lian, Batangas, Philippines</dd></div>
        <div class="fact"><dt>GitHub</dt><dd><a href="https://github.com/elmiraclee" target="_blank" rel="noopener">github.com/elmiraclee</a></dd></div>
        <div class="fact"><dt>Languages</dt><dd>English, Filipino</dd></div>
        <div class="fact"><dt>Citizenship</dt><dd>Filipino</dd></div>
      </dl>
    </div>
  </section>

  <!-- EDUCATION -->
  <section class="block" id="education">
    <div class="inner">
      <h2 class="block-title">Education</h2>

      <div class="edu-row">
        <div class="edu-year">2023 &ndash; Present</div>
        <div>
          <h3>Bachelor of Science in Information Technology</h3>
          <p>Batangas State University &ndash; ARASOF Nasugbu, Nasugbu, Batangas</p>
          <p class="edu-major">Major in Business Analytics</p>
        </div>
      </div>
      <div class="edu-row">
        <div class="edu-year">2021 &ndash; 2023</div>
        <div>
          <h3>Lian Senior High School</h3>
          <p>Lian, Batangas</p>
        </div>
      </div>
      <div class="edu-row">
        <div class="edu-year">2017 &ndash; 2021</div>
        <div>
          <h3>Lian National High School</h3>
          <p>Lian, Batangas</p>
        </div>
      </div>
      <div class="edu-row">
        <div class="edu-year">2011 &ndash; 2017</div>
        <div>
          <h3>Malaruhatan Elementary School</h3>
          <p>Lian, Batangas</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SKILLS -->
  <section class="block" id="skills">
    <div class="inner">
      <h2 class="block-title">Technical skills</h2>

      <div class="skill-row">
        <div class="skill-name"><i class="fas fa-code"></i>Programming</div>
        <div class="pills"><span class="pill">HTML</span><span class="pill">CSS</span><span class="pill">JavaScript</span><span class="pill">Java</span></div>
      </div>
      <div class="skill-row">
        <div class="skill-name"><i class="fas fa-database"></i>Database management</div>
        <div class="pills"><span class="pill">MySQL</span><span class="pill">SQL</span></div>
      </div>
      <div class="skill-row">
        <div class="skill-name"><i class="fas fa-chart-line"></i>Data analytics</div>
        <div class="pills"><span class="pill">Data Cleaning</span><span class="pill">Data Analysis</span><span class="pill">Data Interpretation</span><span class="pill">Basic Statistical Analysis</span></div>
      </div>
      <div class="skill-row">
        <div class="skill-name"><i class="fas fa-chart-pie"></i>Data visualization</div>
        <div class="pills"><span class="pill">Dashboard Development</span><span class="pill">Data Visualization</span><span class="pill">Report Generation</span></div>
      </div>
      <div class="skill-row">
        <div class="skill-name"><i class="fas fa-mobile-screen-button"></i>Mobile development</div>
        <div class="pills"><span class="pill">React Native</span><span class="pill">Expo</span></div>
      </div>
      <div class="skill-row">
        <div class="skill-name"><i class="fas fa-vial-circle-check"></i>Testing</div>
        <div class="pills"><span class="pill">Cypress</span><span class="pill">Playwright</span><span class="pill">Postman</span></div>
      </div>
      <div class="skill-row">
        <div class="skill-name"><i class="fas fa-screwdriver-wrench"></i>Tools</div>
        <div class="pills"><span class="pill">Git</span><span class="pill">GitHub</span><span class="pill">VS Code</span><span class="pill">XAMPP</span></div>
      </div>
      <div class="skill-row">
        <div class="skill-name"><i class="fas fa-file-lines"></i>Productivity</div>
        <div class="pills"><span class="pill">Microsoft Excel</span><span class="pill">Microsoft Word</span><span class="pill">Microsoft PowerPoint</span></div>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section class="block" id="projects">
    <div class="inner">
      <h2 class="block-title">Projects</h2>

      <div class="project-list">

        <article class="project">
          <div class="project-img">
            <div class="project-ph"><i class="fas fa-building-columns"></i><span>Campus system</span></div>
            <img src="images/uniqueue.png" alt="Uni-Queue landing page" onerror="this.remove()">
          </div>
          <div class="project-body">
            <div class="project-type">Web and mobile app for BSU ARASOF Nasugbu</div>
            <h3>Uni-Queue: Real-Time and Dynamic Hybrid Queue Management System</h3>
            <p>A web and mobile-based queue management system developed for Batangas State University &ndash; ARASOF Nasugbu Campus.</p>
          </div>
        </article>

        <article class="project">
          <div class="project-img">
            <div class="project-ph"><i class="fas fa-users-cog"></i><span>HR system</span></div>
            <img src="images/hr.png" alt="St. Paul Smart HR dashboard" onerror="this.remove()">
          </div>
          <div class="project-body">
            <div class="project-type">Full-stack web app</div>
            <h3>St. Paul Smart HR: Human Resource Management System</h3>
            <p>A web-based Human Resource Management System designed to streamline and manage employee-related processes, records, and administrative tasks.</p>
            <div class="pills"><span class="pill">PHP</span><span class="pill">MySQL</span><span class="pill">Bootstrap</span></div>
          </div>
        </article>

        <article class="project">
          <div class="project-img">
            <div class="project-ph"><i class="fas fa-umbrella-beach"></i><span>Resort booking</span></div>
            <img src="images/dampa.png" alt="Dampa online resort booking" onerror="this.remove()">
          </div>
          <div class="project-body">
            <div class="project-type">Web-based platform</div>
            <h3>Online Resort Booking System</h3>
            <p>A web-based booking system that allows customers to explore resort accommodations, check available rooms, and make reservations online.</p>
            <div class="pills"><span class="pill">PHP</span><span class="pill">MySQL</span><span class="pill">JavaScript</span></div>
          </div>
        </article>




      </div>
    </div>
  </section>

  <!-- CERTIFICATES -->
  <section class="block" id="certificates">
    <div class="inner">
      <h2 class="block-title">Certificates</h2>

      <div class="tabs" role="tablist">
        <button class="tab active" role="tab" aria-selected="true" onclick="switchTab('certiport', this)">Certiport IT Specialist (3)</button>
        <button class="tab" role="tab" aria-selected="false" onclick="switchTab('cisco', this)">Cisco (7)</button>
        <button class="tab" role="tab" aria-selected="false" onclick="switchTab('webinars', this)">Webinars (2)</button>
      </div>

      <!-- CERTIPORT -->
      <div id="panel-certiport" class="panel active">
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/data.png" alt="Data Analytics certificate" loading="lazy"></div>
          <div class="cert-body"><h4>Data Analytics<small>Certiport Information Technology Specialist, 2026</small></h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/dcm.png" alt="Device Configuration and Management certificate" loading="lazy"></div>
          <div class="cert-body"><h4>Device Configuration and Management<small>Certiport Information Technology Specialist, 2025</small></h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/db.png" alt="Databases certificate" loading="lazy"></div>
          <div class="cert-body"><h4>Databases<small>Certiport Information Technology Specialist, 2025</small></h4></div>
        </div>
      </div>

      <!-- CISCO -->
      <div id="panel-cisco" class="panel">
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/ids.png" alt="Introduction to Data Science certificate" loading="lazy"></div>
          <div class="cert-body"><h4>Introduction to Data Science</h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/ima.png" alt="Introduction to Modern AI certificate" loading="lazy"></div>
          <div class="cert-body"><h4>Introduction to Modern AI</h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/acr.png" alt="Apply AI: Analyze Customer Reviews certificate" loading="lazy"></div>
          <div class="cert-body"><h4>Apply AI: Analyze Customer Reviews</h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/dae.png" alt="Data Analytics Essentials certificate" loading="lazy"></div>
          <div class="cert-body"><h4>Data Analytics Essentials</h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/e1.png" alt="English for IT 1 certificate" loading="lazy"></div>
          <div class="cert-body"><h4>English for IT 1</h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/e2.png" alt="English for IT 2 certificate" loading="lazy"></div>
          <div class="cert-body"><h4>English for IT 2</h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/ipt.png" alt="Introduction to Packet Tracer certificate" loading="lazy"></div>
          <div class="cert-body"><h4>Introduction to Packet Tracer</h4></div>
        </div>
      </div>

      <!-- WEBINARS -->
      <div id="panel-webinars" class="panel wide">
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/webinar-digital-safety.png" alt="Digital Safety webinar certificate of participation" loading="lazy"></div>
          <div class="cert-body"><h4>Digital Safety: Cybersecurity and PNPKI<small>DICT CAR, January 28, 2026</small></h4></div>
        </div>
        <div class="cert" data-zoom>
          <div class="cert-img"><img src="images/webinar-cybersecurity-for-everyone.png" alt="Cybersecurity for Everyone certificate of participation" loading="lazy"></div>
          <div class="cert-body"><h4>Cybersecurity for Everyone<small>DICT Region IV-A, September 14, 2026</small></h4></div>
        </div>
      </div>

    </div>
  </section>

</main>

<div class="lightbox" id="lightbox"><img src="" alt=""></div>

<button id="back-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" title="Back to top" aria-label="Back to top">
  <i class="fas fa-arrow-up"></i>
</button>

<script>
// Active section in sidebar + back-to-top
const backTop = document.getElementById('back-top');
const sections = document.querySelectorAll('main section[id]');
const sideLinks = document.querySelectorAll('#sideNav a');

function onScroll() {
  backTop.classList.toggle('show', window.scrollY > 400);
  let current = sections[0].id;
  sections.forEach(s => { if (window.scrollY >= s.offsetTop - 140) current = s.id; });
  sideLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + current));
}
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();

// Certificate tabs
function switchTab(type, btn) {
  document.querySelectorAll('.tab').forEach(t => { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
  document.querySelectorAll('.panel').forEach(p => p.classList.remove('active'));
  btn.classList.add('active');
  btn.setAttribute('aria-selected', 'true');
  document.getElementById('panel-' + type).classList.add('active');
}

// Certificate lightbox
const lightbox = document.getElementById('lightbox');
const lightboxImg = lightbox.querySelector('img');
document.querySelectorAll('[data-zoom]').forEach(card => {
  card.addEventListener('click', () => {
    const img = card.querySelector('img');
    lightboxImg.src = img.src;
    lightboxImg.alt = img.alt;
    lightbox.classList.add('open');
  });
});
lightbox.addEventListener('click', () => lightbox.classList.remove('open'));
document.addEventListener('keydown', e => { if (e.key === 'Escape') lightbox.classList.remove('open'); });

// Mobile menu
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
hamburger.addEventListener('click', () => {
  const open = hamburger.classList.toggle('open');
  mobileMenu.classList.toggle('open', open);
  hamburger.setAttribute('aria-expanded', open);
});
mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
  hamburger.classList.remove('open');
  mobileMenu.classList.remove('open');
  hamburger.setAttribute('aria-expanded', 'false');
}));
</script>
</body>
</html>
