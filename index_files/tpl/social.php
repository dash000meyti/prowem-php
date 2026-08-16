<?php
// VIDEO SECTION 1: HERO BROADCAST
?>
<link rel="stylesheet" href="index_files/tpl/social.css">

<section class="video-hero-section">
  
  <!-- Hintergrundbild Hero-BG.png -->
  <div class="video-hero-bg">
    <picture>
      <source media="(max-width: 768px)" srcset="img/sections/social/Mobile%20Hero%20BG%20S.png">
      <img src="img/sections/social/Hero-BG.png" alt="<?= t('social.hero.alt') ?>">
    </picture>
  </div>

  <div class="video-hero-container">
    
    <!-- Linker Content-Bereich -->
    <div class="video-hero-content">
      <span class="video-hero-sub font-inter"><?= t('social.hero.sub') ?></span>
      
      <h1 class="video-hero-title font-bebas">
        <?= t('social.hero.title_1') ?><br>
        <?= t('social.hero.title_2') ?><br>
        <span class="text-green"><?= t('social.hero.title_3') ?></span>
      </h1>
      
      <p class="video-hero-lead font-inter">
        <?= t('social.hero.lead') ?>
      </p>

      <div class="video-hero-buttons">
        <a href="#" class="btn-primary-green">
          <?= t('social.hero.cta') ?> <span class="btn-arrow">&rarr;</span>
        </a>
        <a href="#" class="btn-secondary-link font-inter"><?= t('social.hero.team') ?></a>
      </div>
    </div>

  </div>

</section>

<?php include __DIR__ . '/social/section2.php'; ?>
<?php include __DIR__ . '/social/section3.php'; ?>
<?php include __DIR__ . '/social/section4.php'; ?>
<?php include __DIR__ . '/social/section5.php'; ?>
<?php include __DIR__ . '/social/section6.php'; ?>
<?php include __DIR__ . '/social/section7.php'; ?>
<?php include __DIR__ . '/social/section8.php'; ?>
