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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digitsmyanmar' );

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
define( 'AUTH_KEY',         'y%:2~6un fFC9BIA)uXa}`O2#0%DML)>ShC)IQG4BiGVB@mn)PAb+O)l%(j>s50o' );
define( 'SECURE_AUTH_KEY',  'h~m-snS~@Lz{]otEn/57cuoO)_0A6WGMnees$8ps.Nm9pj&n?}T Gv]3S&bHhm=q' );
define( 'LOGGED_IN_KEY',    'HJ-Z+--7 8Kx}vp]C_=!#:Yu<7]4FNmZ~P0hX1h[6aLI$1:R..K4qu!B&@wOL16;' );
define( 'NONCE_KEY',        'Ez~?JMo`$_heplLFQ}JiU|&fBUevHyL^~;B1]-yg81c+BS1AhvawgzN>K1Nf7r%N' );
define( 'AUTH_SALT',        '3MXqQ!VRw7e8ha0k{}O)so#]EtcJ@brUAJGl,J_+_wgiZB=],Xz)6SSPx- OtDJ;' );
define( 'SECURE_AUTH_SALT', 'S/$viHY~3OA)nH0 Ihj[qe`4dqY*K=SP:r%<o1YbyOqzH:].S0Ke[ksTk*_l<.R5' );
define( 'LOGGED_IN_SALT',   'l2Hc_wj(-1>_n ,e)c<0s[ISlHfZEX7m)], r~ M+-;W4qzYze[MX`,RC/!2uQ8q' );
define( 'NONCE_SALT',       'kGgxQwV}@C8]JlO,4,e`C,!<cX3~]aDq3#c:BH35zpL0;XP)(@R3{8`&U^jke{:&' );

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
