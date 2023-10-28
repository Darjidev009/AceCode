<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'stacode' );

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
define( 'AUTH_KEY',         'qqqu9<Du;@DnEJF.AO~Vw&Z2<tBMY+<rp|nJ{<-4<b$d<(x%haD%)5FE{E+bs2RC' );
define( 'SECURE_AUTH_KEY',  '@b!s|h2 h}6]-U0r6dydXVV%^Q01?/<&pRi8[(J.OrK<-V5ezbLb5FTloo8/1zf2' );
define( 'LOGGED_IN_KEY',    'bL/g%0>L{?$(o {Al)pi:5Q5:;DW}T/}xV3uTV.i18?93(VEO$!g@`RiX^SB)[ix' );
define( 'NONCE_KEY',        '~Jn8M3@P0zYX%n!eN /]V=]vBa6a)`,eC0u+kh#]&mW7oVi?F( (+8}9^Gp-C:[l' );
define( 'AUTH_SALT',        't_K-jE,)VH+TT=sYqPn/!%1]a`VmP(Jd~xzbrA*0T-<tI.e}G:4nr}Ts1Zlj8TC7' );
define( 'SECURE_AUTH_SALT', 'W@42/a>PQFH1,t F3kY4ltq.Nx;_Me{6[3n2HZ{I4 Uh#sASJC&LhE5{FCD>$`8(' );
define( 'LOGGED_IN_SALT',   '*2%%c+ea`psq1K~ @ ?ub5:^6oeJU@TUx xdtio{j<x0/Ls]YQ-NzOl6 xQzdD^-' );
define( 'NONCE_SALT',       '+1~2Vz[3M;^v8=_%#x>3+OU}t#oB$b!-bRFE]<9^0{bjz?i>kH>bV$*uqU6U|0EL' );

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
