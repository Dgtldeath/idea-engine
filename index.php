<?php
// Dynamically discover projects in this directory
function discoverProjects($dir) {
    $projects = [];
    $files = glob($dir . '/*.php');
    
    foreach ($files as $file) {
        $filename = basename($file);
        // Skip index.php itself
        if ($filename === 'index.php') {
            continue;
        }
        
        $content = file_get_contents($file);
        
        // Extract title
        preg_match('/<title>(.*?)<\/title>/i', $content, $titleMatch);
        $title = $titleMatch[1] ?? 'Untitled Project';
        $title = str_replace(' – Case Study | Adam Gumm', '', $title);
        $title = str_replace(' – Case Study | Adam Gumm', '', $title);
        
        // Extract meta description
        preg_match('/<meta name="description" content="(.*?)">/i', $content, $descMatch);
        $description = $descMatch[1] ?? 'No description available.';
        
        // Extract project name from h1 in hero section
        preg_match('/<h1 class="h2 mb-1">(.*?)<\/h1>/is', $content, $h1Match);
        $projectName = '';
        if (isset($h1Match[1])) {
            // Clean up HTML tags and get text
            $projectName = strip_tags($h1Match[1]);
            $projectName = preg_replace('/\s+/', ' ', $projectName);
        }
        
        // Extract short description from hero muted paragraph
        preg_match('/<p class="mb-0 muted">(.*?)<\/p>/is', $content, $shortDescMatch);
        $shortDescription = '';
        if (isset($shortDescMatch[1])) {
            $shortDescription = strip_tags($shortDescMatch[1]);
            $shortDescription = preg_replace('/\s+/', ' ', $shortDescription);
            // Limit length
            if (strlen($shortDescription) > 150) {
                $shortDescription = substr($shortDescription, 0, 147) . '...';
            }
        }
        
        // Extract tech stack badges
        preg_match_all('/<span class="badge stack-badge">(.*?)<\/span>/i', $content, $badgeMatches);
        $techStack = $badgeMatches[1] ?? [];
        // Limit to first 4 badges
        $techStack = array_slice($techStack, 0, 4);
        
        // Extract icon/image if available - check hero section first, then navbar
        $icon = '';
        $iconType = ''; // 'image' or 'icon'
        
        // Try to find img tag with app-icon class - handle any attribute order
        // Match: <img ... class="app-icon" ... src="..." ...> or <img ... src="..." ... class="app-icon" ...>
        if (preg_match('/<img[^>]*class="[^"]*app-icon[^"]*"[^>]*>/i', $content, $imgTagMatch)) {
            // Now extract src from the matched img tag
            if (preg_match('/src="([^"]+)"/i', $imgTagMatch[0], $srcMatch)) {
                $icon = $srcMatch[1];
                $iconType = 'image';
            }
        }
        // Try to find app-icon div with Bootstrap icon (checks hero section)
        elseif (preg_match('/<div[^>]*class="[^"]*app-icon[^"]*"[^>]*>.*?<i class="[^"]*bi bi-([^"]+)"[^>]*>/is', $content, $iconClassMatch)) {
            $icon = 'icon-' . $iconClassMatch[1];
            $iconType = 'icon';
        }
        
        $projects[] = [
            'filename' => $filename,
            'title' => $title,
            'description' => $description,
            'projectName' => $projectName ?: $title,
            'shortDescription' => $shortDescription ?: substr($description, 0, 150) . '...',
            'techStack' => $techStack,
            'icon' => $icon,
            'iconType' => $iconType,
            'url' => './' . $filename  // Relative path to project file in same directory
        ];
    }
    
    return $projects;
}

