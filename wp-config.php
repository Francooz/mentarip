<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mentarip' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'TEMqFYY4)Iz0`Q^L6(usqT>WgnpPDNl^CG>Vzcj=UgA=4|crhdo#lY*JNjvADyPH' );
define( 'SECURE_AUTH_KEY',  ' Y:R_mN5IF77KT*u=28gUwSKz5n~1W/l:FKdAxv_L>SGP#N*&r7`x$rX3{*5vYaj' );
define( 'LOGGED_IN_KEY',    '&JRrysJ=ynbxM.0u1-/%bRRqD*8Mj|eJn?zDO6dh<{u*Nxdml9RjMH!*`V^,Us1,' );
define( 'NONCE_KEY',        'n]Lqg@.Y rN-hS96=1~PCJTISE_(1DknR-I0!Bprn bn(HFesn,FSUp2tqB:V-j<' );
define( 'AUTH_SALT',        'Ul<@BTak=d]QDD9l21q|u56fBV)`hr{_K_]4]-(ndRag+RwO|$=$C62k5xGfcHcW' );
define( 'SECURE_AUTH_SALT', '7lSSS_[TOE[s3ufAZl79|.e/7JCN5M=7s@B_/Jk!kGCBg+ee@QM&0%gn3j|<!1x}' );
define( 'LOGGED_IN_SALT',   'uMo|EM,Qm~~>K.+vlMVy/U5ajpryN6gtk_m6te%c|F}RbB8<N>p<Sk{0+1qa?$][' );
define( 'NONCE_SALT',       'A,/f6e_K.r|b0KhJIL*Zo!1^lgS_E,l(8ZPwGQm5f|(7Bp<*0{T .9j_L#tKC,mL' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

// Permitir acceso desde cualquier host
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/mentari');
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/mentari');

define('COOKIE_DOMAIN', false);
define('ADMIN_COOKIE_PATH', '/');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
