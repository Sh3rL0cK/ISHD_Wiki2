<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'iswiki');

/** MySQL database username */
define('DB_USER', 'ISWiki');

/** MySQL database password */
define('DB_PASSWORD', 'Ch33tor!!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '$2#t(B;L{`x24rL!qsrm?.`)4m)-:IX+G1-@pa+LN@A#z<Z9}RY$b8YNME-;a#a<');
define('SECURE_AUTH_KEY',  ',x^c=x}(w},|RTJN`a3_8K?^Ae;NT1Qo4=6+L`%#=*Lkc+(oFu2h@8j<&m!+,_lI');
define('LOGGED_IN_KEY',    '@/l<AnIn?i}DT]5Fab=pOmD`bj$dDd|{`631_8z%v[d&IZ+Tj2/4Xp3|,[4>GX ,');
define('NONCE_KEY',        'ewAR(oFt=z,GRC!ci))7|@u+^E3(/^WnRZbf m=U)Su<;[>;d`;%n7Z|dT!+Qml[');
define('AUTH_SALT',        '-K^oo$2UdVy1mL#[C+{|y5FTh+MssElJp|EL|T.pv* Qz[LCbY@2y`.jWa#zAp ,');
define('SECURE_AUTH_SALT', '+aj##|+`D0f8R/6]!=8r5yXbFN&0Xh+>^FL^R_sz&(]9-<8QQ,/)Z/(#~-D9NBU8');
define('LOGGED_IN_SALT',   '0h)Q,z3wj&h+my2L= f=l(p>Va 2=AhScs2y(M]EWtC+V|g++[>r-.B]8F/[LoJ4');
define('NONCE_SALT',       '2Zhu+EZslU-EGH!N:Ww=SfmG6-uI&X/{?Ed@D{X5$%)N}Vo56pgd|5|Z&@HV(z|B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
