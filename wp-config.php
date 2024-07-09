<?php
define( 'WP_CACHE', true );



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
define( 'DB_NAME', 'db_zabdi_uno' );

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
define( 'AUTH_KEY',         '#I/pAndykGz]ywP%A6JDQAC~7Rm&?UQ@eEg4Bs4n1R?! TA_xzOPHOHGK1 z+&kE' );
define( 'SECURE_AUTH_KEY',  'cU8PeaIPzxF;I/vfkd-!B(#Q!P[nf rD!$xX+l)@y1#aemdl~K]1kwyK2%7C:rt:' );
define( 'LOGGED_IN_KEY',    'S(7&t5DTxp ]keW[y*3D[iR?s0W[y_<9p%3,TiALM)EIEC+;<LdfqBRj`pQ0Tm<7' );
define( 'NONCE_KEY',        '[l1PfDgGf9=~BffXo&Pdz_^90eif@*wHV$PL{(Q7nf(&Xr4~gf2 I@1H0FtVq~4E' );
define( 'AUTH_SALT',        'r;!K>6&nL.Sr;2~{9-:x4s3>}qD f9vc!y^p*=p.3X`3mBQ<)q1Uj(p2Ba|*6GqY' );
define( 'SECURE_AUTH_SALT', 'U[2w!*B{2?s;Rc<j0w*B)@8]K`x/()UTM`>f=1s6omxz0NbcQi{EVs,/z/FF&-94' );
define( 'LOGGED_IN_SALT',   'b-HfE`$~ys6;Vt1t~$G|6%Pr_cVt<ZHT2UU~.JT(bk0tLjUUo(_ }SK/p$AMgP* ' );
define( 'NONCE_SALT',       '4)eR>D6r(1a-4UU>82?7~.,bdr/K8 7NdM!:*`&O;MpoxO!N)rVE&t8>FxBm$7{e' );

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

define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
