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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Seiko' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '7HNapDeYSvIBvqPzOaoPjJLL8xp8NO3dTwXcNZ9s2VuaCH5OW6wYpvCUfQVvpf1M' );
define( 'SECURE_AUTH_KEY',  'XjTL9dVw6BcNF08r0VwAG3gkc9uZarjkZ3Xhg477WYn79Ng7m0Fy4zUQ1i8cTx4h' );
define( 'LOGGED_IN_KEY',    'eav1hvB5gdcGcJXsVX0khJBD70JRUeVEfj6xdhosPfmbKnO8X6u6nK837wwSj5MP' );
define( 'NONCE_KEY',        'mHKZPcUMedDbEqSYTlyAhVzvlCRpRcR6QEpKAKVkG7gYGTRFODIJ4tzPe2so1IXS' );
define( 'AUTH_SALT',        'LRIwz5XaDtdrgSFtt1oOs8geVbeBqN8jKSl58JZazNllWwUabX8b37xrjYlea0dW' );
define( 'SECURE_AUTH_SALT', 'sk8KipqFyhJFAwNeyJLJ74Pva7ozwp5NMWkzB7Ycu5DqnNJRUN2n8lnBQfqYdOlh' );
define( 'LOGGED_IN_SALT',   'zAWUcaSTbDlDU1X6uJjrEl4UzNJ5wFHHbkXMeGuOrZGVe2W8PElK4jbmA0zZaSvO' );
define( 'NONCE_SALT',       'pUDFhOHX35ZjXwuiN7BGzJO2PD1TWAFh6ThQXSqdr9IzFQi8j5B4YCOhX1XbVzxM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
