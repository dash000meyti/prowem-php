<?php
// ORGANISATION SECTION 6: VIDEO SHOWCASE
?>
<section class="org-video-section">

  <div class="org-video-layout">

    <!-- Linker Bereich: Text & CTA Button -->
    <div class="org-video-content">
      <span class="org-video-sub font-inter"><?= t('org.s6.sub') ?></span>

      <h2 class="org-video-title font-bebas">
        <?= t('org.s6.title') ?>
      </h2>

      <p class="org-video-lead font-inter">
        <?= t('org.s6.lead') ?>
      </p>

      <a href="?page=register" class="btn-primary-orange org-video-btn font-inter">
        <?= t('org.s6.cta') ?>
      </a>
    </div>

    <!-- Rechter Bereich: Video Frame mit CSS-Hintergrund & Orange Play Button -->
    <div class="org-video-visual">
      <div class="org-video-wrapper">
        <button type="button" class="org-play-btn" aria-label="<?= t('org.s6.play') ?>">
          <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5 12.2679C23.8333 13.0377 23.8333 14.9623 22.5 15.7321L3 26.9904C1.66667 27.7602 0 26.7979 0 25.2583L0 2.74167C0 1.20207 1.66667 0.239818 3 1.00962L22.5 12.2679Z" fill="#FF6249"/>
          </svg>
        </button>
      </div>
    </div>

  </div>

</section>
