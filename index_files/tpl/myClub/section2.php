<?php
// MYCLUB SECTION 2: WHAT YOU GET
?>
<section class="club-features-section">

  <!-- Header -->
  <div class="club-header">
    <div class="club-bg-watermark font-bebas"><?= t('club.s2.watermark') ?></div>

    <span class="club-sub-title font-inter"><?= t('club.s2.sub') ?></span>
    <h2 class="club-main-title font-bebas">
      <?= t('club.s2.title') ?>
    </h2>
    <p class="club-lead-text font-inter">
      <?= t('club.s2.lead') ?>
    </p>
  </div>

  <div class="club-features-container">

    <!-- Card 1: CLUB WEBSITE -->
    <div class="club-feature-card">
      <div class="club-card-bg">
        <img src="img/sections/myClub/sec_2/Card-BG-290-339.png" alt="" class="bg-base">
        <img src="img/sections/myClub/sec_2/Card-Lines.svg" alt="" class="bg-lines">
      </div>
      
      <!-- 100% x 100% Full Card Overlay Graphic -->
      <div class="club-card-full-icon">
        <img src="img/sections/myClub/sec_2/Website-Icon.png" alt="<?= t('club.s2.card1.title') ?>">
      </div>

      <div class="club-card-content">
        <h3 class="club-card-title font-bebas"><?= t('club.s2.card1.title') ?></h3>
        <p class="club-card-text font-inter">
          <?= t('club.s2.card1.text') ?>
        </p>
      </div>
    </div>

    <!-- Card 2: TEAMS & PLAYERS -->
    <div class="club-feature-card">
      <div class="club-card-bg">
        <img src="img/sections/myClub/sec_2/Card-BG-290-339.png" alt="" class="bg-base">
        <img src="img/sections/myClub/sec_2/Card-Lines.svg" alt="" class="bg-lines">
      </div>

      <div class="club-card-full-icon">
        <img src="img/sections/myClub/sec_2/Players-Icon.png" alt="<?= t('club.s2.card2.title') ?>">
      </div>

      <div class="club-card-content">
        <h3 class="club-card-title font-bebas"><?= t('club.s2.card2.title') ?></h3>
        <p class="club-card-text font-inter">
          <?= t('club.s2.card2.text') ?>
        </p>
      </div>
    </div>

    <!-- Card 3: NEWS & MEDIA -->
    <div class="club-feature-card">
      <div class="club-card-bg">
        <img src="img/sections/myClub/sec_2/Card-BG-290-339.png" alt="" class="bg-base">
        <img src="img/sections/myClub/sec_2/Card-Lines.svg" alt="" class="bg-lines">
      </div>

      <div class="club-card-full-icon">
        <img src="img/sections/myClub/sec_2/News-Icon.png" alt="<?= t('club.s2.card3.title') ?>">
      </div>

      <div class="club-card-content">
        <h3 class="club-card-title font-bebas"><?= t('club.s2.card3.title') ?></h3>
        <p class="club-card-text font-inter">
          <?= t('club.s2.card3.text') ?>
        </p>
      </div>
    </div>

    <!-- Card 4: RESULTS & STANDINGS -->
    <div class="club-feature-card">
      <div class="club-card-bg">
        <img src="img/sections/myClub/sec_2/Card-BG-290-339.png" alt="" class="bg-base">
        <img src="img/sections/myClub/sec_2/Card-Lines.svg" alt="" class="bg-lines">
      </div>

      <div class="club-card-full-icon">
        <img src="img/sections/myClub/sec_2/Standing-Icon.png" alt="<?= t('club.s2.card4.title') ?>">
      </div>

      <div class="club-card-content">
        <h3 class="club-card-title font-bebas"><?= t('club.s2.card4.title') ?></h3>
        <p class="club-card-text font-inter">
          <?= t('club.s2.card4.text') ?>
        </p>
      </div>
    </div>

    <!-- Card 5: MANAGEMENT PANEL -->
    <div class="club-feature-card">
      <div class="club-card-bg">
        <img src="img/sections/myClub/sec_2/Card-BG-290-339.png" alt="" class="bg-base">
        <img src="img/sections/myClub/sec_2/Card-Lines.svg" alt="" class="bg-lines">
      </div>

      <div class="club-card-full-icon">
        <img src="img/sections/myClub/sec_2/Panel-Icon.png" alt="<?= t('club.s2.card5.title') ?>">
      </div>

      <div class="club-card-content">
        <h3 class="club-card-title font-bebas"><?= t('club.s2.card5.title') ?></h3>
        <p class="club-card-text font-inter">
          <?= t('club.s2.card5.text') ?>
        </p>
      </div>
    </div>

  </div>

  <div class="club-slider-nav" aria-hidden="true">
    <div class="club-slider-counter">
      <span class="club-slider-current">01</span>
      <span class="club-slider-sep">—</span>
      <span class="club-slider-total">05</span>
    </div>
    <div class="club-slider-bars"></div>
  </div>

</section>

<script>
(function () {
  var section = document.querySelector('.club-features-section');
  if (!section) return;
  var track = section.querySelector('.club-features-container');
  var currentEl = section.querySelector('.club-slider-current');
  var totalEl = section.querySelector('.club-slider-total');
  var barsEl = section.querySelector('.club-slider-bars');
  var cards = section.querySelectorAll('.club-feature-card');
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