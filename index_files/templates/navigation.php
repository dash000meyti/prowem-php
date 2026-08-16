<header class="site-header">
  <div class="header-inner">

    <div class="header-left">
      <a href="index.php" class="brand">
        <img src="./logo.svg" alt="Prowem" class="brand-logo">
      </a>

      <nav class="nav-desktop">
        <ul class="nav-list">
          <li><a href="index.php"><?= t('nav.home') ?></a></li>
          <li><a href="index.php?page=app"><?= t('nav.app') ?></a></li>
          <li><a href="index.php?page=videomanager"><?= t('nav.broadcast') ?></a></li>
          <li><a href="index.php?page=socialmedia"><?= t('nav.social') ?></a></li>
          <li><a href="index.php?page=myClub"><?= t('nav.club') ?></a></li>
          <li><a href="index.php?page=eventteam"><?= t('nav.eventteam') ?></a></li>

          <?php if (!empty($_SESSION['user']['logged_in'])): ?>
            <?php if (!empty($_SESSION['user']['is_admin'])): ?>
              <li><a href="index.php?page=all_events"><?= t('nav.all_events') ?></a></li>
              <li><a href="index.php?page=admin"><?= t('nav.admin') ?></a></li>
              <li><a href="index.php?page=logout"><?= t('nav.logout') ?></a></li>
            <?php else: ?>
              <li><a href="Dashboard.php" class="nav-dashboard"><?= t('nav.dashboard') ?></a></li>
              <li><a href="index.php?page=logout"><?= t('nav.logout') ?></a></li>
            <?php endif; ?>
          <?php else: ?>
            <li><a href="index.php?page=login"><?= t('nav.login') ?></a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>

    <div class="header-right">
      <?php
        $currentLang = \Prowem\Lang::current();
      ?>
      <div class="lang-switcher">
        <button type="button" class="lang-btn" aria-label="<?= t('nav.language') ?>" aria-expanded="false" aria-haspopup="true">
          <img src="img/flags/<?= htmlspecialchars($currentLang, ENT_QUOTES, 'UTF-8') ?>.svg" alt="<?= t('lang.' . $currentLang) ?>" class="lang-flag">
        </button>
        <ul class="lang-dropdown" hidden>
          <?php foreach (\Prowem\Lang::supported() as $code => $name): ?>
            <li>
              <a href="<?= htmlspecialchars(\Prowem\Lang::switchUrl($code), ENT_QUOTES, 'UTF-8') ?>" class="lang-option<?= $code === $currentLang ? ' is-active' : '' ?>">
                <img src="img/flags/<?= htmlspecialchars($code, ENT_QUOTES, 'UTF-8') ?>.svg" alt="" class="lang-flag">
                <span><?= t('lang.' . $code) ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php if (empty($_SESSION['user']['logged_in'])): ?>
        <a href="index.php?page=register" class="nav-cta"><?= t('nav.get_started') ?></a>
      <?php endif; ?>
      <button class="burger-btn" type="button" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>

  <nav class="nav-mobile">
    <div class="nav-overlay"></div>
    <ul class="nav-mobile-list">
      <li><a href="index.php"><?= t('nav.home') ?></a></li>
      <li><a href="index.php?page=app"><?= t('nav.app') ?></a></li>
      <li><a href="index.php?page=videomanager"><?= t('nav.broadcast') ?></a></li>
      <li><a href="index.php?page=socialmedia"><?= t('nav.social') ?></a></li>
      <li><a href="index.php?page=myClub"><?= t('nav.club') ?></a></li>
      <li><a href="index.php?page=eventteam"><?= t('nav.eventteam') ?></a></li>


      <?php if (!empty($_SESSION['user']['logged_in'])): ?>
        <?php if (!empty($_SESSION['user']['is_admin'])): ?>
          <li><a href="index.php?page=all_events"><?= t('nav.all_events') ?></a></li>
          <li><a href="index.php?page=admin"><?= t('nav.admin') ?></a></li>
          <li><a href="index.php?page=logout"><?= t('nav.logout') ?></a></li>
        <?php else: ?>
          <li><a href="Dashboard.php" class="nav-dashboard"><?= t('nav.dashboard') ?></a></li>
          <li><a href="index.php?page=logout"><?= t('nav.logout') ?></a></li>
        <?php endif; ?>
      <?php else: ?>
        <li><a href="index.php?page=login"><?= t('nav.login') ?></a></li>
        <li><a href="index.php?page=register"><?= t('nav.get_started') ?></a></li>
      <?php endif; ?>

      <li class="lang-mobile-row">
        <span class="lang-mobile-label"><?= t('nav.language') ?></span>
        <div class="lang-mobile-options">
          <?php foreach (\Prowem\Lang::supported() as $code => $name): ?>
            <a href="<?= htmlspecialchars(\Prowem\Lang::switchUrl($code), ENT_QUOTES, 'UTF-8') ?>" class="lang-mobile-option<?= $code === $currentLang ? ' is-active' : '' ?>">
              <img src="img/flags/<?= htmlspecialchars($code, ENT_QUOTES, 'UTF-8') ?>.svg" alt="<?= t('lang.' . $code) ?>" class="lang-flag">
            </a>
          <?php endforeach; ?>
        </div>
      </li>
    </ul>
  </nav>
</header>

<style>
.nav-dashboard{background:#FF6249;color:#ffffff !important;padding:8px 14px;border-radius:10px;font-weight:700;}
.nav-dashboard:hover{background:#ff7a63;}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  
  function checkScroll() {
    if (window.scrollY > 5) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', checkScroll);
  checkScroll();

  const switcher = document.querySelector('.lang-switcher');
  if (!switcher) return;
  const btn = switcher.querySelector('.lang-btn');
  const menu = switcher.querySelector('.lang-dropdown');

  function closeLang() {
    switcher.classList.remove('open');
    btn.setAttribute('aria-expanded', 'false');
    menu.hidden = true;
  }

  function toggleLang(e) {
    e.stopPropagation();
    const open = !switcher.classList.contains('open');
    switcher.classList.toggle('open', open);
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    menu.hidden = !open;
  }

  btn.addEventListener('click', toggleLang);
  document.addEventListener('click', (e) => {
    if (!switcher.contains(e.target)) closeLang();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeLang();
  });
});
</script>
