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
define( 'DB_NAME', 'ivdurvqv_wp495' );

/** MySQL database username */
define( 'DB_USER', 'ivdurvqv_wp495' );

/** MySQL database password */
define( 'DB_PASSWORD', '6y@S5b1-p5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pgniaeitf6z2khfkjkklkn1oaartju0bhlflvqrecuq1lccgppgidbkc3lmexmem' );
define( 'SECURE_AUTH_KEY',  'griq2hhnumtxgoz3ismzywbfcfnuuwf9fidbdkwukf5jzwtst9esiurhdmqeikjr' );
define( 'LOGGED_IN_KEY',    'o50fo4wmcsmac8wp7kvsomv5xej4tto2idptelruo0tbkiihanz7osfxm1dmt5mz' );
define( 'NONCE_KEY',        'dkcbo4oj94z6wchl1gmi2ek0q3pquf7xzucfhyejpekym95ho0ilm8m7xlmgdiqt' );
define( 'AUTH_SALT',        '6xm7xejcjqkpjbeez70ysi4givos92bmi7r7zdqzm4jayvbigmdkwiypjr27nlhk' );
define( 'SECURE_AUTH_SALT', 'fez6qbmqwr1sct9zmgv9whizzceulnein6tqtviynrzjgrsbgzqaeu2dscll15fg' );
define( 'LOGGED_IN_SALT',   'emk6aee7hhyglcwy5qado59z7ekxqojifaypmuiazepwnahrltmrif6pwgn7xsax' );
define( 'NONCE_SALT',       'b4jdrv9dwczuw64ibq80z4pl7xadpmwb4rlbnung7cldh21kyrbsgezddpafnt8m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
