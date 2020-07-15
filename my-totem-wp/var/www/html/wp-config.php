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
define( 'DB_PASSWORD', 'srC4AzH5' );

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
define( 'AUTH_KEY',          'OEPnHlmfb{:;uBgKGq*b~)^FUaDR_XlVn~w$.h0p86/[~F9<}6{yJuN:&$46<t>I' );
define( 'SECURE_AUTH_KEY',   '*uR]r3^,Sdl93$ihN)2:9}06ksMTKsjVtC-V$[){vw+BvEs#<U2izZu@y1L(5YIb' );
define( 'LOGGED_IN_KEY',     '`J@-?Z 1}Bt)wNdH2W6*A)2J 4h< &x;v(.y**mDutE}^CYQx<k1NiA` K1_}INo' );
define( 'NONCE_KEY',         'G=c/4H#Ba{9yI(p|~nBEit[]A.ed79H#75+)l4Cg>mQ=`uh1-rfFyHR=%%Nj{a4s' );
define( 'AUTH_SALT',         'NbK9xPnJ1V~Q,w3yhBb($K!sM;$j,gE/v;7@FnU{GG8g*./7lhB*6KKX0)pr@~Um' );
define( 'SECURE_AUTH_SALT',  '|ixuNKnX&WHrp<t{v|Z&4+L:wPv=OXjGv~*PlH%tm%}b>kokw8? RrktBrqrmf5F' );
define( 'LOGGED_IN_SALT',    'Z7Jb,;}gBI&gp4[79hf,`=(t}?^7<ZrKC KqDHB)1A@I/c(aCGQ.Af.FYzRf=erk' );
define( 'NONCE_SALT',        '[$>1m)Q>1V$xHGIR3zoU.~4~p[j,<kQmQ12#Ks/fOhXcY)X,V*RE|@hyAxpjt^D!' );
define( 'WP_CACHE_KEY_SALT', 'atmguk]wzw*6vB@@%Q`H`Y=Xx]bSRshyth~B.z-[asqyF6-D8QWt_#CXaP8 z9b=' );

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
