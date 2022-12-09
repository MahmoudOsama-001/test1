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
define( 'AUTH_KEY',         'STsABaxvSapB+L%sT7R5,y48%FV7iY[HjSc%,Ho$D|/!4F[_.*RR,Dvby<,D/i7]' );
define( 'SECURE_AUTH_KEY',  '^tO%sJ{rN/2pq`v`o(;}9@4P2fGg:CxcM+B~j{$e-=dBt.Da,;P&t-c2UZ3>uQ5T' );
define( 'LOGGED_IN_KEY',    'M*s {dUHKO+hlmtV+1c!obM_w+;zN(4F0z3}FHHpqTppbk=892U5U27t qj?83_N' );
define( 'NONCE_KEY',        '2>Aq(?r$USC 2&QhLbsQvM6>g9uI[`RXFat9M0u+2<uE!3zqd/_:j3:=<ZShYE]]' );
define( 'AUTH_SALT',        'kr>e{{hR)#Pxs[[1*>2-o|VVHcqUF5]#)yImQ%(GCX1W%Wt<M^[moU1<q6A_>_93' );
define( 'SECURE_AUTH_SALT', 'nF_Y2i`y*SG&xF&7htGfwbr0.??0n|??)zayxj$+_m@b+Sr!OJl|Jfp!V=.iEWuv' );
define( 'LOGGED_IN_SALT',   '^^P^FYvACmKH2MZ;,;F)^O&Di8BasdTra ~c[2}8Bl{_np;=8Qiw?n8=(=%EMuNl' );
define( 'NONCE_SALT',       '&0Yk`(x0Dd*gn)XKodtvzjBBclVM(i4)A3%%ymXix@0NeH_IwxLAHb1hpkMUkKdx' );

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
