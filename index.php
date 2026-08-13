<?php

if (!empty($_GET['ajax']) && $_GET['ajax'] == '1') {

    require_once __DIR__ . '/index_files/Auth.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    header('Content-Type: application/json');

    $auth = new \Prowem\Auth();
    $auth->handleAdminActions();

    exit;
}

ob_clean();
error_reporting(0);
ini_set('display_errors', 0);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['language'])) {
    $_SESSION['language'] = strtolower($_GET['language']);

    // Wenn "page" in der URL vorhanden ist, darauf bleiben
    $page = $_GET['page'] ?? '';
    $extra = '';

    // Alle restlichen GET-Parameter erhalten (außer language)
    $params = $_GET;
    unset($params['language']);
    if ($page !== '') unset($params['page']);
    $query = http_build_query($params);

    // Neue Ziel-URL zusammensetzen
    $redirect = 'index.php' . ($page ? '?page=' . urlencode($page) : '');
    if ($query) {
        $redirect .= ($page ? '&' : '?') . $query;
    }

    header("Location: $redirect");
    exit;
}

if (empty($_SESSION['language'])) {
    $_SESSION['language'] = 'de';
}

require_once __DIR__ . '/index_files/lang.php';
\Prowem\Lang::init(__DIR__ . '/data/lang.csv', $_SESSION['language']);

require_once __DIR__ . '/index_files/App.php';
use Prowem\App;
$app = new App();
$app->run();
