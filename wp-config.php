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
define( 'DB_NAME', 'wp_shootquantico_2023' );

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
define( 'AUTH_KEY',         'B7>wgfy2yM/4r:hGlIzKE|**WY~(:Dh$D5Dw5(|1aNO?D42P-Csq7sK;*<6<sc%1' );
define( 'SECURE_AUTH_KEY',  'Fc+7vhMqRWu&r~43V)yzthan,Hoqn(j9W5{|vUK)Qxp3LGX`:A}2T[JS0isrW1aW' );
define( 'LOGGED_IN_KEY',    '31i-47bwE<Ef$g~oYZ3gVu_JJH}MvS1GX^s ~>-q.5%/-bqj#l+cz4L,M6c;=Ypp' );
define( 'NONCE_KEY',        '@rheE:,z3XXs_1(j0Jkj{@Igan)fEHryyy_pt;qOE[tJiIa}ZQHPhcHpJi`2fU^o' );
define( 'AUTH_SALT',        'c(V8@%%Yu`K0(:6N@Ro2NRnvNRQ|`=;Y<2PDqXW&JrYB<U5?O17rXhe;$4)6sWs,' );
define( 'SECURE_AUTH_SALT', '?jauO7H{ET8lDM7AGF]imx%&n<#s_QoXxD tDXF?k|hm:ta]Z)rDN1D#ng!:Xb^r' );
define( 'LOGGED_IN_SALT',   'M$phb{dz)cQQ}`9sp;mjx1z R!(=t>FC74]L7f#|5Z^nn#h:ROe[}fK+*jT{TwyV' );
define( 'NONCE_SALT',       'Nb@zR-`bM[5M03tjAL{T-I}_XH#RE--9u:TKwT/WIn+/f!t-E#Ww`CDdjg[3.=-U' );

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
