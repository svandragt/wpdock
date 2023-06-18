# WPDock - WordPress SQLite over Docker

A proof of concept, this is WordPress running on top of SQLite served by PHP-FPM 8.1 behind Caddy. This removes a MySQL container as a dependency.

Note: the [`php-builtin-server`](https://github.com/svandragt/wpdock/tree/php-builtin-server) branch also removes Docker and the webserver as dependencies.

Setup:

- Copy `wp-config-sample.php` to `wp-config.php` and make changes to the salts and database info. As far as I can tell, any database credentials will work fine / be ignored.
- Copy `composer-sample.json` to `composer.json` and add your required plugins/themes.
- run `docker-compose up --build` to create the containers
- open https://localhost and accept the security warning, follow the installation to get a working WP install.


Known issues:

- no object cache plugin and container
- no full page caching (I recommend Surge)
- no webserver request caching
- the `src/content/db.php` file was manually copied from the sqlite integration plugin's `db.copy`.
- Site Health page errors.

Why:

This is an intermediate step for WordPress as an app platform to be feasable.
