<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0lpIABZLDBojooEK6R6/e4jOnQI2hWBXt3nbq5j2LLjPwNclyv4VJ1jdmHPyPDwBeR6vBiJ2S3jap4+HBgqpng==');
define('SECURE_AUTH_KEY',  'PemFoSrchEGTHb279j522JawLSRA1n8UYV8CAD8JFwF0us1Qkra1kiSN7qGR9/UrHJltobfc9QIguWdqXFs/eg==');
define('LOGGED_IN_KEY',    '/PLNSVOnrrRr3mJX6nG35AGkJFlRFE00QrfuTUj5UWW1wt2edsALZ/akXkChsq6W1jcI9wdWndXCoLtv4oAZEg==');
define('NONCE_KEY',        'gM/WG12TP9DQyQ7bgZXXdbg1ZAKVAshi9HZcBWzD4BDk4f/fExah3Da5vULo228kGJ+x0jqhkKVuSdlD/8ROxQ==');
define('AUTH_SALT',        'd1VpZiJQ1TIaHZkUTX53MDFZ5zps1qZQc/nqAJL3kQECjWlB1chKa+FdGT0/Mo70C+ZunyN5B8imUX855wLbZA==');
define('SECURE_AUTH_SALT', 'wGwv/8CKXAzn7VeBajGBROtz4GN/DiJ7yzoBoEUAFXVJRh8QzZatAW6Mrjls8rRBbqJWwIGH6VB7VURHPfw1fA==');
define('LOGGED_IN_SALT',   'KbSYAiY9owLqxkZZjJt4ANVBORTdY5GXirYqyOopgy0T6Knvvpbiu6DHgZ7gi4DQsJr3ZUWLg9xB96lwiywgWw==');
define('NONCE_SALT',       'V5TyeDrp8mhKc+8D0ATJdHzeShelj0T6ctJQK77Xzu4y7T81HG9GJVmWCZNYuXcOpWcAZ6hQwefZsy0WB3a4HA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'gnomnom.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
