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
define( 'DB_NAME', 'mysql_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'nU+hsiH>5PWS-{6e JvpU,jAcn%l-%-X7-B|pLrLz~h:@htZqguH~j&M=L>0~[nZ');
define('SECURE_AUTH_KEY',  '5t;XY-LPa{wC1:0RQdm<-+fh}:)x;<LDk!OMytyG|tb*n,3sfR?V{/-oI:>Skk-p');
define('LOGGED_IN_KEY',    '.m;qq;08ouS0`AC,#?U?$Q:bv8]_bzjhjcJSEV3^+Dxh,c7+-H59Q-G-VX@6YV8G');
define('NONCE_KEY',        'MkG?VWD$CW_vx)1|UNm~BNh=(i;f`z`F#d;-rvL0K9K&d`b<rDF6I?%;gH$|Kvy3');
define('AUTH_SALT',        'zJUS:m-oR->^e^Qdff!Lj#nO}abV?NHt)T>M!NWXxS+5>gPXK.A!EID+AGs|I&T1');
define('SECURE_AUTH_SALT', '9n5`xDH8[mb=rR,4_s;poMb<0d[^;+o0o;CibDQM-%he2c71j5|u~t_%QD|!-SZ&');
define('LOGGED_IN_SALT',   '@2i8TqNnuFyV 7a`_T,^NV12GG`|=OvatCIx;R%J&|fPVG$UtCRsbfSJhpkBJ}wR');
define('NONCE_SALT',       'q3[2/WU^k;h>JkM2@j-SN[6@e&LJ*dOYfoqPr+/]]BzC;TN2{umbn6Vf@HqjVv6$');

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