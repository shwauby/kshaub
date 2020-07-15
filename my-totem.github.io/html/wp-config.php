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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MSb5BQud' );

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
define( 'AUTH_KEY',          'Av^by>uiAyY=0vprwMpt?Td=7K$atpF9~N0:q-Sg `$n^3r#)ef_?>#U_BrWUY+I' );
define( 'SECURE_AUTH_KEY',   'JE7%c_Jut>1|J]`Frp1Z-fUIG<Z/rXS~_xsUABh_/pm0.(%#Y>;xvwDH6EQos0Gl' );
define( 'LOGGED_IN_KEY',     'uUhCJF_eQ6qqw)$b rz<Ij`FOzX[>q%,STR$>oKwKF=g^nowXGA+<)*WOj{$.3dz' );
define( 'NONCE_KEY',         'tvJ*U=gRtPY/zzw>4w,fZn)!R@#BvIs(g$Jo[0)^~f&{K`}yvg[Z4;|wn<O.w#`M' );
define( 'AUTH_SALT',         'Ar262Kvh!NeY2Jy.<kPvThQ!1FNY^TVR>YUTTWs^QV/+&bU/V1ipdQI+OSe]2N>#' );
define( 'SECURE_AUTH_SALT',  '*sx]8p$w6zoj4^im6P6 J_dN{QO+X:+A[qti~^G&1(|@ar9D-4@J},`{ vblFdvj' );
define( 'LOGGED_IN_SALT',    'DRKbd{0bqIi tO0|a%d2 q<@@;/~z9Z=5b3~br0gf(XU(hj7#-e(D|@R,NQP:o>g' );
define( 'NONCE_SALT',        'G-+9Z5mKUoi8~=Plgu*9(gD7AFxD%|8*bhtNMgL<I5}gUOz6[(:K(tz}6=#H}R&9' );
define( 'WP_CACHE_KEY_SALT', 't70MC.ZHVZ22{%b*qHv%C5L(niL=FjS0lJS)9n{TN*1UD5fq%.Uz.Jdk`80J|jB(' );

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
