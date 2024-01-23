<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'Sundram_singh' );

/** Database password */
define( 'DB_PASSWORD', 'Sund1408@' );

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
define( 'AUTH_KEY',         '$6wo&x1tm/je#p>?h+pcy9$^zHo:(U2&?f`w5~#K!.?h}R#1K$FE*u.Ab%h%OEFv' );
define( 'SECURE_AUTH_KEY',  'bJo}n|SHu;PT[!r$Xd,M.T)Q;N~`<=fXVAAf?s`CA;DDg|/_@7V5qZ)}k6!UBc#%' );
define( 'LOGGED_IN_KEY',    'nAr*Qg9GYujKfpX{ KO+g6<xqn}mqJ},])*-d;4{VNs2;R6<<M_m) Y?oI2?iJ$c' );
define( 'NONCE_KEY',        'f/|5x/(hT5g2lpI4t1Esxs/8I3:[F){p0OegWSB88LP2<R@cg$bQ~=HxHg:P@pX:' );
define( 'AUTH_SALT',        'VJO@mwbgJDAkE6b!QA?o[9<2 Q)|dEUhGM{!:iRK!:#$~# *3m=paTIb43HEpgvg' );
define( 'SECURE_AUTH_SALT', 'l:i+j,P#F:WAI$^0@ocJTv5y&nmjsbm8Ma2RL!M(y3Pof @aZ/1ZTt3AKaP|zW,2' );
define( 'LOGGED_IN_SALT',   'MmH&lr-+==nde56P5h/vg!k_R{P1D`%B=n/raH?H?o>8!SjKU[=<i0*UDz_F.6>4' );
define( 'NONCE_SALT',       'e6qs[E5wa_3t,^Y)QA>XDaKWA.Rr:AA3>5|C8ynAvr.*&[,_:yW1U6zw|AiI:+O0' );

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
