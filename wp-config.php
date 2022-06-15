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
define( 'DB_NAME', 'testblog' );

/** Database username */
define( 'DB_USER', 'testblog' );

/** Database password */
define( 'DB_PASSWORD', 'NETdesign@2022' );

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
define( 'AUTH_KEY',         'Uo7_S-F+Rev]cp^IoW% )Ojt`;Agge^X.?0alrt|a@N`.S%&KR0Y6+BIFwUH-xON' );
define( 'SECURE_AUTH_KEY',  'ZncL!q.<?+9q=LW4jmS!y| -+2IL7iq&7wDAc)jAwO%kRyokX8?EZFLB,>kg Tl%' );
define( 'LOGGED_IN_KEY',    '8y4~+6>&`F&PM0]e+_RuB[j[K3^Qy#%8c|};+eqUXFPPQ/z8RMd*?F85! B|0$i.' );
define( 'NONCE_KEY',        'Q@pwq,7<Kwi=[,!4]K<IqbI%KxMmh $B}>kNp@vU,w(j~87QPVU;QBZ:m?O0W6Fh' );
define( 'AUTH_SALT',        '!dO;~4h|Yj7qgi!4mA$yC1H.PtMTV.1{N6@DR8Z*%7Zz$cp`n(1ktX,p1Dz.2&Rr' );
define( 'SECURE_AUTH_SALT', ' k:5}qgl/d]Wzxwra+r5|yZ3,/=cya/iLBcMqX.w-84oj!N5 ?G]{[Z<7,Z8j?Ug' );
define( 'LOGGED_IN_SALT',   ' Js]6-_#Cv!&ZphawFQs!3[z_h-CQY&S3KRKCA[??yE=?3p!L-Cy2/ +oxYD~b2M' );
define( 'NONCE_SALT',       'th32@m0GF$QDzaKaex~84|y)E#_c3^E/di]X[nyd4bChB2rW6+]IQC LIb;+qFsr' );

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
