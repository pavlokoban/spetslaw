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
define('DB_NAME', "store00_spets112");

/** MySQL database username */
define('DB_USER', "store00_spets112");

/** MySQL database password */
define('DB_PASSWORD', "d_93kJ2iS!");

/** MySQL hostname */
define('DB_HOST', "store00.mysql.tools");

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
define('AUTH_KEY',         '$+ZSzL4wm=fW!a<u4qXe512<svrY!F [@d=3Y}G.T>[9434OEs%Y8]`#dQIJO XF');
define('SECURE_AUTH_KEY',  't*0cIl0P_^7a`k_ky<Eu/?||}]? jJAjLj(^i.3WeLs%4ey[JvNZ*spXaWB,IFkl');
define('LOGGED_IN_KEY',    'M=79]sc0Htsz=?HR{mxt<2NEzHJ%@_VlU=*/>;+ET[]L>g!d%kaajM<>l<EMOp |');
define('NONCE_KEY',        '1,J{Km)[@T#=ITWR/GY [i<ntz/5|o=*spkddRnwsz7ajVr|tJY[I&!T0fu{ByS[');
define('AUTH_SALT',        '44V!Rs!XHRFf$:>a>##O@e;-+!ZK-:%>Uf78KbG%w;Ma(SkomERN5UkGyk`K:]oR');
define('SECURE_AUTH_SALT', '.=pY=!HNHBosz<17gmRZH^&Pvw-%P&$Gn|sKQipS>|HK1l+wNevnFq{z}p,vpO~+');
define('LOGGED_IN_SALT',   'DD&AxC yt4+wAfC0Tw}A=V`8&=9jlc=hmzDM}oc4am1!FW=cg:itupVs}}&v0ps:');
define('NONCE_SALT',       'Bb}>U`TA7w6<(v=OlAiOz!{P,(&K}zGpG_i{W0k_0tSj Oy4OpSfg126ch@>sL,O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'un_';

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
//ini_set('display_errors','On');
//ini_set('error_reporting', E_ALL );
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
//define('WP_DEBUG_DISPLAY', true);
//define('WPCF7_AUTOP', false);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');