<?php
// VIDEO SECTION 2: WHAT YOU GET
?>
<section class="video-get-section">

  <!-- Header -->
  <div class="video-header">
    <div class="video-bg-watermark font-bebas"><?= t('video.s2.watermark') ?></div>

    <span class="video-sub-title font-inter"><?= t('video.s2.sub') ?></span>
    <h2 class="video-main-title font-bebas">
      <?= t('video.s2.title') ?>
    </h2>
    <p class="video-lead-text font-inter">
      <?= t('video.s2.lead') ?>
    </p>
  </div>

  <div class="video-cards-container">
    
    <!-- Card 1: PROFESSIONAL GRAPHICS -->
    <div class="video-card">
      <div class="video-card-overlay">
        <img src="img/sections/video/sec_2/Graphics-Icon.png" alt="<?= t('video.s2.card1.title') ?>">
      </div>
      <div class="video-card-content">
        <h3 class="video-card-title font-bebas"><?= t('video.s2.card1.title') ?></h3>
        <p class="video-card-desc"><?= t('video.s2.card1.text') ?></p>
      </div>
    </div>

    <!-- Card 2: BROWSER BASED STUDIO -->
    <div class="video-card">
      <div class="video-card-overlay">
        <img src="img/sections/video/sec_2/Browse-Icon.png" alt="<?= t('video.s2.card2.title') ?>">
      </div>
      <div class="video-card-content">
        <h3 class="video-card-title font-bebas"><?= t('video.s2.card2.title') ?></h3>
        <p class="video-card-desc"><?= t('video.s2.card2.text') ?></p>
      </div>
    </div>

    <!-- Card 3: REAL TIME CONTROL -->
    <div class="video-card">
      <div class="video-card-overlay">
        <img src="img/sections/video/sec_2/Control-Icon.png" alt="<?= t('video.s2.card3.title') ?>">
      </div>
      <div class="video-card-content">
        <h3 class="video-card-title font-bebas"><?= t('video.s2.card3.title') ?></h3>
        <p class="video-card-desc"><?= t('video.s2.card3.text') ?></p>
      </div>
    </div>

    <!-- Card 4: RECORD & HIGHLIGHTS -->
    <div class="video-card">
      <div class="video-card-overlay">
        <img src="img/sections/video/sec_2/Record-Icon.png" alt="<?= t('video.s2.card4.title') ?>">
      </div>
      <div class="video-card-content">
        <h3 class="video-card-title font-bebas"><?= t('video.s2.card4.title') ?></h3>
        <p class="video-card-desc"><?= t('video.s2.card4.text') ?></p>
      </div>
    </div>

    <!-- Card 5: STREAM ANYWHERE -->
    <div class="video-card">
      <div class="video-card-overlay">
        <img src="img/sections/video/sec_2/Stream-Icon.png" alt="<?= t('video.s2.card5.title') ?>">
      </div>
      <div class="video-card-content">
        <h3 class="video-card-title font-bebas"><?= t('video.s2.card5.title') ?></h3>
        <p class="video-card-desc"><?= t('video.s2.card5.text') ?></p>
      </div>
    </div>

  </div>

  <div class="video-slider-nav" aria-hidden="true">
    <div class="video-slider-counter">
      <span class="video-slider-current">01</span>
      <span class="video-slider-sep">—</span>
      <span class="video-slider-total">05</span>
    </div>
    <div class="video-slider-bars"></div>
  </div>

</section>

<script>
(function () {
  var section = document.querySelector('.video-get-section');
  if (!section) return;
  var track = section.querySelector('.video-cards-container');
  var currentEl = section.querySelector('.video-slider-current');
  var totalEl = section.querySelector('.video-slider-total');
  var barsEl = section.querySelector('.video-slider-bars');
  var cards = section.querySelectorAll('.video-card');
  if (!track || !barsEl || !cards.length) return;
  var mq = window.matchMedia('(max-width: 1200px)');
  var active = -1;
  var pageCount = cards.length;
  function getVisibleCount() {
    var style = window.getComputedStyle(track);
    var pad = (parseFloat(style.paddingLeft) || 0) + (parseFloat(style.paddingRight) || 0);
    var gap = parseFloat(style.columnGap || style.gap) || 14;
    var cardW = cards[0].offsetWidth || 290;
    var inner = Math.max(0, track.clientWidth - pad);
    var count = Math.floor((inner + gap) / (cardW + gap));
    return Math.max(1, Math.min(cards.length, count));
  }
  function getPageCount() { return Math.max(1, cards.length - getVisibleCount() + 1); }
  function getCurrentPage() {
    var origin = track.getBoundingClientRect().left + (parseFloat(window.getComputedStyle(track).paddingLeft) || 0);
    var best = 0, bestDist = Infinity, maxIndex = pageCount - 1;
    for (var i = 0; i <= maxIndex; i++) {
      var dist = Math.abs(cards[i].getBoundingClientRect().left - origin);
      if (dist < bestDist) { bestDist = dist; best = i; }
    }
    return best;
  }
  function setActive(index) {
    if (index === active) return;
    active = index;
    if (currentEl) currentEl.textContent = String(index + 1).padStart(2, '0');
    barsEl.querySelectorAll('span').forEach(function (bar, i) { bar.classList.toggle('is-active', i === index); });
  }
  function rebuildBars() {
    pageCount = getPageCount();
    if (totalEl) totalEl.textContent = String(pageCount).padStart(2, '0');
    barsEl.innerHTML = '';
    for (var i = 0; i < pageCount; i++) {
      var bar = document.createElement('span');
      bar.addEventListener('click', (function (index) {
        return function () {
          if (!mq.matches || !cards[index]) return;
          var pad = parseFloat(window.getComputedStyle(track).paddingLeft) || 0;
          track.scrollTo({ left: cards[index].offsetLeft - pad, behavior: 'smooth' });
        };
      })(i));
      barsEl.appendChild(bar);
    }
    active = -1;
    setActive(Math.min(getCurrentPage(), pageCount - 1));
  }
  var ticking = false;
  track.addEventListener('scroll', function () {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(function () { if (mq.matches) setActive(getCurrentPage()); ticking = false; });
  }, { passive: true });
  window.addEventListener('resize', function () { if (mq.matches) rebuildBars(); });
  if (mq.matches) rebuildBars();
  mq.addEventListener('change', function (e) { if (e.matches) rebuildBars(); });
})();
</script>