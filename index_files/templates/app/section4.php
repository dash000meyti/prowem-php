<?php
// SECTION 4: QUICK EVENT CREATION
?>
<section class="event-quick-section">

  <!-- Header aus Section 2 & 3 -->
  <div class="features-header">
    <div class="bg-watermark font-bebas"><?= t('app.s4.watermark') ?></div>

    <span class="features-sub"><?= t('app.s4.sub') ?></span>
    <h2 class="features-title font-bebas">
      <?= t('app.s4.title') ?>
    </h2>
    <p class="features-lead">
      <?= t('app.s4.lead') ?>
    </p>
  </div>

  <div class="quick-layout-container">
    
    <!-- Linker Bereich: Event Details Form Graphic -->
    <div class="quick-left-card">
      <img src="img/sections/app/sec_4/Event-Details-394-469.png" alt="<?= t('app.s4.form_alt') ?>">
    </div>

    <!-- Mittlerer Bereich: ZWEI Linien (Links/Rechts) + Großer Kreis -->
    <div class="quick-step-container">
      <div class="quick-step-visual">
        <div class="quick-step-line-wrapper line-left">
          <img src="img/sections/app/sec_4/Line.png" alt="">
        </div>
        <img src="img/sections/app/sec_4/Check-Mark.png" class="quick-step-check" alt="<?= t('app.s4.ready_alt') ?>">
        <div class="quick-step-line-wrapper line-right">
          <img src="img/sections/app/sec_4/Line.png" alt="">
        </div>
      </div>
      <div class="quick-step-text font-bebas"><?= t('app.s4.ready_title') ?></div>
      <div class="quick-check-node" aria-hidden="true">
        <svg viewBox="0 0 48 48" fill="none">
          <circle cx="24" cy="24" r="20" stroke="#FF6249" stroke-width="3"/>
          <path d="M14.5 24.5l7 7.5 12.5-14" stroke="#FF6249" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>

    <!-- Rechter Bereich: 3 Cards Group -->
    <div class="quick-right-column">
      
      <div class="quick-right-header font-bebas"><?= t('app.s4.ready_sub') ?></div>
      
      <div class="quick-cards-row">
        
        <!-- Card 1 -->
        <div class="quick-card">
          <div class="quick-icon-overlay">
            <img src="img/sections/app/sec_4/Setting-Icon.png" alt="<?= t('app.s4.settings.title') ?>">
          </div>
          <div class="quick-card-content">
            <h3 class="quick-card-title font-bebas"><?= t('app.s4.settings.title') ?></h3>
            <p class="quick-card-desc"><?= t('app.s4.settings.text') ?></p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="quick-card">
          <div class="quick-icon-overlay">
            <img src="img/sections/app/sec_4/Teams-Icon.png" alt="<?= t('app.s4.teams.title') ?>">
          </div>
          <div class="quick-card-content">
            <h3 class="quick-card-title font-bebas"><?= t('app.s4.teams.title') ?></h3>
            <p class="quick-card-desc"><?= t('app.s4.teams.text') ?></p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="quick-card">
          <div class="quick-icon-overlay">
            <img src="img/sections/app/sec_4/Resuly-Icon.png" alt="<?= t('app.s4.rules.title') ?>">
          </div>
          <div class="quick-card-content">
            <h3 class="quick-card-title font-bebas"><?= t('app.s4.rules.title') ?></h3>
            <p class="quick-card-desc"><?= t('app.s4.rules.text') ?></p>
          </div>
        </div>

      </div>
    </div>

  </div>

</section>
