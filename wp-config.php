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
define( 'DB_NAME', 'ostadd' );

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
define( 'AUTH_KEY',         'W1@87P;KIG=FNu$fma@h^3yjk2qGukfR4C1s>ne72U2wCo23M_UNm-D,V)xP8%4e' );
define( 'SECURE_AUTH_KEY',  'iJ-3&A7I;tL$e68tRYz*o6px 2$B-5)ygHJ}]7NW]GU;^{c?O5Hy0)(eN70WLX}B' );
define( 'LOGGED_IN_KEY',    ':!0Dces7XNaTQ^[ a$8k]]]4zyh),Qy]kD>V<Q;:OmKl:QZJ5%ug=1o$?%:EXaug' );
define( 'NONCE_KEY',        '~r3<nPb4:2]!/sR_me_TTt5aX?EswN2r9q>&R.XmG(k18G0lTQ fq047ccncA|EG' );
define( 'AUTH_SALT',        'w0`gKsX~!OFk?W:~-@X1S;3^<$K^m[lx!3;}noD_;K$/b/Cpz/`e*Fn)%}Y{sD5y' );
define( 'SECURE_AUTH_SALT', ' (6v% b$z&~6S5&@L+X1kT5g%>T`!X9H,g-@0e}$RNDn>o,&w@QHtV31M$8&tar_' );
define( 'LOGGED_IN_SALT',   '-*Z&tY-3)HNmw/AuK<zSwnUA&T<w#)OC?N<HKUUr.~kX SA73fIjw^&uj9!s;by2' );
define( 'NONCE_SALT',       'iF1]Er4I-<&C]%]}]pme3S*>P7F6 )$tCi_.%7B+uq;,j#YgEqwi=+XHHg=[2pzl' );

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
