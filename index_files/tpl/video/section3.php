<?php
// VIDEO SECTION 3: MATCH CONTROL HUB
?>
<section class="video-panel-section">

  <!-- Header -->
  <div class="video-header">
    <div class="video-bg-watermark font-bebas"><?= t('video.s3.sub') ?></div>

    <span class="video-sub-title font-inter"><?= t('video.s3.sub') ?></span>
    <h2 class="video-main-title font-bebas">
      <?= t('video.s3.title') ?>
    </h2>
    <p class="video-lead-text font-inter">
      <?= t('video.s3.lead') ?>
    </p>
  </div>

  <div class="video-panel-layout">
    
    <!-- Linke Spalte (Card 01 - 03) -->
    <div class="video-panel-column">
      
      <!-- Card 01 -->
      <div class="video-panel-card">
        <div class="video-panel-icon-overlay">
          <img src="img/sections/video/sec_3/Icon-01.png" alt="<?= t('video.s3.item1.title') ?>">
        </div>
        <div class="video-panel-card-content">
          <h3 class="video-panel-card-title font-bebas">
            <?php $item = explode(' ', t('video.s3.item1.title'), 2); ?><span class="text-green"><?= $item[0] ?></span> <?= $item[1] ?? '' ?>
          </h3>
          <p class="video-panel-card-desc font-inter"><?= t('video.s3.item1.text') ?></p>
        </div>
      </div>

      <!-- Card 02 -->
      <div class="video-panel-card">
        <div class="video-panel-icon-overlay">
          <img src="img/sections/video/sec_3/Icon-02.png" alt="<?= t('video.s3.item2.title') ?>">
        </div>
        <div class="video-panel-card-content">
          <h3 class="video-panel-card-title font-bebas">
            <?php $item = explode(' ', t('video.s3.item2.title'), 2); ?><span class="text-green"><?= $item[0] ?></span> <?= $item[1] ?? '' ?>
          </h3>
          <p class="video-panel-card-desc font-inter"><?= t('video.s3.item2.text') ?></p>
        </div>
      </div>

      <!-- Card 03 -->
      <div class="video-panel-card">
        <div class="video-panel-icon-overlay">
          <img src="img/sections/video/sec_3/Icon-03.png" alt="<?= t('video.s3.item3.title') ?>">
        </div>
        <div class="video-panel-card-content">
          <h3 class="video-panel-card-title font-bebas">
            <?php $item = explode(' ', t('video.s3.item3.title'), 2); ?><span class="text-green"><?= $item[0] ?></span> <?= $item[1] ?? '' ?>
          </h3>
          <p class="video-panel-card-desc font-inter"><?= t('video.s3.item3.text') ?></p>
        </div>
      </div>

    </div>

    <!-- Mittlerer Bereich: Tablet Visual -->
    <div class="video-panel-center">
      <img src="img/sections/video/sec_3/Tablet-Panel.png" class="video-tablet-img" alt="<?= t('video.s3.tablet_alt') ?>">
    </div>

    <!-- Rechte Spalte (Card 04 - 06) -->
    <div class="video-panel-column">
      
      <!-- Card 04 -->
      <div class="video-panel-card">
        <div class="video-panel-icon-overlay">
          <img src="img/sections/video/sec_3/Icon-04.png" alt="<?= t('video.s3.item4.title') ?>">
        </div>
        <div class="video-panel-card-content">
          <h3 class="video-panel-card-title font-bebas">
            <?php $item = explode(' ', t('video.s3.item4.title'), 2); ?><span class="text-green"><?= $item[0] ?></span> <?= $item[1] ?? '' ?>
          </h3>
          <p class="video-panel-card-desc font-inter"><?= t('video.s3.item4.text') ?></p>
        </div>
      </div>

      <!-- Card 05 -->
      <div class="video-panel-card">
        <div class="video-panel-icon-overlay">
          <img src="img/sections/video/sec_3/Icon-05.png" alt="<?= t('video.s3.item5.title') ?>">
        </div>
        <div class="video-panel-card-content">
          <h3 class="video-panel-card-title font-bebas">
            <?php $item = explode(' ', t('video.s3.item5.title'), 2); ?><span class="text-green"><?= $item[0] ?></span> <?= $item[1] ?? '' ?>
          </h3>
          <p class="video-panel-card-desc font-inter"><?= t('video.s3.item5.text') ?></p>
        </div>
      </div>

      <!-- Card 06 -->
      <div class="video-panel-card">
        <div class="video-panel-icon-overlay">
          <img src="img/sections/video/sec_3/Icon-06.png" alt="<?= t('video.s3.item6.title') ?>">
        </div>
        <div class="video-panel-card-content">
          <h3 class="video-panel-card-title font-bebas">
            <?php $item = explode(' ', t('video.s3.item6.title'), 2); ?><span class="text-green"><?= $item[0] ?></span> <?= $item[1] ?? '' ?>
          </h3>
          <p class="video-panel-card-desc font-inter"><?= t('video.s3.item6.text') ?></p>
        </div>
      </div>

    </div>

  </div>

</section>
