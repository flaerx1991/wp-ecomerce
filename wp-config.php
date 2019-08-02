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
define( 'DB_NAME', 'simplicity' );

/** MySQL database username */
define( 'DB_USER', 'snfkn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'memento1984)' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#D~]buvt23v09NVtL~T5AP<&${T}MQ-%_Z1C]ThK)$&by8}cT)N71y=<XK|`jzZP' );
define( 'SECURE_AUTH_KEY',  '}1QHlsum2abH1{x n#8%9f:dv*uv,Q#&CU}62D/]0Ys8A5Ukvk&vbbl6/dSM4G;q' );
define( 'LOGGED_IN_KEY',    '(6rz sw:9+1NG<+F-]#bGr7$89$b0A2d@3B!czuRvz^w[8^5,8Sv;;|pQ2]>ZEsP' );
define( 'NONCE_KEY',        ':Ghaxoh$(U#qGZyN.!mJJ`H]_@<9h8)Jl;4@O~s5vgJ{OJ$Fsi/00Tl@0t$k%+{i' );
define( 'AUTH_SALT',        '5K7yheo7UN*$UMGMp[[V[dNyfl]$5f9HSuU 2:}]N_$[5owyB;=wuU,d)<~fP-CX' );
define( 'SECURE_AUTH_SALT', '+xx{`pPz>&^8Cx3]ECG}e3pt4P|2?84U|k^:6gj3(u8tok.QGO7Ovi]LVAS+,DMA' );
define( 'LOGGED_IN_SALT',   '^gBX&4Ku<it{^c&vleU61xcudi+w`hU|tEz}zGt6hmK:xy$?bxwW,h%w!He{_=pS' );
define( 'NONCE_SALT',       '861x]1,nLU&/;9rqmVsDUEHkM?dhe}_`R$=XR{Qt{z*A0wKo@B>t2z^M($.[fS++' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FTP_USER', 'simplicity');
define('FTP_PASS', 'fortran1991');
define('FTP_HOST', 'localhost');
define('FTP_SSL', 'true');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
