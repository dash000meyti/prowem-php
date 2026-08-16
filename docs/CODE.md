# Prowem code reference

All application classes live in the `Prowem` namespace and sit in `index_files/`. Templates are plain PHP includes, not a view engine.

## Front controller (`index.php`)

1. If `?ajax=1`, run `Auth::handleAdminActions()` and exit as JSON (no full page).
2. Start the session.
3. If `?language=` is present, whitelist it through `Lang`, store it on the session, and redirect to the same page without the `language` query key.
4. Default language is `en` when the session has none.
5. `Lang::init($code)` loads `lang/{code}.php`.
6. `App::run()` renders the site.

## `Prowem\App`

Owns Auth, Navigation, Hero, Router, and Footer.

`run()`:

1. Dispatches Auth POST/GET handlers.
2. Handles `create_event` / `delete_event` POSTs, then redirects to `Dashboard.php`.
3. Prints the HTML document, navigation, optional home hero, routed main content, and footer.
4. Injects burger-menu and FAQ scripts.

The document language attribute comes from `Lang::htmlLang()`.

## `Prowem\Router`

Reads `$_GET['page']` (default `home`). Maps some pages to a theme class on a **second** `<body>` tag (nested inside App’s body):

- `app` → `theme-app`
- `videomanager` / `video` → `theme-video`
- `socialmedia` → `theme-social`
- `myClub` → `theme-myclub`
- everything else → `theme-default`

To add a public page: create a template under `index_files/templates/` or `tpl/`, add a `case` in `Router::render()`, and optionally a theme entry.

## `Prowem\Auth`

CSV-backed accounts (`data/users.csv`, `;` delimiter).

| Method | Trigger |
|--------|---------|
| `handleRegister()` | POST `pre_register` |
| `handleLogin()` | POST `login` |
| `handleForgotPassword()` | POST `forgot_password` |
| `handleResetPassword()` | POST `reset_password` |
| `handleLogout()` | `?page=logout` |
| `handleAdminActions()` | `?action=` + `?username=` (accept / deny / delete / login_as) |

Flash keys: `$_SESSION['flash_error']`, `$_SESSION['flash_success']`. User-facing strings go through `t()`.

Hard-coded admin login is checked before CSV users. Status must be `accepted` for a normal login.

## `Prowem\Lang`

Key-based translations. English (`lang/en.php`) is the source file; other languages use the same keys.

```php
echo t('nav.home');                 // escaped
echo t_raw('hero.slide1.title_html'); // trusted HTML such as <br>
Lang::current();                    // en|de|pt|es
Lang::switchUrl('de');              // keeps current query, sets language
```

Missing keys fall back to English, then to the key itself.

Do **not** wrap brand names, phone numbers, emails, or street addresses.

## `Prowem\Navigation` / `Hero` / `Footer`

Thin wrappers that include or echo markup:

- Navigation: `templates/navigation.php` (header + language switcher + mobile menu).
- Hero: `templates/hero.php` (home only).
- Footer: markup is inline in `Footer.php` (not `templates/footer.php`).

## `Prowem\EventHandler`

Requires a logged-in session. Validates name, `Y-m-d` date, and 6-digit PIN. Appends a row to `data/{username}/events.csv` and copies a `standard*` directory into `{event_id}/`.

Error flashes use `$_SESSION['create_error']`.

## `Prowem\DeleteEvent`

Removes the matching `Eventid` row from the user’s CSV and deletes the event directory.

## Sessions

| Key | Meaning |
|-----|---------|
| `language` | Active UI language |
| `user.logged_in` | Auth flag |
| `user.username` | Email / login |
| `user.is_admin` | Admin UI |
| `admin_backup` | Previous admin session while impersonating |
| `flash_error` / `flash_success` | One-shot messages |

## Adding a translation

1. Add the key to `lang/en.php`.
2. Copy it into `lang/de.php`, `lang/pt.php`, and `lang/es.php`.
3. Output with `t('group.key')` (or `t_raw()` if the value contains markup you control).
4. Keep keys grouped: `nav.*`, `footer.*`, `hero.*`, `home.*`, `app.*`, `video.*`, `social.*`, `club.*`, `org.*`, `auth.*`, `admin.*`, `event.*`.
