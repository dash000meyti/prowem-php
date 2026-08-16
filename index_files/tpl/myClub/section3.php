<?php
// MYCLUB SECTION 3: CONTENT LIBRARY
?>
<section class="club-library-section">

  <!-- Header -->
  <div class="club-header">
    <div class="club-bg-watermark font-bebas"><?= t('club.s3.sub') ?></div>

    <span class="club-sub-title font-inter"><?= t('club.s3.sub') ?></span>
    <h2 class="club-main-title font-bebas">
      <?= t('club.s3.title') ?>
    </h2>
    <p class="club-lead-text font-inter">
      <?= t('club.s3.lead') ?>
    </p>
  </div>

  <div class="library-layout-container">
    
    <!-- Linke Spalte (01 bis 03) -->
    <div class="library-column library-left">
      
      <!-- Card 01 -->
      <div class="library-card">
        <div class="library-icon-overlay">
          <img src="img/sections/myClub/sec_3/Club-Icon.png" alt="<?= t('club.s3.item1.title') ?>">
        </div>
        <div class="library-card-content">
          <h3 class="library-card-title font-bebas"><?php $item = explode(' ', t('club.s3.item1.title'), 2); ?><span class="text-blue"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="library-card-desc font-inter"><?= t('club.s3.item1.text') ?></p>
        </div>
      </div>

      <!-- Card 02 -->
      <div class="library-card">
        <div class="library-icon-overlay">
          <img src="img/sections/myClub/sec_3/Profile-Icon.png" alt="<?= t('club.s3.item2.title') ?>">
        </div>
        <div class="library-card-content">
          <h3 class="library-card-title font-bebas"><?php $item = explode(' ', t('club.s3.item2.title'), 2); ?><span class="text-blue"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="library-card-desc font-inter"><?= t('club.s3.item2.text') ?></p>
        </div>
      </div>

      <!-- Card 03 -->
      <div class="library-card">
        <div class="library-icon-overlay">
          <img src="img/sections/myClub/sec_3/Fixture.png" alt="<?= t('club.s3.item3.title') ?>">
        </div>
        <div class="library-card-content">
          <h3 class="library-card-title font-bebas"><?php $item = explode(' ', t('club.s3.item3.title'), 2); ?><span class="text-blue"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="library-card-desc font-inter"><?= t('club.s3.item3.text') ?></p>
        </div>
      </div>

    </div>

    <!-- Mittlerer Bereich: Laptop mit Blauem Glow -->
    <div class="library-center-visual">
      <div class="library-blue-glow-bg"></div>
      <img src="img/sections/myClub/sec_3/Laptop.png" class="library-laptop-img" alt="<?= t('club.s3.mockup_alt') ?>">
    </div>

    <!-- Rechte Spalte (04 bis 06) -->
    <div class="library-column library-right">
      
      <!-- Card 04 -->
      <div class="library-card">
        <div class="library-icon-overlay">
          <img src="img/sections/myClub/sec_3/Result-Icon.png" alt="<?= t('club.s3.item4.title') ?>">
        </div>
        <div class="library-card-content">
          <h3 class="library-card-title font-bebas"><?php $item = explode(' ', t('club.s3.item4.title'), 2); ?><span class="text-blue"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="library-card-desc font-inter"><?= t('club.s3.item4.text') ?></p>
        </div>
      </div>

      <!-- Card 05 -->
      <div class="library-card">
        <div class="library-icon-overlay">
          <img src="img/sections/myClub/sec_3/Squad.png" alt="<?= t('club.s3.item5.title') ?>">
        </div>
        <div class="library-card-content">
          <h3 class="library-card-title font-bebas"><?php $item = explode(' ', t('club.s3.item5.title'), 2); ?><span class="text-blue"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="library-card-desc font-inter"><?= t('club.s3.item5.text') ?></p>
        </div>
      </div>

      <!-- Card 06 -->
      <div class="library-card">
        <div class="library-icon-overlay">
          <img src="img/sections/myClub/sec_3/News-Icon.png" alt="<?= t('club.s3.item6.title') ?>">
        </div>
        <div class="library-card-content">
          <h3 class="library-card-title font-bebas"><?php $item = explode(' ', t('club.s3.item6.title'), 2); ?><span class="text-blue"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="library-card-desc font-inter"><?= t('club.s3.item6.text') ?></p>
        </div>
      </div>

    </div>

  </div>

</section>
