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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'letslogin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[A/(<C^$.oz:7d~!f(H 98`PHE>>qnGNX]lWLfpY)#~AH0R;S>OV2Kf$0ViH<$?R' );
define( 'SECURE_AUTH_KEY',  '_NHjt{>}P!9raZw%?$7*a`V}!Be/n)b4*[3l[H2}9]AtrkS<EcU@Yw#J)`I2HQY]' );
define( 'LOGGED_IN_KEY',    'b B` FQ/4(q-EBrdF//=U&;&yQCnoGbO N>-q#Uu! x2#`V.<fJSL:w$&ELZL1?3' );
define( 'NONCE_KEY',        'ETR1fVUVIv0^?#Yo2JU)W{,kOx/I=fLX>L!T5J{cy<kh~5~_a*55ZSWUg5hVmD`}' );
define( 'AUTH_SALT',        ';4r4&r=l|EIWav#.(q2[./!@.}PTw8pbON~03M$DrX[K}Ve4-71<CZ#HI)UP/g0=' );
define( 'SECURE_AUTH_SALT', '8:@[-tyd/^C{.2<BtXq &(AbMM%gnU!~nLo7tNSPL:/1+ /r<lx]Ea n@&govl*{' );
define( 'LOGGED_IN_SALT',   'h~EQZ$g$p,!1b^76G/X7>&Mv?+]0((T0P~,PX&i?j7Ul^,AbvuG`pZlFM&L#rWh~' );
define( 'NONCE_SALT',       'c.Sqk&0`e7Xw-LB.&>>9-T^Pc-/; EWRNNAcusU[bj,{J?Bs~/8tcy-/?UK?HFO2' );

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
