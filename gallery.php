<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LokSamarpan Trust</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <?php include '../common/header.php'; ?>
  <!-- style -->
  <link rel="stylesheet" href="/CSS/style.css" />
</head>
<body>
<section class="section bg-light" id="gallery">
  <div class="container text-center">
    <h2 class="mb-4 position-relative d-inline-block pb-2">
      Our Gallery
      <span class="underline"></span>
    </h2>
    <p class="lead text-center mb-5">
      A glimpse of our activities and community development initiatives.
    </p>

    <div class="row g-4">
      <div class="col-md-4 col-sm-6">
        <div class="gallery-item">
          <img src="Asset/education.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 1" style="height: 280px; object-fit: cover;">
          <div class="overlay">
            <div class="overlay-text">Education Program</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="gallery-item">
          <img src="Asset/health.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 2" style="height: 280px; object-fit: cover;">
          <div class="overlay">
            <div class="overlay-text">Health Camp</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="gallery-item">
          <img src="Asset/agriculture.png" class="img-fluid rounded shadow-sm" alt="Gallery 3" style="height: 280px; object-fit: cover;">
          <div class="overlay">
            <div class="overlay-text">Agriculture Training</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="gallery-item">
          <img src="Asset/livelihood.png" class="img-fluid rounded shadow-sm" alt="Gallery 4" style="height: 280px; object-fit: cover;">
          <div class="overlay">
            <div class="overlay-text">Livelihood Support</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="gallery-item">
          <img src="Asset/energy.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 5" style="height: 280px; object-fit: cover;">
          <div class="overlay">
            <div class="overlay-text">Renewable Energy</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="gallery-item">
          <img src="Asset/environment.jpg" class="img-fluid rounded shadow-sm" alt="Gallery 6" style="height: 280px; object-fit: cover;">
          <div class="overlay">
            <div class="overlay-text">Community Meeting</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'common/footer.php'; ?>
</body>
</html>


