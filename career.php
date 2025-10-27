<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LokSamarpan Trust - Careers</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <!-- style -->
  <link rel="stylesheet" href="/CSS/style.css" />
</head>
<body>

  <!-- Navbar -->
  <?php include 'common/header.php'; ?>

  <section class="py-5" id="career-apply">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <form action="#" method="post" enctype="multipart/form-data" class="p-5 rounded shadow-lg bg-white border-0 career-form">
            <h3 class="mb-4 text-center fw-bold text-success">Apply for a Position</h3>
            <p class="text-center text-muted mb-4">Join <strong>LokSamarpan Trust</strong> and make a difference in society.</p>

            <div class="mb-3">
              <label for="fullname" class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control form-control-lg" id="fullname" name="fullname" placeholder="Enter your full name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email Address</label>
              <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label fw-semibold">Phone Number</label>
              <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>

            <div class="mb-3">
              <label for="position" class="form-label fw-semibold">Position Applying For</label>
              <select class="form-select form-select-lg" id="position" name="position" required>
                <option value="">Select a position</option>
                <option value="Teacher">Teacher / Trainer</option>
                <option value="Health Worker">Health Worker</option>
                <option value="Field Officer">Field Officer</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Administrative Staff">Administrative Staff</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="resume" class="form-label fw-semibold">Upload Resume (PDF/DOC)</label>
              <input type="file" class="form-control form-control-lg" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label fw-semibold">Cover Letter / Message</label>
              <textarea class="form-control form-control-lg" id="message" name="message" rows="4" placeholder="Write briefly why you want to join us..." required></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100 mt-3">Submit Application</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'common/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
