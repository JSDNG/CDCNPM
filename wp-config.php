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
define( 'DB_NAME', 'data' );

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
define( 'AUTH_KEY',         '?pe5IWL>`!E8u}K6.wu#wv59BfpBcQs<:NA$yk=yF(`(E7EYNny9}lKk6;&xI90P' );
define( 'SECURE_AUTH_KEY',  '`8-oiL,;XqS.B51aCecEM6L9MR*GoHF4!3^Y2C$l_|S-0[&F#YP|z_t76RVC,s&c' );
define( 'LOGGED_IN_KEY',    '3>JUJMy i;^%/?{K?S(p$:*`*?7Xc5TUi*pd#b^p?wcL<U/.Bjtr3=myxrlqr4`c' );
define( 'NONCE_KEY',        'ZTc}/Z+uMh5a5Yu?@}hx0Z;L]xxshhmd%_@J)9Z9C~.ra/O9=J4K=JG7/gX8}5v ' );
define( 'AUTH_SALT',        'cCz]LcT*rchV#^3JrZ&v>^B^4oC{<U]GGa5boWLRQC2IJwN2@7bAS?RJ;NJG]wU ' );
define( 'SECURE_AUTH_SALT', 'O&`G{pVKK.r-A]v~e+>gOpdP]mTg0FARB_EwKuqs,-X_O:KKW/_}857N:L7NXav{' );
define( 'LOGGED_IN_SALT',   'vw3(}q<65fG*]^dXa!UeT[xfDSSg.rDU`SH|l2Pj NkykkXDlZ/fH$feaDJCB*8k' );
define( 'NONCE_SALT',       '{%1 K%SzHrXj~ipF !*A_PrbsHnW*ae%F`OSw4-cB:frlt:3JNmvo=*TL+DFl!%?' );

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
