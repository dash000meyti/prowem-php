<?php
// SECTION 7: PUBLIC EVENT PAGE
?>
<section class="event-public-section">

  <div class="public-layout-container">
    
    <!-- Linker Textbereich -->
    <div class="public-content">
      <span class="public-sub"><?= t('app.s7.sub') ?></span>
      <h2 class="public-title font-bebas">
        <?= t('app.s7.title') ?>
      </h2>
      <p class="public-lead">
        <?= t('app.s7.lead') ?>
      </p>

      <ul class="public-list font-bebas">
        <li><span class="dot"></span> <?= t('app.s7.item1') ?></li>
        <li><span class="dot"></span> <?= t('app.s7.item2') ?></li>
        <li><span class="dot"></span> <?= t('app.s7.item3') ?></li>
        <li><span class="dot"></span> <?= t('app.s7.item4') ?></li>
      </ul>
    </div>

    <!-- Rechter Medienbereich mit Orange Glow & Photo -->
    <div class="public-visual">
      <img src="img/sections/app/Orange_1.svg" class="public-orange-glow" alt="">
      <img src="img/sections/app/Photo.png" class="public-photo-img" alt="<?= t('app.s7.alt') ?>">
    </div>

  </div>

</section>
