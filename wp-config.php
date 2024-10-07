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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '`MR$xEMSEX>M!n_xXLNp@0jQXVqXZUB}@-irh|Q<><&Fk@JDE@:Czu%y5oO+~i (' );
define( 'SECURE_AUTH_KEY',  'cf8ZXs;@QM;u3##Q3Ie8UK}7|!mMbt9S2^.m(XMG>yU|}$%f6vF|r}~k&3lu.B%~' );
define( 'LOGGED_IN_KEY',    'sg6G}VY3{M=ma4e}[Vv&,:_E+0tR||ivthB%`$pasQ2ry%iL3z(Aewc}+ (wreW`' );
define( 'NONCE_KEY',        'tGiFbRnO0-#aNCOATMkKzDmIRQbTGy,G$#8A0!JIc!{RI|XN bWuX}r4)]0s$Wo@' );
define( 'AUTH_SALT',        'HWy{$t3!2.Hz:D-MYJ+,h;<!m)$$J@8@}rYCb.U$%[V-z mLp@Q3p1w0h1z;8-H%' );
define( 'SECURE_AUTH_SALT', ']&43@qvS:vBcIyN.z!9YDKv0g-eXm2ixGq,GFktb.MIQ{Jw:4Q15SyF{J8r:_s#1' );
define( 'LOGGED_IN_SALT',   'cuUCWs~B0kRZ!4>ax#$LjUzt,t|m/Iu|bgpodt]pj1y1,OqmT;P!00+JnO=rN}2G' );
define( 'NONCE_SALT',       '3{8^)xi<L(i^inJ>r,yXS?Mm7+(9$ EiRl(t~wg4,d~D7OJE}t3@PY<POk/8/WQ)' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
