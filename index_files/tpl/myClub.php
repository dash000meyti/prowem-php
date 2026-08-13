<?php
// myClub/myClub.php - Haupt-Landingpage für MyClub
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prowem - MyClub</title>
  
  
  <!-- MyClub CSS Einbindung -->
  <link rel="stylesheet" href="index_files/tpl/myClub/myClub.css">
</head>
<body>

  <!-- ==========================================================================
       SECTION 1: HERO (Direkt in myClub.php)
       ========================================================================== -->
  <section class="club-hero-section">

    <!-- Background Image -->
    <div class="club-hero-bg">
      <img src="img/sections/myClub/Hero-BG.png" onerror="this.onerror=null; this.src='../img/sections/myClub/sec_1/hero-bg.png';" alt="MyClub Hero Background">
    </div>

    <div class="club-hero-container">
      
      <!-- Linker Content-Bereich -->
      <div class="club-hero-content">
        <span class="club-hero-sub font-inter">My club</span>

        <h1 class="font-bebas">
          WHERE YOUR CLUB<br>
          <span class="text-blue">COMES ALIVE.</span>
        </h1>

        <p class="club-hero-lead font-inter">
          Build your club's digital home and manage teams, players, news, results, and media—all from one central dashboard.
        </p>

        <div class="club-hero-actions">
          <a href="#" class="btn-primary-blue font-inter">
            Create Your Club <span class="btn-arrow">&rarr;</span>
          </a>
          <a href="#" class="btn-secondary-link font-inter">Talk to Our Team</a>
        </div>
      </div>

    </div>

  </section>

  <?php include __DIR__ . '/myClub/section2.php'; ?>
  <?php include __DIR__ . '/myClub/section3.php'; ?>
  <?php include __DIR__ . '/myClub/section4.php'; ?>
  <?php include __DIR__ . '/myClub/section5.php'; ?>
  
  <?php include __DIR__ . '/myClub/section7.php'; ?>
  <?php include __DIR__ . '/myClub/section8.php'; ?>
  
</body>
</html>