# Prowem site structure

Custom PHP marketing site for **Professional World Event Manager**. There is no framework: `index.php` boots a small set of classes under the `Prowem` namespace.

## Request lifecycle

```
Browser
  → index.php
      → session + ?language= switch
      → Prowem\Lang::init()
      → Prowem\App::run()
          → Auth handlers (POST / admin actions)
          → HTML shell (doctype, head, nav)
          → Hero (home only)
          → Router page body
          → Footer
```

Language is stored in `$_SESSION['language']`. Visiting `index.php?language=de` (or `en` / `pt` / `es`) saves the choice and redirects back to the current page.

## Top-level folders

| Path | Role |
|------|------|
| `index.php` | Front controller |
| `index_files/` | App classes, templates, CSS |
| `lang/` | Translation arrays (`en.php`, `de.php`, `pt.php`, `es.php`) |
| `docs/` | Project documentation |
| `img/` | Page images, icons, flags |
| `fonts/` | Local webfonts (Bebas Neue, Ubuntu, Outfit, Rajdhani) |
| `data/` | Runtime CSV data (`users.csv`, per-user event files) |
| `PHPMailer/` | Vendor mail library — do not translate |

## `index_files/` layout

| Path | Role |
|------|------|
| `App.php` | Layout shell and request orchestration |
| `Router.php` | `?page=` → template include + theme class |
| `Auth.php` | Register, login, password reset, admin user actions |
| `Navigation.php` / `templates/navigation.php` | Site header |
| `Hero.php` / `templates/hero.php` | Home hero slider |
| `Footer.php` | Site footer |
| `lang.php` | i18n loader and `t()` helper |
| `EventHandler.php` | Create event (CSV + copy of a standard folder) |
| `deleteEvent.php` | Delete event CSV row and folder |
| `css/style.css` | Global styles (header, home sections). File currently contains the same stylesheet twice. |
| `templates/` | Home, app landing, hero, unused `footer.php` |
| `tpl/` | Product landings (video, social, myClub, organisation) and auth `.tpl` files |
| `sections/` | Home sections included by `templates/home.php` |

## Pages (`?page=`)

| `page` | Theme class | Template |
|--------|-------------|----------|
| *(empty)* / `home` | `theme-default` | `templates/home.php` + hero |
| `app` | `theme-app` | `templates/app.php` + `app/section2–9.php` |
| `videomanager` | `theme-video` | `tpl/video.php` + `video/section2–7.php` |
| `socialmedia` | `theme-social` | `tpl/social.php` + `social/section2–8.php` |
| `myClub` | `theme-myclub` | `tpl/myClub.php` + `myClub/section2–5,7,8.php` |
| `eventteam` | `theme-default` | `tpl/organisation.php` + `organisation/section2–6.php` |
| `login` | | `tpl/index.tpl` |
| `register` | | `tpl/register.tpl` |
| `forgot` | | `tpl/forgot.tpl` |
| `reset` | | `tpl/reset.tpl` |
| `success` | | `tpl/success.tpl` |
| `admin` | | `tpl/admin.tpl` |
| `create_event` | | `tpl/create_event.tpl` |
| `my_events` | | `tpl/my_events.tpl` |
| `all_events` | | `tpl/all_events.tpl` |
| `logout` | | handled in `Auth::handleLogout()` |

Themes tint the header CTA and accents (`--theme-accent`). Home and Event Team keep the default orange.

## Home composition

Hero is rendered by `App` **before** the router. `templates/home.php` then includes:

1. `sections/social.php` — services grid
2. `sections/way.php` — old vs connected workflow
3. `sections/beta_banner.php` — beta CTA + managed execution
4. `sections/counter.php` — stats + final CTA

`sections/events.php` is not included on home.

## Auth and data

- Users live in `data/users.csv` (semicolon-separated).
- Events live in `data/{username}/events.csv` plus a copied event folder.
- SMTP via PHPMailer (`noreply@prowem.com`).
- Admin can accept/deny/delete users and impersonate (`login_as`).

## Known gaps

These routes are wired in `Router` but the files are missing:

- `impressum.tpl`, `about_us.tpl`, `datenschutz.tpl`, `agbs.tpl`
- `templates/recorder.php`, `templates/timer.php`
- `Dashboard.php` (nav link for logged-in non-admins)
- `myClub/section6.php` (page jumps from section 5 to 7)

Other leftovers:

- `tpl/myClub.php` emits its own `<html>` / `<body>` inside App’s layout (nested document).
- `tpl/socialmedia.php` is German marketing copy and is **not** the live Social page (`tpl/social.php` is).
- `tpl/section2.php` and `tpl/section3.php` look like unused copies of organisation/social sections.
- `templates/footer.php` is unused; `Footer.php` is what `App` renders.
- `Router::render()` prints a second `<body class="theme-…">` inside App’s already-opened `<body>`.

## Assets that cannot be translated

Text drawn into images (for example `img/icons/Old-way.png`) stays in the original language. Flag icons for the language switcher live in `img/flags/`.
