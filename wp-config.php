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
define('DB_NAME', 'wp_boilerplate');

/** MySQL database username */
define('DB_USER', 'wp_boilerplate');

/** MySQL database password */
define('DB_PASSWORD', 'foUIY*&y78g*&TTGhh');

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
define('AUTH_KEY',         '1|jzj)YRrvmv73`ew5W#+`@cy4]3myX6^&$0TObr=ibd*zzjyW*K_r~TkXAGFpd?');
define('SECURE_AUTH_KEY',  '.Db~mf+D+-46kFfn22{8B{l#s<%{{@a1*t tV}?vq@bb[]DpPu2?| OcL(IM6QG6');
define('LOGGED_IN_KEY',    'K:O)!r-f-{iR7.I:7cHJ/u.6sfIbJjA|-/w$a&SInI7vFpU21.]MeUKMQ,nJ-a[o');
define('NONCE_KEY',        'VnN|VcGX%K5-m!|%rVT4xg_Mz; (gVobL+AqTD6+QJ}&v 25&tq`9pgrlCQtjc5N');
define('AUTH_SALT',        'r?~./{:EL5O,KV#Yf@r!l:jPMpah2#M?8!czT</PIi_l(SY%$sGv}9rDKX=pK_Nb');
define('SECURE_AUTH_SALT', 'fuU(>J*-JC( WeNG5{wn7LEU1Y^.:vh*n#qqa*,hjNP/.OjBAPsume^_6_4nI~yC');
define('LOGGED_IN_SALT',   'K|DR5`TmxwV 6zeY~9:@vC6GpMHqc`};:6-@NZ-trbBl?l,X>iyWbhc#MDN[,AoF');
define('NONCE_SALT',       'Z#Y%4)dj$7>t9[Dxm8j1(c$ei:`Y9eb~vep!H-5L-c7(hu^^+cK(+0*wRQ6zwf~0');

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
