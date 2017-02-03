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
define('DB_NAME', 'sas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '{(5v];E@@PA(Ngm8^mg-A8I`,y[jqq7feQ{B8KdE77nD!&lG0EkJd:WI+Uuk%H$C');
define('SECURE_AUTH_KEY',  'ElLQ?|?LnzQ!e;E;#=[|MDvf#<rT-T[L V&J)>[%FHe=4J.~pu*TSxQb5U8_xj_t');
define('LOGGED_IN_KEY',    '}3W_q=b>7?.4`S>XyX+Hdn/~ q#9k2sI>U3xeJ?CY?txMOy?E_e0FJTXT^zr(4F?');
define('NONCE_KEY',        '3Wy.2R+&Ty>@l]Z6b+|+>8*w@5rzO:h&t0f?hX-c>:QHg[^Q-EKNNFhFH,Zj IJ0');
define('AUTH_SALT',        'DwY3IQEG[sfo[bH?@)WopbiG{w_oT_P$LQ`QoiPA8mz}aC5p$<9sJGmEzqMap`!=');
define('SECURE_AUTH_SALT', 'LYR^tb8{=QxsJX[Rkg1aBL#Y=x9pkg!(-C##tlyJN?U]1^7L^KX_<Y4H%Jq)?W%)');
define('LOGGED_IN_SALT',   '&BQ]2TA>&u+@1*.5VXeuB*r$VjEWPWb,dgv=7yA_?3)>bCNgRBV3%FXp<H*p>-5R');
define('NONCE_SALT',       'Y{RjN5Bp&RSh|K2=>eVt%ed@_iyYe,os_}<gCYa6yvASjW]Xkwa{I{WC9Y=` #YQ');

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
