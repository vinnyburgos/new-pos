<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'novo-pos' );

/** Database username */
define( 'DB_USER', 'novo-pos' );

/** Database password */
define( 'DB_PASSWORD', '143625bv' );

/** Database hostname */
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
define( 'AUTH_KEY',         'juKQ?s*(<c{+`NmYu[^#u$%H34z=9#]a3][Tt33b]Cj;q6HaxHa1z1kj2gq8YD*3' );
define( 'SECURE_AUTH_KEY',  '>)zUWKoHqDI9p>(h]5?gFaQlPBZq)m!vlhp4$- ,xAgzPm4,V<+VK)G*6N F<XgA' );
define( 'LOGGED_IN_KEY',    'o#`>e>^&F+UaUM$sy|t2?:q{k&)<YD?Q{L(a0b?/U6G7:Kl}(9p%{aLj!yPs-I}b' );
define( 'NONCE_KEY',        'uGbkOtSIe!ka.-:M.2H]XJc&bAxuP*<j36S[PYlEjri<aJb)qvKHje@``Gvu1Z$E' );
define( 'AUTH_SALT',        '&RqF#w@EEKJv|[ CuI Y-gQN7r7G2$:>:GSZegoIIh)P6i^.=a]XU$csM^Fr-HLS' );
define( 'SECURE_AUTH_SALT', 'G,> lZj((#N?!/i)XW.q}#?WF)ycn ]53:(fz,S|1,veb@F>jwZI;ube3gO4+X@!' );
define( 'LOGGED_IN_SALT',   ')ORB`#q)5Hksq7.%j!POv_n0O9 }q63zw2c&=G~T@) Cf.j-!6s+fLY*C[/`sVGx' );
define( 'NONCE_SALT',       'hHNG?(hyGj)JfO]jvQ+R}sj1zn$u:$wC+dA:]>]{fu$}n?`2BAQ|f~uBiFVLsk:u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
