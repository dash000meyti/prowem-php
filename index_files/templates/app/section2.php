<!-- SECTION 2: WHAT YOU GET -->
<section class="event-features-section">
  
  <div class="features-header">
    <!-- Riesiger Wasserzeichen-Text im Hintergrund -->
    <div class="bg-watermark font-bebas"><?= t('app.s2.watermark') ?></div>

    <span class="features-sub"><?= t('app.s2.sub') ?></span>
    <h2 class="features-title font-bebas">
      <?= t('app.s2.title') ?>
    </h2>
    <p class="features-lead">
      <?= t('app.s2.lead') ?>
    </p>
  </div>

  <div class="features-grid-container">
    
    <!-- Card 1: AUTOMATED SCHEDULING -->
    <div class="feature-card">
      <div class="feature-card-header">
        <div class="feature-card-title-group">
          <div class="feature-icon-wrapper">
            <img src="img/sections/app/Schedul-Icon.png" alt="<?= t('app.s2.card1.title') ?>">
          </div>
          <h3 class="feature-card-title font-bebas"><?= t('app.s2.card1.title') ?></h3>
        </div>
        <div class="feature-accordion-arrow"></div>
      </div>
      <div class="feature-card-body">
        <p class="feature-card-desc">
          <?= t('app.s2.card1.text') ?>
        </p>
      </div>
    </div>

    <!-- Card 2: EVENT WEBSITE -->
    <div class="feature-card">
      <div class="feature-card-header">
        <div class="feature-card-title-group">
          <div class="feature-icon-wrapper">
            <img src="img/sections/app/Website-Icon.png" alt="<?= t('app.s2.card2.title') ?>">
          </div>
          <h3 class="feature-card-title font-bebas"><?= t('app.s2.card2.title') ?></h3>
        </div>
        <div class="feature-accordion-arrow"></div>
      </div>
      <div class="feature-card-body">
        <p class="feature-card-desc">
          <?= t('app.s2.card2.text') ?>
        </p>
      </div>
    </div>

    <!-- Card 3: LIVE STREAMING (Aktiv) -->
    <div class="feature-card active theme-green">
      <div class="feature-card-header">
        <div class="feature-card-title-group">
          <div class="feature-icon-wrapper">
            <img src="img/sections/app/Livestream-Icon.png" alt="<?= t('app.s2.card3.title') ?>">
          </div>
          <h3 class="feature-card-title font-bebas"><?= t('app.s2.card3.title') ?></h3>
        </div>
        <div class="feature-accordion-arrow"></div>
      </div>
      <div class="feature-card-body">
        <p class="feature-card-desc">
          <?= t('app.s2.card3.text') ?>
        </p>
        <!-- <div class="feature-card-media">
          <img src="img/sections/app/Card-Preview-Livestream.png" alt="Live Streaming Preview">
        </div> -->
      </div>
    </div>

    <!-- Card 4: MATCH HIGHLIGHTS -->
    <div class="feature-card">
      <div class="feature-card-header">
        <div class="feature-card-title-group">
          <div class="feature-icon-wrapper">
            <img src="img/sections/app/Highlight-Icon.png" alt="<?= t('app.s2.card4.title') ?>">
          </div>
          <h3 class="feature-card-title font-bebas"><?= t('app.s2.card4.title') ?></h3>
        </div>
        <div class="feature-accordion-arrow"></div>
      </div>
      <div class="feature-card-body">
        <p class="feature-card-desc">
          <?= t('app.s2.card4.text') ?>
        </p>
      </div>
    </div>

    <!-- Card 5: SOCIAL CONTENT -->
    <div class="feature-card">
      <div class="feature-card-header">
        <div class="feature-card-title-group">
          <div class="feature-icon-wrapper">
            <img src="img/sections/app/Content-Icon.png" alt="<?= t('app.s2.card5.title') ?>">
          </div>
          <h3 class="feature-card-title font-bebas"><?= t('app.s2.card5.title') ?></h3>
        </div>
        <div class="feature-accordion-arrow"></div>
      </div>
      <div class="feature-card-body">
        <p class="feature-card-desc">
          <?= t('app.s2.card5.text') ?>
        </p>
      </div>
    </div>

  </div>

  <div class="features-slider-nav" aria-hidden="true">
    <div class="features-slider-counter">
      <span class="features-slider-current">01</span>
      <span class="features-slider-sep">—</span>
      <span class="features-slider-total">05</span>
    </div>
    <div class="features-slider-bars"></div>
  </div>

</section>

<script>
(function () {
  var section = document.querySelector('.event-features-section');
  if (!section) return;

  var track = section.querySelector('.features-grid-container');
  var currentEl = section.querySelector('.features-slider-current');
  var totalEl = section.querySelector('.features-slider-total');
  var barsEl = section.querySelector('.features-slider-bars');
  var cards = section.querySelectorAll('.feature-card');
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

  function getPageCount() {
    return Math.max(1, cards.length - getVisibleCount() + 1);
  }

  function getCurrentPage() {
    var origin = track.getBoundingClientRect().left + (parseFloat(window.getComputedStyle(track).paddingLeft) || 0);
    var best = 0;
    var bestDist = Infinity;
    var maxIndex = pageCount - 1;
    for (var i = 0; i <= maxIndex; i++) {
      var dist = Math.abs(cards[i].getBoundingClientRect().left - origin);
      if (dist < bestDist) {
        bestDist = dist;
        best = i;
      }
    }
    return best;
  }

  function setActive(index) {
    if (index === active) return;
    active = index;
    if (currentEl) currentEl.textContent = String(index + 1).padStart(2, '0');
    var bars = barsEl.querySelectorAll('span');
    bars.forEach(function (bar, i) {
      bar.classList.toggle('is-active', i === index);
    });
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
    requestAnimationFrame(function () {
      if (mq.matches) setActive(getCurrentPage());
      ticking = false;
    });
  }, { passive: true });

  window.addEventListener('resize', function () {
    if (!mq.matches) return;
    rebuildBars();
  });

  if (mq.matches) rebuildBars();
  mq.addEventListener('change', function (e) {
    if (e.matches) rebuildBars();
  });
})();
</script>