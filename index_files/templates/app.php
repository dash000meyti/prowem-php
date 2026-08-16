<?php
// app.php – Event Manager Hero
?>
<link rel="stylesheet" href="index_files/templates/app.css">

<section class="event-hero-section">
  <!-- Hintergrund-Medium -->
  <div class="event-hero-bg">
    <picture>
      <source media="(max-width: 768px)" srcset="img/sections/app/Mobile%20Hero%20BG%20E.png">
      <img src="img/sections/app/Hero-Bg.png" alt="<?= t('app.hero.alt') ?>" loading="eager">
    </picture>
  </div>

  <!-- Hero Content Left -->
  <div class="event-hero-container">
    <div class="event-hero-content">
      <span class="event-hero-sub"><?= t('app.hero.sub') ?></span>
      <h1 class="font-bebas">
        <?= t('app.hero.title_1') ?><br>
        <span class="text-orange"><?= t('app.hero.title_2') ?></span>
      </h1>
      <p class="event-hero-lead">
        <?= t('app.hero.lead') ?>
      </p>

      <div class="event-hero-actions">
        <a href="?page=register" class="btn-primary-orange">
          <span><?= t('app.hero.cta') ?></span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
        <a href="#team" class="btn-secondary-link"><?= t('app.hero.team') ?></a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/app/section2.php'; ?>
<?php include __DIR__ . '/app/section3.php'; ?>
<?php include __DIR__ . '/app/section4.php'; ?>
<?php include __DIR__ . '/app/section5.php'; ?>
<?php include __DIR__ . '/app/section6.php'; ?>
<?php include __DIR__ . '/app/section7.php'; ?>
<?php include __DIR__ . '/app/section8.php'; ?>
<?php include __DIR__ . '/app/section9.php'; ?>
