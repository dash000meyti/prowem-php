<?php
// VIDEO SECTION 1: HERO BROADCAST
?>
<link rel="stylesheet" href="index_files/tpl/video.css">

<section class="video-hero-section">
  
  <!-- Hintergrundbild Hero-BG.png -->
  <div class="video-hero-bg">
    <picture>
      <source media="(max-width: 768px)" srcset="img/sections/video/Mobile%20Hero%20BG%20L.png">
      <img src="img/sections/video/Hero-BG.png" alt="<?= t('video.hero.alt') ?>">
    </picture>
  </div>

  <div class="video-hero-container">
    
    <!-- Linker Content-Bereich -->
    <div class="video-hero-content">
      <span class="video-hero-sub font-inter"><?= t('video.hero.sub') ?></span>
      
      <h1 class="video-hero-title font-bebas">
        <?= t('video.hero.title_1') ?><br>
        <?= t('video.hero.title_2') ?><br>
        <span class="text-green"><?= t('video.hero.title_3') ?></span>
      </h1>
      
      <p class="video-hero-lead font-inter">
        <?= t('video.hero.lead') ?>
      </p>

      <div class="video-hero-buttons">
        <a href="#" class="btn-primary-green">
          <?= t('video.hero.cta') ?> <span class="btn-arrow">&rarr;</span>
        </a>
        <a href="#" class="btn-secondary-link font-inter"><?= t('video.hero.team') ?></a>
      </div>
    </div>

  </div>

</section>

<?php include __DIR__ . '/video/section2.php'; ?>
<?php include __DIR__ . '/video/section3.php'; ?>
<?php include __DIR__ . '/video/section4.php'; ?>
<?php include __DIR__ . '/video/section5.php'; ?>
<?php include __DIR__ . '/video/section6.php'; ?>
<?php include __DIR__ . '/video/section7.php'; ?>
