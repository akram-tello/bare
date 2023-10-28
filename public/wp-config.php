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


define('AUTH_KEY',         'o1yrFTwrC9q3CmQply/Q6hXpEIDG5LWQ/U/Zw39IreKgCAgfIYMRKMLZZcLsFIetPrD8gXB8kq1fKQCAHhgnsg==');
define('SECURE_AUTH_KEY',  '86wupfXY0ZiWL0g7NuZsZsmlz7vz7nY+tApIzpwxg2mSp50HqBut+hQO9PYjO0L9CNIPtbM9IOJqzlhkjxOpGQ==');
define('LOGGED_IN_KEY',    'xC0O7zvufOXgVHcvq9JRoAsLLhW5NwzXVhA0ybNjZr0vWAV1jZfRbdKPkYnCRjJkyQrsNarwDyUWxxSi+/cJSg==');
define('NONCE_KEY',        'YJiFoXuvyrJwKX6j421YsVvGmXpMBGcUndfpEuFpXCnQrHUSSeQlGu0nWgk25dw2Bg2uhOb/sj/RNmq4Y9WBQA==');
define('AUTH_SALT',        'S9Bw39DaY+o17JIcPdoKLFD79nFy8PkTt4BKwzUdeoFJYqMBOwgv7CDLxS7RCcpiNoT97iURHH8H/pQ+uE3fCA==');
define('SECURE_AUTH_SALT', 'DvirB1Nk8SRGbX5WlaUIK368hHukL+fRdjHV3/l08Q8/UDsGNHZgW/D/cPjHGntEQkat0UFkBrEpz03Og5j44g==');
define('LOGGED_IN_SALT',   'erYGuABp39nAnzXOnqrmu48Oly/CkxJSrO9zGkY9EkflA6GwHC5AyfvM8jmPcdB1w2IpQl2Tv7kxpnrGhslkYQ==');
define('NONCE_SALT',       'IrNQguMcsK35kWnJDPZsGWQu/5AR8gIfE0gm+NU7ySmHR2fT75TP8iMfJjPtifqSTYmszCqdqBOtSxZfYO8Q3Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
