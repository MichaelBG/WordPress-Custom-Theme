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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'XHXTSGHH/RFrJyzvbH/6jYjnRdlB6Rvs5L3VKqZzEkwtKOJzrGkqpo6kqRrjUanCkZ5AC71QQabJelO/8WGgDQ==');
define('SECURE_AUTH_KEY',  '2x1Yhbt2lAMyM3Cs+6f7zTRZ3KahgcLWCaFE4n+RxW7DDKOm4hwdM/oIAXYWCU4/BcjQcArdmlv17KNObvfFQA==');
define('LOGGED_IN_KEY',    'galQWASYFzojckbPkZF1qvGM6wbrrf6FBzDcSd5d9wD6XIbsBRqpdSq49UaT+FcWN6VowmAEHtqev9krJMqOWw==');
define('NONCE_KEY',        'f/42Si6hBkycGpR0s+YKh8m/B8mxH9gypcYUkQIRfA568LjC0BLb1mKSpZbthJzM8ovmVHc0qnSl0FS7Wg+X1g==');
define('AUTH_SALT',        'FInLqXpaqRKEruG2YCKh8NebCRyRV/C9nq+9tj6iMT7KJ9G5FLUSD/wiWVNLgO3ftVOSHZrRNP+u/rTVN2j8Fw==');
define('SECURE_AUTH_SALT', 'H1gdNWfH6XxT7b5b5M5K3gKXoIK6PZaOQghOsRHVItWajIfpi3dNzhyXZ3bwMx1xpNUyCz6VP37tfVpn0Q1ODQ==');
define('LOGGED_IN_SALT',   'VTCsG/vbT2cVAXRJWo/7KpIDyIF1tv5GJUKCn68CKaUX/MqZJ2TZGkPQD24DPKjoRyrqnbRJzuqFkaIDbb6VOA==');
define('NONCE_SALT',       'lTn9RnR9zy8zXk1aclF1IdblWvx3W7lFmOhjWLNigx+bvWOxDiDoiS+OwSJV8EqcHvjyuKldb+51Jyx4T6ywhA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
