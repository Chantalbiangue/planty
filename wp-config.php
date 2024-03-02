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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '2M8<LvL9NA7{(bF~#ti[ #1ft=8NV=*`ey,} <|ue2Z6:>4v@`d_L9?/f/^Qom,[' );
define( 'SECURE_AUTH_KEY',  'C`y]-j[gV&MR3or35I@z%L.Oh}f><V<|P9yOqG0sSW1AtW-4h!~S=Rkl#XR~j~+A' );
define( 'LOGGED_IN_KEY',    'O3qi~-iKu}CR_8#Ea7te0WeZD[8/S{|s_]By0|_YEpsgw(ZLxqTWmfz=&c|L]`Bu' );
define( 'NONCE_KEY',        '1u9tcs:FxQ#}`luu@S7dNye222-C:;~$<C4$?])1F;/,1R{<WQY;y?wKyeSIA^;|' );
define( 'AUTH_SALT',        ':q%Z~S~M9l0.tzRqXd{S4iX jvj`Cc/6|>F@W|o}I39 |&pb=lUM|#_0#*v$&b<;' );
define( 'SECURE_AUTH_SALT', '6uqJg>F;;hdMoTo,KtZUH+>J^0hJpyr`yTIEnz+`INxGs%_Sk=%o/Z~Z8sNsjZVN' );
define( 'LOGGED_IN_SALT',   'WU)Jbz#oY*5Fg9+yT8obZ6^I-;bdSCZ0cX3iN;b3%D}]f:oI1kjM6in$;L~+`0r.' );
define( 'NONCE_SALT',       '|,DHR*<hcQ{nZ2hCJzM.ou0Ci]qmNYD[RSv4=y:U+.5J)-#1<oguij,&j1-r_bb7' );

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
