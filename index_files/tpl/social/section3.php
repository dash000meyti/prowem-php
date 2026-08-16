<?php
// SOCIAL MEDIA SECTION 3: CONTENT LIBRARY (ASSETS & MODES)
?>
<section class="social-library-section">

  <!-- Header -->
  <div class="social-header">
    <div class="social-bg-watermark font-bebas"><?= t('social.s3.sub') ?></div>

    <span class="social-sub-title font-inter"><?= t('social.s3.sub') ?></span>
    <h2 class="social-main-title font-bebas">
      <?= t('social.s3.title') ?>
    </h2>
    <p class="social-lead-text font-inter">
      <?= t('social.s3.lead') ?>
    </p>
  </div>

  <div class="social-library-layout">

    <div class="social-library-mobile-tabs" role="tablist">
      <button type="button" class="font-bebas" data-cat="0"><?= t('social.s3.before') ?></button>
      <button type="button" class="font-bebas is-active" data-cat="1"><?= t('social.s3.live') ?></button>
      <button type="button" class="font-bebas" data-cat="2"><?= t('social.s3.after') ?></button>
    </div>

    <div class="social-library-mobile-modes">
      <button type="button" class="is-active" data-mode="a"><?= t('social.s3.with_assets') ?></button>
      <button type="button" data-mode="b"><?= t('social.s3.data_only') ?></button>
    </div>

    <!-- Linker Bereich: 3 Spalten mit Bebas-Labels und 12 Action Cards -->
    <div class="social-library-categories" id="socialLibraryCategories">

      <!-- SPALTE 1: BEFORE THE MATCH -->
      <div class="social-cat-column" data-cat="0">
        <div class="cat-label-wrap">
          <span class="cat-label font-bebas active"><?= t('social.s3.before') ?></span>
        </div>
        
        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Next-Match-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.next_match') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Match-Day-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.matchday') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Squad-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.squad') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Line-Up-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.lineup') ?></span>
        </button>
      </div>

      <!-- SPALTE 2: LIVE MOMENT -->
      <div class="social-cat-column is-active" data-cat="1">
        <div class="cat-label-wrap">
          <span class="cat-label font-bebas active"><?= t('social.s3.live') ?></span>
        </div>

        <button type="button" class="social-action-btn active">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Goal-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.goal') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Half-Time-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.half') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Full-Time-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.full') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Man-Of-Match-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.motm') ?></span>
        </button>
      </div>

      <!-- SPALTE 3: AFTER THE MATCH -->
      <div class="social-cat-column" data-cat="2">
        <div class="cat-label-wrap">
          <span class="cat-label font-bebas active"><?= t('social.s3.after') ?></span>
        </div>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Result-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.result') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Table-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.table') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/KO-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.knockout') ?></span>
        </button>

        <button type="button" class="social-action-btn">
          <div class="action-btn-overlay">
            <img src="img/sections/social/sec_3/Card-BG-204-136.png" class="bg-normal" alt="">
            <img src="img/sections/social/sec_3/Selected-Card-BG-204-136.png" class="bg-active" alt="">
          </div>
          <img src="img/sections/social/sec_3/Top-Scorer-Icon.svg" class="action-icon-underlay" alt="">
          <span class="action-btn-text font-bebas"><?= t('social.s3.scorers') ?></span>
        </button>
      </div>

    </div>

    <!-- Rechter Bereich: Mode Previews (Mode A & Mode B) -->
    <div class="social-modes-preview">

      <!-- MODE A -->
      <div class="social-mode-item is-active" data-mode="a">
        <div class="mode-header">
          <span class="mode-title font-bebas"><?= t('social.s3.mode_a') ?></span>
          <span class="mode-sub font-inter"><?= t('social.s3.mode_a_sub') ?></span>
        </div>
        <div class="mode-img-wrapper">
          <img src="img/sections/social/sec_3/Mode-A.png" id="modeAImg" alt="<?= t('social.s3.mode_a_alt') ?>">
        </div>
      </div>

      <!-- MODE B -->
      <div class="social-mode-item" data-mode="b">
        <div class="mode-header">
          <span class="mode-title font-bebas"><?= t('social.s3.mode_b') ?></span>
          <span class="mode-sub font-inter"><?= t('social.s3.mode_b_sub') ?></span>
        </div>
        <div class="mode-img-wrapper">
          <img src="img/sections/social/sec_3/Mode-B.png" id="modeBImg" alt="<?= t('social.s3.mode_b_alt') ?>">
        </div>
      </div>

    </div>

  </div>

  <!-- Onclick-Script zum Aktivieren der Buttons -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const layout = document.querySelector('.social-library-layout');
      const container = document.getElementById('socialLibraryCategories');
      if (!layout || !container) return;

      const columns = container.querySelectorAll('.social-cat-column');
      const buttons = container.querySelectorAll('.social-action-btn');
      const modeItems = layout.querySelectorAll('.social-mode-item');
      const tabs = layout.querySelectorAll('.social-library-mobile-tabs button');
      const modeBtns = layout.querySelectorAll('.social-library-mobile-modes button');

      buttons.forEach(btn => {
        btn.addEventListener('click', function () {
          buttons.forEach(b => b.classList.remove('active'));
          this.classList.add('active');
        });
      });

      tabs.forEach(tab => {
        tab.addEventListener('click', function () {
          const idx = Number(this.dataset.cat);
          tabs.forEach(t => t.classList.remove('is-active'));
          this.classList.add('is-active');
          columns.forEach((col, i) => col.classList.toggle('is-active', i === idx));

          const colButtons = columns[idx].querySelectorAll('.social-action-btn');
          const hasActive = Array.prototype.some.call(colButtons, b => b.classList.contains('active'));
          if (!hasActive && colButtons[0]) {
            buttons.forEach(b => b.classList.remove('active'));
            colButtons[0].classList.add('active');
          }
        });
      });

      modeBtns.forEach(btn => {
        btn.addEventListener('click', function () {
          const mode = this.dataset.mode;
          modeBtns.forEach(b => b.classList.remove('is-active'));
          this.classList.add('is-active');
          modeItems.forEach(item => item.classList.toggle('is-active', item.dataset.mode === mode));
        });
      });
    });
  </script>

</section>
