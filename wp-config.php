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
define( 'DB_NAME', 'sarfoocodedesign' );

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
define( 'AUTH_KEY',         '.Hx$m+:#cmQ`o1WpjAptj$Gzq6VgJ%,a{z/SHrgRvjmP]/$:]tEC*[DI7ZGXQTD0' );
define( 'SECURE_AUTH_KEY',  'vyDD/P.5{$U2/>hH>5(Zx%SE~?jn|Uexl@6YqP*ox^[rAte)v-..L6X1#i({WKNU' );
define( 'LOGGED_IN_KEY',    '+T_vU%n,$nm)Tp(gulg#0iAIZ9, cl<&O:535Rs?PwiNK} I-g;Bvk8dBtX[DJGV' );
define( 'NONCE_KEY',        't_O`0_LyM$iNi_0$3v({M.O5M5IuF|W!M(A#H)#ug Hi<j:;`f-Qn>^ze=3G{6Q^' );
define( 'AUTH_SALT',        'N+p}yLos*c6s&dY01V.JBlorKUmjTf&.)|r!Rn~+HwKC.>wQ!g<cJBLh+F;Jz%?I' );
define( 'SECURE_AUTH_SALT', '^/)&Qf}]_y48<FWNM^o[flQY)k%#Jy3t^Pu$*7G85sZ~nW_yZ1jR@MqaUE_?@9ZL' );
define( 'LOGGED_IN_SALT',   'cE9d3et~(!os:SAvR]ctXH%+?EX2sK:yfPLE+.3I<]yq-EH0^i;JzDLa@l)6BG0t' );
define( 'NONCE_SALT',       ',f6z.@uoc>HW+r6,ZMPao.589gx)Q>}n0Dsh}uW?kGHD2CR4)r2kv);^h  @`F:J' );

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
