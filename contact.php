<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LokSamarpan Trust</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <?php include 'common/header.php'?>
  <!-- style -->
  <link rel="stylesheet" href="/CSS/style.css" />
</head>
<body>
<section class="section py-5" id="contact" style="background: linear-gradient(135deg, #e8f5e9, #c8e6c9);">
  <div class="container">
    <h2 class="fw-bold mb-5 text-center text-success">Contact <span class="text-dark">Us</span></h2>

    <div class="row">
      <div class="col-lg-5 mb-4">
        <div class="card border-0 shadow-lg rounded-4 p-4 h-100">
          <div class="mb-4 text-center">
            <i class="fa fa-map-marker-alt fa-3x text-success mb-2"></i>
            <h5 class="fw-semibold">Our Location</h5>
            <p class="text-center mb-0">Gumla, Jharkhand, India</p>
          </div>

          <div class="mb-4 text-center">
            <i class="fa fa-envelope fa-3x text-success mb-2"></i>
            <h5 class="fw-semibold">Email Us</h5>
            <p class="text-center mb-0">loksamarpan.ngo@gmail.com</p>
          </div>

          <div class="mb-4 text-center">
            <i class="fa fa-phone fa-3x text-success mb-2"></i>
            <h5 class="fw-semibold">Call Us</h5>
            <p class="text-center mb-0">+91-1234567890</p>
          </div>

          <div class="text-center mt-3">
            <a href="#donate" class="btn btn-success btn-lg px-5 rounded-pill shadow-sm">
              <i class="fa fa-hand-holding-heart me-2"></i>Join Us
            </a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-7 mb-4">
        <div class="card border-0 shadow-lg rounded-4 p-4 h-100">
          <h5 class="fw-semibold mb-4 text-success">Send us a message</h5>
          <form action="#" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject of your message" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-success btn-lg rounded-pill">
                <i class="fa fa-paper-plane me-2"></i>Send Message
              </button>
            </div>
          </form>
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


