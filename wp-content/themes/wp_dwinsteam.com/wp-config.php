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
define( 'DB_NAME', 'wp_dwinsteam' );

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
define( 'AUTH_KEY',         '#tmhj*P}O[gA^pJ!^!e)?x{/62,1uF:t9Xf2pMu$n=ZOVE:-Yx9^`s2ofC>dj%%t' );
define( 'SECURE_AUTH_KEY',  'F%B#|;;@L-]&@fSEBp8<n*0G6N3OwU55)x22+e?mUh:NgzWp(8M.5-aa58rlQRFi' );
define( 'LOGGED_IN_KEY',    'u)/P&`Y6}Ax|ch:,jqwW2bpu-*phR!X=<XC^1)bKa^ /z/7/Q4{q(xDatPRJVvc&' );
define( 'NONCE_KEY',        'j%3l@qh-l+?d  3$A7#?$lVHt^3D9a?eyHaB-0jG-EPp 3[x+WfF@+W/$hp}D=e&' );
define( 'AUTH_SALT',        'Ud}L@KphNgb<AH]VT@g!6rU/=D?N~N{.0vP@d[h-3NUMjh<^<b?BwP:CG+_jZt7|' );
define( 'SECURE_AUTH_SALT', 'wE$uAYvEpgGd1[5.uM#^Y.ZK$OALey$s;bU-HB:yCQOX.I<:FYpyTwO4@+sKpI?>' );
define( 'LOGGED_IN_SALT',   '<u~+1dzwBTVL!bS>f!dYMq8~>]60FwTLLg0_C;)^IB,ksA0T8(2ThwBP0)*Rjz,*' );
define( 'NONCE_SALT',       'y|t25E|MCDcdWzcg`.wj!2h3SQOE2+_=kwHc4E#]9.wf}]qI[$M6`/Hq#5L-+I9 ' );

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
