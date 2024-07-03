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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'training_devanshguptedots' );

/** Database username */
define( 'DB_USER', 'training_devanshguptedots' );

/** Database password */
define( 'DB_PASSWORD', 'q1lmooVgA5VtJ0fI' );

/** Database hostname */
define( 'DB_HOST', '172.104.166.158' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'AUTH_KEY',         'HRMn3;-YP}6-2.S^aq99BXtZ=0>r]3@#)g1ibVUkSiZ%[G:@k4J(l-1]8dN_!8#,' );
define( 'SECURE_AUTH_KEY',  'Bu|c?d@0!fryFUy_{KFD,*]J&nbmA3{oa-,7DQx]Um3B/6Z7]c^/ UAnC$-8pUuK' );
define( 'LOGGED_IN_KEY',    ':=UjF7ljA$u)+`]C#%HhC5}nWW)J3rx.}>uQZi7X8VuZw{x?!-6eTv[k9Ywl*!%i' );
define( 'NONCE_KEY',        '.!|DwieqNO5k0dhU&bh;Rs7!Oa@nJ9f<8$7I PX `Xc&f1jM:8$X+>c:$P}HpaQX' );
define( 'AUTH_SALT',        ' /1if|)C[PoI|:N4!1Lw?sJ]t]s.ao>8YkA0g*{@zXn{!5xN6zXaJ$i5^QJtKU<R' );
define( 'SECURE_AUTH_SALT', '4|:/i1&9WF4bvsJ:zL:5h#2x*XHXN]sv!g36/D2uHA<GT_cp5%l@S&*IVfR$&S#-' );
define( 'LOGGED_IN_SALT',   'i=Tb~=r_$s: [Gxy-+N4fb2 &L4:(ZGL)OQ,_tyq2gnL(~i=Ye$X_ZE.iOB^fA5B' );
define( 'NONCE_SALT',       'IMFR=qVMOWQ>2on_#AO[Jz)* 9wGq!P2E?i&C#:**QRhCD;;HozbV6!qz^/i|@F?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpportfolio_';

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
/*define( 'WP_DEBUG', false ); */

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
