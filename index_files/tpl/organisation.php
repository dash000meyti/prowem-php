<?php
// ORGANISATION SECTION 1: HERO
?>
<link rel="stylesheet" href="index_files/tpl/organisation.css">

<section class="org-hero-section">
  
  <!-- Hintergrundbild Hero-BG.png -->
  <div class="org-hero-bg">
    <picture>
      <source media="(max-width: 768px)" srcset="img/sections/organisation/Mobile%20Hero%20BG%20O.png">
      <img src="img/sections/organisation/Hero-BG.png" alt="Let Us Organize Your Event Background">
    </picture>
  </div>

  <div class="org-hero-container">
    
    <!-- Linker Content-Bereich -->
    <div class="org-hero-content">
      <span class="org-hero-sub font-inter">WE ORGANIZE</span>
      
      <h1 class="org-hero-title font-bebas">
        LET US<br>
        ORGANIZE<br>
        <span class="text-orange">YOUR EVENT</span>
      </h1>
      
      <p class="org-hero-lead font-inter">
        From complete tournament structures and match execution to digital overlays and live showcase — we handle your event with ultimate precision.
      </p>

      <div class="org-hero-actions">
        <a href="?page=register" class="btn-primary-orange font-inter">
          Get Started Now <span class="btn-arrow">&rarr;</span>
        </a>
        <a href="#contact" class="btn-secondary-link font-inter">Talk to Our Team</a>
      </div>
    </div>

  </div>

</section>

<?php include __DIR__ . '/organisation/section2.php'; ?>
<?php include __DIR__ . '/organisation/section3.php'; ?>
<?php include __DIR__ . '/organisation/section4.php'; ?>
<?php include __DIR__ . '/organisation/section5.php'; ?>
<?php include __DIR__ . '/organisation/section6.php'; ?>