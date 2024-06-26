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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_rmc' );

/** Database username */
define( 'DB_USER', 'user_rmc' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         ' 1UC-K!.YW]_v.]8lB;44(eV{TwQpl@3Kl^QHFfhCKx<GpC%G##f3-g]~XZ*KV D' );
define( 'SECURE_AUTH_KEY',  '^CY+pG3#M)2t[v},m /&rh.c1pY]uFfM<!G3}9`VkVRHb+bH5`,JfdhSJK&^rC#6' );
define( 'LOGGED_IN_KEY',    '%J^v{YQf9#6k}o,<{Jo5JAWEda[|FPoF6P!Z,1;l?Hj=0GSoycex<cNV`u3.Ug~7' );
define( 'NONCE_KEY',        'z^t`:Ow6R5mCS?#A&m3NN7.S&FY~@=.:6P3tOZhk=R(W9OqZN2Y*!WS/{b&d(ir7' );
define( 'AUTH_SALT',        'O9jRg~/<hl*R[J#x6CH `|J-WWOQl@{ mI{?*UX)l|=B=1>P<(:sZog48.JZ9+k4' );
define( 'SECURE_AUTH_SALT', 'r={]UL=<;e4?N5MNh+woWv,<iwC3&_Lra#t.CO[.-x~}HuF(3o?<0-EWzuff]iH(' );
define( 'LOGGED_IN_SALT',   'sJ{=vaJA|_j%i}Gdvz+EcsR?e&QN|ER(u6(PHASz%5-b(9dLWFTbFn*{5cuAtRM]' );
define( 'NONCE_SALT',       '??G gTuh9M5,r!5]lekCw:n0l)V*KKj9!iRdZ]BcyZ{e}:y@RWdYK6InM~Ss FBI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tablermc_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
