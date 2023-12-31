# WPDock - WordPress environments with reduced dependencies.

A proof of concept, the `main` branch is WordPress running on top of MariaDB served by PHP-FPM 8.1 behind Caddy, on Docker containers.

Alternative ways:
  1. the [`sqlite`](https://github.com/svandragt/wpdock/tree/php-builtin-server) branch  removes MariaDB as dependencies.
  2. the [`php-builtin-server`](https://github.com/svandragt/wpdock/tree/php-builtin-server) branch also removes Docker and the webserver as dependencies, running wp on top of PHP only.

Setup:

- Copy `wp-config-sample.php` to `wp-config.php` and **make changes to the salts and database info**. 
- Copy `composer-sample.json` to `composer.json` and add your required plugins/themes.
- Copy `.env-sample` to `.env` and **update all the values**.
- run `docker-compose up --build` to create the containers
- open https://localhost and accept the security warning, follow the installation to get a working WP install.


Known issues:

- no object cache plugin and container
- no full page caching (I recommend Surge)
- no webserver request caching

Why:

This is an intermediate step for WordPress as an app platform to be feasable.
