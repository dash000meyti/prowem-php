<?php
namespace Prowem;

/**
 * Removes an event from the user's CSV and deletes its directory.
 */
class DeleteEvent
{
    public function delete()
    {
        if (!isset($_SESSION['user']) || !$_SESSION['user']['logged_in'] || !isset($_SESSION['user']['username'])) {
            header('Location: index.php?page=login');
            exit;
        }

        $username = $_SESSION['user']['username'];
        $event_id = $_POST['event_id'] ?? '';
        $events_file = "data/$username/events.csv";
        $event_dir = $event_id;

        // === Event aus CSV löschen ===
        if (file_exists($events_file)) {
            $file = fopen($events_file, 'r');
            $temp_file = $events_file . '.tmp';
            $temp = fopen($temp_file, 'w');

            $headers = fgetcsv($file);
            fputcsv($temp, $headers);
            $event_id_index = array_search('Eventid', $headers);

            while (($row = fgetcsv($file)) !== false) {
                if ($row[$event_id_index] != $event_id) {
                    fputcsv($temp, $row);
                }
            }
            fclose($file);
            fclose($temp);
            rename($temp_file, $events_file);
        }

        // === Event-Ordner löschen ===
        if (file_exists($event_dir)) {
            $this->delete_directory($event_dir);
        }
    }

    private function delete_directory($dir)
    {
        if (!file_exists($dir)) return true;
        if (!is_dir($dir)) return unlink($dir);

        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') continue;
            if (!$this->delete_directory($dir . DIRECTORY_SEPARATOR . $item)) return false;
        }
        return rmdir($dir);
    }
}
