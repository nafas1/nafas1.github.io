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
define('DB_NAME', 'newsblog');

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
define('AUTH_KEY',         'sxlAC$b*z!zvU6Y4EG$e +C$1Pe8[OaZ/7]u<H*]`QlOo,4/t+du;Iei&-xp:^v%');
define('SECURE_AUTH_KEY',  'x;eT?vB&U&=M1*Dv;EZ]8@!#?~xTh$5$iW3pZT24O?iMn-C&}yh@QwKLv>Z+mk6N');
define('LOGGED_IN_KEY',    '/RbF~2bcKDGj-oM9#ZYB2>!lp0+~Z%CA{69T.SVAAYl^,&RS]?*Ti*bvt[HYR0X/');
define('NONCE_KEY',        'fk&(YL?,BXO8;k_*Y^C`fi1t4RUqY]O{uZ~k<7 plk/tH|on.BXo[Qb%j]q_&v+[');
define('AUTH_SALT',        'Lv=_^w4PqCirl~:NTdw/OP_1#d6;`Bs+JT;N:^YCF,B%e:N5 Gsui$?R_3ZbzWdQ');
define('SECURE_AUTH_SALT', 'G3>i*uBMl`fvV{lrL-N$6Mm8F&K -RDSts!$Wazw~**BF*X-%WgjyFKrh^Z)TbR*');
define('LOGGED_IN_SALT',   '`4KHr+beW%2QnGB8(EFDK#J]Ev3r;U^/k}muQ{g7CNAyn?#|G}jPW,L10nYyuocd');
define('NONCE_SALT',       'cocW6|=.XVl#n}cnsh(]L9Rzh*[V__#$YoigHq,<53SnXcaQ4V!i@b%MO{&PP11Q');

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

define('WP_POST_REVISIONS', false );
