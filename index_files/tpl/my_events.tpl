<style>
.auth-container{max-width:1100px;margin:160px auto 260px auto;padding:40px 36px;background:#27313B;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,.35);}
.event-list ul{list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:14px;}
.event-row{display:flex;align-items:center;justify-content:space-between;gap:18px;padding:16px 18px;background:#212830;border-radius:12px;}
.event-main{min-width:0;display:flex;flex-direction:column;gap:4px;}
.event-name{font-size:15px;font-weight:700;color:#E4E4E4;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.event-id{font-size:12px;color:#E4E4E4;opacity:.7;}
.event-id code{font-family:ui-monospace,Menlo,Consolas,monospace;color:#FF6249;}
.event-actions{display:flex;gap:12px;flex-shrink:0;}
.admin-btn{display:inline-block;padding:10px 16px;border-radius:999px;background:#FF6249;color:#fff;text-decoration:none;font-size:13px;font-weight:800;}
.admin-btn:hover{filter:brightness(1.05);}
.del-btn{display:inline-flex;align-items:center;gap:6px;padding:10px 16px;border-radius:999px;border:none;cursor:pointer;background:#e74c3c;color:#fff;font-size:13px;font-weight:800;}
.del-btn:hover{filter:brightness(1.05);}
.trash{line-height:1;}
.modal{position:fixed;inset:0;display:none;z-index:1100;align-items:center;justify-content:center;}
.modal.open{display:flex;}
.modal__overlay{position:absolute;inset:0;background:rgba(0,0,0,.55);}
.modal__dialog{position:relative;width:min(560px,calc(100% - 2rem));background:#212830;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,.4);overflow:hidden;}
.modal__header{display:flex;justify-content:space-between;align-items:center;padding:14px 16px;background:#FF6249;color:#fff;}
.modal__title{font-size:18px;font-weight:800;}
.modal__close{border:none; background:transparent;font-size:22px;cursor:pointer;line-height:1;padding:6px;color:#fff;}
.modal__body{padding:16px;line-height:1.6;color:#E4E4E4;}
.modal__footer{display:flex;gap:10px;justify-content:flex-end;padding:12px 16px;border-top:1px solid rgba(255,255,255,.1);}
.btn{border:none;border-radius:999px;padding:8px 14px;cursor:pointer;font-size:13px;font-weight:700;}
.btn-secondary{background:#3a424a;color:#fff;}
.btn-danger{background:#e74c3c;color:#fff;}
.event-actions .admin-btn{background:#FF6249 !important;}
@media(max-width:640px){.event-row{flex-direction:column;align-items:flex-start;}.event-actions{width:100%;gap:10px;}}
</style>
<div class="auth-container">
  <div style="max-width:900px;margin:0 auto;">
    <h1><?= t('event.my_title') ?></h1>

    <div class="event-list">
      <ul>
        <?php
        if (isset($_SESSION['user']) && !empty($_SESSION['user']['logged_in']) && empty($_SESSION['user']['is_admin'])) {
            $username    = $_SESSION['user']['username'];
            $events_file = "data/$username/events.csv";
            $has_events  = false;

            if (file_exists($events_file)) {
                if (($file = fopen($events_file, 'r')) !== false) {
                    $headers = fgetcsv($file);
                    while (($row = fgetcsv($file)) !== false) {
                        if (!$row) continue;
                        $event = @array_combine($headers, $row);
                        if (!$event) continue;

                        $has_events = true;
                        $eventId   = htmlspecialchars($event['Eventid']   ?? '');
                        $eventName = htmlspecialchars($event['Eventname'] ?? '');

                        echo '<li class="event-row">';
                          echo '<div class="event-main">';
                            echo '<div class="event-name">', $eventName, '</div>';
                            echo '<div class="event-id">', t('event.id'), ' <code>', $eventId , '</code></div>';
                          echo '</div>';

                          echo '<div class="event-actions">';
                            // Link zum Eventmanager
                            echo '<a href="', $eventId , '/spielplan.php" class="admin-btn" target="_blank">', t('event.manager'), '</a>';

                            // Neues Löschformular
                            echo '<form method="post" action="index.php?page=delete_event" class="delete-form">';
                              echo '<input type="hidden" name="event_id" value="', $eventId, '">';
                              echo '<button type="button" class="del-btn" title="', t('event.delete_title'), '">';
                                echo '<span class="trash" aria-hidden="true">🗑️</span> ', t('event.delete');
                              echo '</button>';
                            echo '</form>';
                          echo '</div>';
                        echo '</li>';
                    }
                    fclose($file);
                }
            }

            if (!$has_events) {
                echo '<p>', t('event.none'), '</p>';
            }
        }
        ?>
      </ul>
    </div>
  </div>
</div>

<!-- Modal: Lösch-Bestätigung -->
<div class="modal" id="delete-modal" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="modal__overlay" data-close-delete></div>
  <div class="modal__dialog" role="document" aria-labelledby="delete-modal-title">
    <div class="modal__header">
      <div class="modal__title" id="delete-modal-title"><?= t('event.confirm_delete') ?></div>
      <button class="modal__close" type="button" aria-label="<?= t('event.close') ?>" title="<?= t('event.close') ?>" data-close-delete>&times;</button>
    </div>
    <div class="modal__body" id="delete-modal-body"></div>
    <div class="modal__footer">
      <button type="button" class="btn btn-secondary" data-close-delete><?= t('event.cancel') ?></button>
      <button type="button" class="btn btn-danger" data-confirm-delete><?= t('event.delete_forever') ?></button>
    </div>
  </div>
</div>

<style>
.event-list ul {list-style:none;margin:0;padding:0;}
.event-row {display:flex;align-items:center;justify-content:space-between;gap:16px;padding:12px 14px;border-bottom:1px solid #eee;}
.event-main {min-width:0;}
.event-name {font-weight:600;line-height:1.2;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.event-id {margin-top:4px;font-size:12px;color:#666;word-break:break-all;}
.event-id code {font-family:ui-monospace,Menlo,Consolas,monospace;}
.event-actions {display:flex;gap:10px;flex-shrink:0;}
.admin-btn {display:inline-block;padding:8px 12px;border-radius:10px;background:#0d6efd;color:#fff;text-decoration:none;font-size:14px;}
.del-btn {display:inline-flex;align-items:center;gap:6px;padding:8px 12px;border-radius:10px;border:none;cursor:pointer;background:#dc3545;color:#fff;font-size:14px;}
.del-btn .trash {line-height:1;}
@media(max-width:640px){.event-row{flex-direction:column;align-items:flex-start;}.event-actions{width:100%;gap:8px;}}
.modal{position:fixed;inset:0;display:none;z-index:1100;align-items:center;justify-content:center;}
.modal.open{display:flex;}
.modal__overlay{position:absolute;inset:0;background:rgba(0,0,0,.45);}
.modal__dialog{position:relative;width:min(560px,calc(100% - 2rem));background:#fff;border-radius:12px;box-shadow:0 10px 30px rgba(0,0,0,.2);overflow:hidden;}
.modal__header{display:flex;justify-content:space-between;align-items:center;padding:14px 16px;border-bottom:1px solid #eee;background:#d36846;color:#fff;}
.modal__title{font-size:18px;font-weight:700;}
.modal__close{border:none;background:transparent;font-size:22px;cursor:pointer;line-height:1;padding:6px;color:#fff;}
.modal__body{padding:16px;line-height:1.5;color:#222;}
.modal__footer{display:flex;gap:10px;justify-content:flex-end;padding:12px 16px;border-top:1px solid #eee;}
.btn{border:none;border-radius:8px;padding:8px 12px;cursor:pointer;font-size:14px;}
.btn-secondary{background:#e9ecef;color:#333;}
.btn-danger{background:#dc3545;color:#fff;}
</style>

<script>
(function(){
  const modal = document.getElementById('delete-modal');
  const body  = document.getElementById('delete-modal-body');
  const confirm = modal.querySelector('[data-confirm-delete]');
  let formToSubmit = null;
  const eventI18n = {
    intro: <?= json_encode(\Prowem\Lang::t('event.delete_intro'), JSON_UNESCAPED_UNICODE) ?>,
    details: <?= json_encode(\Prowem\Lang::t('event.delete_details'), JSON_UNESCAPED_UNICODE) ?>,
    irreversible: <?= json_encode(\Prowem\Lang::t('event.delete_irreversible'), JSON_UNESCAPED_UNICODE) ?>
  };

  document.addEventListener('click', (e) => {
    const btn = e.target.closest('.del-btn');
    if (!btn) return;
    e.preventDefault();

    const row  = btn.closest('.event-row');
    const name = (row?.querySelector('.event-name')?.textContent || '').trim();
    const id   = (row?.querySelector('.event-id code')?.textContent || '').trim();
    formToSubmit = btn.closest('form');

    const intro = eventI18n.intro.replace('{id}', id || '-').replace('{name}', name || '');
    body.innerHTML = `
      <p>${intro}</p>
      <p>${eventI18n.details}</p>
      <p>${eventI18n.irreversible}</p>
    `;

    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
  });

  confirm.addEventListener('click', () => {
    if (formToSubmit) formToSubmit.submit();
  });

  function closeModal(){
    modal.classList.remove('open');
    document.body.style.overflow = '';
    formToSubmit = null;
  }
  modal.addEventListener('click', (e) => {
    if (e.target.matches('[data-close-delete]') || e.target === modal) closeModal();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
  });
})();
</script>
