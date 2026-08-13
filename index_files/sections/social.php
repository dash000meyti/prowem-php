<!-- SECTION: MOTION SECTION -->
<section class="motion-section">
  <div class="motion-container">
    
    <!-- HEADER -->
    <div class="motion-head">
      <span class="motion-sub">Services at a glance</span>
      <h2 class="font-bebas">SEE PROWEM<br>IN MOTION</h2>
      <div class="motion-bg-text">SERVICES GLANCE</div>
      <p class="motion-lead">Get a fast, visual overview of Prowem’s core services. From event management and live streaming to social content automation and club digitalization, each tool is designed to help organizers run better football events and create a stronger experience for teams, players and fans.</p>
    </div>

    <!-- CARDS GRID -->
    <div class="motion-grid">
      
      <!-- CARD 1: OPERATIONS -->
      <div class="motion-card c-orange" data-index="1">
        <div class="card-left-column">
          <span class="card-num font-bebas">01</span>
          <div class="card-icon-bg"><img src="img/icons/Cup%20Icon.svg" alt=""></div>
          <h3>YOU RUN<br> TOURNAMENTS?</h3>
          <div class="title-divider"></div>
          <p>Create events, teams, venues and fixtures, then manage results and standings from one organized system.</p>
          <button class="card-arrow"><img src="img/icons/Arrow-Icon.svg" alt=""></button>
        </div>
        <div class="card-expanded-media">
          <img src="img/icons/app_1.png" alt="Prowem Operations" class="main-video-img">
        </div>
      </div>

      <!-- CARD 2: MEDIA (Active) -->
      <div class="motion-card c-green active" data-index="2">
        <div class="card-left-column">
          <span class="card-num font-bebas">02</span>
          <div class="card-icon-bg"><img src="img/icons/video%20Icon.svg" alt=""></div>
          <h3>YOU ARE<br> STREAMER?</h3>
          <div class="title-divider"></div>
          <p>Broadcast matches with live overlays, scoreboards and highlight-ready video moments.</p>
          <button class="card-arrow"><img src="img/icons/Arrow-Icon.svg" alt=""></button>
        </div>
        <div class="card-expanded-media">
          <img src="img/icons/app_2.png" alt="Prowem Live Streaming" class="main-video-img">
        </div>
      </div>

      <!-- CARD 3: PUBLIC EXPERIENCE -->
      <div class="motion-card c-purple" data-index="3">
        <div class="card-left-column">
          <span class="card-num font-bebas">03</span>
          <div class="card-icon-bg"><img src="img/icons/Mobile%20Icon.svg" alt=""></div>
          <h3>YOU NEED<br> CONTENT?</h3>
          <div class="title-divider"></div>
          <p>Automatically generate match graphics, stories and social posts from real event data.</p>
          <button class="card-arrow"><img src="img/icons/Arrow-Icon.svg" alt=""></button>
        </div>
        <div class="card-expanded-media">
          <img src="img/icons/app_3.png" alt="Prowem Social Content" class="main-video-img">
        </div>
      </div>

      <!-- CARD 4: CLUB DIGITALIZATION -->
      <div class="motion-card c-blue" data-index="4">
        <div class="card-left-column">
          <span class="card-num font-bebas">04</span>
          <div class="card-icon-bg"><img src="img/icons/Club%20Icon.svg" alt=""></div>
          <h3>YOU HAVE<br> A CLUB?</h3>
          <div class="title-divider"></div>
          <p>Manage your club profile, players, matches, news and media in one digital home.</p>
          <button class="card-arrow"><img src="img/icons/Arrow-Icon.svg" alt=""></button>
        </div>
        <div class="card-expanded-media">
          <img src="img/icons/app_4.png" alt="Prowem Club" class="main-video-img">
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