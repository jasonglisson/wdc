<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wdc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'XE:K/%_ C:~pChi/hkOx(T(=vPt;huv1tgK%@J/.M?xP7`]dttse|SbT4+uU2Q9k');
define('SECURE_AUTH_KEY',  'bNA/}4cg[R8bcw2|D(!N|GlM#)# |GEq+t-@D`KKY%|`meGw`Y}Y/MA%D0,nfH}:');
define('LOGGED_IN_KEY',    'LDo~pmWL^h:rJ++.g3~k9TQJ5)/^zf9rma/y__0b:jssqtlb!@uMYI2>7-^t)]Hj');
define('NONCE_KEY',        'FL-84~0&MKPg=f6r->Q~t5;T<pLwtem9[k*u]z-tvQ{q:q|7`NQ|lhl{sV1 r:Fe');
define('AUTH_SALT',        ' $zC)*kxPh2O*Oo*,y>^R+|^VX8k>mw+U[X|FQ-Vbp=BqftCR;wcVm)o|Qe-PBh{');
define('SECURE_AUTH_SALT', 'apR:_(=U-[$I6d?9{JtyTQqACtE_aMx$PdguC0JKb9HM>79%yE*1j._m{44:&7Si');
define('LOGGED_IN_SALT',   'bTh*hYouX5l:R$JDz{%z-^^Knpw?+i5 )<1=&w(]EgKZS-]e#B6J?#EY %*o{1zg');
define('NONCE_SALT',       'VB|Blyrhx#>4_(h5jp,`%%z^7DMo8wS]8nvri<LZ?8k@yO,8m=!~f|qC dN2G-rJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
