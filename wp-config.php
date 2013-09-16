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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'HVK4T/%)pib{-qTJ8WR6k|Z=Wl~aJCHh^B!3AvUTf*rYsbi+!sVHht#goYI=zhYB');
define('SECURE_AUTH_KEY',  'ub,6*4{e##;>m1;^}p18/h|[AhZ=U~#~<=|V-7|xaBwgJRU&/@jv$rJzz1jHA)kL');
define('LOGGED_IN_KEY',    '2b-S*pdXuQecuH}f_lx-GuILtw;T_#>f)f%TJS{+w^O`|+kObM~W_l-Pd=1ZZ-,Z');
define('NONCE_KEY',        '&Nh+nNT2AO7f,ZKY!&y$L}]lTJ(@pd}6SWgoOc?0jX7o$hx.+$dr<qWrly35F.[w');
define('AUTH_SALT',        ':GAPD0+Cs`5GR+(((=skD9PXmN`>UY^tq>+5DDY_[ov-cKDe|JuD#2Wip|hv5A!D');
define('SECURE_AUTH_SALT', 'E-=UDoH^m#5S9-:_W^QQ2UQP-6O$^m8`u+uFl1up9d_s_o9/^qj [r^Mqe^.$Nhs');
define('LOGGED_IN_SALT',   '-zZSWNOdiz*04]![6-Y5HOs+y6L+BcmaT^7>UIghw%j2|Wj*Tf4RZ59vRU,+{}pd');
define('NONCE_SALT',       's;2-dZ9(%X_DFA<63~KV e#kU0VAb!)ht-y3|g_AJ%,td]!3|H,8a Amp+tf*4Yz');

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
