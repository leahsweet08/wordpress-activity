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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressven' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ytEvOUGd;GhY:3Fy-u-]GGt^Cc2t!p.4-XdasojL=4|ORKF7~)?Ml,[D-#O`-csm' );
define( 'SECURE_AUTH_KEY',  'RtJGdZ-wd9~yg^nOBUQ=^~p0olX85SsjK>LDmX-:##^2)Xt%49!j6,82,X7kxuAA' );
define( 'LOGGED_IN_KEY',    '>vbK9<[M!@]Nl&A1vBv5GiD5BNQdAwp]%i>upGLlpWpr9)eH%b3t7D1W@ <0(]rl' );
define( 'NONCE_KEY',        '<7,g>R`N>b@Fhjj.:9CCP7,VeA+MBt,])y[P0ZKM0;GgkDGFKTsX-{wvzyON !a0' );
define( 'AUTH_SALT',        'xU*@k-R~@dr]dsK W)XU#23G^@Bdq9Twd2wOa!llj)d]>$#n.zwZLThXDq1E(l_;' );
define( 'SECURE_AUTH_SALT', '+N.eXj&cL(cI22a5ZG:YMy;8|TFz)/W8~r[-;udnbY(FaoS1YeI?p/p)2D+6lhH ' );
define( 'LOGGED_IN_SALT',   '/~#^?pC5H%5*N(q{XJ l$09:=e@>WSil~s)UpjcK&*QIg)M?M+~0>ZdC/D9bS0ZL' );
define( 'NONCE_SALT',       'C|#tl`?$7s~3Z.`^C@ETRC4Pitm&7~?5Z==e0)Vdg$d_3;M[2Z_o%ds0fG6%^=~V' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
