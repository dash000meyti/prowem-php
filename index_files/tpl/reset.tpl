<div class="auth-container">
  <h1 class="auth-title"><?= t('auth.reset.title') ?></h1>

  <?php if (!empty($_SESSION['flash_error'])): ?>
    <div class="error-message">
      <?= htmlspecialchars($_SESSION['flash_error']); unset($_SESSION['flash_error']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($_SESSION['flash_success'])): ?>
    <div class="success-message">
      <?= htmlspecialchars($_SESSION['flash_success']); unset($_SESSION['flash_success']); ?>
    </div>
  <?php endif; ?>

  <form method="POST" action="index.php?page=reset" class="auth-form">
    <input type="hidden" name="token" value="<?= htmlspecialchars($_GET['token'] ?? $_POST['token'] ?? ''); ?>">
    <input type="hidden" name="reset_password" value="1">

    <div class="label-wrapper password-wrapper">
      <label for="password"><?= t('auth.password') ?></label>
      <div class="password-field">
        <input type="password" id="password" name="password" required>
        <span class="toggle-password" onclick="togglePassword()">👁</span>
      </div>
    </div>

    <div class="button-group">
      <a href="index.php?page=login" class="back-btn"><?= t('auth.back') ?></a>
      <button type="submit" class="login-btn"><?= t('auth.reset.submit') ?></button>
    </div>
  </form>
</div>

<style>
.auth-container{max-width:420px;margin:140px auto 180px auto;padding:36px 32px;background:#27313B;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,.35);}
.auth-title{margin:0 0 28px 0;font-family:'Rajdhani';font-size:38px;font-weight:700;text-align:center;color:#E4E4E4;}
.auth-form{display:flex;flex-direction:column;gap:20px;}
.label-wrapper{display:flex;flex-direction:column;gap:6px;}
.password-wrapper{}
.password-field{position:relative;display:flex;align-items:center;}
.label-wrapper label{font-size:13px;font-weight:600;color:#E4E4E4;}
.label-wrapper input{width:100%;background:#212830;border:1px solid rgba(255,255,255,.15);border-radius:10px;padding:12px 44px 12px 14px;font-size:14px;color:#E4E4E4;}
.label-wrapper input:focus{outline:none;border-color:#FF6249;box-shadow:0 0 0 2px rgba(255,98,73,.2);}
.toggle-password{position:absolute;right:14px;cursor:pointer;font-size:16px;opacity:.7;}
.toggle-password:hover{opacity:1;}
.button-group{display:flex;justify-content:space-between;align-items:center;margin-top:12px;}
.back-btn{color:#E4E4E4;text-decoration:none;font-size:14px;opacity:.8;}
.back-btn:hover{opacity:1;}
.login-btn{background:#FF6249;color:#fff;border:none;border-radius:999px;padding:12px 30px;font-size:14px;font-weight:700;cursor:pointer;}
.login-btn:hover{filter:brightness(1.05);}
.error-message{background:rgba(255,98,73,.15);border:1px solid #FF6249;color:#FF6249;border-radius:10px;padding:12px 14px;font-size:14px;margin-bottom:18px;text-align:center;}
.success-message{background:rgba(0,200,120,.15);border:1px solid #00C878;color:#00C878;border-radius:10px;padding:12px 14px;font-size:14px;margin-bottom:18px;text-align:center;}
@media(max-width:600px){.auth-container{margin:120px 16px 160px 16px;padding:28px 22px;}}
</style>

<script>
function togglePassword(){
  const input=document.getElementById("password");
  input.type=input.type==="password"?"text":"password";
}
</script>