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
define( 'DB_NAME', 'codeq' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'B3~(BS^Kv95a.!Yf`x(<!.S<e:);vQ#5qxtFVz[PA<|>m: wpQ;qj;R$05+ptVG&' );
define( 'SECURE_AUTH_KEY',  ';{9#C*CF82#Z1{qw.q &BhIv9<_6Fne,D|0!8R}f{v(i}BSI=n3bX(l%m-Rbl?41' );
define( 'LOGGED_IN_KEY',    'FqU]*$P;q4N]Spa[5bq{eicx;$@2cR_M`,qU2[P(BG:b+@&6;K:bg!>!jq:*!+4j' );
define( 'NONCE_KEY',        'j6a.,]Y+NV<Csn^{4=FmE[_tm}pN{~&8@ztT4rocg=4/p4Rb;</D*k/7$2z?+3,b' );
define( 'AUTH_SALT',        '0Fj^+4yc7u|~X!n51JXlz)hx2? S]Fsl^#pR.7Xr1JlI[jW`:eC3AaJJl?;D.$/2' );
define( 'SECURE_AUTH_SALT', '3;itjP/||9Yy/Z5]=K*4LkGA6kh`eZT@[=5Zri#zJJ<<@{JeG3p&<[d6@Eiuf5Iw' );
define( 'LOGGED_IN_SALT',   'jf,7fTYY,ubQ?Qv-MG5Eq8GRSTFWn$mQ=TD>oJ,V+yIqv9+LKXU}qYz*WL 0;L0f' );
define( 'NONCE_SALT',       '*X}*?i|_Q[qtV&j|b4&,<3IM/6I[4q*@rC_Uhu;^Mjz(4?xPp@2<c&BP@;`PdI~t' );

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
