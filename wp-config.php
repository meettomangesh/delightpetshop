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
define('DB_NAME', 'delightpetshop');

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
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0S>3,9DIK||9Qyju(x4bLBbvl)F>$-@|QVqW#Trtg7M:7~t^#K6Svq6hCm^czXG@');
define('SECURE_AUTH_KEY',  'CJ].~O-$|VZYw`*^pe0(rp[o`^?iU{PDaD8TM&Rec#fV(u&fV7@1,y$]K|2J;/6@');
define('LOGGED_IN_KEY',    'KI>wRzD:>Mu({VAi1~Z7(oFls=e,XKK2P=5vh{jYII<Jx0J9Ro$|?lS_^ CA $cD');
define('NONCE_KEY',        '$,g*lSb9Tq:)a*oGJMg0U&<`{8:#;b#ID|Y@5F%~fb^Kq6)ALO|jgT-SWrR}VfyW');
define('AUTH_SALT',        'uxvyNKZEmyO/~@+A#*}csWr]zq@| 7&>J-a~]Gr[tllRRNF3*a>jagA1bD)2A*W,');
define('SECURE_AUTH_SALT', '1A&]Wlr~D:T1G5!|gI#[=FVf{K]y]O;CZH|8|bH b,_SOSDIg%eaJB}lcci3cO>:');
define('LOGGED_IN_SALT',   'SZ:9{?|UZQqb%EU1,MHlQL0o2(eob^,&W8D!WvmEcax0952{u6nY:^9$Y jCL6zP');
define('NONCE_SALT',       '9Rc(9k&:0Z*cXp7?Ax;x3(q4a+5lY]lrd#y@w}M42njuU;;a g,4?qU+:ufG ([?');

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
