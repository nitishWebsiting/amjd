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
define('DB_NAME', 'amjd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Mechassault93');

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
define('AUTH_KEY',         'H^GltV(Oiw4hq~%v}7te3)w#7SpM?H7T/0B%miD<XXbDAEF*!FHipf_U%eSQ*X#5');
define('SECURE_AUTH_KEY',  'E:Rg(O;[H(]O->^,k:V_sSI:J^DvT.>fz#J-RUj{mOR9Mtj-!LZr1?UTssQDX)!p');
define('LOGGED_IN_KEY',    '<f+.kyr%Xd[E|~9%X%|9L%iI?L0_|}1f}{d^hXtkN:@qxiz:|XnQ*E]=T/]{`3xj');
define('NONCE_KEY',        'BO/ruSLs*lN&u#GElA.&z]W3_?=eTD1i0QH&rYgs$jChR^gkw@z,U860.uI?:mj`');
define('AUTH_SALT',        '*b+1OEq*7_gLqW8TAh0?cX;so%!TSs!=xUfMLw(IV^hBfiv:H|GCBDgO#gY9}=h/');
define('SECURE_AUTH_SALT', '=FV-ZGup1>~|(fPv<?(C>_L )(1x| 2+O^PR2PAwe-!s<]1~VhNejMad#S2l5wRV');
define('LOGGED_IN_SALT',   's2?iHzR: xS0_wa4FRN&9Gb)De-)WvWx{9iR}(@.~t$5iwZ-l:c,i=zE@K:X[tc$');
define('NONCE_SALT',       '*0n~L)v/C X{Es}d]MR=bYq6&($d1TeR<,f2=8`1zReN.?of?Cvi~H|@O;.ch%h(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'amjd_';
define('FS_METHOD','direct');
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

