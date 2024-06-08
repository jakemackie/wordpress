<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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

 define('WP_HOME', 'http://localhost:8000');
 define('WP_SITEURL', 'http://localhost:8000/wp-app');
 define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
 define('WP_CONTENT_URL', 'http://localhost:8000/wp-content');
 
 // ** Database settings - You can get this info from your web host ** //
 /** The name of the database for WordPress */
 define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
 define('DB_USER', getenv('WORDPRESS_DB_USER'));
 define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
 define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
 define('DB_CHARSET', 'utf8');
 define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '8~Y]v00}nVqWhur+V_@]jTkn302Pkf[[[/LBkLmgX@=CYZeH_r[KqOs+, 7&gKcy' );
define( 'SECURE_AUTH_KEY',  'pZ-KhgA}}3uMUrc?PX5P:?l6/a#`hk#A,(R(*9VwE({xyAx}JSuA?LNZP8Kh[K+_' );
define( 'LOGGED_IN_KEY',    'c7Ez&%qBZVd-BL;CYp1kW^HmLd.lwF93?ul1{5LzqE1:gzEJz#MF*Up{j=Jmr#,c' );
define( 'NONCE_KEY',        'qy=XSzn#{_-a ;`Sh>Ie7J:>x]Zmw-O0kRIlIv0{R1zx~[M3@~#SOKpM<dD+ziq:' );
define( 'AUTH_SALT',        ')k|J_nI$UOa3;2uiz-O{Fh>X6M7+/*;^MK}F#^%1Sd/#FC-w?J1g,()%wyydAO`~' );
define( 'SECURE_AUTH_SALT', 'H8.npwEH$X#0,p[eC`Nf0k`;P+vj N{)Qt}w@M1,(*/uD O1|Qhs:#,x`N.EN1>n' );
define( 'LOGGED_IN_SALT',   '>MDZvup39e7=Qk<M,X$+e&ovHZtan|QFH.<RnM|[=Buz{[`F8XSDl#^rf^brQSUc' );
define( 'NONCE_SALT',       '{U6<NU8fS,>oTysJ=>&{dTCW4DAJ?kj,`yKS=(|q.RU q&mly&NNZra_emI1dXHF' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';