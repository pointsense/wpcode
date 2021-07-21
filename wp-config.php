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
define('DB_NAME', 'herindo');

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
define('AUTH_KEY',         ':X0* &s~rMW(!E{^bP-!+kLnMKq0hE[|Wu6=v610{0##P,%mv/Oo18$@9#b}A&ko');
define('SECURE_AUTH_KEY',  'mdD)GV.EYJXxE)J$6hY;~hy~vtfQ_1T55I+Cou]uj$:w@]a<.<8yDwn8f>L6/^b ');
define('LOGGED_IN_KEY',    'Y]>:8I,nK[Ctw2a5<KrT75Y|=~PcXX^:V+?n*5iRN:Dx^o-M[u.)ytJy}GHC/_l]');
define('NONCE_KEY',        'mKjuW~ep@^[qJ_$$cFR9:yfMa00m9a{Pb+,D#WQg_!AdS;6z9S](3[FcloM-9?,y');
define('AUTH_SALT',        'ra^6q5<2GB{aIv)}_S!.F>Unifm@{{,{Thu#X]{nOjrw~[l/ay;{D=L4lTR1wc x');
define('SECURE_AUTH_SALT', 'LhSA`M$&AJ1+8X1.Y>>(vIm*l(P@-wk~m>3m(=4vD,lyd?]_MYGhn_+&F)-9*dGd');
define('LOGGED_IN_SALT',   '#`c/NNJF&e<,2{,350T(k-g:nDXsB</=(]<9)l!();13&BI?!=Sm<%v%KM8AN6*H');
define('NONCE_SALT',       '4VykM4s09PH=cwkQKwtD2.3Lp4<;EEz1N>ePqc(^dlqK,o@F=,9wf)K ~u M@695');

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
define('WP_DEBUG', true);
define('WP_POST_REVISIONS', 6);
define('AUTO_SAVE_INTERVAL', 180); //in second - 3 menit
define('WP_MEMORY_LIMIT', '512M');
set_time_limit(300);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
