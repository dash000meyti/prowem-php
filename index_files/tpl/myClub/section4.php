<?php
// MYCLUB SECTION 4: CLUB WEBSITE OPTIONS
?>
<section class="club-options-section">

  <div class="club-options-layout">

    <!-- Linker Bereich: Text & 2 Cards -->
    <div class="club-options-content">
      <span class="club-options-sub font-inter"><?= t('club.s4.sub') ?></span>

      <h2 class="club-options-title font-bebas">
        <?= t('club.s4.title') ?>
      </h2>

      <p class="club-options-lead font-inter">
        <?= t('club.s4.lead') ?>
      </p>

      <div class="club-options-cards">
        
        <!-- Card 01 (573x144) -->
        <div class="club-option-card">
          <div class="club-option-card-bg">
            <img src="img/sections/myClub/sec_4/Card-Bg.png" alt="">
          </div>
          <div class="club-option-icon-overlay">
            <img src="img/sections/myClub/sec_4/Icon-01.png" alt="<?= t('club.s4.opt1.title') ?>">
          </div>
          <div class="club-option-card-content">
            <h3 class="club-option-card-title font-bebas"><?php $opt = explode(' ', t('club.s4.opt1.title'), 2); ?><span class="text-blue"><?= $opt[0] ?></span> <?= $opt[1] ?? '' ?></h3>
            <p class="club-option-card-desc font-inter">
              <?= t('club.s4.opt1.text') ?>
            </p>
          </div>
        </div>

        <!-- Card 02 (573x144) -->
        <div class="club-option-card">
          <div class="club-option-card-bg">
            <img src="img/sections/myClub/sec_4/Card-Bg.png" alt="">
          </div>
          <div class="club-option-icon-overlay">
            <img src="img/sections/myClub/sec_4/Icon-02.png" alt="<?= t('club.s4.opt2.title') ?>">
          </div>
          <div class="club-option-card-content">
            <h3 class="club-option-card-title font-bebas"><?php $opt = explode(' ', t('club.s4.opt2.title'), 2); ?><span class="text-blue"><?= $opt[0] ?></span> <?= $opt[1] ?? '' ?></h3>
            <p class="club-option-card-desc font-inter">
              <?= t('club.s4.opt2.text') ?>
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- Rechter Bereich: Monitor Visual mit blauem SVG Glow Circle dahinter -->
    <div class="club-options-visual">
      <div class="club-options-blue-glow"></div>
      <img src="img/sections/myClub/sec_4/Monitor.png" class="club-monitor-img" alt="<?= t('club.s4.alt') ?>">
    </div>

  </div>

</section>
