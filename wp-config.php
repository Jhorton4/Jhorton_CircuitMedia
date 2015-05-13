<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Jhorton_CircuitMedia');

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
define('AUTH_KEY',         '5/-rKi{f&yt{|`JD.xjZg^lX+@q,x#?[D[lOOGVVj{{7YO3^}xX:oBLnd*.[9Bm*');
define('SECURE_AUTH_KEY',  '.XX(>h RA^6e|9 7~|lP-%m;]>]`n~Mr[pasI[$8d.w~I*lF+7WXe>-,%9kF{cM,');
define('LOGGED_IN_KEY',    'NXpJj>8:t<_zDH_%G@o85+,f(>yE*-dRAHC+9|iYVBZ<gDY;9OVeNQ-s}w7V9oEq');
define('NONCE_KEY',        'eP4A(/jW3IkaPJwswzB(=WEZ0,04|D3V#wZx&rAup~e~-}7aK^:FQT(l]:N+Tuk/');
define('AUTH_SALT',        '.w^^H1@-Ot{+?~IKFB/g[7c~3l`+SenYN+=OK4.g18<Wws6/sY6jw_gQ{Yf:ylfN');
define('SECURE_AUTH_SALT', 'eBn7)*M|LL[sw WHWYOOg=^~R?j,XC +UN;? `7Y#eQ^-8C-HchDpP.3rN||GS#h');
define('LOGGED_IN_SALT',   'IXx2W_R!goTSm&-Tp ABD_~qq^`1 5e[b^QI]#aBZ[a2cFI2U4*2HfAH]u%gz)}J');
define('NONCE_SALT',       '#{&G$GdYM~a)6||2.R{9_2VQNrpH<a_1k1u3mZ 1-v<+jO-C[Ect|+O4taeHJcd2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
