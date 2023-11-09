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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testdb1' );

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
define( 'AUTH_KEY',         '3sW9U<Zw:JzqmA<<x}o{=m ~Asw=K[pk?AMSRieKgEaz{Q uF9k4l$7#d8q:1Tnh' );
define( 'SECURE_AUTH_KEY',  '))/x[k+i|6-{#{Oq}$G%LO[1zLS_O^7may uAgagU.*.`XGgf3cDkV~<l[d5-!w@' );
define( 'LOGGED_IN_KEY',    'B4=rdOo39qm71!QA}I#&$oiVVbQSl<LLUoQMV.Ju=3go@:d;$7lOfBE$tN*HO3~A' );
define( 'NONCE_KEY',        'kl x53E*b&ddQnpkg#$^;K+q}$+M@5Sz6fT@Zh4 Y3a|)SUfvCA8[D`#s,cvDB9z' );
define( 'AUTH_SALT',        ',-r;2>u+zG`w,bx,tRzMLmyr/O!c]s[7P=OEoO vX}3X,B^J_*pdye(Ze?<&Oa<k' );
define( 'SECURE_AUTH_SALT', 'W->V{E_Fb6cy;D|+2,+5>=b$XU1Me1Hbq-.6kXnw:q8*#|hL*h}dr$I8{L^Oo*kT' );
define( 'LOGGED_IN_SALT',   '>O 4KXwhkf?1h}s>eK:KuySM8>@K/R^:` yFNG1W,o 2]9,V9_,$m5!A!:NjRQ{p' );
define( 'NONCE_SALT',       '[{IpY/-n/l##y->K7NY@|0dYfsdehx%H&|Q`_i;)]YxYr?-f3wg}fd^fe_2.ZPvG' );

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
