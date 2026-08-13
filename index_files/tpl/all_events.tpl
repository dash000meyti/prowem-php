<style>
.auth-container{max-width:1100px;margin:160px auto 260px auto;padding:40px 36px;background:#27313B;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,.35);}
.admin-inner{display:flex;flex-direction:column;gap:28px;}
.admin-inner h1{margin:0;font-family:'Rajdhani',sans-serif;font-size:38px;font-weight:700;color:#E4E4E4;text-align:center;}
.event-list{display:flex;flex-direction:column;gap:18px;}
.event-list ul{list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:12px;}
.event-list li{display:grid;grid-template-columns:40px 1.6fr 1.4fr auto;align-items:center;gap:16px;background:#212830;border-radius:12px;padding:14px 18px;}
.event-number{font-size:14px;font-weight:700;color:#FF6249;}
.event-name{font-size:15px;font-weight:600;color:#E4E4E4;}
.event-organizer{font-size:14px;color:#E4E4E4;opacity:.85;}
.admin-btn{display:inline-block;padding:8px 20px;border-radius:999px;text-decoration:none;font-size:13px;font-weight:800;text-align:center;}
.pin-btn{background:#FF6249;color:#fff;}
.pin-btn:hover{filter:brightness(1.05);}
@media(max-width:900px){.event-list li{grid-template-columns:30px 1fr;grid-template-rows:auto auto auto;row-gap:8px;}.event-organizer{grid-column:1 / -1;}.admin-btn{justify-self:flex-start;}}
</style>

<div class="auth-container">
    <div class="admin-inner">
        <h1>All Events</h1>
        <div class="event-list">
            <?php
            $csv_file = 'data/users.csv';
            $all_events = [];
            $users = [];
            if (file_exists($csv_file)) {
                $file = fopen($csv_file, 'r');
                $headers = fgetcsv($file, 0, ';');
                $username_index = array_search('username', $headers);
                $firstname_index = array_search('firstname', $headers);
                $lastname_index = array_search('lastname', $headers);
                while (($row = fgetcsv($file, 0, ';')) !== false) {
                    if ($row[$username_index] !== 'admin') {
                        $users[$row[$username_index]] = [
                            'firstname' => $row[$firstname_index],
                            'lastname' => $row[$lastname_index]
                        ];
                        $events_file = "data/{$row[$username_index]}/events.csv";
                        if (file_exists($events_file)) {
                            $event_file = fopen($events_file, 'r');
                            $event_headers = fgetcsv($event_file);
                            while (($event_row = fgetcsv($event_file)) !== false) {
                                $event = array_combine($event_headers, $event_row);
                                $event['username'] = $row[$username_index];
                                $pin_file = "{$event['Eventid']}/pin.csv";
                                $event['pin'] = file_exists($pin_file) ? trim(file_get_contents($pin_file)) : 'N/A';
                                $all_events[] = $event;
                            }
                            fclose($event_file);
                        }
                    }
                }
                fclose($file);
            }
            if (empty($all_events)):
            ?>
                <p>Derzeit keine Events</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($all_events as $index => $event): ?>
                        <li>
                            <span class="event-number"><?php echo $index + 1; ?>.</span>
                            <span class="event-name"><?php echo htmlspecialchars($event['Eventname']); ?></span>
                            <span class="event-organizer"><?php echo htmlspecialchars($users[$event['username']]['firstname'] . ' ' . $users[$event['username']]['lastname']); ?></span>
                            <a href="<?php echo htmlspecialchars($event['Eventid']); ?>/spielplan.php" class="admin-btn pin-btn" data-pin="<?php echo htmlspecialchars($event['pin']); ?>" target="_blank"><?php echo htmlspecialchars($event['pin']); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
     </div>
</div>
