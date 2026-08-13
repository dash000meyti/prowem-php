<?php
// register.php – (English Version)
?>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
.auth-page-wrapper { width: 100%; min-height: 100vh; background: url('img/reg.png') no-repeat center center; background-size: cover; display: flex; justify-content: center; align-items: center; padding: 40px 20px; position: relative; box-sizing: border-box; font-family: 'Inter', sans-serif; }
.auth-page-wrapper::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1; }
.auth-container { position: relative; z-index: 2; width: 100%; max-width: 540px; padding: 40px; background: rgba(30, 37, 45, 0.65); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 24px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5); box-sizing: border-box; }
.auth-title { margin-bottom: 8px; font-family: 'Rajdhani', sans-serif; font-size: 36px; font-weight: 700; text-align: center; color: #FFF; text-transform: uppercase; letter-spacing: 1px; }
.auth-subtitle { font-size: 14px; color: rgba(255, 255, 255, 0.6); text-align: center; margin-bottom: 30px; }
.auth-form { display: flex; flex-direction: column; gap: 16px; }
.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.label-wrapper { display: flex; flex-direction: column; gap: 6px; }
.label-wrapper label { font-size: 13px; font-weight: 500; color: rgba(255, 255, 255, 0.85); text-align: left; }
.label-wrapper input { background: rgba(20, 26, 33, 0.7); color: #FFF; border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 10px; padding: 12px 16px; font-size: 14px; transition: all 0.2s ease; box-sizing: border-box; }
.label-wrapper input::placeholder { color: rgba(255, 255, 255, 0.3); }
.label-wrapper input:focus { outline: none; border-color: #FF6249; background: rgba(20, 26, 33, 0.9); box-shadow: 0 0 0 3px rgba(255, 98, 73, 0.2); }
.button-group { display: flex; align-items: center; gap: 14px; margin-top: 14px; }
.back-btn { display: flex; align-items: center; justify-content: center; width: 46px; height: 46px; border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 50%; color: #FFF; text-decoration: none; transition: all 0.2s ease; flex-shrink: 0; box-sizing: border-box; }
.back-btn:hover { background: rgba(255, 255, 255, 0.1); border-color: #FFF; }
.register-btn { flex-grow: 1; background: #FF6249; color: #000000; border: none; border-radius: 999px; padding: 14px 24px; font-size: 15px; font-weight: 700; cursor: pointer; transition: transform 0.1s ease, filter 0.2s ease; display: flex; justify-content: center; align-items: center; gap: 8px; box-sizing: border-box; }
.register-btn:hover { filter: brightness(1.1); }
.register-btn:active { transform: scale(0.98); }
.login-redirect { text-align: center; margin-top: 24px; font-size: 14px; color: rgba(255, 255, 255, 0.6); }
.login-redirect a { color: #FF6249; text-decoration: none; font-weight: 600; }
.login-redirect a:hover { text-decoration: underline; }
.modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.75); display: flex; align-items: center; justify-content: center; z-index: 999; opacity: 0; pointer-events: none; transition: .25s; }
.modal-overlay.active { opacity: 1; pointer-events: auto; }
.modal-box { background: #27313B; border-radius: 16px; padding: 32px; max-width: 420px; width: 90%; text-align: center; }
.modal-title { font-family: 'Rajdhani', sans-serif; font-size: 26px; font-weight: 700; color: #FFF; margin-bottom: 10px; }
.modal-text { font-size: 15px; color: rgba(255,255,255,0.8); margin-bottom: 22px; }
.modal-btn { background: #FF6249; color: #fff; border: none; border-radius: 999px; padding: 12px 30px; font-size: 14px; font-weight: 700; cursor: pointer; }
@media (max-width: 480px) { .form-grid { grid-template-columns: 1fr; } }
</style>

<div class="auth-page-wrapper">
  <div class="auth-container">
    <h1 class="auth-title">Welcome</h1>
    <p class="auth-subtitle">Create an account to complete your registration.</p>

    <?php if (!empty($_SESSION['flash_error'])): ?>
      <div style="background:#ff4d4d; padding:12px; border-radius:10px; margin-bottom:20px; color:#fff; text-align:center; font-size:14px; font-weight:500;">
        <?= $_SESSION['flash_error']; unset($_SESSION['flash_error']); ?>
      </div>
    <?php endif; ?>

    <form method="post" action="index.php?page=register" class="auth-form" id="preRegisterForm">
      <input type="hidden" name="form" value="pre_register">

      <div class="form-grid">
          <div class="label-wrapper">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="John" required>
          </div>
          <div class="label-wrapper">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="Doe" required>
          </div>
      </div>

      <div class="label-wrapper">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="you@example.com" required>
      </div>

      <div class="label-wrapper">
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" placeholder="+43 660 1234567" required>
      </div>

      <div class="form-grid">
          <div class="label-wrapper">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••" required>
          </div>
          <div class="label-wrapper">
            <label for="password_repeat">Confirm Password</label>
            <input type="password" name="password_repeat" id="password_repeat" placeholder="••••••" required>
          </div>
      </div>

      <div class="button-group">
        <a href="index.php?page=login" class="back-btn" title="Back">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </a>
        <button type="submit" name="pre_register" class="register-btn">
          <span>Register</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </button>
      </div>

      <div class="login-redirect">
          Already registered? <a href="index.php?page=login">Sign in</a>
      </div>

    </form>
  </div>
</div>

<?php if (!empty($_SESSION['flash_success'])): ?>
<div class="modal-overlay" id="successModal">
  <div class="modal-box">
    <div class="modal-title">Success</div>
    <div class="modal-text">
      <?= $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?>
    </div>
    <button class="modal-btn" onclick="window.location.href='index.php'">To Homepage</button>
  </div>
</div>
<?php endif; ?>

<script>
document.getElementById('preRegisterForm').addEventListener('submit',function(e){
  const p=document.getElementById('password').value;
  const r=document.getElementById('password_repeat').value;
  if(p!==r){
    alert('Passwords do not match.');
    e.preventDefault();
    return false;
  }
});
document.addEventListener('DOMContentLoaded',()=>{
  const m=document.getElementById('successModal');
  if(m){setTimeout(()=>m.classList.add('active'),50);}
});
</script>