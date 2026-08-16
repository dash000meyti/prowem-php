<?php
namespace Prowem;

/**
 * Creates an event CSV row and copies a standard event folder for the logged-in user.
 */
class EventHandler
{
    public function createEvent()
    {
        if (!isset($_SESSION['user']) || !$_SESSION['user']['logged_in'] || !isset($_SESSION['user']['username'])) {
            header('Location: index.php?page=login');
            exit;
        }

        $username   = $_SESSION['user']['username'];
        $event_name = $_POST['event_name'] ?? '';
        $event_date = $_POST['event_date'] ?? '';
        $pin        = $_POST['pin'] ?? '';
        $event_type = $_POST['event_type'] ?? 'turnier';

        // === Validierung ===
        if (empty($event_name)) {
            $_SESSION['create_error'] = \Prowem\Lang::t('event.error.name');
            header('Location: index.php?page=create_event');
            exit;
        }
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $event_date)) {
            $_SESSION['create_error'] = \Prowem\Lang::t('event.error.date');
            header('Location: index.php?page=create_event');
            exit;
        }
        if (!preg_match('/^\d{6}$/', $pin)) { // 6-stellig laut Formular
            $_SESSION['create_error'] = \Prowem\Lang::t('event.error.pin');
            header('Location: index.php?page=create_event');
            exit;
        }

        $event_id    = time();
        $user_dir    = "data/$username";
        $events_file = "$user_dir/events.csv";

        // === Benutzer-Ordner sicherstellen ===
        if (!is_dir($user_dir)) mkdir($user_dir, 0777, true);

        // === Event-Daten speichern ===
        $event_data = [
            'Eventid'     => $event_id,
            'Eventname'   => $event_name,
            'Eventdatum'  => $event_date,
            'Eventart'    => 'Fussball',
            'Pin'         => $pin
        ];

        if (!file_exists($events_file)) {
            $header = implode(',', array_keys($event_data)) . "\n";
            file_put_contents($events_file, $header);
        }

        $csv_data = implode(',', array_map('addslashes', $event_data)) . "\n";
        file_put_contents($events_file, $csv_data, FILE_APPEND);

        // === Event-Ordner anlegen und Standardinhalt kopieren ===
        $event_dir = "$event_id";
        if (!is_dir($event_dir)) {
            mkdir($event_dir, 0777, true);

            $map = [
                'turnier'        => 'standard',
                'liga'           => 'standard_liga',
                'einzelspiel'    => 'standard_game',
                'tv_produktion'  => 'standard_tv',
                'mein_verein'    => 'standard_club'
            ];

            $standard_dir = $map[$event_type] ?? 'standard';

            if (is_dir($standard_dir)) {
                $this->copy_recursive($standard_dir, $event_dir);
            }

            file_put_contents("$event_dir/pin.csv", $pin . "\n");
            file_put_contents("$event_dir/eventid.csv", $event_id . "\n");
        }
    }
    private function copy_recursive($source, $dest)
    {
        if (!is_dir($dest)) mkdir($dest, 0777, true);
        $dir = opendir($source);
        while (($file = readdir($dir)) !== false) {
            if ($file !== '.' && $file !== '..') {
                $src = "$source/$file";
                $dst = "$dest/$file";
                if (is_dir($src)) {
                    $this->copy_recursive($src, $dst);
                } else {
                    copy($src, $dst);
                }
            }
        }
        closedir($dir);
    }
}
