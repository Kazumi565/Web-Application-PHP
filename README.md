# PHP Database Web Application

A PHP/MySQL coursework app with registration, login, a theme preference saved
in the session, and an admin view of database tables.
The interface and sample database use Romanian labels.

## Local setup

1. Install PHP with `mysqli` and a MySQL-compatible database, for example through
   XAMPP. Clone `https://github.com/Kazumi565/Web-Application-PHP.git` into your
   local web server's document root.
2. Inspect `Assets/CREATE DATABASE Acte.txt` before importing it into a disposable
   local database server. **The script drops and recreates the `Magazin`
   database.** Do not run it against a database containing data you need.
3. Set your local connection details in `connect_db()` in `dynamicFunctions.php`.
   The existing defaults target `localhost`, database `Magazin`, and the local
   XAMPP root account. Keep any edited credentials out of Git.
4. With Apache and MySQL running, open
   `http://localhost/Web-Application-PHP/` (adjust the folder name if needed).

## Project status

Run this coursework app only in a disposable local environment, using fictional
data and passwords you do not use elsewhere. It still stores plaintext
passwords. Before public hosting, it needs password hashing and a migration of
existing accounts, prepared queries, CSRF protection and server-side validation.
Table names also need consistent casing for case-sensitive hosts.

The old password-recovery endpoint disclosed a stored password to anyone who
knew an email address. Recovery is now disabled and returns an unavailable response without reading
passwords. A replacement reset flow has not been implemented. Successful login
now rotates the session identifier.

## Structure

- PHP pages: account, login, recovery status, and dashboard views.
- `dynamicFunctions.php`: request dispatcher and database/session functions.
- `Script/`: browser interactions.
- `Styles/`: layout and themes.
- `Assets/CREATE DATABASE Acte.txt`: destructive local database initialization.
