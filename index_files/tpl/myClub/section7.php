<?php
// MYCLUB SECTION 6: RESPONSIVE SHOWCASE
?>
<section class="club-responsive-section">

  <!-- Hintergrundbild Section-BG.png -->
  <div class="club-responsive-bg">
    <img src="img/sections/myClub/sec_7/Section-BG.png" alt="<?= t('club.s7.alt') ?>">
  </div>

  <div class="club-responsive-container">
    
    <!-- Header -->
    <div class="club-header">
      <div class="club-bg-watermark font-bebas"><?= t('club.s7.watermark') ?></div>

      <span class="club-sub-title font-inter"><?= t('club.s7.sub') ?></span>
      <h2 class="club-main-title font-bebas">
        <?= t('club.s7.title') ?>
      </h2>
      <p class="club-lead-text font-inter">
        <?= t('club.s7.lead') ?>
      </p>
    </div>

    <!-- Center Mockup Visual -->
    <div class="club-responsive-visual">
      <picture>
        <source media="(max-width: 768px)" srcset="img/sections/myClub/sec_7/Section-Photo-Mobile.png">
        <img src="img/sections/myClub/sec_7/Section-Photo.png" class="club-responsive-img" alt="<?= t('club.s7.mockup_alt') ?>">
      </picture>
    </div>

  </div>

</section>
