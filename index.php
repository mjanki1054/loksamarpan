<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LokSamarpan Trust</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <!-- style -->
  <link rel="stylesheet" href="/CSS/style.css" />
</head>
<body>

  <!-- Navbar -->
  <?php include 'common/header.php'; ?>   

 <!-- Hero Section  -->
<section class="hero position-relative">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/Asset/energy.jpg" class="d-block w-100" alt="Serving Humanity">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
          <h1 class="fw-bold text-light">LokSamarpan — Serving Humanity with Love</h1>
          <p class="lead text-light">Empowering communities through education, health, renewable energy, and social welfare initiatives.</p>
          <a href="#donate" class="btn btn-warning mt-3 px-4 py-2">Support Our Mission</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="Asset/education.jpg" class="d-block w-100" alt="Education for All">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
          <h1 class="fw-bold text-light">Education for Every Child</h1>
          <p class="lead text-light">Together, we create opportunities for brighter futures.</p>
          <a href="#projects" class="btn btn-warning mt-3 px-4 py-2">Explore Our Work</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="Asset/health.jpg" class="d-block w-100" alt="Health and Hope">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
          <h1 class="fw-bold text-light">Health, Hope & Happiness</h1>
          <p class="lead text-light">Delivering care and compassion to those in need.</p>
          <a href="#contact" class="btn btn-warning mt-3 px-4 py-2">Join Our Cause</a>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>

  <!-- About Section -->
  <?php include 'components/about.php'; ?>  

  <!-- Mission & Vision Section -->
  <section class="section bg-light py-5" id="mission-vision">
    <div class="container text-center"> 
      <h2 class="fw-bold mb-4">Our Mission & Vision</h2>

      <div class="btn-group mb-4" role="group">
        <button id="missionBtn" class="btn btn-success active" onclick="showContent('mission')">Mission</button>
        <button id="visionBtn" class="btn btn-outline-success" onclick="showContent('vision')">Vision</button>
      </div>

      <div id="missionContent" class="content-section d-block">
        <p class="lead text-muted">
          Our mission at <strong>LokSamarpan Trust</strong> is simple yet powerful — we aim to contribute to 
          the development of society through compassion, innovation, and action. 
          By working in <strong>education, health, renewable energy, livelihood promotion, and agriculture</strong>,
          we strive to bring positive change to every community we serve.
        </p>
      </div>

      <div id="visionContent" class="content-section d-none">
        <p class="lead text-muted">
          Our vision is crystal clear — we dream of a future where development reaches 
          every corner of society. <strong>LokSamarpan Trust</strong> envisions communities 
          where education thrives, healthcare is accessible, renewable energy is embraced, 
          and agriculture is sustainable.
        </p>
      </div>
    </div>
  </section>

  <script>
    function showContent(type) {
      const missionBtn = document.getElementById('missionBtn');
      const visionBtn = document.getElementById('visionBtn');
      const missionContent = document.getElementById('missionContent');
      const visionContent = document.getElementById('visionContent');

      if (type === 'mission') {
        missionContent.classList.remove('d-none');
        missionContent.classList.add('d-block');
        visionContent.classList.remove('d-block');
        visionContent.classList.add('d-none');

        missionBtn.classList.add('active', 'btn-success');
        missionBtn.classList.remove('btn-outline-success');
        visionBtn.classList.add('btn-outline-success');
        visionBtn.classList.remove('active', 'btn-success');
      } else {
        visionContent.classList.remove('d-none');
        visionContent.classList.add('d-block');
        missionContent.classList.remove('d-block');
        missionContent.classList.add('d-none');

        visionBtn.classList.add('active', 'btn-success');
        visionBtn.classList.remove('btn-outline-success');
        missionBtn.classList.add('btn-outline-success');
        missionBtn.classList.remove('active', 'btn-success');
      }
    }
  </script>

  <!-- Projects Section -->
  <?php include 'components/project.php'; ?>

  <!-- Footer Section -->
  <?php include 'common/footer.php'; ?> 

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
