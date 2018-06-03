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
define('DB_NAME', 'new_republic');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'PfXz2ppAo3OPcekt');

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
define('AUTH_KEY',         'Cpokw=PVZv.$)N5|j$9LN=yKMKo2FGd2]V<wEW0wtL[x{p*#x@bG`BBx7LQsUsT@');
define('SECURE_AUTH_KEY',  '(Tdx &#:ZjqcH8=%RnCZZI@#T5SRxniye N6X,pHm*owBeUKJ.@s7fQmswCV>WRn');
define('LOGGED_IN_KEY',    'VO$en>3tg^S>T{j,9sWgk #CqD~YsW5tMGXZ{^t,!KS6V &?|(:ASAt-]Ifc}/FT');
define('NONCE_KEY',        '0z;uw/kk)1O@m>n!0k4k$;(q-A{@NKq2HrWg@p=V67*1tm3:9@kR{p Lxpvaer)@');
define('AUTH_SALT',        '2;AKGdpKTA5q+q!QOpszo_Y7uMtjdY~0smgdL u=4tSV/RB+XzpUY5as13AS6iAS');
define('SECURE_AUTH_SALT', '|cQ%=NwQ}+;u}C4DJc*R,[rA|UNE-Gx-yXIqKeDWu_BOdlF!Z(!`1 Aqz@ s7Fxt');
define('LOGGED_IN_SALT',   '=`8A0t[$OhyI]{=o6$Ud9ss2 {rFR8qa:*T@G62jeaL&.Z%qo^ZrsPkFi3)kq4p|');
define('NONCE_SALT',       '2y]?LyfgVsQM42tC <7lSbylrqMv+GnC::%Oe>JJ>:+NO*Udpg1Q-+ggS|az`_ J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nrwp_';

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

define( 'WP_MEMORY_LIMIT', '80M' );
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
