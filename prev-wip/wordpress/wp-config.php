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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '4ZYP$7a[r*#^FYtchg1J*Nnm]NdF;7q/!xkB#s7(}rLX+_3O>(]fm;Z7x?^9Q5B3' );
define( 'SECURE_AUTH_KEY',  '#BxpgE0L~*}c5?jlKqN+zo.UEaz0;K6>`1=7N^?pA?r3OSOyg(cloW^.7mIm*A4n' );
define( 'LOGGED_IN_KEY',    'XfqVvx0mR6Hj<&/+7zN~^6Fo.az/cCx)E{n]!}2)lsnC>[_=M]rXz6g9~wJ}Qp8d' );
define( 'NONCE_KEY',        '+4o(JpBuC6[!t19>0Fy$n!tw7-q3h2Rq7CA3I3K0AudVyKmoHDw0Wv1!CqxGNFg8' );
define( 'AUTH_SALT',        'y1P9$` JI|+OuK`Hmm1RS;ca*A;Sdw,(wN}c-&9!@W zu6cF-gX FRw}.t~`i1Vb' );
define( 'SECURE_AUTH_SALT', 'C %-%s`NP 74,)sOp)Q]pG5:6e9}1jIYf*f`va|ValwPhAcNcOV7#PLywQ2H9ab%' );
define( 'LOGGED_IN_SALT',   'TOIqvF;u /H2{XJ/+PT;Zc76YsJM/wQLzDe(F>AM#*R9r,8X/f;Gk@P-SqFm<~j+' );
define( 'NONCE_SALT',       'u,$y+D`4KPyFj<;Fe=Yk R{wZVH0*8?ixjk|x/]8owO3i.D]Yb$-T>wv.n]0y,N%' );

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

define( 'FS_METHOD', 'direct' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
