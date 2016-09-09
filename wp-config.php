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
define('DB_NAME', 'sociomar_iflisting');

/** MySQL database username */
define('DB_USER', 'sociomar_iflist');

/** MySQL database password */
define('DB_PASSWORD', 'justdoit1988!@#');

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
define('AUTH_KEY',         'i?wa&+4~pOwwaUg~;R8xS$~X+~JVAA6N^mavPFgdMHj|6+o5tQ*ymC>.RKpM-C*9');
define('SECURE_AUTH_KEY',  'CaQ{z/EJXkyKxIve)q1{EK5n2lX1z-Iv[&Ysf<FKeGN1O&8yFV$2W UF|;GnC^n@');
define('LOGGED_IN_KEY',    '<T}Ue%W>uQkGP~ aK2#)Rog:Br:=]~HpC:!0d@c}c txDB6!b0bO[4ff&0.cqPCD');
define('NONCE_KEY',        '3+m]gVnSSF+>b<oIm)Yt2?Kl=&${+$pO*DI|4R.!S!TC2zzZ&K8s]&+o#ie^{4Dp');
define('AUTH_SALT',        '0UeylrdGP8s8{*#i>}5MRKYN7_E[HE7m52qi|#KMq6XGZ3$ {-`#x%yT|Z9/o6kf');
define('SECURE_AUTH_SALT', 'lNQ1U5*62z>MoT?kzL^t4//|Bt_)W${mYm%Z|Y[;n=B2H9Y[@1(BLAsZzTF2D|&i');
define('LOGGED_IN_SALT',   'bY-s>D8(Ck-1H1S|0|B(0xt^~~vjK*A]whVApR<vh6X@x(t+Cg(Cqy|&%qt(-JU4');
define('NONCE_SALT',       'sGZ/T<R@Ob_lZ_^t41fAaO*rj<w3LlO=adDy_=+M [|e{9jZ};)-pfj`tENeQBpF');

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
