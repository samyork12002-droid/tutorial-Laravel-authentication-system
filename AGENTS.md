# Agent Instructions

## Environment (already configured and verified — do not reinstall)

| Tool | Location | Status |
|---|---|---|
| PHP 8.3.28 CLI | `C:\wamp64\bin\php\php8.3.28\php.exe` (on machine PATH) | working |
| Composer 2.11.2 | `C:\wamp64\bin\composer\composer.bat` (on machine PATH) | working |
| MySQL 8.4.7 | `127.0.0.1:3306`, database `laravel`, user `laravel`, password `LaravelDev!2026` | working |
| Node.js 26 | on PATH (`npm.cmd`; `npm.ps1` is blocked by execution policy) | working |

Application key is generated, migrations are applied, and all tables are InnoDB.
Laravel Boost is installed (`laravel/boost` dev dependency) with guidelines, skills and MCP configuration.

Verify with: `php -v`, `composer --version`, `php artisan about`, `php artisan migrate:status`.

## Laravel Boost

- Guidelines for this app live in `.windsurf/rules/laravel-boost.md` (always-on rule, read by Windsurf and Devin)
  and `CLAUDE.md`.
- Boost MCP server: `php artisan boost:mcp`, configured in `.devin/mcp_config.json` (Devin) and
  `%USERPROFILE%\.codeium\windsurf\mcp_config.json` (Windsurf). Prefer its tools (`database-query`,
  `database-schema`, `search-docs`, `get-absolute-url`, `browser-logs`, `tinker`) over manual alternatives.
- Skills live in `.windsurf/skills/` (mirrored in `.claude/skills/`); activate the relevant one for the
  domain you are working in.
- Do not run `php artisan boost:install` again.

## Development servers

- Apache vhost: http://tutorial-laravel.local (DocumentRoot = `public/`, assets already built)
- `php artisan serve` → http://localhost:8000
- Frontend assets: `npm run build` (or `npm run dev` / `composer run dev` while developing)
