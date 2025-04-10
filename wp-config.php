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
define( 'DB_NAME', 'Uttam_Interior' );

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
define( 'AUTH_KEY',         'J>*ms}Htg*()4Ej4,S]CeBF_(Q|j{DPF_ZA|3L~JqT3n3G`j|+!*K,}] K.2jj/j' );
define( 'SECURE_AUTH_KEY',  'Lzt(^:V:k:+Zed@#v?p9$@6?312hgO=U~#)JpI|64(J%ULZPzkc7Mm+S4AIa(jW7' );
define( 'LOGGED_IN_KEY',    '[(OBS=Ac=zCR >;9Dtdl0QB<+2^)1%=j@TChQ`U:rV;!UVib*5 KoZbe8<*LaO(6' );
define( 'NONCE_KEY',        '[hu6.JF3xH]y>W%~#:nCFgEUeJz-Po#Jfm8{,=CI);&x7Q;nQ|5C)?16+Ae>!+Jp' );
define( 'AUTH_SALT',        'PAn/UzIiJK@@7>g*;-GoBNIR:LPS6{lLb0?}|:D0:_:CFv1KS@hj`&0m=Dxv0Anh' );
define( 'SECURE_AUTH_SALT', '[E6`d8P9LgthHTJQB/u>$Gr4?wQujM_)MO8{eYoYNdeeT5}hl$-=yG|t$!_ncypm' );
define( 'LOGGED_IN_SALT',   '8vAVJTV;M/%Q0RGBQX9X2]0YlSTT7ryAkAkh$t1<F1@X<vKZlqDf% 0o:DV) y-:' );
define( 'NONCE_SALT',       'c0Q6X?P4F$io`*MlY]O|FF`_*XUEVk5w&JR=wnImK*-QL8%IAOK*<d7lVm0!6<ta' );

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
