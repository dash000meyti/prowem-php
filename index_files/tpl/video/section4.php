<?php
// VIDEO SECTION 4: LIVE MATCH ACTIONS
?>
<section class="video-actions-section">

  <!-- Header -->
  <div class="video-header">
    <div class="video-bg-watermark font-bebas">MATCH ACTIONS</div>

    <span class="video-sub-title font-inter">LIVE MATCH ACTIONS</span>
    <h2 class="video-main-title font-bebas">
      EVERY ACTION<br>THE MATCH NEEDS.
    </h2>
    <p class="video-lead-text font-inter">
      Record each key moment with a tap and instantly display the right broadcast graphic, while keeping the score, match data and player statistics up to date.
    </p>
  </div>

  <div class="video-actions-layout">

    <!-- Grid mit 8 Buttons -->
    <div class="video-actions-grid" id="videoActionsGrid">

      <!-- Button 1: GOAL -->
      <button type="button" class="action-btn active">
        <div class="action-btn-overlay">
          <img src="img/sections/video/sec_4/Card-BG-204-136.png" class="bg-normal" alt="">
          <img src="img/sections/video/sec_4/Selected-Card-BG-204-136.png" class="bg-active" alt="">
        </div>
        <img src="img/sections/video/sec_4/Goal-Icon.svg" class="action-icon-underlay" alt="">
        <div class="action-btn-content">
          <span class="action-btn-text font-bebas">GOAL!!!</span>
        </div>
      </button>

      <!-- Button 2: YELLOW CARD -->
      <button type="button" class="action-btn">
        <div class="action-btn-overlay">
          <img src="img/sections/video/sec_4/Card-BG-204-136.png" class="bg-normal" alt="">
          <img src="img/sections/video/sec_4/Selected-Card-BG-204-136.png" class="bg-active" alt="">
        </div>
        <img src="img/sections/video/sec_4/Yellow-Card-Icon.svg" class="action-icon-underlay" alt="">
        <div class="action-btn-content">
          <span class="action-btn-text font-bebas">YELLOW CARD</span>
        </div>
      </button>

      <!-- Button 3: RED CARD -->
      <button type="button" class="action-btn">
        <div class="action-btn-overlay">
          <img src="img/sections/video/sec_4/Card-BG-204-136.png" class="bg-normal" alt="">
          <img src="img/sections/video/sec_4/Selected-Card-BG-204-136.png" class="bg-active" alt="">
        </div>
        <img src="img/sections/video/sec_4/Red-Card-Icon.svg" class="action-icon-underlay" alt="">
        <div class="action-btn-content">
          <span class="action-btn-text font-bebas">RED CARD</span>
        </div>
      </button>

      <!-- Button 4: YELLOW RED CARD -->
      <button type="button" class="action-btn">
        <div class="action-btn-overlay">
          <img src="img/sections/video/sec_4/Card-BG-204-136.png" class="bg-normal" alt="">
          <img src="img/sections/video/sec_4/Selected-Card-BG-204-136.png" class="bg-active" alt="">
        </div>
        <img src="img/sections/video/sec_4/YR-Card-Icon.svg" class="action-icon-underlay" alt="">
        <div class="action-btn-content">
          <span class="action-btn-text font-bebas">YELLOW RED CARD</span>
        </div>
      </button>

      <!-- Button 5: SUBSTITUTION -->
      <button type="button" class="action-btn">
        <div class="action-btn-overlay">
          <img src="img/sections/video/sec_4/Card-BG-204-136.png" class="bg-normal" alt="">
          <img src="img/sections/video/sec_4/Selected-Card-BG-204-136.png" class="bg-active" alt="">
        </div>
        <img src="img/sections/video/sec_4/Sub-Icon.svg" class="action-icon-underlay" alt="">
        <div class="action-btn-content">
          <span class="action-btn-text font-bebas">SUBSTITUTION</span>
        </div>
      </button>

      <!-- Button 6: BLUE CARD -->
      <button type="button" class="action-btn">
        <div class="action-btn-overlay">
          <img src="img/sections/video/sec_4/Card-BG-204-136.png" class="bg-normal" alt="">
          <img src="img/sections/video/sec_4/Selected-Card-BG-204-136.png" class="bg-active" alt="">
        </div>
        <img src="img/sections/video/sec_4/Blue-Card-Icon.svg" class="action-icon-underlay" alt="">
        <div class="action-btn-content">
          <span class="action-btn-text font-bebas">BLUE CARD</span>
        </div>
      </button>

      <!-- Button 7: MATCH STATUS -->
      <button type="button" class="action-btn">
        <div class="action-btn-overlay">
          <img src="img/sections/video/sec_4/Card-BG-204-136.png" class="bg-normal" alt="">
          <img src="img/sections/video/sec_4/Selected-Card-BG-204-136.png" class="bg-active" alt="">
        </div>
        <img src="img/sections/video/sec_4/Status-Icon.svg" class="action-icon-underlay" alt="">
        <div class="action-btn-content">
          <span class="action-btn-text font-bebas">MATCH STATUS</span>
        </div>
      </button>

      <!-- Button 8: PENALTY (Mit gezielter Skalierungsklasse) -->
      <button type="button" class="action-btn">
        <div class="action-btn-overlay">
          <img src="img/sections/video/sec_4/Card-BG-204-136.png" class="bg-normal" alt="">
          <img src="img/sections/video/sec_4/Selected-Card-BG-204-136.png" class="bg-active" alt="">
        </div>
        <img src="img/sections/video/sec_4/Penalty-Icon.svg" class="action-icon-underlay penalty-fix" alt="">
        <div class="action-btn-content">
          <span class="action-btn-text font-bebas">PENALTY</span>
        </div>
      </button>

    </div>

    <!-- Rechter Bildschirm Visual -->
    <div class="video-actions-screen">
      <img src="img/sections/video/sec_4/screenshot.png" alt="Live Match Action Broadcast View">
    </div>

  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const grid = document.getElementById('videoActionsGrid');
      if (!grid) return;
      const buttons = grid.querySelectorAll('.action-btn');
      
      buttons.forEach(btn => {
        btn.addEventListener('click', function () {
          buttons.forEach(b => b.classList.remove('active'));
          this.classList.add('active');
        });
      });
    });
  </script>

</section>