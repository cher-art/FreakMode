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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'w%@o;xBIDLM0*L<:*|#$5WD2)*R(T5|R]]g|+pq^;!5U|]VXSX9w;>;{Zf>0}gxe' );
define( 'SECURE_AUTH_KEY',  'o<%S_m$C|MU1C%l~Q1W%FaEDp@-B4HqSB_Crt[yegWt]/k-q7NdI$|;BC}j|{j.<' );
define( 'LOGGED_IN_KEY',    'e8DPYx>:jMa;a.9_ IZ-J2&SQEyu&yFGD-8E|2L?fXS5nTF* ZPfL+M8Q.&$B)aZ' );
define( 'NONCE_KEY',        '!@~XwSf9OGM++6hIUE8MHp*r1Y^S4#NErEpr{~+q>B{yOAx Q(}F?2)vFB=@>{u-' );
define( 'AUTH_SALT',        '&cRXnYCF8]h)/oU63]p^Mw* fn[-eZt{SDSOJ)O#6Y)=X/JpbamcQ3xO^WsU@/@B' );
define( 'SECURE_AUTH_SALT', 'bYDyr++<c8IK(rG[%t.}/)R2jZ`d-wHu_rJYh6I~dWWd^4tnUm)i1w_<~^`C@+w@' );
define( 'LOGGED_IN_SALT',   'k3GX C>nEi*CXR`TzX<bi?BU7>I]LYP}0x4[qN|n1s9!$b~~JAx;/[=.82dIjm1p' );
define( 'NONCE_SALT',       'X0qbG4CbRAtTfwUWpOFheqy2;C!I(0~ZEo^-BIuA``KunTfsnZ$DZTQCgfPv-ekD' );

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
