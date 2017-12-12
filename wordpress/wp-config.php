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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hellodeary3');

/** MySQL database username */
define('DB_USER', 'michael');

/** MySQL database password */
define('DB_PASSWORD', 'guinness');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', 'http://localhost:8888');
define('WP_SITEURL', 'http://localhost:8888');

define( 'FS_METHOD', 'direct' );
define( 'FTP_BASE', '/var/www/html/staging/' );
define( 'FTP_CONTENT_DIR', '/var/www/html/staging/wp-content/' );
define( 'FTP_PLUGIN_DIR ', '/var/www/html/staging/wp-content/plugins/' );
define( 'FTP_USER', 'michael' );
define( 'FTP_PASS', 'guinness' );
define( 'FTP_HOST', '138.68.21.131' );
define( 'FTP_SSL', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E`,_h4; e*DA)kH*:&*:2vF{t!F|shfqiVf)z:Y1Y!:3zh.^F>+Y.U_^&N&LtXLP');
define('SECURE_AUTH_KEY',  '<o3:NBWIXnR3_}mSp~^q7^.Pg&iuYpl}N^.vl]S=GhQ@|gQp/5oaZEPujpB,nANR');
define('LOGGED_IN_KEY',    '_ri^Y})e(/v3V.4!zfub0_J%WUdBja+te%[@D*#{5?6Y,47_]|/2oM*5CY+mDwy5');
define('NONCE_KEY',        'U/t*jhGOn}==A;$kYU,?DsSt=>5|wvOF7)/vj#j&xw|fEzv^U#fy0kl2YPw~%cVP');
define('AUTH_SALT',        'w9)9cBWfoZ),-`d9b-S,%}UVFd]qeTBW,(vY&E.d0_k/UeSqY6_i7HA^-s!E+g=c');
define('SECURE_AUTH_SALT', 'q)hSpCJ?w3<v-NMyWq9m+~HZdBVDTYI[x &e$1*-Dr8Y}%{4}.cXTL_h}s_VvFdl');
define('LOGGED_IN_SALT',   '54Wk&[NRr`pS3j/t$>z@mB5bX{o/e6w;;c%DgA]RlXn5Oi9.@4VrFBCMXfXhY_Sw');
define('NONCE_SALT',       'S%# Nfw?KF!abE^D m1rrp s~;w()1aRks|#>cW4)4ZSIM=49z:sTGG4]zn_ZuEe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
