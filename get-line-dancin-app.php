<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Get Line Dancin' – App & SaaS Ecosystem | Adam Gumm</title>
  <meta name="description" content="Get Line Dancin': Multi-tier user structure (Users, Community Leaders, Venue Owners, Advertisers). Mobile app, tailored dashboards, scalable architecture.">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root{ --night-1:#0f1327; --night-2:#1b2040; --dawn-1:#c8d7ff; --accent:#8b5cf6; --soft:#f8fafc; }
    body{ background: radial-gradient(1400px 500px at 70% -10%, var(--dawn-1), var(--night-2) 50%, var(--night-1) 100%); color:#e9eefc; min-height: 100vh; }
    .hero{ position:relative; padding: 9rem 0 6rem; overflow:hidden; }
    .hero h1 span{ color:var(--accent) }
    .app-card{ background: rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.09); border-radius:1.25rem; box-shadow: 0 20px 60px rgba(0,0,0,.35); }
    .app-icon{ width:72px; height:72px; border-radius:20px; object-fit:cover; }
    .section{ padding: 6rem 0; }
    .muted{ color:#cdd7ff; opacity:.9 }
    .feature-icon{ width:56px; height:56px; border-radius:14px; display:grid; place-items:center; background:rgba(255,255,255,.07); border:1px solid rgba(255,255,255,.12); }
    .stack-badge{ background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.12); color:#cfe3ff; font-size: 0.75rem; }
    footer{ background: rgba(12,14,29,.6); border-top:1px solid rgba(255,255,255,.08) }
    a.text-soft{ color:#dfe9ff; } a.text-soft:hover{ color:#fff }
    .rounded-3xl{ border-radius: 1.25rem }
  </style>
</head>
<body>
  <header class="hero" id="top">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <div class="app-card p-4 p-md-5">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="app-icon bg-primary d-flex align-items-center justify-content-center">
                <i class="bi bi-music-note-beamed text-white fs-2"></i>
              </div>
              <div>
                <h1 class="h2 mb-1">Get Line Dancin' <span>App & SaaS Ecosystem</span></h1>
                <p class="mb-0 muted">Multi-tier user structure: Users, Community Leaders, Venue Owners, Advertisers. Mobile app integration, tailored dashboards, scalable architecture.</p>
              </div>
            </div>
            <div class="d-flex flex-wrap gap-2 mb-3">
              <span class="badge stack-badge">Laravel</span>
              <span class="badge stack-badge">jQuery</span>
              <span class="badge stack-badge">Bootstrap 5</span>
              <span class="badge stack-badge">MySQL</span>
            </div>
            <div class="d-flex gap-2">
              <a href="/projects/" class="btn btn-outline-light"><i class="bi bi-arrow-left me-2"></i>Back to Projects</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="section pt-0">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="app-card p-4 h-100">
            <h4 class="h5 mb-3">Who It's For</h4>
            <p class="mb-0 small muted">Line dance communities, venue owners, event organizers, and advertisers looking to connect dancers with events and venues.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="app-card p-4 h-100">
            <h4 class="h5 mb-3">Problem Solved</h4>
            <p class="mb-0 small muted">Scattered event info and venue discovery. Each user type needed different tools — dancers find events, leaders manage communities, venues promote, advertisers reach audiences.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="app-card p-4 h-100">
            <h4 class="h5 mb-3">Business Value</h4>
            <p class="mb-0 small muted">Single ecosystem serving four user tiers. Community leaders grow engagement; venues increase foot traffic; advertisers target a niche audience; dancers discover events.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="app-card p-4 h-100">
            <h4 class="h5 mb-3">Tech Stack</h4>
            <p class="mb-0 small muted">Laravel, jQuery, Bootstrap 5, Object-oriented PHP, MySQL, AJAX, CSS 3, HTML5, custom APIs.</p>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-8">
          <div class="app-card p-4 p-md-5">
            <h3 class="h4 mb-3">Key Features</h3>
            <ul class="muted mb-0">
              <li>Multi-tier user structure: Users, Community Leaders, Venue Owners, Advertisers.</li>
              <li>Mobile app integration and tailored dashboards per user type.</li>
              <li>Scalable architecture with custom features for each role.</li>
            </ul>
            <p class="mt-3 mb-0 muted small">Year: 2024</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-4 mt-5">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
      <div class="small text-muted">© <?php echo date('Y'); ?> Adam Gumm</div>
      <a href="/projects/" class="btn btn-link text-soft">Back to Projects</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
