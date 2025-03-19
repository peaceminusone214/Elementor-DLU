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
define( 'AUTH_KEY',          'l9fK4  :I]-3O4DBt2?y<sG[*(5!d..$kD-Bko6CvHEf-`tCrC%=s*cYeC|@Kr%c' );
define( 'SECURE_AUTH_KEY',   'iqal mH=|{jxF?8nD>8CB~Dn0I|~C&&:VG^H~4mef_!^Eci8}j5BPKc@8oRe !cx' );
define( 'LOGGED_IN_KEY',     'PF$_u,AY/58ka5lzq(g,~|1q45<b(y`L:Ud{Q9 #]Z)C{@/jed%ftK>g]7%|,Ha6' );
define( 'NONCE_KEY',         '_1P~^~eF^MaF l+u?oHN,^V,`pAs|wWTXy-el?(B>Vhr.7,iaf${xt2G@n?W&~5q' );
define( 'AUTH_SALT',         '4G;YOYmJC*U{8G@z,OE:`=w?38%,bPE]m9-!bF9G&~~ODedgyV?Cjtp2*BT(9Qex' );
define( 'SECURE_AUTH_SALT',  '1(Q&Nmcc}epo5!kzA/CQu}2pEX[9OQlOv yRwwD<>U1l*puC+Sag-Omx@_3Lp|.Z' );
define( 'LOGGED_IN_SALT',    'Ry2_B/7p+ag 1#<)3,js`ElK,|+R)uvH>.,3ce}+#HSH?4*S=,AF-i~d$|ev<g>k' );
define( 'NONCE_SALT',        '$_TV>PBR,7B^qu-z~i0b-=U]WileN[#`LJyMd$R6nn!MZVZ3Nl5 e<tIaSO!AZ4s' );
define( 'WP_CACHE_KEY_SALT', 'um`)<]2jfj:(QDt$7.Vb~W(cDf6z9d1k`#ZOn,lq@p%JmjAR*1j !Ynp_%A`_,Ug' );


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
