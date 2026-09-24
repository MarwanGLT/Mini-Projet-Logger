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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'dFFA%yC;N|}b-him]mxO1W){zdtd~gutRfzR/M6V%-qRI<;[`- j3frWdsKz5KQf' );
define( 'SECURE_AUTH_KEY',  'uVb62Ip;2]LFAPBtY(0nGCYj;K|yAVaEJz<_0F1hh*GDwh8r%qD` oF?,<poY*0X' );
define( 'LOGGED_IN_KEY',    '6>`2`691[GXrRBQ9x6}_Yg.;CO>H!vo<M%(Gj~Y)f4<{o};rRHYGh]d;2B_rD!.?' );
define( 'NONCE_KEY',        'S(wG`X:tn7LQPbSU<5Y,NhJb$eM$cz[.LDBW:) r8sHv@n3$i8J,(P.L$N1n[;@C' );
define( 'AUTH_SALT',        'J,KfgdgqXcpOffi|RiDe_c7%+RRQ1Wb+~84G:[Q*Qk^Rl3E$w-iQIHSj0unH<Rd ' );
define( 'SECURE_AUTH_SALT', '}Ap&#JS5@N}A`;uhUs1p|b3G@Qv]7un(y&,u83S.x[RtkcG6vswpr/!$Xu peUH`' );
define( 'LOGGED_IN_SALT',   '5FjJbe-*AVyRarq;}CR(5F+CXS4HU4AB]Mb9UC.+){Oc|K{}FV1;*u9Y}Xl6vnOz' );
define( 'NONCE_SALT',       '%0RyqnX2)V%-,;kDhfX}7EmnQ3&&!$ fA?_V<WgAz<>lrRX{`m2_l!cmu8M$+NU:' );

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
