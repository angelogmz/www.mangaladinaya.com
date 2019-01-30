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
define('DB_NAME', 'mangaladinaya');

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
define('AUTH_KEY',         '=jlBm$Z,jczobaw|Rbz0B6y[$xPF/BYm([0e1%oU=t7HncE_j8df``!W.n_|6(^8');
define('SECURE_AUTH_KEY',  'QzlW`R~$XnPZr^|<@fmb tP$PmrzW#3nKPy6ATO.K:fi=Akf1oi}x%<KjsU`Zh?)');
define('LOGGED_IN_KEY',    'J`$6O+L*Qvvn{~ER2`ar1N$#WIY%X$n[4-m.BPZ?nDCj]v2Q|fwz3eBEP!wzE_uh');
define('NONCE_KEY',        'Eq HJDc*Sak0Plf^@zGUJtET&#FjBVGg)LP.$oq/AMPA1!Nk53itO|FEGB_!c?8z');
define('AUTH_SALT',        'ZB<K[?yl3G3d02 4%>30dE,:9$|:[(J: K2>P?JKQ`Xy?^D*#8C8ES*g[(f/*>zT');
define('SECURE_AUTH_SALT', '<QtfF,}Pz@5Au|^^l^kKKl83Y>UGc3Yx#@YJ3~RpXQlmo@:liH.~Z`0;Ij[`g/pe');
define('LOGGED_IN_SALT',   'zy-:AA<uw_Qig%/bKpX[<{I`/x.xrPHpx$M@2`KO~@K)h6n5Kyb~S6Q^qnAiY6!J');
define('NONCE_SALT',       'D7^4%a&*Z^Cy;z0/{l4#VZi=*=m-aWl(#N^:I<451GMK/y`- *8[&iV:b(nXPgay');

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
