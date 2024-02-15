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
define( 'DB_NAME', 'nrjllweb_db' );

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
define( 'AUTH_KEY',         'rCFlv71zr`^A9LqRo=Ss lr#w0wj~Z{R#zEZ:$YK#WuOb0}C5zoq_Agrm.4vqGgb' );
define( 'SECURE_AUTH_KEY',  'd93vImp6;2hG2C9]oZWO6OzAD(..]X[VPOud~n.k}T:Va.I6U(IF)yA[,plRA/vq' );
define( 'LOGGED_IN_KEY',    'z.NfWu~&^i9lWm;E}mbVcGPNt]Jbp9=I>A:(<mwd)yZ2E8<O]/#jGpyuxn-`C*W$' );
define( 'NONCE_KEY',        '/)yv(#t<|nUY9x*.QB]j16CpLgU2yr$W6Bs tQH iW:~>n4%O?eJ_,)a:{ToU/~%' );
define( 'AUTH_SALT',        'K&7#[Mtys4,rqx5s.iN<1NGeJ3;?vPq%acxT<_JMn74*SUgB.Kz 5rKrN`~%)PgX' );
define( 'SECURE_AUTH_SALT', 's1-yjdS;l}SNI%NFk}Rc.,E|5GL8uGwR` <{/ZCJMB}66DW:|=j;lJ5R -c0J77<' );
define( 'LOGGED_IN_SALT',   '0SiGB<!CA-:}h;}3#uHN !A,L/SI3e?N]`wJRXvCWV@F+/)i?E?e:;*7=<|*5dP$' );
define( 'NONCE_SALT',       '{)coFaS(;DIaKG+cz]yKZf?+EyID9;Y3-:.Sm)]4:M?8#@u,CCahy#RH<WS2dAdH' );

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
