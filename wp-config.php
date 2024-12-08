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
define( 'DB_NAME', 'wp_pharmacy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'yBFB:dcHi52_T>p)97a%(s23 BbyTmqGyu.D/7U4,e_#fiZXM<YH+^.b&<T<?&3&' );
define( 'SECURE_AUTH_KEY',  'mmYvUNp<F~feXzd_C^bU(^pZ.jlC>(Z|?Yy*@8Zs[ny?:auO!v29 [*RHKB&zLcA' );
define( 'LOGGED_IN_KEY',    'N*JyYGl#`GLKWXV%k9N-f[03Zk}j1t&Ju.G}+U6a*`>;h&99|o%^>>4q/fhOgQ-G' );
define( 'NONCE_KEY',        '@]It.P:t,z,$<0/{ ]or%)t~Y|`si//^!yU+KsjUvY{4=AA>{z-}@E_-/ZMGLN-@' );
define( 'AUTH_SALT',        'zQ;HU-X6{N(ES36C6o`@=H|slLz*&((ja2J!rLCa!9[0cLP&-iPiBd~wgfZn4a2+' );
define( 'SECURE_AUTH_SALT', ']7d!eFLu-,tV!>&VP]uHW]a[Vo(bTUK1Q0OWW6sQ7q`EiW1:c_y^~D%`;kt#daF^' );
define( 'LOGGED_IN_SALT',   '&}IhDGk6t9;&Q`{fQrh-#l^wcIf_!K{Kdv<!&XS*Mwzw6bI,1EfCl`IDw}<)lZg#' );
define( 'NONCE_SALT',       'AbdsZF~m_w{0J7$.o5t&,G6poy+[xB_)8V{O/^l|(Wd2F>)GHx;z76X[~<!{.@&Y' );

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
