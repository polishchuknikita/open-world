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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'otkritymir_world' );

/** MySQL database username */
define( 'DB_USER', 'otkritymir_world' );

/** MySQL database password */
define( 'DB_PASSWORD', 'i9stq4Up' );

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
define( 'AUTH_KEY',         ' h&*1Ch//Jg-{Mg0ks1<x^DDDcDQ<AeLP8d_I0p,I`eEkgIrx &736WZXU*]``j)' );
define( 'SECURE_AUTH_KEY',  '31)IE75&:$k ]`h@~pyr_qIKF?$n3dj3;8::utDObo}Xq-@V>9lQ!p%{:i{a7@Bh' );
define( 'LOGGED_IN_KEY',    '@58x>!2gvd:p#i#AB ilKrg2.-[Bx-H#V^g<n^pk^Tx=l%_Nj{Vc<^W23Ni(|I?d' );
define( 'NONCE_KEY',        'IZd.x_Q(NT_^JP= j/nW7W:x!LXXl#&!Q{SEF;vyz<j *j5=xzSOhiC0VF`:gFhD' );
define( 'AUTH_SALT',        'J[T.z63$$LIzfVDa/:@8ukD% ,xXn,Hx6!!IMC&?5[}`!zqP4Ga;^C<Gd,=nD<Sn' );
define( 'SECURE_AUTH_SALT', '{mXgZHO?9q/$AV9Qr1%m<!i$kPyrQe[Pe=bmk?OEDb%J@=al.IME(yU%s&@*$_X.' );
define( 'LOGGED_IN_SALT',   'k/$.6}D%JZ@B_/|^>_sES93ZVweJ_@L+G])];6,&F#ss8}aN4rCuk:V@^x|LxM&a' );
define( 'NONCE_SALT',       '}@Iz&[7?GAjEz8(>U?lJf^/72O-UV(_ylJ#1u=~|p|CHmK}^ ko>rR,w:I^U3h.K' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
