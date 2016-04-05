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
define('DB_NAME', 'stellass_farmski');

/** MySQL database username */
define('DB_USER', 'stellass_farmski');

/** MySQL database password */
define('DB_PASSWORD', 'RHxI6pNE4n');

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
define('AUTH_KEY',         'OxC0H(:^*oe4?+,vM8sD.?t2s]~|9PER&@fBc|Y94ld/y_GL|k,f&Ea13>I11qMH');
define('SECURE_AUTH_KEY',  'tEy{&U|HjBBnZ(@u~=UU;i^}Hb$wZsl.bN!fCN78vq,V#AB5>4_WoEoC5UYed#0%');
define('LOGGED_IN_KEY',    'x<6Cw[SqBLpnx4mI7Z:FkUpfJAPqo4N{`m^yT`V@E(<1M*6qIxmg!L&Y[WY#2I*+');
define('NONCE_KEY',        '6ygUBP@M;7,]|z$iQ2L`A>`TQ:)w>eN2bU@!}Mf|;W5-KV+eb~m^RU#+B{Um4OqZ');
define('AUTH_SALT',        '*N+}I-m(-vYf+ZXaCiP|(.jsX<v/HPkoj}lrT1:A|{syFdwR_z@v|3ex LyOL}|f');
define('SECURE_AUTH_SALT', '|jsfr22Z^x-24/-l}tyP>8tSJnadw~Z]M(E2-Zy=Rw/ lnOE$N@Dm1(%<J`aJ=st');
define('LOGGED_IN_SALT',   '@=$g3ds@E:N] Q0rU_,8|9b2SULQwtB4:eja[aK]KUep+KyNPR1Q)=uW2gO+/53}');
define('NONCE_SALT',       'L8+L4<kx[RnodWH sumX:z;_fS,X-VULanW9kC5?vMf+nRWp6_;Gg,Pa$9^-Is6Z');

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