$projects = discoverProjects(__DIR__);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Idea Engine – Project Portfolio | Adam Gumm</title>
  <meta name="description" content="Explore innovative projects and case studies from Adam Gumm's Idea Engine. From mobile apps to web experiences, discover the creative solutions built with cutting-edge technology.">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root{
      --night-1:#0f1327;  /* deep navy */
      --night-2:#1b2040;  /* indigo */
      --dawn-1:#c8d7ff;   /* soft pastel */
      --accent:#8b5cf6;   /* purple glow */
      --soft:#f8fafc;     /* near-white */
    }
    body{ background: radial-gradient(1400px 500px at 70% -10%, var(--dawn-1), var(--night-2) 50%, var(--night-1) 100%); color:#e9eefc; min-height: 100vh; }
    .navbar{ background: rgba(12,14,29,.5); backdrop-filter: blur(6px); }
    .navbar .nav-link{ color:#e9eefc; opacity:.85 }
    .navbar .nav-link:hover{ opacity:1 }

    /* Hero */
    .hero{ position:relative; padding: 9rem 0 6rem; overflow:hidden; }
    .hero h1 span{ color:var(--accent) }
    .glow-dot{ position:absolute; width:420px; height:420px; background:radial-gradient(closest-side, rgba(139,92,246,.35), rgba(139,92,246,0)); filter: blur(1px); border-radius:50%; animation: pulse 6s ease-in-out infinite; }
    .glow-dot.dot-1{ top:-120px; right:-120px; }
    .glow-dot.dot-2{ bottom:-160px; left:-160px; animation-delay:1.2s }
    @keyframes pulse{ 0%,100%{ transform:scale(.9); opacity:.7 } 50%{ transform:scale(1.05); opacity:1 } }

    .app-card{ background: rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.09); border-radius:1.25rem; box-shadow: 0 20px 60px rgba(0,0,0,.35); transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .app-card:hover{ transform: translateY(-8px); box-shadow: 0 28px 80px rgba(0,0,0,.45); }
    .app-icon{ width:72px; height:72px; border-radius:20px; object-fit:cover; }

    .section{ padding: 6rem 0; }
    .muted{ color:#cdd7ff; opacity:.9 }

    .feature-icon{ width:56px; height:56px; border-radius:14px; display:grid; place-items:center; background:rgba(255,255,255,.07); border:1px solid rgba(255,255,255,.12); }

    .stack-badge{ background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.12); color:#cfe3ff; font-size: 0.75rem; }

    /* Project Cards */
    .project-card{ height: 100%; display: flex; flex-direction: column; }
    .project-card .card-body{ flex: 1; display: flex; flex-direction: column; }
    .project-card .card-text{ flex: 1; }

    /* Footer */
    footer{ background: rgba(12,14,29,.6); border-top:1px solid rgba(255,255,255,.08) }

    a.text-soft{ color:#dfe9ff; }
    a.text-soft:hover{ color:#fff }

    /* Utilities */
    .shadow-soft{ box-shadow: 0 16px 40px rgba(0,0,0,.3) }
    .rounded-3xl{ border-radius: 1.25rem }
    
    /* Stats */
    .stat-card{ text-align: center; }
    .stat-number{ font-size: 3rem; font-weight: 700; color: var(--accent); line-height: 1; }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand fw-semibold d-flex align-items-center gap-2" href="#top" style="color: #e9eefc;">
        <div class="feature-icon">
          <i class="bi bi-lightbulb"></i>
        </div>
        <span>Idea Engine</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
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
      <div class="row align-items-center">
        <div class="col-lg-8 mx-auto text-center">
          <h1 class="display-3 fw-bold mb-4">The <span>Idea Engine</span></h1>
          <p class="lead muted mb-5">A collection of innovative projects, case studies, and creative solutions. From mobile apps to web experiences, explore the digital products built with cutting-edge technology and thoughtful design.</p>
          <div class="row g-4 mb-5">
            <div class="col-md-4">
              <div class="stat-card">
                <div class="stat-number"><?php echo count($projects); ?></div>
                <div class="muted">Active Projects</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stat-card">
                <div class="stat-number">∞</div>
                <div class="muted">Possibilities</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="stat-card">
                <div class="stat-number">100%</div>
                <div class="muted">Passion Driven</div>
              </div>
            </div>
          </div>
          <a href="#projects" class="btn btn-light btn-lg"><i class="bi bi-arrow-down me-2"></i>Explore Projects</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Projects Grid -->
  <section id="projects" class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="display-5 mb-3">Featured <span style="color: var(--accent);">Projects</span></h2>
          <p class="lead muted">Each project represents a unique solution, built with modern technologies and thoughtful design principles.</p>
        </div>
      </div>
      <div class="row g-4">
        <?php foreach ($projects as $project): ?>
        <div class="col-lg-6">
          <a href="<?php echo htmlspecialchars($project['url']); ?>" class="text-decoration-none">
            <div class="app-card project-card p-4 p-md-5 h-100">
              <div class="d-flex align-items-start gap-3 mb-3">
                <?php if ($project['iconType'] === 'icon' && strpos($project['icon'], 'icon-') === 0): ?>
                  <div class="app-icon bg-warning d-flex align-items-center justify-content-center">
                    <i class="bi bi-<?php echo htmlspecialchars(str_replace('icon-', '', $project['icon'])); ?> text-dark fs-2"></i>
                  </div>
                <?php elseif ($project['iconType'] === 'image' && $project['icon']): ?>
                  <img src="<?php echo htmlspecialchars($project['icon']); ?>" class="app-icon" alt="<?php echo htmlspecialchars($project['projectName']); ?> icon">
                <?php else: ?>
                  <div class="app-icon bg-primary d-flex align-items-center justify-content-center">
                    <i class="bi bi-folder text-white fs-2"></i>
                  </div>
                <?php endif; ?>
                <div class="flex-grow-1">
                  <h3 class="h4 mb-2" style="color: #e9eefc;"><?php echo htmlspecialchars($project['projectName']); ?></h3>
                  <p class="muted mb-3 small"><?php echo htmlspecialchars($project['shortDescription']); ?></p>
                </div>
              </div>
              <?php if (!empty($project['techStack'])): ?>
              <div class="d-flex flex-wrap gap-2 mb-3">
                <?php foreach ($project['techStack'] as $tech): ?>
                  <span class="badge stack-badge"><?php echo htmlspecialchars($tech); ?></span>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
              <div class="d-flex align-items-center justify-content-between mt-auto pt-3 border-top border-light border-opacity-25">
                <span class="small muted">View Case Study</span>
                <i class="bi bi-arrow-right" style="color: var(--accent);"></i>
              </div>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="section pt-0">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="display-6 mb-4">About the <span style="color: var(--accent);">Idea Engine</span></h2>
          <p class="lead muted mb-4">The Idea Engine is a dynamic showcase of innovative projects, each representing a unique solution to real-world challenges. From mobile applications to web experiences, every project is built with modern technologies, thoughtful design, and a passion for creating meaningful digital products.</p>
          <p class="muted mb-4">This portfolio automatically discovers and displays projects, making it easy to explore case studies, understand the technology stack, and see the creative process behind each solution.</p>
          <div class="d-flex gap-3">
            <a href="#projects" class="btn btn-success"><i class="bi bi-grid me-2"></i>View All Projects</a>
            <a href="#contact" class="btn btn-outline-light"><i class="bi bi-envelope me-2"></i>Get in Touch</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row g-3">
            <div class="col-6">
              <div class="app-card p-4 h-100 text-center">
                <div class="feature-icon mx-auto mb-3"><i class="bi bi-code-slash"></i></div>
                <h5>Modern Stack</h5>
                <p class="small muted mb-0">Built with cutting-edge technologies and best practices.</p>
              </div>
            </div>
            <div class="col-6">
              <div class="app-card p-4 h-100 text-center">
                <div class="feature-icon mx-auto mb-3"><i class="bi bi-palette"></i></div>
                <h5>Thoughtful Design</h5>
                <p class="small muted mb-0">User-centered design principles in every project.</p>
              </div>
            </div>
            <div class="col-6">
              <div class="app-card p-4 h-100 text-center">
                <div class="feature-icon mx-auto mb-3"><i class="bi bi-lightning"></i></div>
                <h5>Rapid Development</h5>
                <p class="small muted mb-0">From concept to deployment, fast and efficient.</p>
              </div>
            </div>
            <div class="col-6">
              <div class="app-card p-4 h-100 text-center">
                <div class="feature-icon mx-auto mb-3"><i class="bi bi-heart"></i></div>
                <h5>Passion Driven</h5>
                <p class="small muted mb-0">Every project is built with care and attention to detail.</p>
              </div>
            </div>
          </div>
        </div>
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
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>iOS apps (Swift & SwiftUI)</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Web apps (HTML/CSS/JS + PHP)</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Backend APIs & dashboards</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>AI‑assisted content & UX</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Rapid prototyping (0→1)</li>
                  <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i>Marketing & case studies</li>
                </ul>
              </div>
            </div>
            <div class="d-flex flex-wrap gap-2 mt-4">
              <a href="#" class="btn btn-light text-dark"><i class="bi bi-envelope me-2"></i>Contact Adam</a>
              <a href="#" class="btn btn-outline-light"><i class="bi bi-window-sidebar me-2"></i>View Portfolio</a>
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
        <div class="feature-icon">
          <i class="bi bi-lightbulb"></i>
        </div>
        <div>
          <div class="small">Idea Engine</div>
          <div class="small text-muted">Built with ❤️ by Adam Gumm</div>
        </div>
      </div>
      <div class="d-flex align-items-center gap-2">
        <a href="#top" class="btn btn-link text-soft">Back to top</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

