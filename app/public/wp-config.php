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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Ig7h7RW1jiAO$%yb}&F}_.j.(}%!~%mNc@{8 Q5Z_b9^g5=mFbI#cpL3}Y H[#e;' );
define( 'SECURE_AUTH_KEY',   '{7*~&kgK+)c!qVSoUKzc.EWlGT 2C /W:h-GesIKGhG&fgd|&)3D0.$I{VQK`)5%' );
define( 'LOGGED_IN_KEY',     '[X|hyMi5%RSVeQVI1zt]9-h7xLK.-M.^},9v%N]*Oi/V<WN}l=m^ZhKvU{&fAT<[' );
define( 'NONCE_KEY',         '0TQAA_-H I37n`v$hFtj`/])%E;>DsX|d7FL(gOT$fiS1q}Qm&4o{.fm$1(NRK;8' );
define( 'AUTH_SALT',         '2u&s?L$JkS<{g=)`@ry;)~hl!=k^~oVq+}FdUu289OScY3@2Gm:9mDE_aob?1.7v' );
define( 'SECURE_AUTH_SALT',  'D&O)7wO# c2-.mm<`fNd%^]Z#b|S?7)d8Rn3GoFC#$2Mic k~rvaeTsDFDlcN2N&' );
define( 'LOGGED_IN_SALT',    'uQlhQm8@kZ:IeNM5G>~cXHr/>|t$DiL1b47wNb->s%e84hP>hrr:S8hp0o8Xfkqv' );
define( 'NONCE_SALT',        '<i:V4#0;EiQJ-r,s:wF0_$U%F00%w7~bZL}#q1?y?QFzTFp(gPF&GY~z&05-71?[' );
define( 'WP_CACHE_KEY_SALT', '+XRfJ/#.zgFyC_6JMzmpWlu @)F>4ELH+H/nRmc}y[A.wI7TJ+O/D%vR.tNn-j?l' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
