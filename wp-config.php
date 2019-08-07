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
define('DB_NAME', 'wpecommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dyb3t321');

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
define('AUTH_KEY',         '7O_4rum+VVkekMq{Mt1/2%9-`JODz=#:EH%.V@BOf)M?kag1WyY45Cv(qs3R,G/b');
define('SECURE_AUTH_KEY',  ')b{cY[~xj$0]Dh``eBvR*qw9hBBrNmZb &kAem4hLp)Dy:Y={M*VT49+#G{h+Jh$');
define('LOGGED_IN_KEY',    'z,T~`3!CGO7PxTp_u-vAUBOP=v#N8TTWAk=nqsI6.sB4Gz<JkptIda@B{K7!(fU%');
define('NONCE_KEY',        'bv)[4#VApqa-BO$f,k{=@oD3MA]+X8 2Rf[.>qvN>.=E`Zr4=i/Y_?9_+lZ_@V8F');
define('AUTH_SALT',        '0r}.V~?A31Zg>*oa7t]_v]6D6$aiC,lw.f-!~w7tsFDd^=LneeSS_%+C;De:KY5`');
define('SECURE_AUTH_SALT', 'uTEl^[`8@@PB,L,1o{UZD8Vm1pfZNhHu?C{gek,ZSi2D1z|C@7h6mW0#SFV~.PoL');
define('LOGGED_IN_SALT',   'ym=vVq~Gy@jLhIk0%4N0h5g5Emh2Ubxml6|lu(cJtw|NeXu &[P)6d]s`pl*zn%5');
define('NONCE_SALT',       '~L~A$M-Bh3a*]9]!]}i&lO%U+OG574/D:Xn3=NAM=Igek]P+>n_}3=o/MMS0EhVP');

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
