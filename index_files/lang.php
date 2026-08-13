<?php
namespace Prowem;

class Lang {
    public static $translations = [];
    private static $language = 'de';

    public static function init($langFile, $lang = 'de') {
        self::$language = strtolower($lang);
        if (!file_exists($langFile)) return;

        $lines = file($langFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (!$lines) return;

        $headers = str_getcsv(array_shift($lines), ';');
        $langIndex = array_search(strtoupper($lang), $headers);
        $deIndex   = array_search('DE', $headers);

        if ($langIndex === false || $deIndex === false) return;

        foreach ($lines as $line) {
            $cols = str_getcsv($line, ';');
            if (isset($cols[$deIndex], $cols[$langIndex])) {
                $de = trim($cols[$deIndex]);
                $tr = trim($cols[$langIndex]);
                if ($de !== '' && $tr !== '') {
                    self::$translations[$de] = $tr;
                }
            }
        }
    }

    // Manuelles Übersetzen (optional weiterhin möglich)
    public static function t($text) {
        return self::$translations[$text] ?? $text;
    }

    // Automatische Übersetzung des HTML-Outputs
    public static function autoTranslate($html) {
        if (empty(self::$translations)) return $html;

        // Sortiere längere Texte zuerst (verhindert Teilwort-Kollisionen)
        uksort(self::$translations, function($a,$b){ return strlen($b) - strlen($a); });

        return str_replace(array_keys(self::$translations), array_values(self::$translations), $html);
    }
}
