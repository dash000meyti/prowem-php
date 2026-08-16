<?php
// login.php – Design adapted to Register page (English Version)
$login_error = $_SESSION['flash_error'] ?? '';
unset($_SESSION['flash_error']);
?>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
.auth-page-wrapper { width: 100%; min-height: 100vh; background: url('img/reg.png') no-repeat center center; background-size: cover; display: flex; justify-content: center; align-items: center; padding: 40px 20px; position: relative; box-sizing: border-box; font-family: 'Inter', sans-serif; }
.auth-page-wrapper::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1; }
.auth-container { position: relative; z-index: 2; width: 100%; max-width: 540px; padding: 40px; background: rgba(30, 37, 45, 0.65); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 24px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5); box-sizing: border-box; }
.auth-title { margin-bottom: 8px; font-family: 'Rajdhani', sans-serif; font-size: 36px; font-weight: 700; text-align: center; color: #FFF; text-transform: uppercase; letter-spacing: 1px; }
.auth-subtitle { font-size: 14px; color: rgba(255, 255, 255, 0.6); text-align: center; margin-bottom: 30px; }
.auth-form { display: flex; flex-direction: column; gap: 16px; }
.label-wrapper { display: flex; flex-direction: column; gap: 6px; }
.label-wrapper label { font-size: 13px; font-weight: 500; color: rgba(255, 255, 255, 0.85); text-align: left; }
.label-wrapper input { background: rgba(20, 26, 33, 0.7); color: #FFF; border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 10px; padding: 12px 16px; font-size: 14px; transition: all 0.2s ease; box-sizing: border-box; }
.label-wrapper input::placeholder { color: rgba(255, 255, 255, 0.3); }
.label-wrapper input:focus { outline: none; border-color: #FF6249; background: rgba(20, 26, 33, 0.9); box-shadow: 0 0 0 3px rgba(255, 98, 73, 0.2); }
.forgot-wrapper { display: flex; justify-content: flex-end; margin-top: -4px; }
.forgot-link { font-size: 13px; color: #FF6249; text-decoration: none; font-weight: 500; }
.forgot-link:hover { text-decoration: underline; }
.button-group { display: flex; align-items: center; gap: 14px; margin-top: 14px; }
.back-btn { display: flex; align-items: center; justify-content: center; width: 46px; height: 46px; border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 50%; color: #FFF; text-decoration: none; transition: all 0.2s ease; flex-shrink: 0; box-sizing: border-box; }
.back-btn:hover { background: rgba(255, 255, 255, 0.1); border-color: #FFF; }
.login-btn { flex-grow: 1; background: #FF6249; color: #000000; border: none; border-radius: 999px; padding: 14px 24px; font-size: 15px; font-weight: 700; cursor: pointer; transition: transform 0.1s ease, filter 0.2s ease; display: flex; justify-content: center; align-items: center; gap: 8px; box-sizing: border-box; }
.login-btn:hover { filter: brightness(1.1); }
.login-btn:active { transform: scale(0.98); }
.register-redirect { text-align: center; margin-top: 24px; font-size: 14px; color: rgba(255, 255, 255, 0.6); }
.register-redirect a { color: #FF6249; text-decoration: none; font-weight: 600; }
.register-redirect a:hover { text-decoration: underline; }
.error-message { background: #ff4d4d; padding: 12px; border-radius: 10px; margin-bottom: 20px; color: #fff; text-align: center; font-size: 14px; font-weight: 500; }
</style>

<div class="auth-page-wrapper">
  <div class="auth-container">
    <h1 class="auth-title"><?= t('auth.login.title') ?></h1>
    <p class="auth-subtitle"><?= t('auth.login.subtitle') ?></p>

    <?php if (!empty($login_error)): ?>
      <div class="error-message">
        <?php echo htmlspecialchars($login_error); ?>
      </div>
    <?php endif; ?>

    <form id="login-form" action="index.php?page=login" method="POST" class="auth-form">
      <input type="hidden" name="login" value="1">

      <!-- Email -->
      <div class="label-wrapper">
        <label for="username"><?= t('auth.email') ?></label>
        <input type="email" id="username" name="username" required autocomplete="username" inputmode="email" placeholder="<?= t('auth.email_placeholder') ?>" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
      </div>

      <!-- Password -->
      <div class="label-wrapper">
        <label for="password"><?= t('auth.password') ?></label>
        <input type="password" id="password" name="password" placeholder="<?= t('auth.password_placeholder') ?>" required>
      </div>

      <!-- Forgot Password -->
      <div class="forgot-wrapper">
        <a href="index.php?page=forgot" class="forgot-link"><?= t('auth.forgot') ?></a>
      </div>

      <!-- Buttons -->
      <div class="button-group">
        <a href="index.php" class="back-btn" title="<?= t('auth.back') ?>">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </a>
        <button type="submit" class="login-btn">
          <span><?= t('auth.login.submit') ?></span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </button>
      </div>

      <!-- Redirect to Register -->
      <div class="register-redirect">
        <?= t('auth.login.not_member') ?> <a href="index.php?page=register"><?= t('auth.login.register') ?></a>
      </div>
    </form>
  </div>
</div>