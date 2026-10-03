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
define( 'DB_NAME', 'exlejztd_elevate' );

/** Database username */
define( 'DB_USER', 'exlejztd_admin' );

/** Database password */
define( 'DB_PASSWORD', 'Elevate1234.' );

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
define( 'AUTH_KEY',         'Ei/Ux^dWagPq/?Q:S7>I5k0%)>fCbV6M^lQm[^a3w)#$g%um;t>E-)5Je@xH9)Cv' );
define( 'SECURE_AUTH_KEY',  '+;`qy:I(*t:9D!%<+{64%^?$K1!*Iy}VZ1k[yuz2QoLyua%=1#Gen#gt/ +W@gj6' );
define( 'LOGGED_IN_KEY',    '6,O3ezT_;_(>-7SQyMMnJ`)jRU7?asV/I[3f:ln#6rB $//8hsSwBtf5i:dYRA[;' );
define( 'NONCE_KEY',        'EeOM6JQ!U]13yNEuY$}uJ+;!)DtW.d+Ae4@QfTi&Uj7=CP?}POY3v4HF6u+f&LYh' );
define( 'AUTH_SALT',        'z$1/YJ=fKa=[rR;AH+C@eBnZ*1516%<9`y`-Z#PS>.ROqlAf>MHnAKr_[1z;HsID' );
define( 'SECURE_AUTH_SALT', 'E (0O[}<`M.3mCqq%:[B5YIEq$R!/uU&87g74>m2.AncJ()<@S,+ulhY@v=,?;Al' );
define( 'LOGGED_IN_SALT',   '-Bf)@:zQB|CigK<i70%{/[sUe-kn>3WvE?^ALbep^/AyfW{2:taML{0gkR!l8BQs' );
define( 'NONCE_SALT',       'X#5Q9,`xR/24>/UY`S/Fw%Tcm.zv|$<Oe)B3,XHt_1a(nkl]$bT{CN/EKj{%uY~n' );

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