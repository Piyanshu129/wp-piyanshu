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
define( 'DB_NAME', 'conpiyanshu' );

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
define( 'AUTH_KEY',         '|Dka!m6XsoL8eOCKaU7%chefPh,<#{Fs*Vru9%I.c K0^.=EAW}_xerT+5ZuOrnz' );
define( 'SECURE_AUTH_KEY',  'e^w, )m@+/XZEuV2$>z$8c%[~ A^zYLWD_>E_NQV7#QgD3^o),8;-RM/}Y71mez<' );
define( 'LOGGED_IN_KEY',    ';Pv,4%;I;nQ`(^eJq<wO;sqO<$/#8iV5IZ[3X76Qe~!0s~cq8P<egA.2x=-rad?r' );
define( 'NONCE_KEY',        'pu7[E PSFeIy?u^oyhetZ[g`_C4UkbB)Bg,~`O_/xa|XsBgkCZSQv+@[B6jOA?A6' );
define( 'AUTH_SALT',        'L6$TG]_|}(W=}Ffg^$PG[UpuLe*6-%AQEK+1h*H[QN8TcxBI~wg6qlQF4fx?w<f(' );
define( 'SECURE_AUTH_SALT', '3>wtYwn47#gXJPdW[$XK}O4@I*L!_WAcQQ/N%D-7 +UbLO{5{<JSm),q,qacx%py' );
define( 'LOGGED_IN_SALT',   '=:Z0!tEdH6jLG#S*4`kUt=xPD 3`Ff**Y%(y**bxfWG+b0 ={MA^crgqK]seIr>=' );
define( 'NONCE_SALT',       'bvLn-B1FJFcD#<ACC?f&X4y!F_*GgqY;I{9wnALv3Bwd8oH+R8Qhf{!HP@RLCEmP' );

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
