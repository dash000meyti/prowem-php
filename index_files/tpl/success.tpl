<style>
.auth-container{max-width:520px;margin:180px auto 240px auto;padding:50px 36px;background:#27313B;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,.35);text-align:center;}
.success-container{display:flex;flex-direction:column;align-items:center;gap:22px;}
.success-icon{width:100px;height:100px;border-radius:50%;background:#FF6249;display:flex;align-items:center;justify-content:center;}
.success-container h1{margin:0;font-family:'Rajdhani',sans-serif;font-size:36px;font-weight:700;color:#E4E4E4;}
.success-container p{margin:0;font-size:15px;line-height:1.6;color:#E4E4E4;opacity:.9;max-width:420px;}
.button-group{margin-top:12px;}
.back-btn{display:inline-block;background:#212830;color:#fff;padding:12px 34px;border-radius:999px;text-decoration:none;font-size:14px;font-weight:700;}
.back-btn:hover{filter:brightness(1.05);}
</style>

<div class="auth-container success-container">
    <div class="success-icon">
        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 6L9 17l-5-5"/>
        </svg>
    </div>
    <h1><?= t('auth.success.title') ?></h1>
    <p><?= t('auth.success.body') ?></p>
    <div class="button-group">
        <a href="index.php" class="back-btn"><?= t('auth.success.back') ?></a>
    </div>
</div>
