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
define( 'DB_NAME', 'tourism_mali' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'P(n=T1;_t^t@*XFRR=n4&G:yORL`S$~j!>N`s^|d;e;h$v CY2+z>Jm4X6$^xiGm' );
define( 'SECURE_AUTH_KEY',  'OjLQB;|R TV*2YJ_dIx$roZM&q&-U$iPysM`LB/McI}/%MUD>GHPl@-<OU+{w^:p' );
define( 'LOGGED_IN_KEY',    '|8|U!]M{x:WB@.,t-$[<}4U)LDH`t6O@tUrTvUzzsog,R:WRcZRnu*@*Ygb5Pl^m' );
define( 'NONCE_KEY',        '2z pE+%3<>m@$`Xy#<l!@m!9e*tV2xM(7mmjItU~]L:o26-&i|[jm[<4AXq|QU7_' );
define( 'AUTH_SALT',        'B,4s!b|p}wQsdrZA4LPYu+@_T@/H#O.^Cwk]-V>wSV/</Jy#].pgr}}Ua6@RV/ts' );
define( 'SECURE_AUTH_SALT', 'cO%o+jW2}4UZy*$=-7lUePy-dCn@S597+~I>vEVeJG,v8uf`akVRcgUbyR)@T|i?' );
define( 'LOGGED_IN_SALT',   'c(!V S_R&8R+)[eDrY|nru|J%#Z-OPX?j81}?1{KXl7(n/KT[:{0m`[#_v(!`fD4' );
define( 'NONCE_SALT',       'Cu|nK,p`Q,D-30~0COpwd/0q^K@muB(r9ZM1Okjy60O>TVS<=.v`wS3HID+:GEZA' );

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
