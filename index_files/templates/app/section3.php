<?php
// SECTION 3: CONTROL PANEL
?>
<section class="event-panel-section">

  <div class="features-header">
    <div class="bg-watermark font-bebas"><?= t('app.s3.watermark') ?></div>

    <span class="features-sub"><?= t('app.s3.sub') ?></span>
    <h2 class="features-title font-bebas">
      <?= t('app.s3.title') ?>
    </h2>
    <p class="features-lead">
      <?= t('app.s3.lead') ?>
    </p>
  </div>

  <div class="panel-layout-container">
    
    <!-- Linke Spalte (01 bis 04) -->
    <div class="panel-column panel-left">
      
      <!-- Card 01 -->
      <div class="panel-card">
        <div class="panel-icon-overlay">
          <img src="img/sections/app/Team-Icon.png" alt="<?= t('app.s3.item1.title') ?>">
        </div>
        <div class="panel-card-content">
          <h3 class="panel-card-title font-bebas"><?php $item = explode(' ', t('app.s3.item1.title'), 2); ?><span class="text-orange"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="panel-card-desc"><?= t('app.s3.item1.text') ?></p>
        </div>
      </div>

      <!-- Card 02 -->
      <div class="panel-card">
        <div class="panel-icon-overlay">
          <img src="img/sections/app/Venues-Icon.png" alt="<?= t('app.s3.item2.title') ?>">
        </div>
        <div class="panel-card-content">
          <h3 class="panel-card-title font-bebas"><?php $item = explode(' ', t('app.s3.item2.title'), 2); ?><span class="text-orange"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="panel-card-desc"><?= t('app.s3.item2.text') ?></p>
        </div>
      </div>

      <!-- Card 03 -->
      <div class="panel-card">
        <div class="panel-icon-overlay">
          <img src="img/sections/app/Structure-Icon.png" alt="<?= t('app.s3.item3.title') ?>">
        </div>
        <div class="panel-card-content">
          <h3 class="panel-card-title font-bebas"><?php $item = explode(' ', t('app.s3.item3.title'), 2); ?><span class="text-orange"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="panel-card-desc"><?= t('app.s3.item3.text') ?></p>
        </div>
      </div>

      <!-- Card 04 -->
      <div class="panel-card">
        <div class="panel-icon-overlay">
          <img src="img/sections/app/Draw-Icon.png" alt="<?= t('app.s3.item4.title') ?>">
        </div>
        <div class="panel-card-content">
          <h3 class="panel-card-title font-bebas"><?php $item = explode(' ', t('app.s3.item4.title'), 2); ?><span class="text-orange"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="panel-card-desc"><?= t('app.s3.item4.text') ?></p>
        </div>
      </div>

    </div>

    <!-- Mittlerer Bereich (Exakt aufeinander zentriert) -->
    <div class="panel-center-visual">
      <img src="img/sections/app/Orange_1.svg" class="panel-orange-glow" alt="">
      <img src="img/sections/app/Laptop.png" class="panel-laptop-img" alt="<?= t('app.s3.mockup_alt') ?>">
    </div>

    <!-- Rechte Spalte (05 bis 08) -->
    <div class="panel-column panel-right">
      
      <!-- Card 05 -->
      <div class="panel-card">
        <div class="panel-icon-overlay">
          <img src="img/sections/app/Fixture-Icon.png" alt="<?= t('app.s3.item5.title') ?>">
        </div>
        <div class="panel-card-content">
          <h3 class="panel-card-title font-bebas"><?php $item = explode(' ', t('app.s3.item5.title'), 2); ?><span class="text-orange"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="panel-card-desc"><?= t('app.s3.item5.text') ?></p>
        </div>
      </div>

      <!-- Card 06 -->
      <div class="panel-card">
        <div class="panel-icon-overlay">
          <img src="img/sections/app/Refferee-Icon.png" alt="<?= t('app.s3.item6.title') ?>">
        </div>
        <div class="panel-card-content">
          <h3 class="panel-card-title font-bebas"><?php $item = explode(' ', t('app.s3.item6.title'), 2); ?><span class="text-orange"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="panel-card-desc"><?= t('app.s3.item6.text') ?></p>
        </div>
      </div>

      <!-- Card 07 -->
      <div class="panel-card">
        <div class="panel-icon-overlay">
          <img src="img/sections/app/Page-Icon.png" alt="<?= t('app.s3.item7.title') ?>">
        </div>
        <div class="panel-card-content">
          <h3 class="panel-card-title font-bebas"><?php $item = explode(' ', t('app.s3.item7.title'), 2); ?><span class="text-orange"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="panel-card-desc"><?= t('app.s3.item7.text') ?></p>
        </div>
      </div>

      <!-- Card 08 -->
      <div class="panel-card">
        <div class="panel-icon-overlay">
          <img src="img/sections/app/Display-Icon.png" alt="<?= t('app.s3.item8.title') ?>">
        </div>
        <div class="panel-card-content">
          <h3 class="panel-card-title font-bebas"><?php $item = explode(' ', t('app.s3.item8.title'), 2); ?><span class="text-orange"><?= $item[0] ?></span> <?= $item[1] ?? '' ?></h3>
          <p class="panel-card-desc"><?= t('app.s3.item8.text') ?></p>
        </div>
      </div>

    </div>

  </div>

</section>
