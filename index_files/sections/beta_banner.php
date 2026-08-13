<section class="beta-section">
  <div class="beta-content">
    <span class="beta-sub anime-slide">BETA ACCESS</span>
    <h2 class="font-bebas">
      <span class="beta-title-line anime-slide">PROWEM FOR FREE</span>
      <span class="beta-title-line anime-slide">DURING BETA</span>
    </h2>
    <p class="beta-lead anime-slide">Prowem is free during beta. Create events, test the core services and experience the full workflow before paid plans are introduced.</p>
    <div class="anime-slide">
      <a href="#" class="beta-btn">Get started Now</a>
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
    <span class="motion-sub">MANAGED EVENT EXECUTION</span>
    <h2 class="font-bebas">YOUR EVENT, FULLY<br>MANAGED BY PROWEM</h2>
    <div class="motion-bg-text">MANAGED EXECUTION</div>
    <p class="motion-lead-managed">For organizers who need more than software, Prowem can manage the full event execution, combining on-ground operations with the technology needed to run, stream, publish, and deliver the event professionally.</p>
  </div>

  <!-- UNTERE CARDS (Unten) -->
  <div class="managed-cards-grid">
    
    <!-- CARD 1: OPERATIONAL SERVICES -->
    <div class="managed-card anime-managed-slide">
      <div class="managed-card-icon-wrap">
        <img src="img/icons/Users.svg" alt="" class="managed-card-icon">
      </div>
      <div class="managed-card-text">
        <h4 class="font-bebas">OPERATIONAL SERVICES</h4>
        <p>Planning, coordination, matchday management and on-ground event execution from start to finish.</p>
      </div>
    </div>

    <!-- CARD 2: TECHNOLOGY SERVICES -->
    <div class="managed-card anime-managed-slide">
      <div class="managed-card-icon-wrap">
        <img src="img/icons/CPU.png" alt="" class="managed-card-icon">
      </div>
      <div class="managed-card-text">
        <h4 class="font-bebas">TECHNOLOGY SERVICES</h4>
        <p>Event systems, live streaming, digital pages and media tools to run and deliver the event professionally.</p>
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