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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fms_data' );

/** Database username */
define( 'DB_USER', 'fms_data' );

/** Database password */
define( 'DB_PASSWORD', 'yab63LbSvGh2Kme3' );

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
define( 'AUTH_KEY',         '`QH9N<12-o[sU-4qz49X`55$l/}<u@>KC>>&@B]f,ZL%1{SKowZ8()#bhiG/[n|q' );
define( 'SECURE_AUTH_KEY',  'GCv6UdK^5Jl4FbUG!NjUeBQP*a<zNgA=2~M*3;:u]`<t/zmQU{0G42xt&|PH#rjH' );
define( 'LOGGED_IN_KEY',    'Dl ,QX.lO[Ra<@Fj!D#bjAxCL_W(ZV^Zrmc?2h3r{~6*9r[C*lPb2wP_R,QcQL75' );
define( 'NONCE_KEY',        'AFfm=W6svmufU5r{ztWzj/tqUUzg;E%>k~=kS8eepn^4h/%QLBgHItI(s1DWI/{f' );
define( 'AUTH_SALT',        '4pGf{}%/}D7jHsw>PwNI/mY@DeMMnk+Y;o6$P,|/mmAQOro;)uN*95Y#me2LnF|c' );
define( 'SECURE_AUTH_SALT', 'TEUQX]AH?wy|uAa~B%LK@Stw0}js2f*>k3*;<*BM>4*VtmO3)GUGNb&G+GDI$nMk' );
define( 'LOGGED_IN_SALT',   '%Th-L?hJBv~,e0_{i6_4DCSZSD>}=w53+M5qk}f7BAZkO^X*0w`q^x?0h4 O6gpq' );
define( 'NONCE_SALT',       '_ouw0EA(X>8Rf26kOsM*5h2[Yp&)IP&nB#Ec*bgV._IbzTEvW%iU#ud,]Nv$xTUM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fms';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
