<header class="site-header">
  <div class="header-inner">

    <div class="header-left">
      <a href="index.php" class="brand">
        <img src="./logo.svg" alt="Prowem" class="brand-logo">
      </a>

      <nav class="nav-desktop">
        <ul class="nav-list">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php?page=app">My Event-App</a></li>
          <li><a href="index.php?page=videomanager">My Broadcast</a></li>
          <li><a href="index.php?page=socialmedia">My Socialmedia</a></li>
          <li><a href="index.php?page=myClub">My Club</a></li>
          <li><a href="index.php?page=eventteam">Prowem Event Team</a></li>

          <?php if (!empty($_SESSION['user']['logged_in'])): ?>
            <?php if (!empty($_SESSION['user']['is_admin'])): ?>
              <li><a href="index.php?page=all_events">All Events</a></li>
              <li><a href="index.php?page=admin">Admin</a></li>
              <li><a href="index.php?page=logout">Logout</a></li>
            <?php else: ?>
              <li><a href="Dashboard.php" class="nav-dashboard">Dashboard</a></li>
              <li><a href="index.php?page=logout">Logout</a></li>
            <?php endif; ?>
          <?php else: ?>
            <li><a href="index.php?page=login">Login</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>

    <div class="header-right">
      <?php if (empty($_SESSION['user']['logged_in'])): ?>
        <a href="index.php?page=register" class="nav-cta">Get started</a>
      <?php endif; ?>
      <button class="burger-btn">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>

  <nav class="nav-mobile">
    <div class="nav-overlay"></div>
    <ul class="nav-mobile-list">
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php?page=app">My Event-App</a></li>
      <li><a href="index.php?page=videomanager">My Broadcast</a></li>
      <li><a href="index.php?page=socialmedia">My Socialmedia</a></li>
      <li><a href="index.php?page=myClub">My Club</a></li>
      <li><a href="index.php?page=eventteam">Prowem Event Team</a></li>


      <?php if (!empty($_SESSION['user']['logged_in'])): ?>
        <?php if (!empty($_SESSION['user']['is_admin'])): ?>
          <li><a href="index.php?page=all_events">All Events</a></li>
          <li><a href="index.php?page=admin">Admin</a></li>
          <li><a href="index.php?page=logout">Logout</a></li>
        <?php else: ?>
          <li><a href="Dashboard.php" class="nav-dashboard">Dashboard</a></li>
          <li><a href="index.php?page=logout">Logout</a></li>
        <?php endif; ?>
      <?php else: ?>
        <li><a href="index.php?page=login">Login</a></li>
        <li><a href="index.php?page=register">Get started</a></li>
      <?php endif; ?>
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

  // Beim Scrollen UND direkt beim Laden prüfen
  window.addEventListener('scroll', checkScroll);
  checkScroll();
});
</script>
