<section class="stats-section">
  <div class="stats-grid">
    
    <!-- BOX 1: REGISTRED USERS (ORANGE) -->
    <div class="stats-card color-orange-card">
      <div class="stats-card-bg" style="background-image: url('img/icons/orange.png');"></div>
      <div class="stats-number font-bebas" data-target="1322">0</div>
      <div class="stats-label font-bebas">REGISTERED<br>USERS</div>
    </div>

    <!-- BOX 2: REGISTRED EVENTS (GREEN) -->
    <div class="stats-card color-green-card">
      <div class="stats-card-bg" style="background-image: url('img/icons/green.png');"></div>
      <div class="stats-number font-bebas" data-target="134">0</div>
      <div class="stats-label font-bebas">REGISTERED<br>EVENTS</div>
    </div>

    <!-- BOX 3: PROVIDED SPORTS (PURPLE) -->
    <div class="stats-card color-purple-card">
      <div class="stats-card-bg" style="background-image: url('img/icons/purple.png');"></div>
      <div class="stats-number font-bebas" data-target="7">0</div>
      <div class="stats-label font-bebas">PROVIDED<br>SPORTS</div>
    </div>

    <!-- BOX 4: MATCH CONTROL (BLUE) -->
    <div class="stats-card color-blue-card">
      <div class="stats-card-bg" style="background-image: url('img/icons/blue.png');"></div>
      <div class="stats-number font-bebas" data-target="100" data-suffix="%">0</div>
      <div class="stats-label font-bebas">MATCHDAY<br>CONTROL</div>
    </div>

  </div>
</section>

<script>
const statsObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const counters = entry.target.querySelectorAll('.stats-number');
      
      counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const suffix = counter.getAttribute('data-suffix') || '';
        const duration = 1500; // Animationsdauer in ms
        const startTime = performance.now();
        
        const updateCounter = (currentTime) => {
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          
          // Ease-Out-Effekt für das Hochzählen
          const easeOutQuad = progress * (2 - progress);
          const currentValue = Math.floor(easeOutQuad * target);
          
          counter.innerText = currentValue + suffix;
          
          if (progress < 1) {
            requestAnimationFrame(updateCounter);
          } else {
            counter.innerText = target + suffix;
          }
        };
        
        requestAnimationFrame(updateCounter);
      });
      
      observer.unobserve(entry.target);
    }
  });
}, { root: null, threshold: 0.2 });

statsObserver.observe(document.querySelector('.stats-section'));
</script>

<section class="cta-section">
  <div class="cta-content">
    <span class="cta-sub anime-slide">READY TO START?</span>
    <h2 class="font-bebas">
      <span class="cta-title-line anime-slide">BUILD, STREAM</span>
      <span class="cta-title-line anime-slide">AND GROW WITH PROWEM</span>
    </h2>
    <p class="cta-lead anime-slide">Create, stream, publish and grow your sports presence through one connected platform built for modern teams, clubs and organizers.</p>
    <div class="anime-slide">
      <a href="#" class="cta-btn">Get started Now</a>
    </div>
  </div>
</section>

<script>
const ctaObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('start-animation');
      observer.unobserve(entry.target);
    }
  });
}, { root: null, threshold: 0.15 });
ctaObserver.observe(document.querySelector('.cta-section'));
</script>