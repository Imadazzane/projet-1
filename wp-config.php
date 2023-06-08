<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CCezVZQ20TIrWZOLnjekAGItHqhah2WGw1wAeFoZbZRhSofCOMvA/H5LEEp2qR08Q0bvy73yzlOeOOTINyr6AA==');
define('SECURE_AUTH_KEY',  'E78D0z7/Fn01hffwNNXvrEd3D4x/t1pyz8jaewbul+LDrMWnxv2FDHNEiTUZD8x4Ad0tX6/FP6eNxOqSb9Ec4w==');
define('LOGGED_IN_KEY',    'jzOZCofu0SoM+kmEalSMb7P9CC6tPKph+BjSY3/bCviuWCjoXC3MvyHMAAd2WAttpljU7o8sd9uSXQDupsDPAA==');
define('NONCE_KEY',        'eHXlCoOVrZAgle4x6/MG2uOOz337UI+WREfisVOD5/XfuhsybTcEC7xIIMgk3u+mjnFe+sJPOcfbvd52nVpaGQ==');
define('AUTH_SALT',        '9VVaO3glhLtlO29XogszCI5svZszb7QUGokArBbZCn8GW0NlJC1RoS3qWHoEwgombzcYN/x+OZl7Pk2KoGKs3g==');
define('SECURE_AUTH_SALT', 'jazll4dB5qEhv5ynF5bs1OHuOwJm0M8bYbecyoVxkCqe0JuEqDz8IPkLV42G/HiQQaW7wkzBW455oh1fxyfFuw==');
define('LOGGED_IN_SALT',   'XuUqKj+V9vPFIbqOn5bFi/Lpbg3nXjmUpGwI9ONm3COyE1euFDJP22tvwx7RtbF8UJcnZeCPgUs4w+ERtBf6Dg==');
define('NONCE_SALT',       '2qh6tQOSVgyutQ3qeyWLS1g4NGnO26k3qFf5gqylGnsZ9bl7sh9Svbx2n6no9YFfdMnRHE4+bi8cJEDyoegzKA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
