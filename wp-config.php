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
define('DB_NAME', 'Itstart');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'fzg#Ws((Fj$M0/3H;zDE?Gi8]GnMtn- L+zI7bTnBBbY%~> C/Ww!u.!s1-;J>3?');
define('SECURE_AUTH_KEY',  ']}jbXdx0UT8WN(R[dM~Jdj@a}|=K6*r|{CJD$Xk1-.G )6,(Q@RNXV5g_/pYOJM9');
define('LOGGED_IN_KEY',    '8fPSnW?xftx1|$8,~C`usS%,^[L/rGuF{NmC5SJ.IQ;zqS53#azB-(=FV1vw7_:`');
define('NONCE_KEY',        'nP+j!&`)P))S_]0?+U~=uz~h)TA*?O6TY[mE-#tp^{u1kD[7^-.Ld1 *IOby,`IU');
define('AUTH_SALT',        'm<D9!36[o_gRg_THF>+Rx8<Qg<F8;|b^,c%.x8q<@N/OIP26$%ay16mE$<~a|-uz');
define('SECURE_AUTH_SALT', 'U,XsUcIOv}kh14 c4gxO3jDDHlK0?{v. Vr&5D~ ?@hev+s7tI6^McvBfY~aVg82');
define('LOGGED_IN_SALT',   'vg`49p0]l+-1]MSYqa@NBa#d2QyFA>iOO-M12/{d~i9+M$>=s>]=TSBcGOOTzd!k');
define('NONCE_SALT',       'Pi4;2/H]IdR| OHm<t}e]s40N2x<S~nqg$oYw(F8!EE.Go>ohhGF2|CbJw$Ce).w');

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
