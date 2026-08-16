<?php

namespace Prowem {
    /**
     * Key-based translations loaded from lang/{code}.php.
     *
     * English is the source language. Missing keys fall back to English, then to the key.
     */
    class Lang {
        public const DEFAULT = 'en';

        /** @var array<string, string> code => native name */
        public const SUPPORTED = [
            'en' => 'English',
            'de' => 'Deutsch',
            'pt' => 'Português',
            'es' => 'Español',
        ];

        /** @var array<string, string> */
        private static array $translations = [];

        /** @var array<string, string> */
        private static array $fallback = [];

        private static string $language = self::DEFAULT;

        public static function init(string $lang = self::DEFAULT): void {
            $lang = self::normalize($lang);
            self::$language = $lang;

            $baseDir = dirname(__DIR__) . '/lang';
            self::$fallback = self::loadFile($baseDir . '/en.php');
            self::$translations = $lang === 'en'
                ? self::$fallback
                : self::loadFile($baseDir . '/' . $lang . '.php');
        }

        public static function normalize(string $lang): string {
            $lang = strtolower(trim($lang));
            return isset(self::SUPPORTED[$lang]) ? $lang : self::DEFAULT;
        }

        public static function current(): string {
            return self::$language;
        }

        public static function htmlLang(): string {
            return self::$language;
        }

        /**
         * @return array<string, string>
         */
        public static function supported(): array {
            return self::SUPPORTED;
        }

        public static function t(string $key): string {
            if (isset(self::$translations[$key]) && self::$translations[$key] !== '') {
                return self::$translations[$key];
            }
            if (isset(self::$fallback[$key]) && self::$fallback[$key] !== '') {
                return self::$fallback[$key];
            }
            return $key;
        }

        public static function switchUrl(string $code): string {
            $code = self::normalize($code);
            $params = $_GET;
            unset($params['language']);
            $params['language'] = $code;
            return 'index.php?' . http_build_query($params);
        }

        /**
         * @return array<string, string>
         */
        private static function loadFile(string $path): array {
            if (!is_file($path)) {
                return [];
            }
            $data = include $path;
            return is_array($data) ? $data : [];
        }
    }
}

namespace {
    if (!function_exists('t')) {
        function t(string $key): string {
            return htmlspecialchars(\Prowem\Lang::t($key), ENT_QUOTES, 'UTF-8');
        }
    }

    if (!function_exists('t_raw')) {
        function t_raw(string $key): string {
            return \Prowem\Lang::t($key);
        }
    }
}
