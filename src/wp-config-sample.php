<?php
define( 'DB_NAME', $_ENV['MYSQL_DATABASE'] );
define( 'DB_USER', $_ENV['MYSQL_USER'] );
define( 'DB_PASSWORD', $_ENV['MYSQL_PASSWORD'] );
define( 'DB_HOST', $_ENV['MYSQL_HOST'] );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

$domain = 'localhost';
define('WP_SITEURL', "https://{$domain}/wordpress");
define('WP_HOME',"https://{$domain}");
$httpHost =  isset($_SERVER['HTTPS_HOST']) ? $_SERVER['HTTPS_HOST'] : $domain;
define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
define( 'WP_CONTENT_URL', 'https://' . $httpHost . '/content' );
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wordpress' );
}
require_once ABSPATH . 'wp-settings.php';
