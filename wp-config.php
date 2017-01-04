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
define('DB_NAME', 'webinterest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'V%!5vl`yBK#L+ys{$qG>awO&m6k#`R3Gq#Kf4=G:S#+03Z[/(&sPXM|aq;3%I82:');
define('SECURE_AUTH_KEY',  'p{!c[.N(Yo_4R:os7h,ZueE#e</VW-||DhQZT5!=nMs,s<N9E%xT.=k@wa!844#&');
define('LOGGED_IN_KEY',    '&#k+b%UB(Y!LEzY:8S^ka!HGo3{pFpsYr-bj_s;x/f{bir`PuCLlyS7#K4idj{^k');
define('NONCE_KEY',        'Yp=Il3>9MD3k9gS?[?5awqh9$KwIy-/o-UQli0*unqx_$qWM9+`C;/(,f@^x@j>V');
define('AUTH_SALT',        'T{?)smz]iI6`];HFRqQ]w:-Q 57zhav=6tD3QE4]tLvL9PlE9:^u(?xL%Q^po6Ke');
define('SECURE_AUTH_SALT', '$Xsz@=m=lb)W,}T]YHXYh{u}E>?7^,/5;GB)%Eg<@=f$sRpn@4>o5=b[TkQiw*q~');
define('LOGGED_IN_SALT',   'RX8b0sv`KM&TIY;v$[u8l[SSY;_F#?@`}0Ijo5c9vA,s,8Su+clKxsY<5,#17@G1');
define('NONCE_SALT',       'Y+gnRZ/+1B5(1.VgZ|J*-aI./YBW1Tua+VMf8G]pLpw#TUs9Tlv[@q_>Sz9?4N#q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '2s653901_';

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
