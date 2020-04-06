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
define( 'DB_NAME', 'wpskopins' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(LHAvzJ>]h/R]?dZ 1/GD+S4cOWnwc=<iRxV?ZM]boGM*^n=C(6_ BcDSxSjeKm}' );
define( 'SECURE_AUTH_KEY',  'fI]Q{1-|Fya($+~6L]/s;5J8JN/m`#5vT;yL<0xmPUTX3x4LH{vL32o#dBT5`*`+' );
define( 'LOGGED_IN_KEY',    'h27}w5X:)fr-|U.Pg,Iz9`%UQPuE[n&-9:|3L&i~G,[zVs_j0MGCf>v:w!Kt,.sc' );
define( 'NONCE_KEY',        '}<_0llClAl*c.b2YKS)-iSD8$&,0,FyN^kQN}56?PwH1-tbr2iCjIlqvxgo$!bo5' );
define( 'AUTH_SALT',        '-@TOVrUco#!K$X/ctq+@vQ;U=~#H*,w,`aTo[S|56~V&{F-l@oW^0iugI{B1Y<yg' );
define( 'SECURE_AUTH_SALT', 'dmQw{VJ%bE0p2lX[qEcB{%2b`) {2 gLdyWrxQ*ONuYUI*(26.0Y[C+:]]M6(M05' );
define( 'LOGGED_IN_SALT',   '&imV W3vnPaFTK6^@,RK^L4/dkAbEBa?.VTKFl`O<?*g[nBriXK+Ymy?0FMh]2rh' );
define( 'NONCE_SALT',       'mvo.KS3@3<12*plTUZY|yIglr)p(^:XyoeU13A.$u-[^u$sXxo><]U^g8t[cy}4V' );

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
