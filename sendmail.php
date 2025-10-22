<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Organizo  Easy AI Smart App Organizer</title>
  <meta name="description" content="Organizo  Easy AI Smart Organizer. Automatically sort, group and find apps on your phone, tablet and computer." />
  <link rel="stylesheet" href="style.css" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <header class="site-header">
    <div class="container header-inner">
      <div class="brand">
        <img src="images/logo.png" alt="Organizo" class="logo-img" />
        <div class="brand-text">
          <h1>Organizo</h1>
          <p class="tag">Easy AI Smart Organizo</p>
        </div>
      </div>

      <nav class="main-nav">
        <a href="#features">Features</a>
        <a href="#screens">Screens</a>
        <a href="#download">Download</a>
        <a href="#contact">Contact</a>
      </nav>

      <div class="actions">
        <a href="#download" class="btn primary">Get App</a>
      </div>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero" id="home">
    <div class="container hero-inner">
      <div class="hero-text">
        <h2>Organize everything smartly  powered by Easy AI</h2>
        <p>Auto-group your apps (Communication, Work, Games, Media), pin favorites, hide apps & find instantly  Mobile, Tablet & Desktop ready.</p>
        <div class="hero-cta">
          <a href="#download" class="btn primary large">Download Now</a>
          <a href="#features" class="btn outline">See Features</a>
        </div>
        <ul class="trust-list">
          <li>Fast  Private  Lightweight</li>
          <li>AI Suggestions  One-tap organize</li>
        </ul>
      </div>

      <div class="hero-visual">
        <img src="images/hero-phone.png" alt="Organizo app" class="hero-phone" />
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="features" id="features">
    <div class="container">
      <h3 class="section-title">Key Features</h3>
      <p class="section-sub">Organizo groups and surfaces the apps you need  quickly and beautifully.</p>

      <div class="feature-grid">
        <div class="feature">
          <img src="images/feature1.png" alt="Auto Group" />
          <h4>Auto Group</h4>
          <p>AI-driven automatic grouping: Communication, Work, Games, Media  no manual sorting needed.</p>
        </div>

        <div class="feature">
          <img src="images/feature2.png" alt="Quick Search" />
          <h4>Quick Search & Launch</h4>
          <p>Search and open any app instantly. Voice search supported for fast access.</p>
        </div>

        <div class="feature">
          <img src="images/feature3.png" alt="Hidden Apps" />
          <h4>Hidden & Secure</h4>
          <p>Detect and manage hidden apps. Option to lock groups for privacy and security.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Screens -->
  <section class="screens" id="screens">
    <div class="container">
      <h3 class="section-title">Screenshots</h3>
      <div class="screens-row">
        <img src="images/screenshot1.png" alt="Screenshot 1" />
        <img src="images/screenshot1.png" alt="Screenshot 2" />
        <img src="images/screenshot1.png" alt="Screenshot 3" />
      </div>
    </div>
  </section>

  <!-- Download / CTA -->
  <section class="download" id="download">
    <div class="container download-inner">
      <div class="download-text">
        <h3>Get Organizo  Smart app organization on all devices</h3>
        <p>Available soon on Google Play & App Store. Join early access and organize your phone instantly.</p>
        <div class="store-links">
          <!-- Replace href with Play Store / App Store links when ready -->
          <a class="store-btn" href="#" aria-label="Google Play">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" />
          </a>
          <a class="store-btn" href="#" aria-label="App Store">
            <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store" />
          </a>
        </div>
      </div>

      <div class="download-visual">
        <img src="images/hero-phone.png" alt="App visual" />
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="contact" id="contact">
    <div class="container">
      <h3 class="section-title">Contact & Early Access</h3>
      <p>Want early access, partnership or white-label? Contact us:</p>

      <form id="contact-form" class="contact-form" action="mailto:amazing.officialai@gmail.com" method="post" enctype="text/plain">
        <input type="text" name="name" placeholder="Your name" required />
        <input type="email" name="email" placeholder="Your email" required />
        <textarea name="message" rows="4" placeholder="Your message / partnership idea" required></textarea>
        <button type="submit" class="btn primary">Send Message</button>
      </form>

      <p class="small">Or email directly: <a href="mailto:amazing.officialai@gmail.com">amazing.officialai@gmail.com</a></p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container footer-inner">
      <p> <span id="year"></span> Organizo  Easy AI Smart Organizo. All rights reserved.</p>
      <div class="socials">
        <a href="#" aria-label="Twitter">Twitter</a>
        <a href="#" aria-label="LinkedIn">LinkedIn</a>
        <a href="#" aria-label="Product Hunt">Product Hunt</a>
      </div>
    </div>
  </footer>

  <script>
    // small JS: year & smooth scroll
    document.getElementById('year').textContent = new Date().getFullYear();
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', function(e){
        const target = document.querySelector(this.getAttribute('href'));
        if(target){ e.preventDefault(); target.scrollIntoView({behavior:'smooth'}); }
      });
    });
  </script>
</body>
</html>