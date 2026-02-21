<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Infinity WordSearch App – Case Study | Adam Gumm</title>
  <meta name="description" content="Infinity WordSearch turns the timeless word-search puzzle into a living, endlessly regenerating experience. A case study by Adam Gumm – developer, designer, and storyteller.">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root{
      --night-1:#0f1327;  /* deep navy */
      --night-2:#1b2040;  /* indigo */
      --dawn-1:#c8d7ff;   /* soft pastel */
      --accent:#fbbf24;   /* golden glow */
      --soft:#f8fafc;     /* near-white */
    }
    body{ background: radial-gradient(1400px 500px at 70% -10%, var(--dawn-1), var(--night-2) 50%, var(--night-1) 100%); color:#e9eefc; }
    .navbar{ background: rgba(12,14,29,.5); backdrop-filter: blur(6px); }
    .navbar .nav-link{ color:#e9eefc; opacity:.85 }
    .navbar .nav-link:hover{ opacity:1 }

    /* Hero */
    .hero{ position:relative; padding: 9rem 0 6rem; overflow:hidden; }
    .hero h1 span{ color:var(--accent) }
    .glow-dot{ position:absolute; width:420px; height:420px; background:radial-gradient(closest-side, rgba(251,191,36,.35), rgba(251,191,36,0)); filter: blur(1px); border-radius:50%; animation: pulse 6s ease-in-out infinite; }
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
        <div class="app-icon bg-warning d-flex align-items-center justify-content-center">
          <i class="bi bi-grid-3x3-gap text-dark fs-4"></i>
        </div>
        <span>Infinity WordSearch</span>
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
              <div class="app-icon bg-warning d-flex align-items-center justify-content-center">
                <i class="bi bi-grid-3x3-gap text-dark fs-2"></i>
              </div>
              <div>
                <h1 class="h2 mb-1">Infinity <span>WordSearch</span></h1>
                <p class="mb-0 muted">An endlessly generated word search game that bridges KDP activity books and digital play. Procedurally generated puzzles with unlimited replay value.</p>
              </div>
            </div>
            <div class="d-flex flex-wrap gap-2 mb-3">
              <span class="badge stack-badge">HTML / CSS / JavaScript</span>
              <span class="badge stack-badge">PHP 8+</span>
              <span class="badge stack-badge">Procedural Generation</span>
              <span class="badge stack-badge">AI Integration (Planned)</span>
            </div>
            <div class="d-flex gap-2">
              <a href="#video" class="btn btn-light text-dark"><i class="bi bi-play-circle me-2"></i>Watch Demo</a>
              <a href="#contact" class="btn btn-outline-light"><i class="bi bi-briefcase me-2"></i>Hire Adam</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ratio ratio-4x3 rounded-3xl shadow-soft border border-1 border-light-subtle overflow-hidden">
            <!-- Replace with real WordSearch screenshot -->
            <img src="https://placehold.co/1200x900/png?text=Infinity+WordSearch+Screenshots" alt="Infinity WordSearch screenshots" class="w-100 h-100 object-fit-cover">
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
          <h2 class="display-6 mb-3">A Living, Endlessly Regenerating Word Search Experience</h2>
          <p class="lead muted">The Infinity WordSearch App turns the timeless word-search puzzle into a living, endlessly regenerating experience. Designed as a bridge between your KDP activity books and the digital app ecosystem, it generates new puzzles on demand with unlimited replay value.</p>
          <div class="d-flex gap-3 mt-4">
            <a class="btn btn-success" href="#features"><i class="bi bi-puzzle me-2"></i>Explore Features</a>
            <a class="btn btn-outline-light" href="#build"><i class="bi bi-gear-wide-connected me-2"></i>How it was built</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row g-3">
            <div class="col-6">
              <div class="feature-icon mb-2"><i class="bi bi-infinity"></i></div>
              <h5>Infinite Generation</h5>
              <p class="muted">Algorithm builds a new grid every playthrough with unlimited variations.</p>
            </div>
            <div class="col-6">
              <div class="feature-icon mb-2"><i class="bi bi-list-ul"></i></div>
              <h5>Custom Word Lists</h5>
              <p class="muted">Users can create or import their own word lists for personalized puzzles.</p>
            </div>
            <div class="col-6">
              <div class="feature-icon mb-2"><i class="bi bi-palette"></i></div>
              <h5>Themed Packs</h5>
              <p class="muted">Downloadable puzzle sets tied to your print collections and seasonal content.</p>
            </div>
            <div class="col-6">
              <div class="feature-icon mb-2"><i class="bi bi-sliders"></i></div>
              <h5>Difficulty Scaling</h5>
              <p class="muted">Grid size and word complexity adjust automatically based on skill level.</p>
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
                <img src="https://placehold.co/1280x800/png?text=Word+Search+Grid" class="d-block w-100" alt="Word search grid">
              </div>
              <div class="carousel-item">
                <img src="https://placehold.co/1280x800/png?text=Themed+Puzzle+Packs" class="d-block w-100" alt="Themed puzzle packs">
              </div>
              <div class="carousel-item">
                <img src="https://placehold.co/1280x800/png?text=Daily+Challenge" class="d-block w-100" alt="Daily challenge screen">
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
          <h2 class="h2 mb-3">Modern UI, Focus-Driven Design for All Ages</h2>
          <p class="muted">A minimal, focus-driven UI using Bootstrap 5, soft-contrast color palette, and accessible typography consistent with your educational titles. Perfect for vocabulary building, relaxation, or themed puzzle challenges.</p>
          <ul class="list-unstyled mt-4">
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Minimal, distraction‑free visuals</li>
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Accessible typography & contrast</li>
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Works offline once loaded</li>
            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Responsive design for all devices</li>
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
          <h2 class="display-6 mb-4">Built from Concept to MVP in Private Development</h2>
        </div>
        <div class="col-lg-4">
          <div class="app-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="feature-icon"><i class="bi bi-palette"></i></div>
              <h5 class="mb-0">Design</h5>
            </div>
            <p class="muted mb-0">Minimal, focus-driven UI using Bootstrap 5, soft-contrast color palette, accessible typography consistent with educational titles, responsive layouts.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="app-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="feature-icon"><i class="bi bi-code-slash"></i></div>
              <h5 class="mb-0">Development</h5>
            </div>
            <p class="muted mb-2">HTML / CSS / JavaScript core game logic, PHP 8+ backend, custom JavaScript grid generator with deterministic randomization, word-placement collision handling, seed-based reproducibility.</p>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge stack-badge">JavaScript</span>
              <span class="badge stack-badge">PHP 8+</span>
              <span class="badge stack-badge">MySQL/SQLite</span>
              <span class="badge stack-badge">Bootstrap 5</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="app-card p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="feature-icon"><i class="bi bi-rocket-takeoff"></i></div>
              <h5 class="mb-0">Future Expansion</h5>
            </div>
            <p class="muted mb-0">Laravel integration for user profiles, mobile ports (SwiftUI / Flutter), GPT API for auto-creating themed word lists, printable export for KDP tie-ins, monetization strategy implementation.</p>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12">
          <div class="app-card p-4">
            <h5 class="mb-3">Development Cycle</h5>
            <div class="table-responsive">
              <table class="table table-dark table-borderless">
                <thead>
                  <tr>
                    <th>Phase</th>
                    <th>Milestone</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Concept + Architecture Design</td>
                    <td><span class="badge bg-success">Complete</span></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>HTML + JS MVP Prototype</td>
                    <td><span class="badge bg-warning">Private Build</span></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Laravel Integration + User Profiles</td>
                    <td><span class="badge bg-secondary">Planned</span></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Mobile Ports (SwiftUI / Flutter)</td>
                    <td><span class="badge bg-secondary">Planned</span></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Launch + Monetization</td>
                    <td><span class="badge bg-secondary">Planned</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
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
          <h2 class="h2 mb-3">What's Next for Infinity WordSearch</h2>
          <p class="muted">Planned enhancements that deepen educational value and expand the ecosystem.</p>
          <div class="row g-3 mt-2">
            <div class="col-sm-6">
              <div class="app-card p-3 h-100">
                <h6 class="mb-1"><i class="bi bi-robot me-2"></i>AI Word Suggestions</h6>
                <p class="small muted mb-0">GPT prompts generate fresh category-specific vocabulary automatically.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="app-card p-3 h-100">
                <h6 class="mb-1"><i class="bi bi-printer me-2"></i>Printable Export</h6>
                <p class="small muted mb-0">Users can print puzzles linked to KDP activity books for offline play.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="app-card p-3 h-100">
                <h6 class="mb-1"><i class="bi bi-graph-up me-2"></i>Daily Challenge & Streaks</h6>
                <p class="small muted mb-0">Light gamification layer for engagement with streak tracking and rewards.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="app-card p-3 h-100">
                <h6 class="mb-1"><i class="bi bi-volume-up me-2"></i>Text-to-Speech</h6>
                <p class="small muted mb-0">Optional accessibility mode with voice narration for word pronunciation.</p>
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

  <!-- Monetization -->
  <section id="monetization" class="section">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-12">
          <h2 class="display-6 mb-4">Monetization Strategy</h2>
        </div>
        <div class="col-lg-3">
          <div class="app-card p-4 h-100 text-center">
            <div class="feature-icon mx-auto mb-3"><i class="bi bi-gift"></i></div>
            <h5>Free Tier</h5>
            <p class="muted mb-0">Daily puzzles with ads for casual players.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="app-card p-4 h-100 text-center">
            <div class="feature-icon mx-auto mb-3"><i class="bi bi-star"></i></div>
            <h5>Premium Tier</h5>
            <p class="muted mb-0">Unlimited puzzles, custom word lists, and ad-free experience.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="app-card p-4 h-100 text-center">
            <div class="feature-icon mx-auto mb-3"><i class="bi bi-book"></i></div>
            <h5>KDP Tie-In</h5>
            <p class="muted mb-0">Bundle codes printed inside physical word-search books to unlock matching digital packs.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="app-card p-4 h-100 text-center">
            <div class="feature-icon mx-auto mb-3"><i class="bi bi-bullseye"></i></div>
            <h5>Sponsored Packs</h5>
            <p class="muted mb-0">Educational brand collaborations and sponsored puzzle packs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Connections -->
  <section id="connections" class="section pt-0">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-12">
          <h2 class="display-6 mb-4">Ecosystem Connections</h2>
          <p class="muted mb-4">Infinity WordSearch bridges multiple projects in your digital ecosystem, creating content bridges and shared gamification layers.</p>
        </div>
        <div class="col-lg-3">
          <div class="app-card p-4 h-100">
            <h6 class="mb-2"><i class="bi bi-journal-text me-2"></i>Monthly Activity Books</h6>
            <p class="small muted mb-0">Digital companion puzzles that enhance your print collections.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="app-card p-4 h-100">
            <h6 class="mb-2"><i class="bi bi-shield-check me-2"></i>HeroHub Productivity Game</h6>
            <p class="small muted mb-0">Shared gamification layer for productivity and engagement.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="app-card p-4 h-100">
            <h6 class="mb-2"><i class="bi bi-flower1 me-2"></i>Rory Rose Universe</h6>
            <p class="small muted mb-0">Children's-themed word packs tied to your book series.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="app-card p-4 h-100">
            <h6 class="mb-2"><i class="bi bi-gear me-2"></i>Idea Engine</h6>
            <p class="small muted mb-0">Feeds into your central GPT-CMS for multi-project content reuse.</p>
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
          <h2 class="display-6">Watch How Infinity WordSearch Was Built</h2>
          <p class="muted">In this walkthrough, Adam shares the concept, procedural generation algorithm, and development journey behind Infinity WordSearch.</p>
        </div>
      </div>
      <div class="video-wrap">
        <!-- Replace the src with your YouTube embed url -->
        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Infinity WordSearch case study video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
            <p class="lead">I'm <strong>Adam Gumm</strong> — a developer, designer, and storyteller who builds meaningful digital experiences. I create apps that don't just function — they <em>feel</em>.</p>
            <div class="row mt-3 g-3">
              <div class="col-md-6">
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Web apps (HTML/CSS/JS + PHP)</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Backend APIs & dashboards</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>AI‑assisted content & UX</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Rapid prototyping (0→1)</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Procedural generation algorithms</li>
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
        <div class="app-icon bg-warning d-flex align-items-center justify-content-center" style="max-width: 250px;">
          <i class="bi bi-grid-3x3-gap text-dark fs-2"></i>
        </div>
        <div>
          <div class="small">Infinity WordSearch App</div>
          <div class="small text-muted">Built with ❤️ by Adam Gumm</div>
        </div>
      </div>
      <div class="d-flex align-items-center gap-2">
        <!-- Replace with real link when available -->
        <a href="#" class="btn btn-outline-light"><i class="bi bi-globe me-2"></i>Try the App</a>
        <a href="#top" class="btn btn-link text-soft">Back to top</a>
      </div>
    </div>
  </footer>

  <!-- Sticky CTA (mobile) -->
  <div class="sticky-cta d-lg-none">
    <a href="#" class="btn btn-success btn-lg shadow"><i class="bi bi-globe me-2"></i>Try App</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

