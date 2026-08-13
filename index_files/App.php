<?php
namespace Prowem;


ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once __DIR__.'/Auth.php';
require_once __DIR__.'/Navigation.php';
require_once __DIR__.'/Hero.php';
require_once __DIR__.'/Router.php';
require_once __DIR__.'/Footer.php';

class App {
    private Auth $auth;
    private Navigation $nav;
    private Hero $hero;
    private Router $router;
    private Footer $footer;

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
      
        $this->auth   = new Auth();
        $this->nav    = new Navigation();
        $this->hero   = new Hero();
        $this->router = new Router();
        $this->footer = new Footer();
    }

    public function run(): void {
        $this->auth->handleAdminActions();
        $this->auth->handleRegister();
        $this->auth->handleLogin();
        $this->auth->handleForgotPassword();
        $this->auth->handleLogout();
        $this->auth->handleResetPassword();

        if (($_GET['page'] ?? '') === 'create_event' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/EventHandler.php';
            (new \Prowem\EventHandler())->createEvent();
            header("Location: Dashboard.php?page=my_events");
            exit;
        }

        if (($_GET['page'] ?? '') === 'delete_event' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/DeleteEvent.php';
            (new \Prowem\DeleteEvent())->delete();
            header("Location: Dashboard.php?page=my_events");
            exit;
        }

        ob_start(function($buffer) {
            return \Prowem\Lang::autoTranslate($buffer);
        });

        echo '<!DOCTYPE html><html lang="'.($_SESSION['language'] ?? 'de').'"><head>';
        echo '<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>Professional World Event Manager</title>';
        echo '<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">';
        echo '<link rel="stylesheet" href="index_files/css/style.css?v4">';
        echo '<script src="form_handler.js" defer></script>';
        echo '</head><body>';

        $this->nav->render();

        $page = $_GET["page"] ?? "home";
        if ($page === "home" || $page === "") {
            $this->hero->render();
        }

        echo '<div class="container">';
        $this->router->render();
        echo '</div>';

        $this->footer->render();

        // === Burger-Menü JS (neu, ohne Sprachlogik) ===
        echo <<<HTML
<script>
document.addEventListener("DOMContentLoaded", () => {
  const btn = document.querySelector(".burger-btn");
  const menu = document.querySelector(".nav-mobile");
  if (!btn || !menu) return;

  btn.addEventListener("click", e => {
    e.stopPropagation();
    menu.classList.toggle("open");
  });

  document.addEventListener("click", e => {
    if (!menu.contains(e.target) && !btn.contains(e.target)) {
      menu.classList.remove("open");
    }
  });

  document.addEventListener("keydown", e => {
    if (e.key === "Escape") menu.classList.remove("open");
  });
});
</script>


<script>
document.querySelectorAll('.faq-question').forEach(btn=>{
  btn.addEventListener('click',()=>{
    btn.parentElement.classList.toggle('active');
  });
});
</script>

HTML;

        echo '</body></html>';
    }
}
