<?php
// SOCIAL MEDIA SECTION 7: EVENT MANAGER SYNC
?>
<section class="social-sync-section">

  <!-- Hintergrund mit Lila Floor-Glow -->
  <div class="social-sync-bg">
    <img src="img/sections/social/sec_7/Section-Bg.png" alt="<?= t('social.s7.alt') ?>">
  </div>

  <!-- Header -->
  <div class="social-header">
    <div class="social-bg-watermark font-bebas"><?= t('social.s7.sub') ?></div>

    <span class="social-sub-title font-inter"><?= t('social.s7.sub') ?></span>
    <h2 class="social-main-title font-bebas">
      <?= t('social.s7.title') ?>
    </h2>
    <p class="social-lead-text font-inter">
      <?= t('social.s7.lead') ?>
    </p>
  </div>

  <!-- Visual Sync Stage -->
  <div class="social-sync-container">
    <div class="social-sync-stage">

      <!-- 1. Laptop Mockup Left -->
      <div class="sync-element sync-laptop">
        <img src="img/sections/social/sec_7/Laptop.png" alt="<?= t('social.s7.laptop_alt') ?>">
      </div>

      <!-- 2. Connection Line Left -->
      <div class="sync-element sync-line-left">
        <img src="img/sections/social/sec_7/Line-Bg.png" alt="">
      </div>

      <!-- 3. Sync Control Card Center -->
      <div class="sync-element sync-card">
        <img src="img/sections/social/sec_7/Card.png" alt="<?= t('social.s7.sync_alt') ?>">
      </div>

      <!-- 4. Split Connection Lines Right -->
      <div class="sync-element sync-lines-right">
        <img src="img/sections/social/sec_7/Connect-Lines.png" class="sync-lines-desktop" alt="">
        <svg class="sync-lines-mobile" viewBox="0 0 360 140" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <defs>
            <filter id="syncMobileGlow" x="-40%" y="-20%" width="180%" height="150%">
              <feGaussianBlur stdDeviation="5" result="blur"/>
              <feMerge>
                <feMergeNode in="blur"/>
                <feMergeNode in="blur"/>
                <feMergeNode in="SourceGraphic"/>
              </feMerge>
            </filter>
          </defs>
          <g filter="url(#syncMobileGlow)" stroke="#b56bff" stroke-width="3" stroke-linecap="round">
            <path d="M180 0 C180 48 52 82 52 138"/>
            <path d="M180 0 V138"/>
            <path d="M180 0 C180 48 308 82 308 138"/>
          </g>
          <g stroke="#ffffff" stroke-width="1.6" stroke-linecap="round">
            <path d="M180 0 C180 48 52 82 52 138"/>
            <path d="M180 0 V138"/>
            <path d="M180 0 C180 48 308 82 308 138"/>
          </g>
        </svg>
      </div>

      <!-- 5. Posts Mockup Stack Right -->
      <div class="sync-element sync-posts">
        <img src="img/sections/social/sec_7/Posts.png" alt="<?= t('social.s7.posts_alt') ?>">
      </div>

    </div>
  </div>

</section>
