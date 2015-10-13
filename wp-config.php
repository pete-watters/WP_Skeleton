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
define('AUTH_KEY',         '@{E)lK1S8{dU-%E7ekPI[0 7[TEAgs1WdH]PK~JX<c*yqYFO:h>,+JrL1f+19o$q');
define('SECURE_AUTH_KEY',  '{hQbpB|}E EfY}_,M1$[8>lt3H) Za#C}k%XL;3P)`&.okfvl-_;plZ<D] =LQ$[');
define('LOGGED_IN_KEY',    '^eS+^HkBkBAP|-Ax6&F3as-qoJ=4sab}[]fJ]n3T%l(Azttf:!:nx:Rj#*?+o5}[');
define('NONCE_KEY',        'k`}l]-6+D0?3O62(`*LN->u9F*S5~gZ~=*|3$`}0+-Z5|&o=8i!FK3%A26>_AL{t');
define('AUTH_SALT',        'RV_t4k,G`^8lgwQKRWFfHs7qF1I-|rnE PczCwM(}12d<F5LW7wN[xx>sM*JGE3x');
define('SECURE_AUTH_SALT', '|Sj-s=G~,FShO3VZ-/|KgBYKQ3ek+C5} @c9ipk.NFy:rhQ8}n0_wnxj_}jTy:su');
define('LOGGED_IN_SALT',   'X;yn:.LYefz%V8;5A%8.c`jmhEl%)+.&z/?-=5-MBQ)Z8J|p F=|K;IKApHH<;ga');
define('NONCE_SALT',       'lKS<uO|X9i mS+[.42>-JS^(hj@p+XEG+_FA.;2f6Z/l3&O3RoT-aeSsh6Wu*aE4');

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
