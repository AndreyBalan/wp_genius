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
define( 'DB_NAME', 'geniuscourse' );

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
define( 'AUTH_KEY',         'tiu(oM4fQl<7EG*1bT[YWJ/ `1]^$Yf7|RC,VO9{@&,[&##V[H&]0(cDocmf|2C7' );
define( 'SECURE_AUTH_KEY',  'IXH.Zfe6ugNv6y9}rNVs`@??>KT]EYxP>G+7{FsvN/VVI-M>D(q&?bso+7PYIpq1' );
define( 'LOGGED_IN_KEY',    'PlHE5J=5BRIYNL_,Pa3:rr0=6R;vJ*U*A275cRL#}ZcZ@l3H6uFwVJ53n2W{c8 (' );
define( 'NONCE_KEY',        '~4pV5*+xBieEV!io_<{^_]eQ*5^JN{D:PpD~U@+iM+$U9d`KwuTsA 9L@pg.1EX-' );
define( 'AUTH_SALT',        '1dBEEK/N]go8_Mmv6%y<LozD=9,`~Ef*#X~dO&3|OPRuF#b3,dTwU#o < z* r%T' );
define( 'SECURE_AUTH_SALT', 'N-L(&%Jw88DI!0I0(VDjh3/~6Kf%%mCs00ulNF3]@gyf&GIL>iBUf_,}6_^_&J7d' );
define( 'LOGGED_IN_SALT',   'NSw8/n$r.j:2B5SY-ROF07?o~lQ;l;fEs~3CGUextsD+0N}o=;v)3I-8G25)m$+(' );
define( 'NONCE_SALT',       'qSTJqE6r*oH/^9{RgJ:lv4p9]cgHs+;2Xay#J[S2BW@:F{51_@ZCjvLbMY`@3X`~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'geni_';

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
