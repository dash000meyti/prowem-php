<?php
// ORGANISATION SECTION 1: HERO
?>
<link rel="stylesheet" href="index_files/tpl/organisation.css">

<section class="org-hero-section">
  
  <!-- Hintergrundbild Hero-BG.png -->
  <div class="org-hero-bg">
    <picture>
      <source media="(max-width: 768px)" srcset="img/sections/organisation/Mobile%20Hero%20BG%20O.png">
      <img src="img/sections/organisation/Hero-BG.png" alt="<?= t('org.hero.alt') ?>">
    </picture>
  </div>

  <div class="org-hero-container">
    
    <!-- Linker Content-Bereich -->
    <div class="org-hero-content">
      <span class="org-hero-sub font-inter"><?= t('org.hero.sub') ?></span>
      
      <h1 class="org-hero-title font-bebas">
        <?= t('org.hero.title_1') ?><br>
        <?= t('org.hero.title_2') ?><br>
        <span class="text-orange"><?= t('org.hero.title_3') ?></span>
      </h1>
      
      <p class="org-hero-lead font-inter">
        <?= t('org.hero.lead') ?>
      </p>

      <div class="org-hero-actions">
        <a href="?page=register" class="btn-primary-orange font-inter">
          <?= t('org.hero.cta') ?> <span class="btn-arrow">&rarr;</span>
        </a>
        <a href="#contact" class="btn-secondary-link font-inter"><?= t('org.hero.team') ?></a>
      </div>
    </div>

  </div>

</section>

<?php include __DIR__ . '/organisation/section2.php'; ?>
<?php include __DIR__ . '/organisation/section3.php'; ?>
<?php include __DIR__ . '/organisation/section4.php'; ?>
<?php include __DIR__ . '/organisation/section5.php'; ?>
<?php include __DIR__ . '/organisation/section6.php'; ?>
