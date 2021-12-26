<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Toantamm20052003' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!I*3;{[Y4~%mLN|WsE3[brblF8}[aRAq~YRrYQP^;&l@^h|K36g}IxuQ{ag6*YU{' );
define( 'SECURE_AUTH_KEY',  ';}8B`w9Ht^L7o6i1S.I,u;ZD3UJk531)HKXUyr{>52)u$Z66j}<RjdN_/FBsY]Vy' );
define( 'LOGGED_IN_KEY',    '<<aR_2DkJI(V3IAAwU:ty k&H]xlt_(/38Ijjm~NPWuAQw/DKgu7llhO5|@>e+0v' );
define( 'NONCE_KEY',        'vlT>Y8Y.S6=WE5hab0`am<4poMTo|,18?uoVdm3+)!NQc*rIp#c7JCOpK/KIixi=' );
define( 'AUTH_SALT',        ';ds}[=&bMb5J2LWcO{E)obpU/=fjZsaXw2%rY0U02q;C,MPIug~,} S~>Iu=hp^,' );
define( 'SECURE_AUTH_SALT', 'IEEtOn2HgzVFWr27zZn|c{fE5JvXEo-.@xtR8^if0MmIpz?oYmy9%LJ9w!:YRBLP' );
define( 'LOGGED_IN_SALT',   ']Om?@;@X2^3JR.p(:~64w6N#Zkpt=cn)o6P.>WVh[2:Z7U)w,RgFQ.MrnvR76[h#' );
define( 'NONCE_SALT',       '8H?JderxDWO2.`TvR70bN>!L*s6,3Z,F=!+S/<3@zc7#b[i3no;L[o bM+d?[|EC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
