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
define( 'DB_NAME', 'db_shopdienthoai' );

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
define( 'AUTH_KEY',         'T= l1v%H#<$JiM?pgk`d1$?1==Al]%]B!mSN&a_bOPRcQZV|hGcgM+fTY*Au%rL)' );
define( 'SECURE_AUTH_KEY',  '|P<hEzR[g|)/Qo*bafg1Bk&fHjk+P_l4v?2*k1#t@qodK;r){}#nr{C!PGiO_a,R' );
define( 'LOGGED_IN_KEY',    'Cqm4(G{.Nl:Wuu_N^DUbjF8m#{SZTM<%Y<3D;MuI>btRELYG[B#Kh5y+=GFfu_!N' );
define( 'NONCE_KEY',        'Z9Nd<n&|<{Ywc]B54g=*.>Go)5LKoMYAX#-~9.)AMDg9z1Z?Uhq~RMjveb?m}y34' );
define( 'AUTH_SALT',        'o#5LC$x!UEMH*z51-3{Gl:#gs#0W5cxfb9ERWj8?5:UdiXdhQb=#2-kx=_z?^[B-' );
define( 'SECURE_AUTH_SALT', '@PPoX6#%/]7<!X~0CgqP6e.B7=B^0j`gyj#3`>z({!bMq)9L@<ZyW .A=2.G]>g{' );
define( 'LOGGED_IN_SALT',   'j_lMH8BR>&By _6F)M@8):AOSDm}tLKXV=>0Nuh_At@1>tbxNOr^p-;~6B>`fnqp' );
define( 'NONCE_SALT',       'F)dgd/~D4HhEa:-G_mr+1gbe1$Ij_mqhhWzy7U{+kgn/?MYJ,vf%2JwX@sm!2kmz' );

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
