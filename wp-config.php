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
define( 'DB_NAME', 'wordpressov' );

/** Database username */
define( 'DB_USER', 'webMasterOnVacation' );

/** Database password */
define( 'DB_PASSWORD', 'W3oTxcXgkfoX51B#Nn' );

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
define( 'AUTH_KEY',         '(]iGO>d#2_}3!~{e|Y7YVQh,EUQN^%OOG@bN@SLukpZ-ig6[!6GQS>quJ(uwx,my' );
define( 'SECURE_AUTH_KEY',  '@c7wbD><O~xmM({~&pbVA^fFY+XnKILHt1dj..~%%,S/mC_Gth>7G!h[XZw^|.A7' );
define( 'LOGGED_IN_KEY',    '2Ra0+;8I[,Ldt6~VVOJ#4n1ttS]&;s50iEF8+ii5zXBkW+536P_046-i3RYpxK(C' );
define( 'NONCE_KEY',        'O9g@[r_v V/Q*=[?BL!}SDET+wli)4)-(k1&f.+[V[m+?3t@NIfH):FeP19BU1mg' );
define( 'AUTH_SALT',        ' b^y;=7m]rLhA`dEUim#}C|{VPT%Ms>*v}36;_a!sq[NjJlZeJ}$ySJ+<{AHv7Rz' );
define( 'SECURE_AUTH_SALT', 'CcCe^<D;A>66o%bWv`QsonRTHP.S,Q74h%q1|rK/N3+QFBj+jKEVkqa:_&B-N#[~' );
define( 'LOGGED_IN_SALT',   'l9V4_01rI!)3.,KqMrS0<SD C1G~#U]}&)02[f+2Z1ASY&>b)_^>YB9BUwRb6J}4' );
define( 'NONCE_SALT',       'W0v7|7@z6ci|a7!~26tmTT,v:)H$oF.z@.p?}^q*d48xi%e->Ktx)piYauSCD.@_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'ov_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
