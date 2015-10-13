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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wordpress');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'wordpress');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'wordpress');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z;Qt][Ww }O|b#2ZoLSY+8v:.M.kFgVKq*^>T3N9:!_3e*Z^|l+EkmHE{MD=TF(Y');
define('SECURE_AUTH_KEY',  'OWU*-+!**.20RRS*[M_ 8Ia4t.ipx-^RAFmW$-hAJb_$],j2.TjtY^=XEHGAz(k<');
define('LOGGED_IN_KEY',    'z;*6J8PxTZ1!PZ|MvC>Nw&*|xKi`9GlcVp7>@dirg+w{W}!z8#I`>O-*_KPVBx0z');
define('NONCE_KEY',        'Hl+u/$mC#7@M{IQ P%HH+%h~mJ7Z3OX+1ZJ9yO,qP.t$Abr{<{Vcu`4mu|?zi*g]');
define('AUTH_SALT',        'o@t;6To+non*sZ-b7XbU-pPI?%%59(a51_VLESoU-]4>C7#[(0A8UfB8Yn$2k7Y$');
define('SECURE_AUTH_SALT', 'N+l5GkPUqZ9H|s/xNk~dbKv7^@Zs0fk5{OnR#Dz7Qsazb^ZWELu;0T<5yX]0]oCN');
define('LOGGED_IN_SALT',   ')b6uM].Xru&u49ShwubEg8^V(hOJSK|(H<SA@-$oPNzHbQao.d#MxJf7[CC=9o61');
define('NONCE_SALT',       'n-tB<W(^47$i-<&A]_%XfditSk)i(5ri[iuN6H*|9l,)MHVz_4UG7R~, K]9-g$2');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
