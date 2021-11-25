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
define( 'DB_NAME', 'test_database' );

/** MySQL database username */
define( 'DB_USER', 'test' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'YbV];B^0;D+4<w9osLjt1n& WxETTOsWc|>zEcXrm ss!#l8?IV$`J/I]_79H)Re' );
define( 'SECURE_AUTH_KEY',  'dQr(@JZQg T[x-EW81:{$zqyH(N(l-pHU9S$YWdJtF@-8vo@s+gb:ENTpl`+Q[zk' );
define( 'LOGGED_IN_KEY',    '262`p:%J.333k&m@}?hzH0/3#*.Qm(4uIaxHX8J~Q5t{0hzcf><8wQ0/.Xyr^Imr' );
define( 'NONCE_KEY',        'IVM,CWKZ&=N3G>)A+I]HW8%B?Xa2 Ry[@/kdfsqWKA$gx~4Pm7da&z:6tOl?7J9-' );
define( 'AUTH_SALT',        ',K)41dB]JvtFR hDDm1zHj[7?-RD;ap>}gP(A,QC&em.d:!Omq?)Y(y)ZIo#}:<c' );
define( 'SECURE_AUTH_SALT', '>v*]Xej[k})}601@2D9okV^nxejo&8}0ih #dPYR%Ss%1# }K-|*tnW9h=2FS86X' );
define( 'LOGGED_IN_SALT',   '/zorNYM$di840f1)$`BN@Oy/dU-:R|_CiEUeL})oi=}30#d?,ok6{>4&-G5ILp_k' );
define( 'NONCE_SALT',       ']-h%/{Q3d4tA@gJ6~^z%R$7+(L*g^r6l?R)(3Xhl/s0=VbS.Atyfu[rm`3%cD!?_' );

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
