<?php
namespace Prowem;

// Korrekte Pfade basierend auf deiner Struktur (index_files -> ../PHPMailer)
require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class Auth {

    private string $userFile;

    public function __construct() {
        $this->userFile = __DIR__ . '/../data/users.csv';
    }

    private function readUsers(string $filename): array {

        $rows = [];
        if (!file_exists($filename)) return $rows;

        if (($h = fopen($filename, 'r')) !== false) {

            $header = fgetcsv($h, 0, ';');
            if (!$header) {
                fclose($h);
                return $rows;
            }

            while (($data = fgetcsv($h, 0, ';')) !== false) {

                if (count($data) !== count($header)) {
                    continue;
                }

                $rows[] = array_combine($header, $data);
            }

            fclose($h);
        }

        return $rows;
    }

    /* ================= REGISTER ================= */
    public function handleRegister(): void {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['pre_register'])) return;

        $required = ['firstname','lastname','email','phone','password','password_repeat'];
        foreach ($required as $f) {
            if (empty($_POST[$f])) {
                $_SESSION['flash_error'] = 'Bitte alle Felder ausfüllen.';
                header('Location: index.php?page=register');
                exit;
            }
        }

        if ($_POST['password'] !== $_POST['password_repeat']) {
            $_SESSION['flash_error'] = 'Passwörter stimmen nicht überein.';
            header('Location: index.php?page=register');
            exit;
        }

        $users = $this->readUsers($this->userFile);
        foreach ($users as $u) {
            if (strcasecmp($u['username'], $_POST['email']) === 0) {
                $_SESSION['flash_error'] = 'E-Mail existiert bereits.';
                header('Location: index.php?page=register');
                exit;
            }
        }

        $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $isNew = !file_exists($this->userFile);
        $fp = fopen($this->userFile, 'a');

        if ($isNew) {
            fputcsv($fp, ['firstname','lastname','username','password','tel','status','reset_token','reset_expires'], ';');
        }

        fputcsv($fp, [
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $hash,
            $_POST['phone'],
            'pending',
            '',
            ''
        ], ';');

        fclose($fp);

        try {

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@prowem.com';
        $mail->Password = 'Nima9182@';

        // --- AB HIER DIE ÄNDERUNGEN FÜR HOSTTECH ---
        $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        // --- ENDE DER ÄNDERUNGEN ---

        $mail->setFrom('noreply@prowem.com', 'PROWEM');
        $mail->addAddress($email);

        $resetLink = "https://prowem.com/index.php?page=reset&token=".$token;

        $mail->isHTML(true);
        $mail->Subject = 'Passwort zurücksetzen';
        $mail->Body = "
            <h2>Passwort zurücksetzen</h2>
            <p>Klicke auf folgenden Link:</p>
            <p><a href='{$resetLink}'>{$resetLink}</a></p>
            <p>Der Link ist 60 Minuten gültig.</p>
        ";

        $mail->setFrom('noreply@prowem.com', 'PROWEM');
        $mail->addAddress('moshiriannima1977@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Neue Registrierung PROWEM';

        $mail->Body = "
            <h2>Neue Registrierung</h2>
            <p><strong>Vorname:</strong> {$_POST['firstname']}</p>
            <p><strong>Nachname:</strong> {$_POST['lastname']}</p>
            <p><strong>Email:</strong> {$_POST['email']}</p>
            <p><strong>Telefon:</strong> {$_POST['phone']}</p>
        ";

        $mail->send();

    } catch (Exception $e) {
        // optional: ignorieren oder loggen
    }

        $_SESSION['flash_success'] = 'Registrierung erfolgreich.';
        header('Location: index.php?page=register');
        exit;
    }

    /* ================= LOGIN ================= */
    public function handleLogin(): void {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['login'])) return;

        if ($_POST['username'] === 'office@prowem.com' && $_POST['password'] === 'Nima9182@') {
            $_SESSION['user'] = [
                'logged_in' => true,
                'username'  => 'office@prowem.com',
                'is_admin'  => true
            ];
            header("Location: index.php?page=admin");
            exit;
        }

        $users = $this->readUsers($this->userFile);

        foreach ($users as $u) {
            if (strcasecmp($u['username'], $_POST['username']) === 0) {

                if ($u['status'] !== 'accepted') {
                    $_SESSION['flash_error'] = "Account nicht freigegeben.";
                    header("Location: index.php?page=login");
                    exit;
                }

                if (password_verify($_POST['password'], $u['password'])) {
                    $_SESSION['user'] = [
                        'logged_in'=>true,
                        'username'=>$u['username'],
                        'is_admin'=>false
                    ];
                    header("Location: index.php");
                    exit;
                }
            }
        }

        $_SESSION['flash_error'] = "Login fehlgeschlagen.";
        header("Location: index.php?page=login");
        exit;
    }


    // FORGOT PASSWORD //


