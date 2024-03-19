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
define( 'DB_NAME', '444-22_75832' );

/** Database username */
define( 'DB_USER', '444-22_75832' );

/** Database password */
define( 'DB_PASSWORD', 'd1b68ffa61089e921296' );

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
define( 'AUTH_KEY',         'jYD,ZhDO;-$C]VV i9| ~2Ety2Z@Gig>IoU.B Z$h?FZ[`m35(3oGrRy)LY{xdqh' );
define( 'SECURE_AUTH_KEY',  'hVMVb>jWJqq4n(:^wSKv=?S&-7! Y{4-9M?zgm[}7=l6N7 1#Eg7~utzHh1~`In<' );
define( 'LOGGED_IN_KEY',    '+]64x#O^o&LL/ 27~oZn](OC;=(c`57nAw{xV5uQhLX)Z;YDJ~v{h;JZBj  z1L(' );
define( 'NONCE_KEY',        'rr{JqohO K,H`Ld?61S!@%|t}n 5^KW z}dNTjgRqGHYB,SC*dP;[7sU:JTvP|_G' );
define( 'AUTH_SALT',        'cX4YR[*4Gg(M, 3Qd,NfymiV:uokVic[kMw@-$ox0JBKlxks6/;#(HkGOl;S>Bq6' );
define( 'SECURE_AUTH_SALT', '&IknlG1}VCDQ}NF<WNS<aWG]G+}d1w,D}yKH?lJVj0X|J->W(+:y 3n%m*IgsL>0' );
define( 'LOGGED_IN_SALT',   'G`>Rb45yMN47SMBc^kmoWxORQu8e+BYZ7y%FF2O3^6ch&=/+PO.I0I*jwe4>o$_[' );
define( 'NONCE_SALT',       'HP/g-qrarkC/2t#@8?95Z79sq!u;l6M>Pg yHOrbdU@s5SBH6F]Y`bE)IX2:FtX`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tXMUz_';


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