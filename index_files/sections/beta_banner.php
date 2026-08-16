<section class="beta-section">
  <div class="beta-content">
    <span class="beta-sub anime-slide"><?= t('home.beta.sub') ?></span>
    <h2 class="font-bebas">
      <span class="beta-title-line anime-slide"><?= t('home.beta.title_1') ?></span>
      <span class="beta-title-line anime-slide"><?= t('home.beta.title_2') ?></span>
    </h2>
    <p class="beta-lead anime-slide"><?= t('home.beta.lead') ?></p>
    <div class="anime-slide">
      <a href="#" class="beta-btn"><?= t('home.beta.cta') ?></a>
    </div>
  </div>
</section>

<script>
const betaObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('start-animation');
      observer.unobserve(entry.target);
    }
  });
}, { root: null, threshold: 0.15 });
betaObserver.observe(document.querySelector('.beta-section'));
</script>





<section class="managed-section">
  
  <!-- HEADER (Oben) -->
  <div class="motion-head">
    <span class="motion-sub"><?= t('home.managed.sub') ?></span>
    <h2 class="font-bebas"><?= t_raw('home.managed.title_html') ?></h2>
    <div class="motion-bg-text"><?= t('home.managed.watermark') ?></div>
    <p class="motion-lead-managed"><?= t('home.managed.lead') ?></p>
  </div>

  <!-- UNTERE CARDS (Unten) -->
  <div class="managed-cards-grid">
    
    <!-- CARD 1: OPERATIONAL SERVICES -->
    <div class="managed-card anime-managed-slide">
      <div class="managed-card-icon-wrap">
        <img src="img/icons/Users.svg" alt="" class="managed-card-icon">
      </div>
      <div class="managed-card-text">
        <h4 class="font-bebas"><?= t('home.managed.card1.title') ?></h4>
        <p><?= t('home.managed.card1.text') ?></p>
      </div>
    </div>

    <!-- CARD 2: TECHNOLOGY SERVICES -->
    <div class="managed-card anime-managed-slide">
      <div class="managed-card-icon-wrap">
        <img src="img/icons/CPU.png" alt="" class="managed-card-icon">
      </div>
      <div class="managed-card-text">
        <h4 class="font-bebas"><?= t('home.managed.card2.title') ?></h4>
        <p><?= t('home.managed.card2.text') ?></p>
      </div>
    </div>

  </div>

</section>

<script>
const managedObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('start-managed-animation');
      observer.unobserve(entry.target);
    }
  });
}, { root: null, threshold: 0.15 });
managedObserver.observe(document.querySelector('.managed-section'));
</script>