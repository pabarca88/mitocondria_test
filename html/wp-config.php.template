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

define( 'WP_HOME', 'http://localhost:8080' );
define( 'WP_SITEURL', 'http://localhost:8080' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test-front');

/** MySQL database username */
define('DB_USER', 'test-front');

/** MySQL database password */
define('DB_PASSWORD', 'test-front');

/** MySQL hostname */
define('DB_HOST', 'db-wordpress-test-front');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$D~I]hA.=>0v8X,ay5# [^S0%,  _WtHnbLL|AJye3y*d%z`,p1&9m[toG6{|{st');
define('SECURE_AUTH_KEY',  'wLC2~ZTxh_Dx(n~S {aEFW2Xx{N&Z@-v6M%$7Mpna^@2w;;O%?iL0EjQ^/&V1gHh');
define('LOGGED_IN_KEY',    'sPC1)}mJKe|~)F:)+/aOUZ>Y8&IY?-<zS5:TQGP@WY<t45E.gD!+f0Llg[.30P2W');
define('NONCE_KEY',        'Lz!/.cowB.:bOSn]Q.L7XY8HC;LC7t?3Rp5;bnV{328]<ndj&/nq)8b%6!iNBzZa');
define('AUTH_SALT',        'Oy`$85J=T8}eG*H C;LPWWkgO}v`M{ f5|.~h+e!/YMRzf`oW[M6>$ JZ7}sr,Ai');
define('SECURE_AUTH_SALT', '_)LgrLr@1K3#&|pTM&]B)!-_Y,nrZY<[QJl]z!_V)<mVaa1GDRXq?RP7MqY=H;mf');
define('LOGGED_IN_SALT',   'cMQ(CV;`sSz8KlXCOb ?tbYeU8w;d agNzla:lXYr9r}0Ob|}FjAmYQ_KyW~=^]T');
define('NONCE_SALT',       '.0g%r0mvtr7av][sTZHjBSVK[4ZTlnR)Q0Bg=A+9bJjehN[xUCO;><58LK8T4{dj');

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