public function handleForgotPassword(): void {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['forgot_password'])) return;

    $email = trim($_POST['email'] ?? '');
    if ($email === '') {
        $_SESSION['flash_error'] = "Bitte E-Mail eingeben.";
        header("Location: index.php?page=forgot");
        exit;
    }

    $users = $this->readUsers($this->userFile);
    $found = false;
    $token = '';
    $expires = time() + 3600;

    foreach ($users as &$u) {
        if (strcasecmp($u['username'] ?? '', $email) === 0) {
            $token = bin2hex(random_bytes(32));
            $u['reset_token'] = $token;
            $u['reset_expires'] = (string)$expires;
            $found = true;
            break;
        }
    }
    unset($u);

    if (!$found) {
        $_SESSION['flash_error'] = "E-Mail nicht gefunden.";
        header("Location: index.php?page=forgot");
        exit;
    }

    // CSV neu schreiben
    $header = array_keys($users[0]);

    if (!in_array('reset_token', $header, true)) $header[] = 'reset_token';
    if (!in_array('reset_expires', $header, true)) $header[] = 'reset_expires';

    $fp = fopen($this->userFile, 'w');
    fputcsv($fp, $header, ';');

    foreach ($users as $user) {
        $line = [];
        foreach ($header as $col) {
            $line[] = $user[$col] ?? '';
        }
        fputcsv($fp, $line, ';');
    }
    fclose($fp);

    try {

        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@prowem.com';
        $mail->Password = 'Nima9182@';
        $mail->Host = 'localhost'; 
        $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );        

        $mail->setFrom('noreply@prowem.com', 'PROWEM');
        $mail->addAddress($email);

        $resetLink = "https://prowem.com/index.php?page=reset&token=".$token;

        $mail->isHTML(true);
        $mail->Subject = 'Passwort zurücksetzen';
        $mail->Body = "
            <h2>Passwort zurücksetzen</h2>
            <p>Klicke auf folgenden Link:</p>
            <p><a href='{$resetLink}'>{$resetLink}</a></p>
            <p>Der Link ist 60 Minuten gültig.</p>
        ";
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        $mail->Timeout = 10;
        if (!$mail->send()) {
            die("SEND ERROR: " . $mail->ErrorInfo);
        }
        
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        $_SESSION['flash_error'] = "Mail konnte nicht gesendet werden.";
        header("Location: index.php?page=forgot");
        exit;
    }

    $_SESSION['flash_success'] = "Reset-Link wurde versendet.";
    header("Location: index.php?page=forgot");
    exit;
}


//*++++++++++++++++++++++++++++ NEUES PASSWORT ************************




public function handleResetPassword(): void {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['reset_password'])) return;

    $token = $_POST['token'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($token === '' || $password === '') {
        $_SESSION['flash_error'] = "Ungültige Anfrage.";
        header("Location: index.php?page=forgot");
        exit;
    }

    $users = $this->readUsers($this->userFile);
    $updated = false;

    foreach ($users as &$u) {
        if (($u['reset_token'] ?? '') === $token && (int)($u['reset_expires'] ?? 0) > time()) {

            $u['password'] = password_hash($password, PASSWORD_BCRYPT);
            $u['reset_token'] = '';
            $u['reset_expires'] = '';
            $updated = true;
            break;
        }
    }
    unset($u);

    if (!$updated) {
        $_SESSION['flash_error'] = "Token ungültig oder abgelaufen.";
        return;
    }

    $header = array_keys($users[0]);
    $fp = fopen($this->userFile, 'w');
    fputcsv($fp, $header, ';');

    foreach ($users as $user) {
        $line = [];
        foreach ($header as $col) {
            $line[] = $user[$col] ?? '';
        }
        fputcsv($fp, $line, ';');
    }

    fclose($fp);

    $_SESSION['flash_success'] = "Passwort erfolgreich geändert.";
    $_SESSION['flash_error'] = '';
    return;


}


/* ================= ADMIN ACTIONS ================= */
    public function handleAdminActions(): void {

        $isAjax = isset($_GET['ajax']) && $_GET['ajax'] === '1';

        if ($isAjax) {
            ob_clean();
        }

        $action   = $_GET['action'] ?? '';
        $username = $_GET['username'] ?? '';

        if ($action === 'back_to_admin' && isset($_SESSION['admin_backup'])) {

            $_SESSION['user'] = $_SESSION['admin_backup'];
            unset($_SESSION['admin_backup']);

            header("Location: index.php?page=admin");
            exit;
        }


        if (empty($action) || empty($username)) {
            if ($isAjax) {
                header('Content-Type: application/json');
                echo json_encode(['success'=>false]);
                exit;
            }
            return;
        }

        if (empty($_SESSION['user']['is_admin'])) {
            if ($isAjax) {
                header('Content-Type: application/json');
                echo json_encode(['success'=>false]);
                exit;
            }
            return;
        }
        
        $users = $this->readUsers($this->userFile);
        $changed = false;

        foreach ($users as $key => &$user) {
        
        
        if (strcasecmp($user['username'] ?? '', $username) !== 0) continue;
        
        if ($action === 'login_as' && ($user['username'] ?? '') === $username) {

            $_SESSION['admin_backup'] = $_SESSION['user'];

            $_SESSION['user'] = [
                'logged_in' => true,
                'username'  => $username,
                'is_admin'  => false,
                'impersonated' => true
            ];

            if ($isAjax) {
                header('Content-Type: application/json');
                echo json_encode(['success' => true]);
                exit;
            }

            header("Location: index.php");
            exit;
        }

        

        if ($action === 'accept') { $user['status'] = 'accepted'; $changed = true; }
        if ($action === 'deny')   { $user['status'] = 'denied';   $changed = true; }

        if ($action === 'delete') {
            unset($users[$key]);
            $changed = true;
        }
    }

    if ($changed) {

        $fp = fopen($this->userFile, 'w');

        $header = array_keys($users[array_key_first($users)] ?? ['firstname'=>1,'lastname'=>1,'username'=>1,'password'=>1,'tel'=>1,'status'=>1]);
        fputcsv($fp, $header, ';');

        foreach ($users as $u) {
            $line = [];
            foreach ($header as $col) {
                $line[] = $u[$col] ?? '';
            }
            fputcsv($fp, $line, ';');
        }

        fclose($fp);
    }

    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => $changed]);
        exit;
    }
        header("Location: index.php?page=admin");
        exit;
    }



    public function handleLogout(): void {
        if (($_GET['page'] ?? '') === 'logout') {
            session_destroy();
            header("Location: index.php?page=login");
            exit;
        }
    }
}