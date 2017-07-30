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
define('DB_NAME', 'wp_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '^D9:6H;t?Z}Fn>b4G7hUJacIZ8l3SP1]O$)-(utLv8TDS~I5<~X)q>;#kF[42F-%');
define('SECURE_AUTH_KEY',  'No>3Z.lb_rv<<w^vu ]QyuI?Xf&XCa87{1OZ5w=tsC6V0_g+(5W`iTkO~2R&Z-#(');
define('LOGGED_IN_KEY',    'N.bwSaFgdj/}/*pr,&<=%Ma#h-20y02N?XsX,QtmAHb?!CXnQE/TmfImzr3;2gC]');
define('NONCE_KEY',        '<FIC1O{CUkCnO)8Kg_~HNF_2T?Wu^0@yQY`L5tcq$2k]j8L.dORW-^e>>D^TRGGV');
define('AUTH_SALT',        'P_W,77<a8M.X3H~U/@PinO#NjzM^vT.[ZflPjTRs^(IdCC$o=ZLZ2-(7kBR8%dB@');
define('SECURE_AUTH_SALT', '{S(pz]|,v0FAwf`&!]CLC7Lp$rl^A;6uR4AruBC`8+Ef}IxFx1dy?|v.`pMy+#jd');
define('LOGGED_IN_SALT',   'J|CT2u[K.,~iHDkD%8chkkkNc8WMYbrt!2]WAFo_%+z/{3a[P6s(SQ[W}&>bd73@');
define('NONCE_SALT',       '2Ro7=:T.WTHA%xcPHkn-(v}K*wo`!1#^R[{pk8x3jq,,)M:;MD_;Y.7,Ize.nU5^');

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
