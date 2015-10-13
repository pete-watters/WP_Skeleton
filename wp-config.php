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
define('AUTH_KEY',         '~&)r_g+l^MCyx3{ILv31$>$0JX-O+WNhmvjZ}#<^3-@!%|M,AVt|SCVBL&6<k-gv');
define('SECURE_AUTH_KEY',  '{V@DU%<zm:LK-#:EQ[X:B(PZy[[>Rc2lSZH X@ 8/}}7SX,QDzx}+498$&`FVqO8');
define('LOGGED_IN_KEY',    'T~=9XDNP=glA}+vbt^J[ =r;j/`F`-%Lw8IoCCft[*HXi1}gI1djsowr9y!UN-$L');
define('NONCE_KEY',        'sr|{Bre6&_icG03q08O-q_&e@L+SY-O8@Sq+;:+r[fG^^#;4b57,tAX~t;FKxXM|');
define('AUTH_SALT',        '=d*2D[9<Z(||o+oWYurs6j++e1Ebs3?/~3~}wwooGA<xDvVK-Y-wJ8m6W?<)MoYD');
define('SECURE_AUTH_SALT', 'nK/xTLZcS^1SxpE[_yr;]~9(9KVt.GG%,%<[<)8xd)n9-$c:<M&Q&yMDp-&c%==Q');
define('LOGGED_IN_SALT',   '.PzD=?v0/@` )bYf?gUFf;]OMy4r C;/M,+}+A8CNa+ko @~y4xZ5kNs1C4)lZj5');
define('NONCE_SALT',       'K-mWdN/@un~-u}~p0foBM5V.eY9N;+=,(+Vbzi*7RX/yreWa1|Wn!mus}krT$Y:-');

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
