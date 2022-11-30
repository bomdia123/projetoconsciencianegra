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
define( 'DB_NAME', 'id19939690_wp_95b95d9e76374d88919fceee29b71a8b' );

/** MySQL database username */
define( 'DB_USER', 'id19939690_wp_95b95d9e76374d88919fceee29b71a8b' );

/** MySQL database password */
define( 'DB_PASSWORD', '1373f5047bcda253bcd4a14580be2526dc623a1e' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'UbP37kORGBD-+L}Rw>zNBI:Yg65ziSa]IWae<,rwJwQr#uls*Q~3*0*I{{3{qN/N' );
define( 'SECURE_AUTH_KEY',   'dxkfvX)yX~?+fj5zh!4y}e2F#G1ei1YiK6`7&-<E+aXLx__)4z1lS&}(d|OkFZ|:' );
define( 'LOGGED_IN_KEY',     '.LoF8Vg+mO7AjLZ4XnSTI+=#49&FTxFIy3I%S,?]oK8g,fh<J@iYdmt?,YNp5Azm' );
define( 'NONCE_KEY',         'Nh|w(^T$%z>1AYCB9kQk*Vu.A77i+@luB>RR,5=P*:n=/Y=ci ^$t#JXYtVs-?na' );
define( 'AUTH_SALT',         '1RxB6]Z2ClhRU)K#+,ITHFhMMC~9gXss(W6<>h{987F@xV5>C2*6JHTJva_5.6e{' );
define( 'SECURE_AUTH_SALT',  'Sj`4fv~.Ic6#<i8kwn$a=IWL~2?3CD4]CuUQGoW^7v/v)|<uaP:V*H^Zs>m4Bo8d' );
define( 'LOGGED_IN_SALT',    '4,P2r9(A4.Y|+Y6Agm%rMW/Q<6D@o[`z3&;8fNEI+vL@bET?!LOe,`@WbLH7A[FA' );
define( 'NONCE_SALT',        'wIc6/ij1n=u# eRPO>jtPg0<:fx@+$3d-80~O?f]EP)#Mp+=Z?S%X3nxe/<G:Z*I' );
define( 'WP_CACHE_KEY_SALT', 'CL2>qhYiO?j)Pc+LDc=5X#j} w)xu>HIu$_;h >Bf]tzRi(H6Vr~dnw$zAyo{f$6' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
