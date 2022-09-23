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
define( 'DB_NAME', 'jenkins' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123' );

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
define( 'AUTH_KEY',         'sq@XZ@Rg7LucK`4r|,Ic)`.ohHB&NXJyVVv%}5J4d^[3&~hXxq:[+;Nz+iR)-jK-' );
define( 'SECURE_AUTH_KEY',  '29F+?owI>[7Q|n=@_&@0S3&K+yNs!`IHl**BU;l8If$ }bUu8$5]8i|Z8a~c2pF9' );
define( 'LOGGED_IN_KEY',    '=86dz?1x7~Q/GO8U~?7<QLbA`Hi!X7+I~y+9Nuss1o*)(!%LP^da_R.{V0+huXDk' );
define( 'NONCE_KEY',        'U*LGzzvlj]M[!)P}qnF`_J!>n:/1dN|}yt +%jR RI yBFjPdqAohhS)W0i4z}$C' );
define( 'AUTH_SALT',        'Qw)K2:#rSS5z p>~%ZQS=yaWYo$YM,h2%g0}U(jy=I5VsTLp0^|qe?bkjY/MQK<K' );
define( 'SECURE_AUTH_SALT', '2SNA]xz!ScWezV5N^qs>Ha{/HdlQT_CQb/8[K/MC{304qJ.tRy+<nh+R: j,cC)c' );
define( 'LOGGED_IN_SALT',   'h!l@-U%s5UkKmw7:0n( g1l<P4xt3JD4zN~rGD}J&7T-!sx73;lYz!^$|eCD8ZI.' );
define( 'NONCE_SALT',       '5)-XKFFL/{0-pWwZ n4MZ1AX[vg~hIioTJu}:L&BqLK:Ia;h-TZo.Dsyh?!duz/@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jk_';

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
