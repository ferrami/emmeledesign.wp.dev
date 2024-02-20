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
define( 'DB_NAME', 'emmeledesign_db' );

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
define( 'AUTH_KEY',         'SAgi_|3`a397J)UOIFR6}P%0tS&v_k|kg4YX$nVP//D]AzoteT`76rO]f*j_**c+' );
define( 'SECURE_AUTH_KEY',  '@:H</Xi3y&`hQ_FW4pU:9KR>TIVg[1I&i~GGM@r/BD?srLdc/Ds-w];^H{~a,ud+' );
define( 'LOGGED_IN_KEY',    '-YknTN~&r?jH=|XW(_0#WGV@yjZ*dDc&6bv@;Z QxW`y7.o7UI ~0]5KekNcNdR$' );
define( 'NONCE_KEY',        'ZETF+7(IFL;8!OoS[6/HqU`yKO@qej1R@-#Ax:d]8%xk[U>!uYXw|^*q9a:(9XU4' );
define( 'AUTH_SALT',        'c*G8=ku&s`~~iWa F1Dv}-51O!}e9##A=%I`4,;)bGICX[I7k1oR8NF8WN(9=U#i' );
define( 'SECURE_AUTH_SALT', '62A8mb5re1u2|!ha:$kZ@5t3FRel}d2_vM>Kr?m?=x>Jy3!6)zg(WF|^L3 M7+*2' );
define( 'LOGGED_IN_SALT',   '|5R% UlT_n;R3e=/-bRQ>u3>%@!N0J0[.HJw%t4kx>+gnjf.QK>X6`obV=p#+;#%' );
define( 'NONCE_SALT',       '&{7MF4&G<i%[$]e^#n**%/z2zPT>J{UX(0xOWG8|n-J<T(Io(:~(%NxR`8j#hKJ{' );

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
