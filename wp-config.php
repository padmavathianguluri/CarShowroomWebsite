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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carshowroomwebsite_db' );

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
define( 'AUTH_KEY',         'U327{Ld<QNeAgbC8UT/|UfqWdUP0zt,S~97K626CL+3pBz.cv lb6`_zh$9aZ+3<' );
define( 'SECURE_AUTH_KEY',  'p?XQHg5Ek4>H?UY[-iD*23LnS)27:Nz+vCx5Roh/L=]J}= Va0,]=8+>5#X9FJY}' );
define( 'LOGGED_IN_KEY',    '{Xue2E&v#i[qxL>o#>zX1Q7J==~.Qxi}Ls9rCH0N2oaa_ZFzi~e/!Bw{aP8z[JeH' );
define( 'NONCE_KEY',        '(j %MbM.*%FT@b]UR`5[AS:Fgu`Zl0DvnSzr-o|f)9WW00|[Y5*Cw&|F/}d.UXU-' );
define( 'AUTH_SALT',        ':yqLzlcr,m./F294(+1K)?sp8}~1URkm<RPO -8m[IrVwP.E&|[7ME2K,_g1s`|V' );
define( 'SECURE_AUTH_SALT', ')}M?+CV#sP!^va,VR?nKg)8T[tw;tErr)o@v] TDb=61H?XQKQ!TXll;sBTIzhzM' );
define( 'LOGGED_IN_SALT',   'g8gt[@`0a/or;?w0^PZ[]eNi*p[9/ygb8d7<+fVQyXY>TiJNN&TemzOGWCJNn/-J' );
define( 'NONCE_SALT',       '6Ca#DL6m>Ud@5~W)bH+k`4fO@Hsm^JX_%Sv4fH_4m;OLf&Z#r:#Yp#c{xe3~4F/Y' );

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
