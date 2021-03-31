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
define( 'AUTH_KEY',         ';F(~E&LEg-(w}SXi?AO@ Dmy.:aLGSdYSU#JKKpKn<vGEo*d8U2[LVYkXdutkwcG' );
define( 'SECURE_AUTH_KEY',  'BA>Z}FB|S5Y`*[=6SEEQ97t,c+@-@*AP63R10BmbL<5{;O6aj7:K| Q`_c!cs1Ep' );
define( 'LOGGED_IN_KEY',    '{??tTiAMz<39A667-CB@DU@;2%lrYhyK>GD{s&+o7CJk?j4Ft8a?YRF`G!/u]5Ke' );
define( 'NONCE_KEY',        'z:rP0Ny*Aq+q=s2~@uC8t^I@eOrk!i^C7p&T@%x`YIXhH>w0JZ=1g@a$)OU5$T@~' );
define( 'AUTH_SALT',        ';(P>vVN?|d:NC6L*XF-Fj4WZxCyf9qV=I}lXPu[,0VBoqu;X?Hdbv{s0^L3wB47~' );
define( 'SECURE_AUTH_SALT', '$#0R+V,=90;DPm}Ih-^,g|r-M.s+cm|s_e7x$iWR,Z:k0`*n8i;fYIF*&?QE*Te7' );
define( 'LOGGED_IN_SALT',   '5?QGYbi+]/+bQK39lbc;5!V*/#Y9(FS^2[s40@p0U vX6-`^`<S85tBP*#@P8IaT' );
define( 'NONCE_SALT',       'a-xn(5ULk_:TqpZQ:Kg3=5n1?PKXJ`9e%.{+9.|W.h]hBuD@}>;N_ WykUd{LIQ6' );

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
