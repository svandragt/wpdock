# WPDock - WordPress SQLite over Docker

A proof of concept, this is WordPress running on top of SQLite served by PHP-FPM 8.1 behind Caddy.

Setup:

- Copy `wp-config-sample.php` to `wp-config.php` and make changes to the salts and database info. As far as I can tell, any database credentials will work fine / be ignored.
- Copy `composer-sample.json` to `composer.json` and make any required changes. then run `composer update`.
- run `composer serve` to start the PHP builtin webserver
- open http://localhost:9000 and follow the installation to get a working WP install.

˚
Known issues:

- no object cache plugin and container
- no full page caching (I recommend Surge)
- no webserver request caching
- the `src/content/db.php` file was manually copied from the sqlite integration plugin's `db.copy`.
- Site Health page errors.

Why:

This is an intermediate step for WordPress as an app platform to be feasible.
