<!-- SECTION: WAY SECTION -->
<section class="way-section">
  <div class="motion-container">
    
    <!-- HEADER -->
    <div class="motion-head">
      <span class="motion-sub"><?= t('home.way.sub') ?></span>
      <h2 class="font-bebas"><?= t_raw('home.way.title_html') ?></h2>
      <div class="motion-bg-text"><?= t('home.way.watermark') ?></div>
      <p class="motion-lead"><?= t('home.way.lead') ?></p>
    </div>

    <!-- MITTELBEREICH -->
    <div class="way-comparison-area">
      <div class="way-graphic-box">
        <img src="img/icons/Old-way.png" alt="<?= t('home.way.alt_old') ?>" class="way-main-img">
      </div>
      
      <!-- PFEIL & TEXT CONTAINER (WAAGERECHTER TEXT / PFEIL NACH UNTEN) -->
      <div class="way-arrow-flow">
        <span class="font-bebas text-scattered"><?= t('home.way.from') ?></span>
        <div class="way-flow-arrow">
          <img src="img/icons/Arrow-Right.svg" alt="<?= t('home.way.alt_to') ?>">
        </div>
        <span class="font-bebas text-connected"><?= t('home.way.to') ?></span>
      </div>

      <div class="way-graphic-box">
        <img src="img/icons/Prowem-way.png" alt="<?= t('home.way.alt_new') ?>" class="way-main-img">
      </div>
    </div>

    <!-- UNTERER BEREICH (CARDS) -->
    <div class="way-cards-grid">
      
      <!-- CARD 1: OPERATIONS -->
      <div class="way-card">
        <div class="way-card-icon-wrap">
          <img src="img/icons/clipboard-text.svg" alt="" class="way-card-icon">
        </div>
        <div class="way-card-text">
          <h4 class="font-bebas"><span class="way-card-num font-bebas">01</span> <?= t('home.way.card1.title') ?></h4>
          <p><?= t('home.way.card1.text') ?></p>
        </div>
      </div>

      <div class="way-card-sep"></div>

      <!-- CARD 2: MEDIA -->
      <div class="way-card">
        <div class="way-card-icon-wrap">
          <img src="img/icons/Video-Play.svg" alt="" class="way-card-icon">
        </div>
        <div class="way-card-text">
          <h4 class="font-bebas"><span class="way-card-num font-bebas">02</span> <?= t('home.way.card2.title') ?></h4>
          <p><?= t('home.way.card2.text') ?></p>
        </div>
      </div>

      <div class="way-card-sep"></div>

      <!-- CARD 3: PUBLIC EXPERIENCE -->
      <div class="way-card">
        <div class="way-card-icon-wrap">
          <img src="img/icons/Users.svg" alt="" class="way-card-icon">
        </div>
        <div class="way-card-text">
          <h4 class="font-bebas"><span class="way-card-num font-bebas">03</span> <?= t('home.way.card3.title') ?></h4>
          <p><?= t('home.way.card3.text') ?></p>
        </div>
      </div>

    </div>

  </div>
</section>

<script>
const wayObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const items = entry.target.querySelectorAll('.way-graphic-box, .way-arrow-flow, .way-card');
      setTimeout(() => { items[0].classList.add('visible'); }, 1000);
      setTimeout(() => { items[1].classList.add('visible'); }, 1500);
      setTimeout(() => { items[2].classList.add('visible'); }, 2000);
      setTimeout(() => { items[3].classList.add('visible'); }, 2300);
      setTimeout(() => { items[4].classList.add('visible'); }, 2450);
      setTimeout(() => { items[5].classList.add('visible'); }, 2600);
      observer.unobserve(entry.target);
    }
  });
}, { root: null, threshold: 0.15 });
wayObserver.observe(document.querySelector('.way-section'));
</script>