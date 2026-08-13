<section class="hero-section">
  <!-- Hintergrund-Medium -->
  <div class="hero-bg-media">
    <img src="img/Hero_BG.png" alt="Stadium Night" loading="eager">
  </div>

  <!-- Haupt-Container mit 2er-Raster (Slider-Bereich + rechte Boxen) -->
  <div class="hero-container">
    
    <!-- LINKER + MITTLERER BEREICH (Wechselt per Slide) -->
    <div class="hero-slider-wrapper">
      
      <!-- SLIDE 1 (Orange: FF6249) -->
      <div class="hero-slide active" data-slide="1">
        <div class="hero-col-left">
          <div class="hero-badge"><span class="badge-num" style="color:#FF6249;">01</span> Event Management</div>
          <h1 class="hero-main-title">FOOTBALL EVENTS<br><span style="color:#FF6249;">FULLY DIGITAL</span></h1>
          <p class="hero-description">Everything you need to organize matches, produce media, and grow your football club or event digitally.</p>
          
          <!-- Statische Feature-Leiste -->
          <div class="hero-features-minimal">
            <div class="feat-mini-item"><img src="img/icons/Cup%20Icon.svg" alt=""><span>Event<br>Management</span></div>
            <div class="feat-mini-item"><img src="img/icons/video%20Icon.svg" alt=""><span>Live<br>Streaming</span></div>
            <div class="feat-mini-item"><img src="img/icons/Mobile%20Icon.svg" alt=""><span>Social<br>Content</span></div>
            <div class="feat-mini-item"><img src="img/icons/Club%20Icon.svg" alt=""><span>Club<br>Digitalization</span></div>
          </div>

          <div class="hero-cta-group">
            <a href="?page=register" class="btn-primary" style="background:#FF6249;">Start your journey <img src="img/icons/Arrow-right.svg" alt="" class="btn-icon"></a>
            <a href="#team" class="btn-secondary">Talk to Our Team</a>
          </div>
        </div>

        <div class="hero-col-center">
          <div class="visual-stack-wrapper theme-orange">
            <img src="img/icons/Orange_1.svg" class="layer-svg layer-light-1" alt="">
            <img src="img/icons/Orange_2.svg" class="layer-svg layer-light-2" alt="">
            <img src="img/icons/Line_Circle.svg" class="layer-svg layer-circle" alt="">
            
            <!-- DYNAMISCHER OVERLAY-STACK SLIDE 1 (01 liegt UNTEN) -->
            <div class="hero-image-sequence">
              <?php
                $dir1 = 'img/Slides/1/';
                $files1 = glob($dir1 . '*.{png,PNG,jpg,JPG}', GLOB_BRACE);
                if ($files1) {
                    sort($files1);
                    foreach ($files1 as $index => $file) {
                        $num = $index + 1;
                        $zIndex = $num; // Slide 1: 01 unten (z-index 1)
                        echo '<img src="' . htmlspecialchars($file) . '" class="seq-img" style="z-index: ' . $zIndex . ';" alt="">';
                    }
                }
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 2 (Green: 18D96B) -->
      <div class="hero-slide" data-slide="2">
        <div class="hero-col-left">
          <div class="hero-badge"><span class="badge-num" style="color:#18D96B;">02</span> LiveStreaming</div>
          <h1 class="hero-main-title">BROADCAST EVERY<br><span style="color:#18D96B;">FOOTBALL MOMENT</span></h1>
          <p class="hero-description">Stream matches live, record key moments, and turn goals into ready-to-use highlights.</p>
          
          <div class="hero-features-minimal">
            <div class="feat-mini-item"><img src="img/icons/Cup%20Icon.svg" alt=""><span>Event<br>Management</span></div>
            <div class="feat-mini-item"><img src="img/icons/video%20Icon.svg" alt=""><span>Live<br>Streaming</span></div>
            <div class="feat-mini-item"><img src="img/icons/Mobile%20Icon.svg" alt=""><span>Social<br>Content</span></div>
            <div class="feat-mini-item"><img src="img/icons/Club%20Icon.svg" alt=""><span>Club<br>Digitalization</span></div>
          </div>

          <div class="hero-cta-group">
            <a href="?page=stream" class="btn-primary" style="background:#18D96B;">Start your journey <img src="img/icons/Arrow-right.svg" alt="" class="btn-icon"></a>
            <a href="#team" class="btn-secondary">Talk to Our Team</a>
          </div>
        </div>
        
        <div class="hero-col-center">
          <div class="visual-stack-wrapper theme-green">
            <img src="img/icons/Orange_1.svg" class="layer-svg layer-light-1" alt="">
            <img src="img/icons/Orange_2.svg" class="layer-svg layer-light-2" alt="">
            <img src="img/icons/Line_Circle.svg" class="layer-svg layer-circle" alt="">
            
            <!-- DYNAMISCHER OVERLAY-STACK SLIDE 2 (01 liegt OBEN) -->
            <div class="hero-image-sequence">
              <?php
                $dir2 = 'img/Slides/2/';
                $files2 = glob($dir2 . '*.{png,PNG,jpg,JPG}', GLOB_BRACE);
                if ($files2) {
                    sort($files2);
                    $total = count($files2);
                    foreach ($files2 as $index => $file) {
                        $zIndex = $total - $index; // 01 ganz oben (höchster z-index)
                        echo '<img src="' . htmlspecialchars($file) . '" class="seq-img" style="z-index: ' . $zIndex . ';" alt="">';
                    }
                }
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 3 (Purple: 9F46FF) -->
      <div class="hero-slide" data-slide="3">
        <div class="hero-col-left">
          <div class="hero-badge"><span class="badge-num" style="color:#9F46FF;">03</span> Social Content</div>
          <h1 class="hero-main-title">EVERY MATCH<br><span style="color:#9F46FF;">BECOMES CONTENT</span></h1>
          <p class="hero-description">Automatically create match previews, goal graphics, results, tables, and player stats for every channel.</p>
          
          <div class="hero-features-minimal">
            <div class="feat-mini-item"><img src="img/icons/Cup%20Icon.svg" alt=""><span>Event<br>Management</span></div>
            <div class="feat-mini-item"><img src="img/icons/video%20Icon.svg" alt=""><span>Live<br>Streaming</span></div>
            <div class="feat-mini-item"><img src="img/icons/Mobile%20Icon.svg" alt=""><span>Social<br>Content</span></div>
            <div class="feat-mini-item"><img src="img/icons/Club%20Icon.svg" alt=""><span>Club<br>Digitalization</span></div>
          </div>

          <div class="hero-cta-group">
            <a href="?page=media" class="btn-primary" style="background:#9F46FF;">Start your journey <img src="img/icons/Arrow-right.svg" alt="" class="btn-icon"></a>
            <a href="#team" class="btn-secondary">Talk to Our Team</a>
          </div>
        </div>
        
        <div class="hero-col-center">
          <div class="visual-stack-wrapper theme-purple">
            <img src="img/icons/Orange_1.svg" class="layer-svg layer-light-1" alt="">
            <img src="img/icons/Orange_2.svg" class="layer-svg layer-light-2" alt="">
            <img src="img/icons/Line_Circle.svg" class="layer-svg layer-circle" alt="">
            
            <!-- DYNAMISCHER OVERLAY-STACK SLIDE 3 (01 liegt OBEN) -->
            <div class="hero-image-sequence">
              <?php
                $dir3 = 'img/Slides/3/';
                $files3 = glob($dir3 . '*.{png,PNG,jpg,JPG}', GLOB_BRACE);
                if ($files3) {
                    sort($files3);
                    $total = count($files3);
                    foreach ($files3 as $index => $file) {
                        $zIndex = $total - $index;
                        echo '<img src="' . htmlspecialchars($file) . '" class="seq-img" style="z-index: ' . $zIndex . ';" alt="">';
                    }
                }
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 4 (Blue: 02ABFF) -->
      <div class="hero-slide" data-slide="4">
        <div class="hero-col-left">
          <div class="hero-badge"><span class="badge-num" style="color:#02ABFF;">04</span> Club Digitalization</div>
          <h1 class="hero-main-title">A DIGITAL HOME<br><span style="color:#02ABFF;">FOR EVERY CLUB</span></h1>
          <p class="hero-description">Give your club one digital space to manage matches, publish updates, and create social content.</p>
          
          <div class="hero-features-minimal">
            <div class="feat-mini-item"><img src="img/icons/Cup%20Icon.svg" alt=""><span>Event<br>Management</span></div>
            <div class="feat-mini-item"><img src="img/icons/video%20Icon.svg" alt=""><span>Live<br>Streaming</span></div>
            <div class="feat-mini-item"><img src="img/icons/Mobile%20Icon.svg" alt=""><span>Social<br>Content</span></div>
            <div class="feat-mini-item"><img src="img/icons/Club%20Icon.svg" alt=""><span>Club<br>Digitalization</span></div>
          </div>

          <div class="hero-cta-group">
            <a href="?page=club" class="btn-primary" style="background:#02ABFF;">Start your journey <img src="img/icons/Arrow-right.svg" alt="" class="btn-icon"></a>
            <a href="#team" class="btn-secondary">Talk to Our Team</a>
          </div>
        </div>
        
        <div class="hero-col-center">
          <div class="visual-stack-wrapper theme-blue">
            <img src="img/icons/Orange_1.svg" class="layer-svg layer-light-1" alt="">
            <img src="img/icons/Orange_2.svg" class="layer-svg layer-light-2" alt="">
            <img src="img/icons/Line_Circle.svg" class="layer-svg layer-circle" alt="">
            
            <!-- DYNAMISCHER OVERLAY-STACK SLIDE 4 (01 liegt OBEN) -->
            <div class="hero-image-sequence">
              <?php
                $dir4 = 'img/Slides/4/';
                $files4 = glob($dir4 . '*.{png,PNG,jpg,JPG}', GLOB_BRACE);
                if ($files4) {
                    sort($files4);
                    $total = count($files4);
                    foreach ($files4 as $index => $file) {
                        $zIndex = $total - $index;
                        echo '<img src="' . htmlspecialchars($file) . '" class="seq-img" style="z-index: ' . $zIndex . ';" alt="">';
                    }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RECHTE SPALTE -->
    <div class="hero-col-right">
      <div class="hero-info-card"><div class="hero-card-content"><span class="card-step">SETUP</span><h3>TEAMS & VENUES</h3><p>Clubs, fields, groups and rules</p></div></div>
      <div class="hero-info-card"><div class="hero-card-content"><span class="card-step">STRUCTURE</span><h3>TOURNAMENT FLOW</h3><p>Group stage, knockout or hybrid</p></div></div>
      <div class="hero-info-card"><div class="hero-card-content"><span class="card-step">PUBLISH</span><h3>LIVE EVENT MEDIA</h3><p>Results, standings, event pages and graphics</p></div></div>
      
      <!-- Counter mit Progressbalken -->
      <div class="hero-slider-control">
        <div class="slider-counter"><span id="current-slide">1</span> / 4</div>
        <div class="slider-progress-bar"><div class="progress-fill"></div></div>
      </div>
    </div>

  </div>

  <!-- JAVASCRIPT LOGIK -->
  <script>
  document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".hero-slide");
    const currentSlideTxt = document.getElementById("current-slide");
    const progressFill = document.querySelector(".progress-fill");
    const rightCol = document.querySelector(".hero-col-right");
    
    let currentIndex = 0;
    const slideDuration = 5000;

    const themeColors = ["#FF6249", "#18D96B", "#9F46FF", "#02ABFF"];

    function resetProgressBar() {
      progressFill.style.transition = "none";
      progressFill.style.width = "0%";
      progressFill.style.background = themeColors[currentIndex];
      setTimeout(() => {
        progressFill.style.transition = `width ${slideDuration}ms linear`;
        progressFill.style.width = "100%";
      }, 20);
    }

    function changeSlide() {
      slides[currentIndex].classList.remove("active");
      currentIndex = (currentIndex + 1) % slides.length;
      slides[currentIndex].classList.add("active");
      currentSlideTxt.textContent = currentIndex + 1;
      
      currentSlideTxt.style.color = themeColors[currentIndex];
      rightCol.setAttribute("data-active-theme", currentIndex + 1);
      
      resetProgressBar();
    }

    rightCol.setAttribute("data-active-theme", "1");
    resetProgressBar();
    setInterval(changeSlide, slideDuration);
  });
  </script>
</section>