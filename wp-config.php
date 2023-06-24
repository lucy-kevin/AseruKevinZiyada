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
define( 'DB_NAME', 'kevin' );

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
define( 'AUTH_KEY',         ']w`][H.V3OHZ9pe}[?-fHi_CO~5XJ}=7%|7,[(9{i;]E:cv$j9y&d8y[JNSGN/KR' );
define( 'SECURE_AUTH_KEY',  'xu!vdL9pY*c.~ uT}_r gPX5~VVRWf6USo,w-`Z+)J^A$16JJ) ,JiFx2s(?+,Bk' );
define( 'LOGGED_IN_KEY',    'ZmXhOct>EL0<QCX2^~G+L)5507SO,o&VL.)2{s<2XA^(IczB<sPpbzFr`w>._iE~' );
define( 'NONCE_KEY',        'y-D,$vZgF*:Bl8bJr:Ewf #T|r?v?b6ey:,rFl[dh9<IqiMI]-Ubh[fmZNQ)XK!+' );
define( 'AUTH_SALT',        '1x)AgH_hD;3><n1<(QI,=<a=#gwfJ.jrR9pRA>*Qo(n_q74W >G>p%o[ySSX1Cgg' );
define( 'SECURE_AUTH_SALT', 'Q`+AD(CC{U{E<;>eGk?S7f_WqH[N<D^!_@iWd^{H:j`%#qyt1NuBt3g>87oe7u,4' );
define( 'LOGGED_IN_SALT',   'tdfm&FYX{%XQH@hO[</cihi9wZ;S^OR?&v|epHbZMY^/V:W|OmtvJ%BVd5$_1or:' );
define( 'NONCE_SALT',       'q)%Ay@Gt%(>eML@KjqEbI;!v0YiaV<$:qYe^iA|E!7Jj+Eoy`v8OYkYxH%GTB~9+' );

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
