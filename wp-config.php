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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_dragonami');

/** MySQL database username */
define('DB_USER', 'dragonamicom2');

/** MySQL database password */
define('DB_PASSWORD', '1ly6odjYLgM7iF9l');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?8Ohd(pw.wJtyBdh|O:X/P5|z0%(=8KbeqE{3il_0-u0K2Dn2#z.;F#1,px|59vW');
define('SECURE_AUTH_KEY',  '=|YAU1.v+6^bjhSmHkz97iBT)q&Xw&>w)#5{4A*%-sY}[fu3}0t02fX^t(B8I4l8');
define('LOGGED_IN_KEY',    'eU[cVEeE/WEthgW?V;xKhg[Lk+f2NqK$kGz.c2kx?pdiN]O9jCT&aau]]eX:eTYW');
define('NONCE_KEY',        '3/V~t.0~<#9et| $pnP}dO35wt_FH9l.2C/10cEL%9*/(lN~&j+vi^NOp xu|EV{');
define('AUTH_SALT',        '#n]C8:Ke;pl!mLyU v:t:DVpMlpr!LwQi0=ICOEk!NHkE90%NcLe;<,J_s7?bJQ!');
define('SECURE_AUTH_SALT', '4D},iYf]W*Gz{EL]^JG- ojqmu!p`N<,-IV^ }O6C_FYLQ)R+twO^^y@@LmmfNBr');
define('LOGGED_IN_SALT',   'Ru4~wd:+4AN;ksw!mic/fG%$.eI2%<z]/>{G7+DJAEexD67 S|t:~QSDSa;T`z#C');
define('NONCE_SALT',       ',@_5dnEf#WI48o~a96Vkuk(mBq48Z[(D)KRBfgd5`Yk!G?~o4E]QsGmtvo^fj^I@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
