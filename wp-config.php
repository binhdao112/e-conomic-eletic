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
define( 'DB_NAME', 'shopecono' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'SXe9+tx8H/}7ZUxU55}iMfE;[`Va^rTsiN?]|nJ5GjKiIKLx;f.Ujs;(PXt(TK2o' );
define( 'SECURE_AUTH_KEY',  'xlR.VyqHiY:j]`+XB.ti;O1vDnSL4UgmOo:pvT><F04aU)Y58bgvO?s3v/?%PQ.(' );
define( 'LOGGED_IN_KEY',    'uB}M4hKv[zl(j3.G4[JTnbO+pWuIP7D<mKi{/JQ5HorvteT4eUq*]o4gZE15la4#' );
define( 'NONCE_KEY',        '+V$LlB3wvP85$ZO4DdqwC2UZ%.HKMX0@:r<`B&_@bo@H?oO4P?;5@ ; t`Ty`|};' );
define( 'AUTH_SALT',        'T&.NCx&-/X5`M9@?JcY OYSBr:sZXXPLGql(K;iu8rQ}P/*MoZ^(Zb^8;o}]~#%U' );
define( 'SECURE_AUTH_SALT', '$X^jA!a+K3rq+0rTH#IM4sA4xPC)nixe,,jF4h[P@dV_b$^i<5-G2Ccn|m(?-LY;' );
define( 'LOGGED_IN_SALT',   '3BMdzYwF!tZaR}w;]KN}HPPt:<[z,J`Q/73~I88XE<[ma2ST`&B#1NdR&xMiV+47' );
define( 'NONCE_SALT',       '>5qsC|WL]8pmFs2glgu(F69jb%^y:e&Yv3P2V=Jo`b!-jSdQwD$2|G&P^ST~rp6v' );

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
