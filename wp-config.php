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
define( 'DB_NAME', 'dragonami' );

/** MySQL database username */
define( 'DB_USER', 'kristianramirez' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dragonami' );

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
define( 'AUTH_KEY',         'n&|yOjO=kd=g<dwExioLpH8Tpa:u76ubKVzWm9!zwj}^35>EaALBvi5`7(F.clL0' );
define( 'SECURE_AUTH_KEY',  'YH0o4jenYpd0X<nV 07kiIj2myNX0RfW%-agEJyV;<~Y*ZM.<qBFQki?M;H+-35+' );
define( 'LOGGED_IN_KEY',    'a_.l8^Y5tB!ZlRKfYjej#]h7D%w(Oe2bRoFM{JXx}j`~$gto3<IAr.>wED0{H[?j' );
define( 'NONCE_KEY',        '|mjYRe/Z)jJ39+I+yTbvek8 /n;us5_@Q*@[uB{ vuVa9 0_RQ:UNrh7VI@ye<M5' );
define( 'AUTH_SALT',        'h.UjnL/kti]v@]/8=,k9nm,QgFO5S}o|J,%C%w+C5@sL8sctqL]>9ceVNNR#DPes' );
define( 'SECURE_AUTH_SALT', 'HWgWyaA&rEVOg)h`pv*l#hD7bx-VMvgE`X&k5N*49<E }Xc8d#,7j-B^FR|nL(X_' );
define( 'LOGGED_IN_SALT',   'q7NNJ5^cY*&axQ:5Cw%LJVNh,|8#5^ad7[L[GO#!SuO;[k*z^>M&~.IB-L#g:Z92' );
define( 'NONCE_SALT',       'e%Levdcnj!8V/-cfxc&Vc[fx47U~#PU<=WX!wso_HC7sP@M?Pz>H!&!rkufL*W:B' );

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
