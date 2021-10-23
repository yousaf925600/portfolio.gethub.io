<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_2' );

/** MySQL database username */
define( 'DB_USER', 'yousaf' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'X^4ay</)}WlNA=dL@dNW}iS6;F{wmy5( 1kvC jCp6V?IJ(C8NeCQ^DX`HSjOapp' );
define( 'SECURE_AUTH_KEY',  '!8AZTGyY[)VRN9I4$,= k>|bOT62rzVJ~5waYXp5Tao6vx!h.S(E:kpXY5D>5$&;' );
define( 'LOGGED_IN_KEY',    'Pyxh$^9yFCDbR3>A_N-x;/W*5}Zer?Bn:s@`<KQ+0,zT?Wgg<5u7mx22_uf-x(E?' );
define( 'NONCE_KEY',        'CAd09-KQ6bGe>s]qjrQ@3dDVB`Qc6I+F#3k2koGkhA+RvzxElCYl{2|/n@D@k--r' );
define( 'AUTH_SALT',        'th9?1j)oFwCG :TS:.Yv~ovpE!pau;O]sz/-Jxd#^t1L|6+r&5LEF`OiFv1-HbBx' );
define( 'SECURE_AUTH_SALT', ':t7$pjdDQM6>b n+!6 qp39B8]2b(h4y^_2d:w[?+#0k8Xs ?U*U^03|G$J=Aw4z' );
define( 'LOGGED_IN_SALT',   'qkJEmOPO-,l]/d3F+w1a|7oKK/F[7JbW<KR|8}=A/G{UuosZ?KR0A%$;^wY!865a' );
define( 'NONCE_SALT',       '3~)R62x>;ZtLF#KFbXN`qQyFo(2H7/#`Hu]3!RkJ#!z^)*$pB6HSw:zzzHFvq`_!' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
