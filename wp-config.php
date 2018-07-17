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
define('DB_NAME', 'dot_emirates');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'andrew_emad123');

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
define('AUTH_KEY',         '0:N!3_}e^L-RAvh`17*9Sx/[#w]!Ati3EuU6bxYcVFt9Y>~=J|@~%a{:Ye#g;Vl~');
define('SECURE_AUTH_KEY',  '2%Y_2{%j0(9gq]7>-y.32_rz3>/rh%9JylY|(WrF]:uI@eX t#o8=:shFE~2P3I2');
define('LOGGED_IN_KEY',    '=O,[)N|GMmCs)0x(|_yI f0k`5-{T:sT`,S$a)%U8&~hi:Dt*(|lX0^mW[qKIO_b');
define('NONCE_KEY',        '1$.l/}_hj,0E1;&v#(s?1bxtl_lxK/Vxm:sLk|9dhx2[[UeJqG>#jp0+Vb.p8|)^');
define('AUTH_SALT',        '=Q6aM|c+D&Am=##EL:.:;570l2uH3E2p [~&;f 3D_H?C;KvFGk@vbF{v$00U6/m');
define('SECURE_AUTH_SALT', 'H$0MV <_PFjOvc?(i?U;LG0<]Ca7)hx|WS,7.]ffWe!U<cs=6g@$6W{URPaw)9a)');
define('LOGGED_IN_SALT',   ',p+F~(<X!Q <rnt_03`dJi.yu_8b`>N>0[rX9+EyC8:j>p~rmdsRn(qu:0}0|V4*');
define('NONCE_SALT',       'BQ_aq)~^%~4]I,})~3rl`B{&RSKT  #%kKxrE9ob`T/V!P=%pugea3#S[V?l;,6d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'de_';

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



