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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cicd' );

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
define( 'AUTH_KEY',         'k1d}<vH#{::9laRh:yOzd0~gWrufj3I:|qHW+vx5!0.*aO@:MQ>T-dH=WXD66X?y' );
define( 'SECURE_AUTH_KEY',  '9Zt6^skZR@N W.5jTjISavcCsrMNA2|d@5!jyIvVKFytLuK~@57PY2~B#,R|LSMn' );
define( 'LOGGED_IN_KEY',    'a@^qG[1:p(CdX((;aNSxhQ&S5Z%WIB@Zo-)6[UM=:Hl~EX@_3.Q9ipxP<uG]f7bH' );
define( 'NONCE_KEY',        'cjYUM{$-ih?u.aF=Fu_BX{O#=+mK3TZ+[6l)U*NlRGNZ6*&>4Mj8KnuQQ_w5^jXo' );
define( 'AUTH_SALT',        'mGA>hy)R8%VeVBYweXR,q89e7gRS#TGMuqh0V4kT]Uh%]i0HPbhzsF/<#S<cA>P`' );
define( 'SECURE_AUTH_SALT', 'w76=}Can:Nx+*$g#lx+W4HC,_])Z%:S+-Jbz6}(S>Hnar${eEP*~~HQA+Y0lBr;G' );
define( 'LOGGED_IN_SALT',   'iX(75&?j`{b%O!NOd]0+$y,],}?I6)<Cj*UNFa0gtF/nN_xmv0MxN.wPM:H}wihR' );
define( 'NONCE_SALT',       'D~yyC/X3L>1@>J_6WGsa S{sl8vL(4;(8h5Zb/wpu=5Q6z?}EdB+oEZklf3lkZ6|' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
