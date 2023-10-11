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
define( 'DB_NAME', 'baudhik' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3333' );

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
define( 'AUTH_KEY',         'jZ{Chi<FKNE#t8q],vl5IC9J|C~NC6pICA$6h*-$S@%!CR4wicV9a@ {&jn;4Pn(' );
define( 'SECURE_AUTH_KEY',  '_*$DLg}LcKFhluS+5eT4ej*%*.f;(cW^HRp+{beafBYGu/{f_kbFYcEP2p,d65N3' );
define( 'LOGGED_IN_KEY',    'o5:ku`&|aGt~,d#o?I0VcnNVhx9Xr??r3MDmG,Q%~`aKxp?%FFb)t(0`)68eymeq' );
define( 'NONCE_KEY',        'BB-fp$Izf+p%SJZ0E*s&2l>^ tOxbh73R~:B=*=55P=)#VBO8?qxxQv;0OJd/v-?' );
define( 'AUTH_SALT',        '.gZF;X>mf8)o?w1^Cd9`nw3}swuA.&g@DdF<&e{]L}w{tRa]~7_?j%KMT+v&ci_n' );
define( 'SECURE_AUTH_SALT', '.@`OXf&m]wu}NNRWqf2RI&Dj}3>2&=g3bhd^;?-g8Jd{FZrY3c# ^vBu8P6DS ]@' );
define( 'LOGGED_IN_SALT',   '^IvgmLFl~rl$xTFcW@eu%ff]<%1MZ9@^WQ]=Q<z1vE NP0zW8u1~JI.O]8x {=o8' );
define( 'NONCE_SALT',       '+[etL6=_k?R+c&GA*vm{T>0JRz*Ta~f0]&W.8}`f?sy/|yc_I(Ez)oBFQ@UCGe8~' );

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
