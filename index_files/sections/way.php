<!-- SECTION: WAY SECTION -->
<section class="way-section">
  <div class="motion-container">
    
    <!-- HEADER -->
    <div class="motion-head">
      <span class="motion-sub">Manual to Smart</span>
      <h2 class="font-bebas">LEAVE THE OLD WAY<br>LET PROWEM HANDLE THE REST</h2>
      <div class="motion-bg-text">MANUAL SMART</div>
      <p class="motion-lead">No more planning on paper, building fixtures by hand, switching between group chats, designing every post manually or editing videos late after each match. Prowem gives one organizer the power to do the work of a full event team, from planning and matchday operations to publishing updates, creating content through one connected football event system.</p>
    </div>

    <!-- MITTELBEREICH -->
    <div class="way-comparison-area">
      <div class="way-graphic-box">
        <img src="img/icons/Old-way.png" alt="Old Way" class="way-main-img">
      </div>
      
      <!-- PFEIL & TEXT CONTAINER (WAAGERECHTER TEXT / PFEIL NACH UNTEN) -->
      <div class="way-arrow-flow">
        <span class="font-bebas text-scattered">FROM SCATTERED</span>
        <div class="way-flow-arrow">
          <img src="img/icons/Arrow-Right.svg" alt="to">
        </div>
        <span class="font-bebas text-connected">TO CONNECTED</span>
      </div>

      <div class="way-graphic-box">
        <img src="img/icons/Prowem-way.png" alt="Prowem Way" class="way-main-img">
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
          <h4 class="font-bebas"><span class="way-card-num font-bebas">01</span> OPERATIONS</h4>
          <p>Plan fixtures, teams, venues and results from one connected workflow instead of scattered sheets, notes and chats.</p>
        </div>
      </div>

      <div class="way-card-sep"></div>

      <!-- CARD 2: MEDIA -->
      <div class="way-card">
        <div class="way-card-icon-wrap">
          <img src="img/icons/Video-Play.svg" alt="" class="way-card-icon">
        </div>
        <div class="way-card-text">
          <h4 class="font-bebas"><span class="way-card-num font-bebas">02</span> MEDIA</h4>
          <p>Create match graphics, overlays and highlight-ready content without jumping between separate design and video tools.</p>
        </div>
      </div>

      <div class="way-card-sep"></div>

      <!-- CARD 3: PUBLIC EXPERIENCE -->
      <div class="way-card">
        <div class="way-card-icon-wrap">
          <img src="img/icons/Users.svg" alt="" class="way-card-icon">
        </div>
        <div class="way-card-text">
          <h4 class="font-bebas"><span class="way-card-num font-bebas">03</span> PUBLIC EXPERIENCE</h4>
          <p>Publish event updates, match information and media in one professional place for teams, fans and partners.</p>
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