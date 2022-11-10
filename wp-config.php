<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'tel-C*Cxu!xc/$!3|Me,!Sz?kcaAZaPI2aiu5y*p<Sm<-RUZ9NJ3T!~MO@j` i9j' );
define( 'SECURE_AUTH_KEY',  '#AvBK7n+28U}ZyxEHOEbF`;1P;8iC2c0HJE9Kc[g4ut+p5+y]17v^T+kAPzpF_9E' );
define( 'LOGGED_IN_KEY',    'Z{9Tv3}@382:nqd r=iUduv ofz/Jl!z_-[H8D`pE[TB/livH|8^F}nDwCq}I}$W' );
define( 'NONCE_KEY',        'U{@+=AXfWAx1_byEAJZGI.QWJ9;Kkb,~be >xuc_4|lw/ED[ sE]C~@}<Vc^O+h+' );
define( 'AUTH_SALT',        '.4([J&njOWn{[=T1M?Koul$m8O{0O=QT!ZyU}$h<>c6CAP][h{o#~GrQbXUA{#?w' );
define( 'SECURE_AUTH_SALT', '0*SZEwRms!c7;8jvz[yRJVc/P1bhR3&@I@#0x6}:j#eXPmcl?3`_VEw!q2)!^avj' );
define( 'LOGGED_IN_SALT',   '&!|UcDW?ou<RhU9b~K[+:GPT~0v-.j!&vI|z+GI5499o1ttqD+n-?Q6yhl5HX##6' );
define( 'NONCE_SALT',       'k)5<vqok/6UY2H KnO.$7?n=|^L+=hdA/Hvr*lgcO3`J+D3PHJ0_ipx>L]9RdzPj' );

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
