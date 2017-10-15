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
define('DB_USER', 'wpress');

/** MySQL database password */
define('DB_PASSWORD', 'onOdmog9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '|<I%Cux5zpWf5au_2  B&6W#.bfOF`8Q`l~!_meW_h1SB$`<=xJ[P.# y%)~gm}o');
define('SECURE_AUTH_KEY',  '=n%@7|eo{uVU, gsB=F:#?z@q$,|[l]`eq]5R+uWE9hlSY^|!im>n{:+}xFC$}ke');
define('LOGGED_IN_KEY',    'qx_p:@#PvtmTIxy>< 3pVl&1BE:eN)Pq<_|*=DRBG@W*rfP]FvZt9DGfZ5IHRkhK');
define('NONCE_KEY',        '(q7+{k7|C`^wG3`0r;rI3k+0uEEwxtKG%BDS.z1yR+QqBOF/e[mzuI8@nheP_gkf');
define('AUTH_SALT',        'y=gR1<2mQw=MA<VMJywmJLM@X^n_eb~/&aS[KJdp3ZP6W1;G[/$Hu-mn-N9Y)~/u');
define('SECURE_AUTH_SALT', 'r?v~q~}NE?m^.h|4-kcJ zzHGPMHG:Y+kT*jbDfF> !J@J6Kd3v>|+Bh(D$xp}9-');
define('LOGGED_IN_SALT',   'm7N<:*5`7Iw1Z-FHPvKoxv$]iHr_$?+,$%<uS14kAvM)]coy;9#<B;:`3<+dTdr5');
define('NONCE_SALT',       '&]X2)vV)6>!zQ8@[Io4Nxj++RoZOA;JLAbsI4!$ItR6tt0* gEa,vN86lSW%u+MU');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'amjd_';

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
