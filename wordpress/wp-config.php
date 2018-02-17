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
define('DB_NAME', 'wordpress_portfolio');

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
define('AUTH_KEY',         '*_1S7F<rFFNH!h&Df:XVfnKv4EAu(^TJ?=W ]$k}t8N?];Of#yUTjHAc=&nK#&Q%');
define('SECURE_AUTH_KEY',  'fiM!Z/5icPas}%a@;[Ceu?A2I)ea6thHJda/.]R@M{,en%&stm6{ZpydbR2q!4!y');
define('LOGGED_IN_KEY',    'l;by?1qktS*E$v@,NBG_:(s:_kE6kNx<gr%ukxKG|R-F <@~C? co.[z7u,@VTe ');
define('NONCE_KEY',        '_2eYdV[u`<^1aw 1eT3k PUyN1]2=C6bfS@Z`LuA,+!Z;txIBA5#]08j} ]2:;Fr');
define('AUTH_SALT',        '0&2VMrg)mrQRUccyJ -Ng=28m,m|jUv!Risj%<RkX-qYS8%L7^3b>aXXc07H_BeP');
define('SECURE_AUTH_SALT', '=Yv6~Z/y0)CqI^)aRWAbCK:$ni_PyM0VK|_4DO]>P$0#N&9*HZmzLZI5>lRO$#~R');
define('LOGGED_IN_SALT',   'vZ+c]D=~v<RAvSuVy5!X ASSt/gkH?6N*$`>_sm$d_!Jr>8t^G_9(?kv0H[h$Y>.');
define('NONCE_SALT',       '[!t!:*f#>-xJ<1yU(H<j|m/]D&y~1]V;MMS&`<jn{BWCSH7kTly9J;/-7AX*m_Dd');

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
