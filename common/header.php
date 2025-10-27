<?php
// 🛡 Security Headers (must come before any HTML output)
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Referrer-Policy: no-referrer-when-downgrade");
header("Access-Control-Allow-Origin: *");
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/loksamarpan/index.php">
      <img src="/loksamarpan/Asset/loksam.png" alt="LokSamarpan Logo" />
      <span class="ms-2">LOKSAMARPAN TRUST</span>
    </a>

    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navmenu"
      aria-controls="navmenu"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="/loksamarpan/index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="/loksamarpan/about.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="/loksamarpan/project.php" class="nav-link">Projects</a></li>
        <li class="nav-item"><a href="/loksamarpan/contact.php" class="nav-link">Contact</a></li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="moreDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="moreDropdown">
            <li><a class="dropdown-item" href="/loksamarpan/ourteam.php">Our Team</a></li>
            <li><a class="dropdown-item" href="/loksamarpan/gallery.php">Gallery</a></li>
            <li><a class="dropdown-item" href="/loksamarpan/news.php">News & Events</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/loksamarpan/career.php">Careers</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="btn btn-donate ms-3">Donate Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar secondary-navbar">
  <div class="container"></div>
</nav>
