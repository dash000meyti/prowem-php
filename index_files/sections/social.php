<!-- SECTION: MOTION SECTION -->
<section class="motion-section">
  <div class="motion-container">
    
    <!-- HEADER -->
    <div class="motion-head">
      <span class="motion-sub"><?= t('home.motion.sub') ?></span>
      <h2 class="font-bebas"><?= t_raw('home.motion.title_html') ?></h2>
      <div class="motion-bg-text"><?= t('home.motion.watermark') ?></div>
      <p class="motion-lead"><?= t('home.motion.lead') ?></p>
    </div>

    <!-- CARDS GRID -->
    <div class="motion-grid">
      
      <!-- CARD 1: OPERATIONS -->
      <div class="motion-card c-orange" data-index="1">
        <div class="card-left-column">
          <span class="card-num font-bebas">01</span>
          <div class="card-icon-bg"><img src="img/icons/Cup%20Icon.svg" alt=""></div>
          <h3><?= t_raw('home.motion.card1.title_html') ?></h3>
          <div class="title-divider"></div>
          <p><?= t('home.motion.card1.text') ?></p>
          <button class="card-arrow"><img src="img/icons/Arrow-Icon.svg" alt=""></button>
        </div>
        <div class="card-expanded-media">
          <img src="img/icons/app_1.png" alt="<?= t('home.motion.card1.alt') ?>" class="main-video-img">
        </div>
      </div>

      <!-- CARD 2: MEDIA (Active) -->
      <div class="motion-card c-green active" data-index="2">
        <div class="card-left-column">
          <span class="card-num font-bebas">02</span>
          <div class="card-icon-bg"><img src="img/icons/video%20Icon.svg" alt=""></div>
          <h3><?= t_raw('home.motion.card2.title_html') ?></h3>
          <div class="title-divider"></div>
          <p><?= t('home.motion.card2.text') ?></p>
          <button class="card-arrow"><img src="img/icons/Arrow-Icon.svg" alt=""></button>
        </div>
        <div class="card-expanded-media">
          <img src="img/icons/app_2.png" alt="<?= t('home.motion.card2.alt') ?>" class="main-video-img">
        </div>
      </div>

      <!-- CARD 3: PUBLIC EXPERIENCE -->
      <div class="motion-card c-purple" data-index="3">
        <div class="card-left-column">
          <span class="card-num font-bebas">03</span>
          <div class="card-icon-bg"><img src="img/icons/Mobile%20Icon.svg" alt=""></div>
          <h3><?= t_raw('home.motion.card3.title_html') ?></h3>
          <div class="title-divider"></div>
          <p><?= t('home.motion.card3.text') ?></p>
          <button class="card-arrow"><img src="img/icons/Arrow-Icon.svg" alt=""></button>
        </div>
        <div class="card-expanded-media">
          <img src="img/icons/app_3.png" alt="<?= t('home.motion.card3.alt') ?>" class="main-video-img">
        </div>
      </div>

      <!-- CARD 4: CLUB DIGITALIZATION -->
      <div class="motion-card c-blue" data-index="4">
        <div class="card-left-column">
          <span class="card-num font-bebas">04</span>
          <div class="card-icon-bg"><img src="img/icons/Club%20Icon.svg" alt=""></div>
          <h3><?= t_raw('home.motion.card4.title_html') ?></h3>
          <div class="title-divider"></div>
          <p><?= t('home.motion.card4.text') ?></p>
          <button class="card-arrow"><img src="img/icons/Arrow-Icon.svg" alt=""></button>
        </div>
        <div class="card-expanded-media">
          <img src="img/icons/app_4.png" alt="<?= t('home.motion.card4.alt') ?>" class="main-video-img">
        </div>
      </div>

    </div>
  </div>
</section>

<script>
document.querySelectorAll('.motion-card').forEach(card => {
  card.addEventListener('click', () => {
    document.querySelectorAll('.motion-card').forEach(c => c.classList.remove('active'));
    card.classList.add('active');
  });
});

const observerOptions = { root: null, threshold: 0.15 };
const motionObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const cards = entry.target.querySelectorAll('.motion-card');
      cards.forEach((card, index) => {
        setTimeout(() => { card.classList.add('visible'); }, index * 300);
      });
      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

motionObserver.observe(document.querySelector('.motion-grid'));
</script>