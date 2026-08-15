<?php
// SOCIAL MEDIA SECTION 7: EVENT MANAGER SYNC
?>
<section class="social-sync-section">

  <!-- Hintergrund mit Lila Floor-Glow -->
  <div class="social-sync-bg">
    <img src="img/sections/social/sec_7/Section-Bg.png" alt="Section Background">
  </div>

  <!-- Header -->
  <div class="social-header">
    <div class="social-bg-watermark font-bebas">EVENT MANAGER SYNC</div>

    <span class="social-sub-title font-inter">EVENT MANAGER SYNC</span>
    <h2 class="social-main-title font-bebas">
      CREATE CONTENT WITHOUT<br>RE-ENTERING DATA
    </h2>
    <p class="social-lead-text font-inter">
      Send your live match to the platforms and screens that matter most, from your event website and social channels to custom streaming servers and venue displays.
    </p>
  </div>

  <!-- Visual Sync Stage -->
  <div class="social-sync-container">
    <div class="social-sync-stage">

      <!-- 1. Laptop Mockup Left -->
      <div class="sync-element sync-laptop">
        <img src="img/sections/social/sec_7/Laptop.png" alt="Event Manager Laptop View">
      </div>

      <!-- 2. Connection Line Left -->
      <div class="sync-element sync-line-left">
        <img src="img/sections/social/sec_7/Line-Bg.png" alt="">
      </div>

      <!-- 3. Sync Control Card Center -->
      <div class="sync-element sync-card">
        <img src="img/sections/social/sec_7/Card.png" alt="Sync Controller">
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
        <img src="img/sections/social/sec_7/Posts.png" alt="Generated Social Posts">
      </div>

    </div>
  </div>

</section>