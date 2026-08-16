<?php
// SOCIAL MEDIA SECTION 8: VIDEO OVERVIEW SHOWCASE
?>
<section class="social-overview-section">

  <div class="social-overview-layout">

    <!-- Linker Bereich: Text & CTA Button -->
    <div class="social-overview-content">
      <span class="social-overview-sub font-inter"><?= t('social.s8.sub') ?></span>

      <h2 class="social-overview-title font-bebas">
        <?= t('social.s8.title') ?>
      </h2>

      <p class="social-lead-text font-inter">
        <?= t('social.s8.lead') ?>
      </p>

      <a href="?page=register" class="btn-primary-purple social-overview-btn font-inter">
        <?= t('social.s8.cta') ?>
      </a>
    </div>

    <!-- Rechter Bereich: Video Frame mit Background per CSS & Purpur Play Button -->
    <div class="social-overview-visual">
      <div class="social-video-wrapper">
        <button type="button" class="social-play-btn" aria-label="<?= t('social.s8.play') ?>">
          <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5 12.2679C23.8333 13.0377 23.8333 14.9623 22.5 15.7321L3 26.9904C1.66667 27.7602 0 26.7979 0 25.2583L0 2.74167C0 1.20207 1.66667 0.239818 3 1.00962L22.5 12.2679Z" fill="#9F46FF"/>
          </svg>
        </button>
      </div>
    </div>

  </div>

</section>
