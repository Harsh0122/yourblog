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
define( 'DB_NAME', 'Ghostwriter' );

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
define( 'AUTH_KEY',         'y1-&&q/,wDO s@f%SK2;L&xl~$M1%/][>]g*4;yNgDg-g)`}{>P5Q(U?8Ar3~>6a' );
define( 'SECURE_AUTH_KEY',  'v.QBau>c]p:3.LzSwxOq|Msso>bcFZb]Q`:o@}tG20K9h)7A/Q0S[^V`(CCS5Kf}' );
define( 'LOGGED_IN_KEY',    'PwCLG?iRV%x~B1N.|zi!7d=$AF=i44IMwj[PSp}vrN]~$#ydk^_0oeD>dKx@`8ms' );
define( 'NONCE_KEY',        'e$Ir_{K>.P1t`@P1cz;wYPSn,,~KYGEj[SVH@x]vjl.2TWck|` ;_%+a5]y#8tMj' );
define( 'AUTH_SALT',        '&UL+K%Z%}^BM5(za}<Nh g[l-9u{,Q<-mg2YnQ_`=e7{A:b_VC/6N[6_40;~I9cz' );
define( 'SECURE_AUTH_SALT', '540|#WMYa,7^@@Esz&/qI&YN8X_Of9:j(=(^^mkxhGT5IA{f2w-uUOTMJ2dY*tZc' );
define( 'LOGGED_IN_SALT',   '@0pPJFhLYS4}g4[Iw$z<6h-#BV*l-n)74GSz/|KQPIGSNXK~rA/fx>VZ?*S|SK,o' );
define( 'NONCE_SALT',       'QKjOdu9VriOpxVCb@nu=JvnO].;qM<B$FI]x+j&YCg }aQ_?X8H#4d(i;U]Xt!/`' );

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
