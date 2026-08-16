<style>
.auth-container{max-width:1100px;margin:160px auto 260px auto;padding:40px 36px;background:#27313B;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,.35);}
.event-form{display:flex;flex-direction:column;gap:16px;}
.label-wrapper{display:flex;flex-direction:column;gap:6px;position:relative;}
.label-wrapper label{font-size:13px;font-weight:700;color:#E4E4E4;}
.label-wrapper input{width:100%;box-sizing:border-box;padding:12px 14px;border-radius:10px;border:1px solid rgba(255,255,255,.25);background:#212830;color:#E4E4E4;font-size:14px;}
.label-wrapper input:focus{outline:none;border-color:#FF6249;}
.pin-hint{font-size:12px;color:#E4E4E4;opacity:.6;margin-top:4px;}
.create-event-btn{margin-top:12px;align-self:center;padding:12px 28px;border:none;border-radius:999px;background:#FF6249;color:#fff;font-size:14px;font-weight:800;cursor:pointer;}
.create-event-btn:hover{filter:brightness(1.05);}
@media(max-width:900px){.auth-container{margin:120px 16px 220px 16px;padding:28px 22px;}}
</style>

<div class="auth-container">
  <div style="max-width:800px;width:100%;margin:0 auto;">
    <h1 style="text-align:center;"><?= t('event.create_title') ?></h1>

    <form method="post" action="index.php?page=create_event" class="event-form">
      <div class="label-wrapper">
        <label for="event_name"><?= t('event.name') ?></label>
        <input type="text" name="event_name" id="event_name" required>
      </div>

      <div class="label-wrapper">
        <label for="event_date"><?= t('event.date') ?></label>
        <input type="date" name="event_date" id="event_date" required>
      </div>

      <div class="label-wrapper">
        <label for="pin"><?= t('event.pin') ?></label>
        <input type="text" name="pin" id="pin" maxlength="6" pattern="\d{6}" required>
        <span class="pin-hint"><?= t('event.pin_hint') ?></span>
      </div>

      <button type="submit" class="create-event-btn"><?= t('event.create_submit') ?></button>
    </form>
  </div>
</div>
