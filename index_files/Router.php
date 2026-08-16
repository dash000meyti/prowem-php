<?php
namespace Prowem;

/**
 * Maps ?page= to a theme class and a template include.
 */
class Router {
    public function render(): void {
        $page = $_GET['page'] ?? 'home';
        
        // Map der Seiten zu ihren Theme-Klassen
        $themes = [
            'app'          => 'theme-app',          // Orange
            'videomanager' => 'theme-video',        // Grün
            'video'        => 'theme-video',        // Grün
            'socialmedia'  => 'theme-social',       // Pink/Violett
            'myClub'       => 'theme-myclub'        // Blau
        ];

        // Theme bestimmen (Fallback ist 'theme-default' oder 'theme-app')
        $currentTheme = $themes[$page] ?? 'theme-default';

        // Body-Tag mit dynamic Theme-Klasse
        echo '<body class="' . htmlspecialchars($currentTheme) . '">';
        echo '<main>';

        switch($page){
            case 'login': include __DIR__ . '/tpl/index.tpl'; break;
            case 'forgot': include __DIR__ . '/tpl/forgot.tpl'; break;
            case 'register': include __DIR__ . '/tpl/register.tpl'; break;
            case 'success': include __DIR__ . '/tpl/success.tpl'; break;
            case 'admin': include __DIR__ . '/tpl/admin.tpl'; break;
            case 'create_event': include __DIR__ . '/tpl/create_event.tpl'; break;
            case 'my_events': include __DIR__ . '/tpl/my_events.tpl'; break;
            case 'all_events': include __DIR__ . '/tpl/all_events.tpl'; break;
            case 'impressum': include 'impressum.tpl'; break;
            case 'about_us': include 'about_us.tpl'; break;
            case 'datenschutz': include 'datenschutz.tpl'; break;
            case 'agbs': include 'agbs.tpl'; break;
            case 'reset':
                require __DIR__ . '/tpl/reset.tpl';
                break;
            case 'videomanager':
                include __DIR__ . '/tpl/video.php';
                break;
            case 'eventteam':
                include __DIR__ . '/tpl/organisation.php';
                break;
            case 'myClub':
                include __DIR__ . '/tpl/myClub.php';
                break;
            case 'recorder':
                include __DIR__ . '/templates/recorder.php';
                break;
            case 'timer':
                include __DIR__ . '/templates/timer.php';
                break;
            case 'app': 
                include __DIR__ . '/templates/app.php'; 
                break;
            case 'socialmedia': 
                include __DIR__ . '/tpl/social.php'; 
                break;
            case 'home': 
            default: 
                include __DIR__ . '/templates/home.php'; 
                break;
        }

        echo '</main>';
    }
}