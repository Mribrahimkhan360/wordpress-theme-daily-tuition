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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Premium_Wordpress_Theme_Development' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'd>y*:hiU-2@k|H:t3F(s0l[AU=2l,fUsMPwRNdcpodToWJuZ>H^WG8Suqi :-zw4' );
define( 'SECURE_AUTH_KEY',  'RuK5 0+V1<G^AKRZS PzcW1gy|[L(JgZ&eH_9=lv5Hzb;gU2wL|t}[RT;$#yr{t7' );
define( 'LOGGED_IN_KEY',    'uWyyNN]}jJ&MzBW}|Qx8(`n@[RzG^/[z6kV@deQ8s<bD>-wjAkNU#@7vyV3Z]^]!' );
define( 'NONCE_KEY',        '!D_Anj4*b,!<R,g%9E7v+l ?R7e?kQb9r5L;-~kKVKdwptD;C;XN`7ZLv 6wl6/=' );
define( 'AUTH_SALT',        'm]W<^!QkLz@hCc~iES)0Kn:pB(Mq@C<^<f:(ScrGtexHY3}@0k ~`ub5o^F7d|Lo' );
define( 'SECURE_AUTH_SALT', 'E=FuMW21Uo7no{=&?) o!9<vujJfMV{FA2;Y+f )7pU@8ZbLtmC<}Y/A)kea2K1D' );
define( 'LOGGED_IN_SALT',   'T[*)VQkdw?M1|S)E-}20vZv<o@A8!j7wc#G|u-s8TjmWr&me;r$WfN-X!g4inHi2' );
define( 'NONCE_SALT',       '=76CXuLxsAD>*mP)KRk!PL!_.ZS}JyeJ]on,7Is1N7/!(~jnZ+Sqyf$8Ady0&ufC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
