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
define('DB_NAME', 'kisaan_knowledge');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ZnY[Q[0pRcWnRv}GiPcJps@4cyt%goG#fuxP8,Ys8%9Kp,{a1DKv$2FXI<>~fse2');
define('SECURE_AUTH_KEY',  '`3t}o!!#$o]XOYnMaa.0kL:X2/tH7+a3JGA-Fm<$W00W1B+cjpKRN}[xC)9ZRFVM');
define('LOGGED_IN_KEY',    'bb2)vkOS<8Et}kX,<QoCn7Hzvm#V%i`=K9 CT@qPN#U_&Cf.# $IzJ]E(?I@![Te');
define('NONCE_KEY',        'ss `F*ww&wW@6jPr:o+MMk%kY&^JdcG#p:w[-A]oiOA;Nfo KBbJ` ~y2!n)|w8:');
define('AUTH_SALT',        '6#$kQ_3q%p_$`_~vbtxR(sJ$hX Bi|*8}_Ing:n/5rQ64g;,%!<G{@=:x0W{J+<&');
define('SECURE_AUTH_SALT', 'F]U_]M6/Y}uvvXo;g/Io7{/4b=Gg3XyIVQT3D<A(zq}P0blXK;CZc]D2/HSTIH!0');
define('LOGGED_IN_SALT',   'HCa8)k/Mps@dTQ#lLX?suk,zhS )M(j.#OQRbO{|IAwP@>xC6sqmA`p<qd2K&G>m');
define('NONCE_SALT',       'Z)Z}z2nO*G7E=WdYVK1>s8|ZFHfaWYWOn_pW~w*;{.m;{Z_q=9>=k%;{UUO|YbJs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ks_';

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
