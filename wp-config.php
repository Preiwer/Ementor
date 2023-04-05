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
define( 'DB_NAME', 'ssss' );

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
define( 'AUTH_KEY',         '&d}k~|P}5*Q6jM>iTdt1PsXnM>3~%];vK<p$BU]Kgw)p3S{nF%&cB{%Ur+FZUzLu' );
define( 'SECURE_AUTH_KEY',  'U]<Ad~Rx(P}Q=1,Z6eE=3#gV?fJCUp9:tS2Ru%5^1+ijVvds}}^0[Z,fgnv|-usd' );
define( 'LOGGED_IN_KEY',    '?_TJ$CP9k*F-3AsX0bQ$2CT_-:LqJ!CjU]>2XX<$O3fiV>!cH/8y:htLav^-X1)#' );
define( 'NONCE_KEY',        'H4Okdb&H0QMrS[/8J{<NJ(9kf1}FdZtj<At24GSWf(~O3vc/U]:X$krh4&#*a(YL' );
define( 'AUTH_SALT',        'rkI(DAyM8thiKIN,P9&NrGi^8nyLd9I0E6x;ZmU8pdrvLa!o.ihb<AQfxuM>?}kB' );
define( 'SECURE_AUTH_SALT', 'YnzY;<M$OT~gQ?]QlR<m/i04F&A&-}T|<U8b/maiLN?d+9wzlIV57[C>5bfNuzQd' );
define( 'LOGGED_IN_SALT',   'F=Di0l:sX47L3~B$Q@|FRO3)3{D#EshZJ:*dTO/g.WsfZG/BW)Z@zj>HTpNw3LgT' );
define( 'NONCE_SALT',       'ARu%<@!I}w<k([*k}s-gjzj%h6O Q2y4|~:8oBOU#u!{+vGG5=]b#M3)#aKnXv+V' );

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

define('FS_METHOD','direct');
