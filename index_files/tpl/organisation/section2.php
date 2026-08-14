<?php
// ORGANISATION SECTION 2: WHAT YOU GET
?>
<section class="org-get-section">

  <!-- Header -->
  <div class="org-header">
    <div class="org-bg-watermark font-bebas">WHAT YOU GET</div>

    <span class="org-sub-title font-inter">What you get</span>
    <h2 class="org-main-title font-bebas">
      EVERYTHING FROM THE FIRST BRIEF<br>
      TO THE FINAL WHISTLE.
    </h2>
    <p class="org-lead-text font-inter">
      We turn your initial vision into a fully delivered event—planning every detail, coordinating every team and managing every moment from setup to the final trophy.
    </p>
  </div>

  <!-- Cards Container -->
  <div class="org-cards-container">

    <!-- CARD 1 -->
    <div class="org-card">
      <div class="org-card-overlay">
        <img src="img/sections/organisation/sec_2/Plan-Icon.png" alt="Plan & Design">
      </div>
      <div class="org-card-content">
        <h3 class="org-card-title font-bebas">PLAN & DESIGN</h3>
        <p class="org-card-desc font-inter">
          Event concept, competition format, budget and complete operation plan.
        </p>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="org-card">
      <div class="org-card-overlay">
        <img src="img/sections/organisation/sec_2/Prepare-Icon.png" alt="Prepare & Coordinate">
      </div>
      <div class="org-card-content">
        <h3 class="org-card-title font-bebas">PREPARE & COORDINATE</h3>
        <p class="org-card-desc font-inter">
          Venue, teams, referees, crew, equipment and match-day logistics.
        </p>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="org-card">
      <div class="org-card-overlay">
        <img src="img/sections/organisation/sec_2/Broadcast-Icon.png" alt="Run & Broadcast">
      </div>
      <div class="org-card-content">
        <h3 class="org-card-title font-bebas">RUN & BROADCAST</h3>
        <p class="org-card-desc font-inter">
          Match operations, live results, filming, streaming and on-site control.
        </p>
      </div>
    </div>

    <!-- CARD 4 -->
    <div class="org-card">
      <div class="org-card-overlay">
        <img src="img/sections/organisation/sec_2/Publish-Icon.png" alt="Publish & Deliver">
      </div>
      <div class="org-card-content">
        <h3 class="org-card-title font-bebas">PUBLISH & DELIVER</h3>
        <p class="org-card-desc font-inter">
          Social content, statistics, highlights, event media and final reports.
        </p>
      </div>
    </div>

  </div>

  <div class="org-slider-nav" aria-hidden="true">
    <div class="org-slider-counter">
      <span class="org-slider-current">01</span>
      <span class="org-slider-sep">—</span>
      <span class="org-slider-total">04</span>
    </div>
    <div class="org-slider-bars"></div>
  </div>

</section>

<script>
(function () {
  var section = document.querySelector('.org-get-section');
  if (!section) return;
  var track = section.querySelector('.org-cards-container');
  var currentEl = section.querySelector('.org-slider-current');
  var totalEl = section.querySelector('.org-slider-total');
  var barsEl = section.querySelector('.org-slider-bars');
  var cards = section.querySelectorAll('.org-card');
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