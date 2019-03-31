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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

define('FS_METHOD', 'direct');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );



/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
define('AUTH_KEY',         'FRwm#bsA~?iRq| #vX7tgu?0v/%cD-x[5Ck-WFI,e&#vK_an/8,F[dfz2!EO#ZCc');
define('SECURE_AUTH_KEY',  'A.]aEje27/!W63y6n+;nTW/&B+&aTvy=<>5Tk^gZ%9Ojfy+e&-&31c=dbr}1U1Vs');
define('LOGGED_IN_KEY',    '2&+;=esUY*4HW,DWSDgc`tF}y-<9C+W:|-3kDo85s>i$>n/`a[? n7{+l|/#;-#7');
define('NONCE_KEY',        '`[5j+M|{3`w+`4/>q]6$Rj_|==J|A,rR$+tPE=*L4-lli|+E$9!BoOl|?!:bz}iT');
define('AUTH_SALT',        'uS,<J]lz/}*4+YZYlj 4O(yDHz~)]O9w|5|@j&6;MbwvruG#5[~-F3avPvcSL}NP');
define('SECURE_AUTH_SALT', '9/leHNY-yNvh]#~5ql5oiy2UTQ-)B{E|pe>qObg$t|C)4lIqFH@QA%O .jMP4}~S');
define('LOGGED_IN_SALT',   '$_+$S>f<qPo+,Pay0Vww*(GZ0s<X}ms<:{SSQ:vK8I#yr!pdy?;62>N+c_B4~`8 ');
define('NONCE_SALT',       '8l|NPq+} LKUq sguv1,Ya#aAx6y6Hn6;tm|G! A@)JU|FqT0$k)EJxp5ufq@s3@');
/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
