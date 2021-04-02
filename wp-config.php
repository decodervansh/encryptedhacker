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
define( 'DB_NAME', 'encryptedhacker_db' );

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
define( 'AUTH_KEY',         'S;Ffg5]nrKpAGhG{)g}v{AMFoaPw3/y+jd8EJ)p-.Sk_QUZPF30-5|oAn=<ZI=Kw' );
define( 'SECURE_AUTH_KEY',  ';yk=B [mrDUTb9AL)v_zeEhP0CpwI+EJeLUFMi2~B^8O1+PE7*~Gq9y2%MV!mx4@' );
define( 'LOGGED_IN_KEY',    '8=k-eZId^<w+gqdtS6poKB9a$a/?O^mtU>:q@}Nn;P?Un~%T.KdQ^()F$E kibfl' );
define( 'NONCE_KEY',        '.G(E)Q<~O2$)yaqmGl?}`&^l/gGjnaE|w}}LWm8WvYU7g:IYFK01J<CaE!w*Qi :' );
define( 'AUTH_SALT',        '<vaO!3$=9fWE}cl&K`EDzUDOhVNPxDNVvX,4!F2koQw5c?9[h=+2pUajQw7_tzsP' );
define( 'SECURE_AUTH_SALT', 'Y-7jMuvK.f.e[,.P&5pZpAOyfYM*8W!Q*l.p`v5l?kYTvw!@7VHxcP%=OdbbN{hC' );
define( 'LOGGED_IN_SALT',   'Ej@qbl^@G<ptMDALa+sn9`H!P:cYy8O[;f}/6GWjTl~(.ya@^mF@wkx*:jkOWaB6' );
define( 'NONCE_SALT',       'Z!0d)%`+R=8!-+Gj,&Blg5ZV_:W,xC;AMH2-M.,53`D/)TodMSs)3,/iuMEQzv5K' );

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
