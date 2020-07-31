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
define( 'DB_NAME', 'DGCoreSol' );

/** MySQL database username */
define( 'DB_USER', 'dguser' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';^tNk#!X$DF{Zwd.[Yu/~6=s.b:I:u:_?r|pQE3^zUthJW:+{/8T<06*41`m$~{G' );
define( 'SECURE_AUTH_KEY',  '(Oi0CqTLh@l_^Kk@V%5u.De::bIYgoC]l/R;;xRH={S&!3|34Q2/Nvgm]gz:>;ga' );
define( 'LOGGED_IN_KEY',    '&uUY4M1_Tv9 5m6p,bzra.W~k6JEfkS;/MdX#fx9RG~SJxSWMl,g{4Z[iMGRWgBU' );
define( 'NONCE_KEY',        'dfv[S/}B7y#kw<N?a69ePE67RIiJX~+S [4JV=mHpanT[Qnh.Vx&{OH}A{B0jWoY' );
define( 'AUTH_SALT',        'sR-d@+QN=`5Xr20F&0|d6j1AS4!0HN)P1UJ^/:M)N~1DDGmaG1S1Xu-YKw@XZj/s' );
define( 'SECURE_AUTH_SALT', 'Pi<)B#)~_=-G@CaCIPq%@A1}$-:bE3cZNU}etLTzM(.ajnStY?A+}-9a8cif$]c1' );
define( 'LOGGED_IN_SALT',   'w}B;g(WuBmJmUw#gl$THgK7KU8*=QaPbf!olVB#y3x`XH;1}{y,5`YHy}c7QyHjb' );
define( 'NONCE_SALT',       '_Y5fEFOiO^40fiRH#aZ;@t5MR~^1r8*4 S-u1C8LtK7P6_ubO/);D g%snx>;2iV' );

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
