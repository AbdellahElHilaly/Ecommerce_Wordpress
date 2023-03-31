<?php
define( 'WP_CACHE', true );
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpres_db1' );

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
define( 'AUTH_KEY',         'Bk&YdQWIlIbXRTuok-/jq:-AC=S]w$Fcv>xqbbKN lRa;3cJ 7O/|u,R`vXV<pDo' );
define( 'SECURE_AUTH_KEY',  'gyG]=>efPY_Y1le3fga3{@QlL2`Zc1S|?9XM+DVkfYck4bIcu?YMgORvQs|xX{Ew' );
define( 'LOGGED_IN_KEY',    'xeD;Ro>#AxVW1Yp^,kGk6?Wr/JG}*^K9zy ^AQq/6uSqD:i5k7!:3;lYo{,ULlHT' );
define( 'NONCE_KEY',        '8fXG#N[HI,55<]mnY:>@PnV*S}v_dR7EaDttO.{9Oa#k[`1lVF=X|Mw)C.xOQ/8U' );
define( 'AUTH_SALT',        'k68/qe+/^8S.oYYh5p5O5eqLTjXC[%UDXnVGd86ChLB-F$;h?lcP#Pp}dKH^r9R4' );
define( 'SECURE_AUTH_SALT', '6ThMkS{@_3R@=~`3P,LGtyd[`yo^U3Gf6fk8AEC_-%dr( B^;jJh+y%$OnFH}CYB' );
define( 'LOGGED_IN_SALT',   '?3 $>uuy~@glO5F5M$?Bv:rG[cV;9+*@,9Yt[M(,.TDr%FWNR-@c,@+JMMGGG]X)' );
define( 'NONCE_SALT',       '}u_QZS5k{wPPL&3*wX}W<b>=cHC,FSi$AV@*&EGpD7aCyc?XZh7m&,,Q}Ob~2i0e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
