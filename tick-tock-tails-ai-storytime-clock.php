<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TickTock Tales: Bedtime Clock – Case Study | Adam Gumm</title>
  <meta name="description" content="TickTock Tales blends storytime, gentle UX, and smart timers to make bedtime calmer. A case study by Adam Gumm – developer, designer, and storyteller.">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root{
      --night-1:#0f1327;  /* deep navy */
      --night-2:#1b2040;  /* indigo */
      --dawn-1:#c8d7ff;   /* soft pastel */
      --accent:#6ee7b7;   /* mint glow */
      --soft:#f8fafc;     /* near-white */
    }
    body{ background: radial-gradient(1400px 500px at 70% -10%, var(--dawn-1), var(--night-2) 50%, var(--night-1) 100%); color:#e9eefc; }
    .navbar{ background: rgba(12,14,29,.5); backdrop-filter: blur(6px); }
    .navbar .nav-link{ color:#e9eefc; opacity:.85 }
    .navbar .nav-link:hover{ opacity:1 }

    /* Hero */
    .hero{ position:relative; padding: 9rem 0 6rem; overflow:hidden; }
    .hero h1 span{ color:var(--accent) }
    .glow-dot{ position:absolute; width:420px; height:420px; background:radial-gradient(closest-side, rgba(110,231,183,.35), rgba(110,231,183,0)); filter: blur(1px); border-radius:50%; animation: pulse 6s ease-in-out infinite; }
    .glow-dot.dot-1{ top:-120px; right:-120px; }
    .glow-dot.dot-2{ bottom:-160px; left:-160px; animation-delay:1.2s }
    @keyframes pulse{ 0%,100%{ transform:scale(.9); opacity:.7 } 50%{ transform:scale(1.05); opacity:1 } }

    .app-card{ background: rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.09); border-radius:1.25rem; box-shadow: 0 20px 60px rgba(0,0,0,.35); }
    .app-icon{ width:72px; height:72px; border-radius:20px; object-fit:cover; }

    .section{ padding: 6rem 0; }
    .muted{ color:#cdd7ff; opacity:.9 }

    .feature-icon{ width:56px; height:56px; border-radius:14px; display:grid; place-items:center; background:rgba(255,255,255,.07); border:1px solid rgba(255,255,255,.12); }

    .stack-badge{ background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.12); color:#cfe3ff; }

    /* Video */
    .video-wrap{ position:relative; padding-top:56.25%; border-radius:18px; overflow:hidden; border:1px solid rgba(255,255,255,.12); box-shadow: 0 24px 70px rgba(0,0,0,.45); }
    .video-wrap iframe{ position:absolute; inset:0; width:100%; height:100%; }

    /* Sticky mobile CTA */
    .sticky-cta{ position:fixed; right:1rem; bottom:1rem; z-index:1050 }

    /* Footer */
    footer{ background: rgba(12,14,29,.6); border-top:1px solid rgba(255,255,255,.08) }

    a.text-soft{ color:#dfe9ff; }
    a.text-soft:hover{ color:#fff }

    /* Utilities */
    .shadow-soft{ box-shadow: 0 16px 40px rgba(0,0,0,.3) }
    .rounded-3xl{ border-radius: 1.25rem }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand fw-semibold d-flex align-items-center gap-2" href="#top" style="color: #e9eefc;">
        <img src="../assets/kids-bedtime-icon.png" alt="TickTock Tales app icon" class="app-icon">
        <span>TickTock Tales</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="#overview">Overview</a></li>
          <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#build">The Build</a></li>
          <li class="nav-item"><a class="nav-link" href="#roadmap">Roadmap</a></li>
          <li class="nav-item"><a class="nav-link" href="#video">Video</a></li>
          <li class="nav-item ms-lg-3"><a class="btn btn-success" href="#contact"><i class="bi bi-person-video2 me-2"></i>Work with Adam</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="hero" id="top">
    <div class="glow-dot dot-1"></div>
    <div class="glow-dot dot-2"></div>
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="app-card p-4 p-md-5">
            <div class="d-flex align-items-center gap-3 mb-3">
              <img src="../assets/kids-bedtime-icon.png" class="app-icon" alt="TickTock Tales icon">
              <div>
                <h1 class="h2 mb-1">TickTock Tales: <span>Bedtime Clock</span></h1>
                <p class="mb-0 muted">The screen turns green to let your child know it’s okay to come get you in the morning. Stories are generated on‑demand based on your options using a GPT backend.</p>
              </div>
            </div>
            <div class="d-flex flex-wrap gap-2 mb-3">
              <span class="badge stack-badge">Swift & SwiftUI</span>
              <span class="badge stack-badge">iPhone + iPad</span>
              <span class="badge stack-badge">SwiftData</span>
              <span class="badge stack-badge">AI Story Generator</span>
            </div>
            <div class="d-flex gap-2">
              <a href="#video" class="btn btn-light text-dark"><i class="bi bi-play-circle me-2"></i>Watch Demo</a>
              <a href="#contact" class="btn btn-outline-light"><i class="bi bi-briefcase me-2"></i>Hire Adam</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ratio ratio-4x3 rounded-3xl shadow-soft border border-1 border-light-subtle overflow-hidden">
            <!-- Replace with real App Store screenshot -->
            <img src="https://placehold.co/1200x900/png?text=App+Store+Screenshots" alt="TickTock Tales screenshots" class="w-100 h-100 object-fit-cover">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Overview -->
  <section id="overview" class="section">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="display-6 mb-3">A Smart Bedtime Clock That Rewards Rest</h2>
          <p class="lead muted">The screen turns green, which tells your child it’s okay to come get you in the morning. Stories are generated on‑demand via user‑chosen options and a GPT backend to write the story.</p>
          <div class="d-flex gap-3 mt-4">
            <a class="btn btn-success" href="#features"><i class="bi bi-moon-stars me-2"></i>Explore Features</a>
            <a class="btn btn-outline-light" href="#build"><i class="bi bi-gear-wide-connected me-2"></i>How it was built</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row g-3">
            <div class="col-6">
              <div class="feature-icon mb-2"><i class="bi bi-book"></i></div>
              <h5>Bedtime Story Generator</h5>
              <p class="muted">Fresh, calming tales each night to make lights-out feel special.</p>
            </div>
            <div class="col-6">
              <div class="feature-icon mb-2"><i class="bi bi-stoplights"></i></div>
              <h5>Green-Light Alarm</h5>
              <p class="muted">Kids stay in bed until the screen glows green—then story time unlocks.</p>
            </div>
            <div class="col-6">
              <div class="feature-icon mb-2"><i class="bi bi-alarm"></i></div>
              <h5>Custom Timers</h5>
              <p class="muted">Age-appropriate wake goals you can adjust anytime.</p>
            </div>
            <div class="col-6">
              <div class="feature-icon mb-2"><i class="bi bi-stars"></i></div>
              <h5>Streak Tracking</h5>
              <p class="muted">Celebrate consistency and positive sleep habits with gentle rewards.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Gallery -->
  <section id="features" class="section pt-0">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-7 order-lg-2">
          <div id="appCarousel" class="carousel slide rounded-3xl overflow-hidden border border-1 border-light-subtle shadow-soft" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://placehold.co/1280x800/png?text=Set+Wake+Time" class="d-block w-100" alt="Set wake time screen">
              </div>
              <div class="carousel-item">
                <img src="https://placehold.co/1280x800/png?text=Stay+In+Bed+Until+Green" class="d-block w-100" alt="Green light alarm screen">
              </div>
              <div class="carousel-item">
                <img src="https://placehold.co/1280x800/png?text=Story+Unlocked" class="d-block w-100" alt="Story unlocked screen">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#appCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#appCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-lg-5 order-lg-1">
          <h2 class="h2 mb-3">Modern UI, Effortless for Parents to Start Story Time</h2>
          <p class="muted">A modern UI that follows Apple’s Human Interface Guidelines—soothing, simple, and predictable for kids and straight forward for parents.</p>
          <ul class="list-unstyled mt-4">
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Minimal, distraction‑free visuals</li>
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Accessible typography & contrast</li>
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Works offline once installed</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- The Build -->
  <section id="build" class="section">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-12">
          <h2 class="display-6 mb-4">Built from Concept to App Store in Under 30 Hours</h2>
        </div>
        <div class="col-lg-4">
          <div class="app-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="feature-icon"><i class="bi bi-palette"></i></div>
              <h5 class="mb-0">Design</h5>
            </div>
            <p class="muted mb-0">Modern UI following Apple design standards, adaptive iPad layout, accessible color palette, App Store assets.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="app-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="feature-icon"><i class="bi bi-code-slash"></i></div>
              <h5 class="mb-0">Development</h5>
            </div>
            <p class="muted mb-2">Swift + SwiftUI, SwiftData for persistence, custom timer engine, state management, modular architecture.</p>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge stack-badge">SwiftUI</span>
              <span class="badge stack-badge">SwiftData</span>
              <span class="badge stack-badge">Combine</span>
              <span class="badge stack-badge">JSON</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="app-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="feature-icon"><i class="bi bi-rocket-takeoff"></i></div>
              <h5 class="mb-0">Publishing</h5>
            </div>
            <p class="muted mb-0">App Store Connect setup, metadata, screenshots, privacy policy, QA on iPhone & iPad, TestFlight build iteration.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Roadmap -->
  <section id="roadmap" class="section pt-0">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="h2 mb-3">What’s Next for TickTock Tales</h2>
          <p class="muted">Planned enhancements that deepen calm routines and parent insight.</p>
          <div class="row g-3 mt-2">
            <div class="col-sm-6">
              <div class="app-card p-3 h-100">
                <h6 class="mb-1"><i class="bi bi-headphones me-2"></i>Voice Narration</h6>
                <p class="small muted mb-0">AI‑assisted character voices and lullaby backing tracks.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="app-card p-3 h-100">
                <h6 class="mb-1"><i class="bi bi-layers me-2"></i>Themed Story Packs</h6>
                <p class="small muted mb-0">“Dream Explorers”, “Ocean Sleepers”, “Galactic Bedtime”, and more.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="app-card p-3 h-100">
                <h6 class="mb-1"><i class="bi bi-activity me-2"></i>Sleep Analytics</h6>
                <p class="small muted mb-0">Simple streaks, insights, and trend summaries for parents.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="app-card p-3 h-100">
                <h6 class="mb-1"><i class="bi bi-house-heart me-2"></i>Smart‑Home Sync</h6>
                <p class="small muted mb-0">Optional Philips Hue or HomeKit lights for wake‑up glow.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ratio ratio-16x9 rounded-3xl overflow-hidden border border-1 border-light-subtle shadow-soft">
            <img src="https://placehold.co/1280x720/png?text=Roadmap+Mockups" class="w-100 h-100 object-fit-cover" alt="Future features mockups">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Video -->
  <section id="video" class="section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-8">
          <h2 class="display-6">Watch How TickTock Tales Was Built</h2>
          <p class="muted">In this walkthrough, Adam shares the idea, design process, and App Store journey behind TickTock Tales.</p>
        </div>
      </div>
      <div class="video-wrap">
        <!-- Replace the src with your YouTube embed url -->
        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="TickTock Tales case study video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <!-- Creator -->
  <section id="contact" class="section pt-0">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-7">
          <div class="app-card p-4 p-md-5">
            <h2 class="h2 mb-3">Meet the Maker</h2>
            <p class="lead">I’m <strong>Adam Gumm</strong> — a developer, designer, and storyteller who builds meaningful digital experiences. I create apps that don’t just function — they <em>feel</em>.</p>
            <div class="row mt-3 g-3">
              <div class="col-md-6">
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>iOS apps (Swift & SwiftUI)</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Backend APIs & dashboards</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>AI‑assisted content & UX</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Rapid prototyping (0→1)</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>App Store publishing</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Marketing & case studies</li>
                </ul>
              </div>
            </div>
            <div class="d-flex flex-wrap gap-2 mt-4">
              <a href="#" class="btn btn-light text-dark"><i class="bi bi-envelope me-2"></i>Contact Adam</a>
              <a href="/projects/" class="btn btn-outline-light"><i class="bi bi-window-sidebar me-2"></i>View Portfolio</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="ratio ratio-1x1 rounded-3xl overflow-hidden shadow-soft border border-1 border-light-subtle">
            <img src="https://placehold.co/900/png?text=Adam+Gumm+Portrait" alt="Portrait of Adam Gumm" class="w-100 h-100 object-fit-cover">
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-4 mt-5">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
      <div class="d-flex align-items-center gap-3">
        <img src="../assets/kids-bedtime-icon.png" class="rounded" alt="App icon small" style="max-width: 250px;">
        <div>
          <div class="small">TickTock Tales: Bedtime Clock</div>
          <div class="small text-muted">Built with ❤️ by Adam Gumm</div>
        </div>
      </div>
      <div class="d-flex align-items-center gap-2">
        <!-- Replace with real App Store link -->
        <a href="#" class="btn btn-outline-light"><i class="bi bi-apple me-2"></i>View on App Store</a>
        <a href="#top" class="btn btn-link text-soft">Back to top</a>
      </div>
    </div>
  </footer>

  <!-- Sticky CTA (mobile) -->
  <div class="sticky-cta d-lg-none">
    <a href="#" class="btn btn-success btn-lg shadow"><i class="bi bi-apple me-2"></i>App Store</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>