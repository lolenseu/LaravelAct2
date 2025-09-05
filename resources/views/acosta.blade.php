<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mark Acosta | Portfolio</title>
  <link href="{{ asset('asset4/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>

  <header>
    <nav class="navbar">
      <div class="logo">ACOSTA</div>
      <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#">Intro</a></li>
        <li><a href="#">Education</a></li>
        <li><a href="#">Certifications</a></li>
        <li><a href="#">Skills</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Photos</a></li>
        <li><a href="#" class="active"></a></li>
      </ul>
    </nav>
  </header>

  <main class="hero">
    <div class="hero-text">
      <h2 class="hello">Hello, I'm</h2>
      <h1 class="name">MARK ACOSTA</h1>
      <p class="description">
        I’m a third-year Bachelor of Science in Information Technology (BSIT) student at Ilocos Sur Polytechnic State College (ISPSC) – Tagudin Campus. 
      </p>
      <p class="quote">"Work is easy if you Copypaste it."</p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
      </div>
    </div>
    <div class="hero-image">
      <img src="{{ asset('asset4/pitureko.jpg') }}" alt="Profile photo of Mark Acosta">
    </div>
  </main>
</body>
</html>
<section class="education-timeline" id="education">
  <h2 class="section-title">Education</h2>
  <div class="timeline">

    <div class="timeline-item">
      <div class="timeline-date">2022 – Present</div>
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <h3>College – ISPSC Tagudin Campus</h3>
        <p>Currently pursuing a degree in Bachelor of Science in Information Technology.</p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-date">2017 – 2019</div>
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <h3>Senior High School – Sta.Lucia Academy</h3>
        <p>Completed Senior High School, with a focus on GAS (General Academic Strand).</p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-date">2013 – 2017</div>
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <h3>High School – Sta.Lucia Academy</h3>
        <p>Completed High School | Secondary School.</p>
      </div>
    </div>

    <div class="timeline-item">
      <div class="timeline-date">2007 – 2013</div>
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <h3>Elementary –  Sta.Lucia South Central School</h3>
        <p>Completed Primary School.</p>
      </div>
    </div>

  </div>
</section>
