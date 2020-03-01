<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_newspaper' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QHWHi?#OEWsQdQLw:bc}W*_PQ(]dKuX&BC(<>#uXG0NfohN-I5/{R/BqC|;+$qw,' );
define( 'SECURE_AUTH_KEY',  'yrUzb&&k~x6k*(;4@aWcIh<BS}y)sVq%k^0Gnvp}a>?E_4=D#t`NSM~C]O(+4H)W' );
define( 'LOGGED_IN_KEY',    '#jag+#N2l45x]w-tICNe.uEBQwy#;r|.rh`iS&>y6~}<p/Tb$feWBIU3PMX;!6**' );
define( 'NONCE_KEY',        'VXFhsKTs020r,EO)>8f%R`0|PHf,+-.0=tT<W!PhZBRo6-$ cr6.f1xo^ME9&:<>' );
define( 'AUTH_SALT',        '@v1a|t2{bXr2|G*;gVmRDO%#,sy7Ua4 E9XmOc%n3kJ=$ qisz,ysY%tu1{+f}*5' );
define( 'SECURE_AUTH_SALT', 'ngbb s6DHh$R,y18xaOtBtG{MR}V)mPyvdo4#Z+L7I9%~PG^j4I L0&>&3kCy:s:' );
define( 'LOGGED_IN_SALT',   '[(#qnk{Ty[0khVegoN.f:4BF.Z),97h*-Vr&fL$E#u/*^[[1ME+8@V{ ={1qh]L`' );
define( 'NONCE_SALT',       'tyYgoixzW9i`Pc{>ZB^IOFIlrW&jk=2;omTP`KJ*C~atjgRU@D:P6NA29*DC/<fh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
