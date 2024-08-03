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
define( 'DB_NAME', 'modelbolivia' );

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
define( 'AUTH_KEY',         'O4X!K*HEIim8h};8&Ng6@!3<JV%GQ|>`dz_w@8T~(LOD)[9nV?8<>f,)dVDt~QKO' );
define( 'SECURE_AUTH_KEY',  'bV(d[CQ~y-]!Qt5oQb-cwIYj@c/NKyPA{3Z(bJf/Z:%{t^[ ~}I[0EMKF#S*/ 5w' );
define( 'LOGGED_IN_KEY',    'Oar<OBkJP;C^}!MElW,a8 (ps<U)=NIXvdC-Ek~W:4,rD?;5eaX7W7?D16;~7F?O' );
define( 'NONCE_KEY',        '2Os(S33KS;{QF@!y/_u0o}7$pXV :.0Z_,M90S aT2W:Yp]}x/xSPB{^94(J>U]G' );
define( 'AUTH_SALT',        '|9_D^7++~#5[Q5HZ5jSpTl0BpB&y+|1l^Pyp;w]1rDnmL,J|N0:OPkrxk)4a:)Qq' );
define( 'SECURE_AUTH_SALT', '8LFi&GR96IB1C~z_iJLFo-^f>yr$U_3#Vsoo^qp7],OTu-#3r(6Tnq~*#4XcdU];' );
define( 'LOGGED_IN_SALT',   'QB Q%|sH-z9B#]&v+o6f@%JN`Rr2v[J`6,Kms ,8;Gfi/nD|?44Tp.}<uwj3t|A3' );
define( 'NONCE_SALT',       ',^}x~IkcRv2o$|MP[Y!1}TaO&0g9/Wy=ymh8i.XPLZI0&N}eBDn&{$1)f;7JBzs%' );

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
