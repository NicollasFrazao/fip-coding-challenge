# FIP Coding Challenge

A CRUD exercise in CodeIgniter 3 on the AdminLTE 3 admin template: lists of users and companies, with deleting users over AJAX.

## Context

Solution to a hiring challenge of FIP (January 2021). The statement, in Portuguese, is kept in [`docs/challenge.md`](docs/challenge.md). It came as a CodeIgniter skeleton with `TODO` comments, and asked to implement the users controller (`index`, `profile`, `ajax_delete`, `ajax_save`), a `usuarios.js` to save data over AJAX, a jQuery button to delete users, and a nicer home page.

## What it does

- **Layout:** the AdminLTE 3 template split into reusable header and footer views, with a sidebar menu for Companies and Users and a breadcrumb.
- **Users** (`/usuarios`): a table with id, login, name and role. Each row links to `/usuarios/profile/{id}` and has a delete action that asks for confirmation, posts the id to `/usuarios/ajax_delete` through `dist/js/usuarios.js` and reloads the list. The endpoint answers `{ success, message }` in JSON.
- **Companies** (`/empresas`): a table with id and name.

Not implemented: the user profile page, `ajax_save` and the user form, and the company profile (it only echoes the id). Those `TODO`s from the statement are still in `application/controllers/Usuarios.php`.

## Tech stack

- PHP with CodeIgniter 3.1.11 (MVC, query builder)
- MySQL (`db/prova.mwb`, a MySQL Workbench model)
- AdminLTE 3.0.5 on Bootstrap 4, jQuery

## Running locally

1. Use PHP 7.x with Apache (`mod_rewrite`) or the built-in server, and MySQL.
2. Create a database named `prova` with the tables `usuarios` (`id`, `login`, `nome`, `cargo`) and `empresas` (`id`, `nome`). The statement mentions a `db/prova.sql` script, but only the Workbench model (`db/prova.mwb`) was committed; open it in MySQL Workbench and use *Forward Engineer* to generate the SQL.
3. Set the connection in `application/config/database.php` (the committed values are local defaults).
4. Serve the repository root, for example `php -S localhost:8000`, and open `http://localhost:8000/index.php/usuarios`.

## Project structure

```
application/controllers/   Home, Usuarios, Empresas, Header, Footer
application/models/        Model_usuarios, Model_empresas
application/views/         header/, footer/, home/, usuarios/, empresas/
dist/js/usuarios.js        AJAX delete
db/prova.mwb               database model
docs/challenge.md          challenge statement (Portuguese)
system/, plugins/, dist/   CodeIgniter core and AdminLTE assets
```

## Notes

- The whole AdminLTE distribution (demo pages, plugins, build files and its `docs/` site) is committed alongside the application.
- `ajax_delete` reads `$_POST` directly and has no CSRF protection or check that the user exists.
- `application/views/home/old.php` and `usuarios/old.php` are earlier versions of the views.
- There are no automated tests.
