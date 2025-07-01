<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project_task' );

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
define( 'AUTH_KEY',         'BQBe]?9v_f9A|,Bxg@|dR>TD2Vo;7%w=M4`5/RkI(hEQ*5grt|o<ZI*`CK8>.o,l' );
define( 'SECURE_AUTH_KEY',  '22D~u0t-8`r:1Rp1QD-Tc5TEyq99saZ=y!0.Ty/^31@r#!c.7p0Mcx2wkH`Y)r*1' );
define( 'LOGGED_IN_KEY',    'u}9IZa.[vC.UY;IiO>FUEE=(LS%&E^*5XOU/IAo+2bfH`s)P{b%s1gn&5v &I3z_' );
define( 'NONCE_KEY',        '1#C)qL~Gd{+An](J!>WofCU!ipy@<.N!Q4Dz6Bdn?BSGPH0R(gjvBm7Q!jWxv60q' );
define( 'AUTH_SALT',        'Y*Mz*%5`&p9mdzF)s#PpRWleqqi3]t&GPj<6=Df&Km8IacJk(h`6}_H;kKdkj&n*' );
define( 'SECURE_AUTH_SALT', 'tD[1[M85ma`/n~U0+p7RYGFar|4>&,@@xP&IpI@YA2qDFS#-0Mlq`(fHZC6?_6a^' );
define( 'LOGGED_IN_SALT',   'B|Lrhb]2U4EitZ~>L IJ[G=WOJ2 ?MgMi[S##11{bgG9#R9F({!IS1WJv;?9u*ai' );
define( 'NONCE_SALT',       '~@0%!LyZsr7$tvDTLy)lnDH)0]i)Ot1+I6K_OtvFU:&XRXQS ~q>>}#8A.Lf8Zr)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
