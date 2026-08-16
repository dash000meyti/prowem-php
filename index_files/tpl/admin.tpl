<?php
    $csv_file = 'data/users.csv';
    $users = [];

    if (file_exists($csv_file)) {
        if (($file = fopen($csv_file, 'r')) !== false) {

            $headers = fgetcsv($file, 0, ';');

            while (($row = fgetcsv($file, 0, ';')) !== false) {
                $users[] = array_combine($headers, $row);
            }

            fclose($file);
        }
    }

    $openUsers = array_filter($users, function ($u) {
        return ($u['status'] ?? '') === 'pending';
    });

    $allUsers = $users;
?>

<style>
.auth-container{max-width:1100px;margin:160px auto 260px auto;padding:40px 36px;background:#27313B;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,.35);}
.admin-inner{display:flex;flex-direction:column;gap:26px;}
.toggle-section{display:flex;flex-direction:column;gap:22px;}
.toggle-header-container{display:flex;gap:26px;justify-content:center;align-items:center;}
.toggle-header{margin:0;font-family:'Rajdhani',sans-serif;font-size:20px;font-weight:800;letter-spacing:.5px;color:#E4E4E4;opacity:.5;cursor:pointer;user-select:none;}
.toggle-header.active{opacity:1;color:#FF6249;}
.user-list{display:none;flex-direction:column;gap:18px;}
.user-list.active{display:flex;}
.user-item{background:#212830;border:1px solid rgba(255,255,255,.08);border-radius:14px;padding:18px;display:flex;flex-direction:column;gap:8px;}
.button-group{display:flex;gap:12px;margin-top:8px;}
.user-table{width:100%;border-collapse:collapse;background:#212830;border-radius:12px;overflow:hidden;}
.user-table th{padding:14px;text-align:left;font-size:13px;color:#E4E4E4;background:#1b2229;}
.user-table td{padding:14px;font-size:14px;color:#E4E4E4;border-top:1px solid rgba(255,255,255,.08);}
.status-button-group{display:flex;gap:10px;}
.status-btn{width:18px;height:18px;border-radius:50%;border:none;cursor:pointer;opacity:.35;transition:.15s;}
.status-btn.active{opacity:1;}
.status-accepted{background:#2ecc71;}
.status-denied{background:#e74c3c;}
.user-id-image{width:220px;max-width:100%;border-radius:10px;border:1px solid rgba(255,255,255,.18);}
.delete-user-btn{background:#e74c3c;border:none;color:#fff;padding:6px 10px;border-radius:6px;cursor:pointer;font-size:13px;}
.modal-overlay{position:fixed;inset:0;background:rgba(0,0,0,.6);display:none;align-items:center;justify-content:center;z-index:9999;}
.modal-overlay.active{display:flex;}
.modal-box{background:#27313B;padding:30px;border-radius:14px;width:320px;text-align:center;box-shadow:0 10px 30px rgba(0,0,0,.5);}
.modal-buttons{display:flex;gap:20px;justify-content:center;margin-top:20px;}
.modal-btn{padding:8px 18px;border:none;border-radius:8px;cursor:pointer;font-weight:600;}
.modal-yes{background:#e74c3c;color:#fff;}
.modal-no{background:#95a5a6;color:#fff;}
.all-users-desktop{display:block;}
.all-users-mobile{display:none;flex-direction:column;gap:18px;}
@media(max-width:768px){.all-users-desktop{display:none;}}
@media(max-width:768px){.all-users-mobile{display:flex;}}
.user-card{background:#212830;border:1px solid rgba(255,255,255,.08);border-radius:14px;padding:18px;display:flex;flex-direction:column;gap:8px;}
.user-card-row{display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap;}
.user-card-label{font-weight:600;color:#FF6249;}
.user-card-value{color:#E4E4E4;}
.user-card-actions{display:flex;justify-content:space-between;align-items:center;margin-top:10px;gap:12px;}
</style>

<div class="auth-container">
    <div class="admin-inner">

        <h1><?= t('admin.title') ?></h1>

        <div class="toggle-section">

            <div class="toggle-header-container">
                <h2 class="toggle-header" data-target="open-users"><?= t('admin.open_users') ?></h2>
                <h2 class="toggle-header active" data-target="all-users"><?= t('admin.all_users') ?></h2>
            </div>

            <!-- OPEN USERS -->
            <div id="open-users" class="user-list">

                <?php if (empty($openUsers)): ?>
                    <p><?= t('admin.no_open') ?></p>
                <?php else: ?>

                    <?php foreach ($openUsers as $user): ?>
                        <div class="user-item">

                            <p><strong><?= t('admin.first_name') ?></strong> <?= htmlspecialchars($user['firstname'] ?? '') ?></p>
                            <p><strong><?= t('admin.last_name') ?></strong> <?= htmlspecialchars($user['lastname'] ?? '') ?></p>
                            <p><strong><?= t('admin.email') ?></strong> <?= htmlspecialchars($user['username'] ?? '') ?></p>
                            <p><strong><?= t('admin.tel') ?></strong> <?= htmlspecialchars($user['tel'] ?? '') ?></p>

                            <?php if (!empty($user['id_upload'])): ?>
                                <img src="<?= htmlspecialchars($user['id_upload']) ?>" class="user-id-image" alt="<?= t('admin.id_alt') ?>">
                            <?php endif; ?>

                            <div class="button-group">
                                <button class="status-btn status-accepted" data-username="<?= htmlspecialchars((string)($user['username'] ?? '')) ?>" data-status="accept"></button>
                                <button class="status-btn status-denied" data-username="<?= htmlspecialchars((string)($user['username'] ?? '')) ?>" data-status="deny"></button>
                            </div>

                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>

            <!-- ALL USERS -->
            <div id="all-users" class="user-list active">

                <?php if (empty($allUsers)): ?>
                    <p><?= t('admin.no_users') ?></p>
                <?php else: ?>

                    <div class="all-users-desktop">
                        <table class="user-table">
                            <thead>
                                <tr>
                                    <th><?= t('admin.col_first') ?></th>
                                    <th><?= t('admin.col_last') ?></th>
                                    <th><?= t('admin.col_email') ?></th>
                                    <th><?= t('admin.col_tel') ?></th>
                                    <th><?= t('admin.col_status') ?></th>
                                    <th><?= t('admin.login') ?></th>
                                    <th><?= t('admin.delete') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allUsers as $user): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($user['firstname'] ?? '') ?></td>
                                        <td><?= htmlspecialchars($user['lastname'] ?? '') ?></td>
                                        <td><?= htmlspecialchars($user['username'] ?? '') ?></td>
                                        <td><?= htmlspecialchars($user['tel'] ?? '') ?></td>
                                        <td>
                                            <div class="status-button-group">
                                                <button class="status-btn status-accepted <?= ($user['status'] ?? '') === 'accepted' ? 'active' : '' ?>" data-username="<?= htmlspecialchars((string)($user['username'] ?? '')) ?>" data-status="accept"></button>
                                                <button class="status-btn status-denied <?= ($user['status'] ?? '') === 'denied' ? 'active' : '' ?>" data-username="<?= htmlspecialchars((string)($user['username'] ?? '')) ?>" data-status="deny"></button>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="index.php?page=admin&action=login_as&username=<?= urlencode($user['username']) ?>" class="delete-user-btn" style="background:#3498db;">
                                                <?= t('admin.login') ?>
                                            </a>
                                        </td>
                                        <td>
                                            <button class="delete-user-btn" data-username="<?= htmlspecialchars((string)($user['username'] ?? '')) ?>">🗑</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="all-users-mobile">
                        <?php foreach ($allUsers as $user): ?>
                            <div class="user-card">
                                <div class="user-card-row"><span class="user-card-label"><?= t('admin.col_first') ?></span><span class="user-card-value"><?= htmlspecialchars($user['firstname'] ?? '') ?></span></div>
                                <div class="user-card-row"><span class="user-card-label"><?= t('admin.col_last') ?></span><span class="user-card-value"><?= htmlspecialchars($user['lastname'] ?? '') ?></span></div>
                                <div class="user-card-row"><span class="user-card-label"><?= t('admin.col_email') ?></span><span class="user-card-value"><?= htmlspecialchars($user['username'] ?? '') ?></span></div>
                                <div class="user-card-row"><span class="user-card-label"><?= t('admin.col_tel') ?></span><span class="user-card-value"><?= htmlspecialchars($user['tel'] ?? '') ?></span></div>

                                <div class="user-card-actions">

                                    <div class="status-button-group">
                                        <button class="status-btn status-accepted <?= ($user['status'] ?? '') === 'accepted' ? 'active' : '' ?>" data-username="<?= htmlspecialchars((string)($user['username'] ?? '')) ?>" data-status="accept"></button>
                                        <button class="status-btn status-denied <?= ($user['status'] ?? '') === 'denied' ? 'active' : '' ?>" data-username="<?= htmlspecialchars((string)($user['username'] ?? '')) ?>" data-status="deny"></button>
                                    </div>

                                    <a href="index.php?page=admin&action=login_as&username=<?= urlencode($user['username']) ?>" class="delete-user-btn" style="background:#3498db;">
                                        <?= t('admin.login') ?>
                                    </a>

                                    <button class="delete-user-btn" data-username="<?= htmlspecialchars((string)($user['username'] ?? '')) ?>">🗑</button>

                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>

            </div>

        </div>
    </div>
</div>