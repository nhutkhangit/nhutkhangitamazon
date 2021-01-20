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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nhutkhangit_web' );

/** MySQL database username */
define( 'DB_USER', 'nhutkhangitweb' );

/** MySQL database password */
define( 'DB_PASSWORD', '5lDFj9u7oE3SCt7iA8VM' );

/** MySQL hostname */
define( 'DB_HOST', 'database-2.cx3zh21e5jvo.ap-southeast-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'E amJt16t7-[3iAE v75O_(#gfrjF~7pqOnG?QR6~3;IQ/3&ESO{%mv?3pdF;FkG' );
define( 'SECURE_AUTH_KEY',  '/I+N)35@?[/bOt;M+}Q/}!s>Ip/jn&GU@$Do@Jq$-+cr3&oxW)AMdIfj -o}g_U5' );
define( 'LOGGED_IN_KEY',    'ON79I_.X]N.U6.bA_.Ou~(U=gW|:N1?8w:=7g+$p0.1H|s l!BTxk_RYs{z&/e4G' );
define( 'NONCE_KEY',        'N}!4bS!2]EwhikKO8W}C:>]vKN<k!,<Gh%wq(IDf,A~|s/-n~D+@l #OX~Vq!:*(' );
define( 'AUTH_SALT',        'RFan52x@KXZOD[wDE#a%GxgwOQ(=XeQd57X2/T-ekr%z_{^.f,P.OXZyh>p5kPM(' );
define( 'SECURE_AUTH_SALT', 'g(-]C9hr!Gyp7MDi:97$LOTv+e5,:=wz,lCGWg<t-q+!o5_ftYlH,h6g9DqQnU]O' );
define( 'LOGGED_IN_SALT',   'D.+LqJBFPX`a,g0+vf@I(C]dYu$fPCsd)|2Z;m0T)Px`E-m*e4{W_KZa-|9P}C$x' );
define( 'NONCE_SALT',       'THD<.>>W7e@M,5y,Z0(Qgr2#>w,^6_;$t;YXJ94,DjGXviUt9C}^tGtMO4LoN2de' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
