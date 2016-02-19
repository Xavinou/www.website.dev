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
define('DB_NAME', 'websiteDBudxlo');

/** MySQL database username */
define('DB_USER', 'websiteDBudxlo');

/** MySQL database password */
define('DB_PASSWORD', 'i9cnkn1TWQ');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'H-Sh:DVl1GswCRw1dh:O-[Rg8Nz[JZ[8k-GV!0kzz>Uk>8kzFV!0jn$U^3fv3Jv,');
define('SECURE_AUTH_KEY',  'uT*6PT.2T9Dm+*Pe*2ei+OS_#5lp9OW+*Lei25h+OSl|9Co_CSZ~1Sl15Op_VZs:');
define('LOGGED_IN_KEY',    'W;bquEHx<]ix1LO+;ae#]DptDHa#]hw-KZ-:Z1Hx#Gad]Dk-KNh!1gk-1Gw-:Zd:1');
define('NONCE_KEY',        '#Oa#dhxOt_#e]9Od[_Od_1dt9Owo4Jz[VdhwN-[4Nz>}cr0GgzFVY|4}Bcr7QU^Y');
define('AUTH_SALT',        'vfr7My<Mc37jyEU2.PT*;Xn3IMy{Xm;Dq.Pem+X.2euHWat9OixHWa#5l+p~9O~:Z');
define('SECURE_AUTH_SALT', '7*{Xm2Ht.Ti.2fuLa]9lp5Lt.PTi;Ht_Ka#5l-~KZ~;et:Dp~Vlo4O-[KZ~:dswCV');
define('LOGGED_IN_SALT',   'zUj}Br^BU^0cr7MAEqm<6fuBEU,3fj6L+{Xbq6PuyET.26iyLe];ap9PSx<Tm#6i+');
define('NONCE_SALT',       'G_Co~1S~:Zp5K8Nz[}Cko4N-[:ZoFUv,Qk0!Nc>8kz,7jn3In^NQg}FrvIX<7Am$M');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
