<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrailTalk | Your AI Trail Guide</title>
    <meta name="description"
        content="TrailTalk gives hikers, families, and explorers instant answers about trails, wildlife, and landmarks — powered by park-specific data and GPT.">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Work+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="trailtalk.css">
</head>

<body>
    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center justify-content-center text-center text-light">
        <div class="hero-content">
            <h1 class="fade-in">Your AI Trail Guide — Anywhere You Explore</h1>
            <p class="lead fade-in-delay mt-3">TrailTalk gives hikers, families, and explorers instant answers about
                trails, wildlife, and landmarks.</p>

            <div id="chat-box" class="typing-box mt-5 fade-in-delay"></div>

            <div class="mt-5 fade-in-delay">
                <a href="#demo" class="btn btn-cta">Partner With Us</a>
                <a href="#features" class="btn btn-outline-light">See How It Works</a>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section id="features" class="container py-5 fade-up">
        <div class="text-center mb-5">
            <h2 class="section-title">Explore Smarter</h2>
            <p class="lead mt-3">Everything you need for a richer outdoor experience.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card p-4 text-center">
                    <div class="icon-box"><i class="bi bi-chat-dots"></i></div>
                    <h4>Ask Anything</h4>
                    <p>Get instant answers about park history, wildlife, and trails using our RAG-powered engine.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 text-center">
                    <div class="icon-box"><i class="bi bi-geo-alt"></i></div>
                    <h4>Real-Time GPS</h4>
                    <p>Never get lost with "Where am I?" trail locators and auto-detection of nearby landmarks.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 text-center">
                    <div class="icon-box"><i class="bi bi-people"></i></div>
                    <h4>Family-Friendly</h4>
                    <p>Engage kids with "Wildlife Spotter" badges, scavenger hunts, and fun facts.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 text-center">
                    <div class="icon-box"><i class="bi bi-flower1"></i></div>
                    <h4>Nature ID</h4>
                    <p>Identify plants and animals instantly. Just ask or snap a photo (coming soon).</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 text-center">
                    <div class="icon-box"><i class="bi bi-exclamation-triangle"></i></div>
                    <h4>Safety Alerts</h4>
                    <p>Stay safe with real-time weather warnings, trail closures, and emergency contacts.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 text-center">
                    <div class="icon-box"><i class="bi bi-brush"></i></div>
                    <h4>White-Label</h4>
                    <p>Parks get a fully branded experience with their own logo, colors, and data.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="bg-light py-5 fade-up">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">How It Works</h2>
            </div>

            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="step-card p-4">
                        <div class="step-number">1</div>
                        <h5>Ask a Question</h5>
                        <p>"What kind of bird is that?" or "How long is this trail?"</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="step-card p-4">
                        <div class="step-number">2</div>
                        <h5>AI Finds Context</h5>
                        <p>We combine your GPS location, time of day, and park data.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="step-card p-4">
                        <div class="step-number">3</div>
                        <h5>Get Answers</h5>
                        <p>Receive an instant, accurate response tailored to where you are.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- For Parks -->
    <section id="partners" class="container py-5 fade-up">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-4">For Parks & Nature Centers</h2>
                <p class="lead">Extend your brand and engage visitors like never before.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>White-Label
                            App:</strong> Your logo, your colors, your content.</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>No Dev Team
                            Needed:</strong> We handle the tech, you handle the nature.</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Boost
                            Engagement:</strong> Gamify the hiking experience for families.</li>
                    <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Admin
                            Portal:</strong> Update trail status and alerts in seconds.</li>
                </ul>
                <a href="#" class="btn btn-cta mt-3">Request a Partnership Kit</a>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="park-card p-5 text-center bg-dark-green">
                    <i class="bi bi-tree-fill display-1 text-white mb-3"></i>
                    <h3 class="text-white">Your Park Name Here</h3>
                    <p class="text-white-50">Powered by TrailTalk</p>
                </div>
            </div>
        </div>
    </section>

    <!-- UI Preview / Screenshots -->
    <section id="preview" class="bg-light py-5 fade-up">
        <div class="container text-center">
            <h2 class="section-title mb-5">The TrailTalk Experience</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Placeholder for a carousel or static image of the UI -->
                    <div class="bg-white p-3 rounded shadow-sm"
                        style="min-height: 400px; display: flex; align-items: center; justify-content: center; background: url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=800&q=80') center/cover;">
                        <div class="bg-white p-4 rounded shadow" style="max-width: 300px; opacity: 0.9;">
                            <div class="text-start">
                                <small class="text-muted">TrailTalk AI</small>
                                <p class="mb-0 fw-bold">"You are near the Whispering Falls. Did you know they were
                                    formed over 10,000 years ago?"</p>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 text-muted"><em>Concept UI: Context-aware notifications based on location.</em></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="container py-5 fade-up">
        <div class="text-center mb-5">
            <h2 class="section-title">What Explorers Say</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-white rounded shadow-sm border">
                    <p class="fst-italic">"It's like having a park ranger in my pocket. My kids actually learned
                        something while hiking!"</p>
                    <footer class="blockquote-footer mt-2">Sarah J., Mom of 3</footer>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-white rounded shadow-sm border">
                    <p class="fst-italic">"The white-label option was a game changer for our nature center. Visitors
                        love the custom app."</p>
                    <footer class="blockquote-footer mt-2">Mark T., Park Director</footer>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <div class="container">
            <div class="mb-3">
                <i class="bi bi-compass fs-2"></i>
            </div>
            <p class="mb-2"><strong>TrailTalk</strong></p>
            <p class="small mb-4">Intelligent Nature Guidance</p>
            <div class="mb-4">
                <a href="#" class="mx-2">Contact</a>
                <a href="#" class="mx-2">Privacy</a>
                <a href="#" class="mx-2">Terms</a>
            </div>
            <small class="text-white-50">© 2025 TrailTalk. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="trailtalk.js"></script>
</body>

</html>