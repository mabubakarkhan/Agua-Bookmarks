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
define( 'DB_NAME', 'Muzic' );

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
define( 'AUTH_KEY',         '4X$[ ZBp#Z;4 >F`-Ip?;uX9[HyIm}YIE*J]k_p#:,F$fp(}rxb(skkMwkk9?y?9' );
define( 'SECURE_AUTH_KEY',  'W 2/gtRRag?_`w{t/zsC71m)xG/2TWxq$P53Bs]B+~h@8OW;R; }5R;Y*]cn5o|B' );
define( 'LOGGED_IN_KEY',    'J{9nlnree=2do(v2Q:6&&E<UfYIN<YE@0Ly/uwldQ/tYEf+0dWU)ihj}z3/Yqk:s' );
define( 'NONCE_KEY',        'vo?vfGq|b)[m63c>OMM]+5Ds@+3y/:yR404rr{UFt6ZC&WPFygtk}A6s<Tt|<j]K' );
define( 'AUTH_SALT',        'NIPw_:]#7urqg8K||kNSZ$dH>MZfY0Jn*UvwcH.5^%z8m6NCQTME]&l;%_P/5Ucr' );
define( 'SECURE_AUTH_SALT', 'DB#o_:332!/8^B5 /)o[RuZU9r7]gQ>]pB;{z}RVk2#Z Y,DLKo:ZY_4|84q>&7|' );
define( 'LOGGED_IN_SALT',   '#{]{2)F;5XJi!vj{R/>XoI<ziEWa]b7V [oXT28.pCvL[S0T=*)Ctob+#^9T6UJ ' );
define( 'NONCE_SALT',       '77j<7oB<6]-}%AwP|oES:egTo,p;W~TOzn4arIuVkOSqefrRaw*,r3dcj(2N=f=X' );

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
