<?php
// MYCLUB SECTION 7: VIDEO OVERVIEW SHOWCASE
?>
<section class="club-overview-section">

  <div class="club-overview-layout">

    <!-- Linker Bereich: Text & Button -->
    <div class="club-overview-content">
      <span class="club-overview-sub font-inter"><?= t('club.s8.sub') ?></span>

      <h2 class="club-overview-title font-bebas">
        <?= t('club.s8.title') ?>
      </h2>

      <p class="club-overview-lead font-inter">
        <?= t('club.s8.lead') ?>
      </p>

      <a href="#" class="btn-primary-blue club-overview-btn font-inter">
        <?= t('club.s8.cta') ?>
      </a>
    </div>

    <!-- Rechter Bereich: Video Frame nur mit BG und Play Button -->
    <div class="club-overview-visual">
      <div class="club-video-wrapper">
        <button type="button" class="club-play-btn" aria-label="<?= t('club.s8.play') ?>">
          <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5 12.2679C23.8333 13.0377 23.8333 14.9623 22.5 15.7321L3 26.9904C1.66667 27.7602 0 26.7979 0 25.2583L0 2.74167C0 1.20207 1.66667 0.239818 3 1.00962L22.5 12.2679Z" fill="#0091FF"/>
          </svg>
        </button>
      </div>
    </div>

  </div>

</section>
