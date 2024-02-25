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
define( 'DB_NAME', 'url-shorter' );

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
define( 'AUTH_KEY',         'L,XWky?2x [XA1BR/[=Bv_DB:Mhhn*~*Np}rEF4PwLiz90~4JSLN3,M!+83Z#m>7' );
define( 'SECURE_AUTH_KEY',  '=YD)zZO2}CPeMGah&ht[9B8DDG6lN,tW(3nu{kXP)GOQ^#m_;fn# :raWm,df:(K' );
define( 'LOGGED_IN_KEY',    'pdx9:ec2}toj#)`q+%!MA=B}9a845w!Ax1*Y(5w]Y[btml}-q:)YNpy|Q99%1-<F' );
define( 'NONCE_KEY',        'd2+l0f}#{1DEbj(=Ft#PIG<+sF&%cp<5*EF6S0C/Zy+^Jw4kEY^O5{;t9$,`hPLA' );
define( 'AUTH_SALT',        'PmH0Bf~.6G/>17xR)GKM|JX~!UjN}*<=USmaUNr/ZUh:o%h3M,f?1yKT[&e;#}M&' );
define( 'SECURE_AUTH_SALT', 'Q`(1v2NBa5tcjnP;,[/%B8[t#&fC(y<[DnvCU?ir06Y].DOWEPTf{5Sz(2`C$/F0' );
define( 'LOGGED_IN_SALT',   '=dt3ld@G8hQu9|oVd=T*MuY^/lL.xxWCyjt7Zc,|]~8P2G2InzGt!Yu+Jubm5gr%' );
define( 'NONCE_SALT',       '23%54)H^/Lv[$zhntrWX0e*DfGgKR1ayP3YJXZ3}|YKhO:TL:q2XvuO3OI9L7wgU' );

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
