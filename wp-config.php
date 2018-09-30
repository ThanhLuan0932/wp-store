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
define('DB_NAME', 'wpstore');

/** MySQL database username */
define('DB_USER', 'wpstore');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '?6-6M=*Ju>2x`HPpDxbY:ixdk=gxo3FHg^ EKUY4Gdz}mx:wM2<*+SE9G]3; ~~@');
define('SECURE_AUTH_KEY',  '~O3/ue-6VpT _FS]$:a )i(Cz@D[wXB7kV6%igbud<X!,P!rNRUx&A)dnY$L|$v[');
define('LOGGED_IN_KEY',    'zHXKG+{eacNB^4oX:}z0{ORo0Us(lG3.gv~lBGWtj|>znZ9bi^D}Flh%5NBLV@bc');
define('NONCE_KEY',        'SINnGG$c<4gFdsh]URo]f3Mn0?P{w88Bn=4i<1ud D&=&1|/!l/}fD03;9jT%Cc(');
define('AUTH_SALT',        '}}S{gyxGD&VPL=1v4a:jz2]s~$yD`h%FnQEL[dHlynq~Y0F~;!zr@8_vcb7{-Op!');
define('SECURE_AUTH_SALT', '!sAtf&@D)8-C]AgqyvlLr*(zg5rT8+I?.M,D8E$69Bj1Jit3`=HElsz-f7a6XG^O');
define('LOGGED_IN_SALT',   'VT%xq-C1Gz?rM}<]Q>6k*E[f:I$nP/_#6DToP[W+5qW|0$E06Y&w6g[Tn#}fs!<n');
define('NONCE_SALT',       'Z TMoFV4~!S[96:yXl(yn9sKr$1n]}ca1Lh1I@y{O2bG$BH$VlL-Lx<V>oLVWtTk');

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
