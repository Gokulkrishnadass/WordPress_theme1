<?php
define('WP_CACHE', false);
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
define('DB_NAME', 'theme1');

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
define('AUTH_KEY',         ';r^Ci(rA9#sI(5dfLJG67+?`ex-nRFEgkwxkrWj@&31,.5^xr4N-EiQJ& 53DB4&');
define('SECURE_AUTH_KEY',  '-;[!*VK~<^[`L:|6tU}pP3?=4Y<8k,hgFjscmmFii[2o~F,QbvG$nWmT)a~ydv{n');
define('LOGGED_IN_KEY',    'r:IbxvLy-}v{T^&q:qB~mqAW.02zBcvt8?MTR{Zrr]!RT!qS[(jYyX3H5X(vN;04');
define('NONCE_KEY',        '&~!vJ<yD:;E0f~ZxS`!t ^yIsmMCz8=Oix?)sD+`gxm6!*`+r!k3]-<1Nb#nZC44');
define('AUTH_SALT',        'VhU,z (c!l3nZ9TyT,]AYrV7/1Q<C8jJZcuFv7#Zi*Xy@&!HCyGb*bD<<wUL&A@@');
define('SECURE_AUTH_SALT', 'hZaWo5A]N!|oK7g:0dz@E;{4yN6_Ek*NEKL9PMYsT)iKx[Hf8s^[#$b_@[,Ybrr=');
define('LOGGED_IN_SALT',   '9E,Nu>fr-[Vi$/hZ0Cz5~HK$qg]R1cwjb)dP6$o?.|cm9dzP}mwoA3k9}-$>EMNo');
define('NONCE_SALT',       '^B<|rx$,5V`Ys%vLm)K`h@+i?7;{%<#@Fi[`q:{@NVT#KVx)Kd2aahRKczq#p$|u');

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
