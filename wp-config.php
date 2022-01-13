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
define( 'DB_NAME', 'product_db' );

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
define( 'AUTH_KEY',         'D({})[WA/ &9Z]&KAL>i`s/Tqt%#FW;d%Q`$Uv.-iHPmiXUTz[NN*6F*2L[-*x|~' );
define( 'SECURE_AUTH_KEY',  'Za4s]kG(]{eOeQ^jsrKDe{R=zD-4WZOvvRcY0Z2T=f|*s`SgF#*>9k]kh$&hzhB-' );
define( 'LOGGED_IN_KEY',    ',Di{<Xq]kNUy0JS|F!>):Cy?= R;-:C-dsB8 2Z_HucwS(.piSDLpAmL9a(p,z(w' );
define( 'NONCE_KEY',        '70z?%lwX{nJCl@Y,43zoIwium}hmp~CjK#wE6-Jqq0L$X4:AdIQZ}KL[HyVMe +&' );
define( 'AUTH_SALT',        'h2^/oq@MWA}CifaNq3bE;<q6+f?:^jMFgbra86Kxn8A 8^IXd+/e4kYVz4MbVPDH' );
define( 'SECURE_AUTH_SALT', 'DqFS=>P_T-Tph2YP7B/:cQG(9RBu|Q[Sh[^S{i6TdIg`zJ9bMVq,Hd_{&o_*#U:q' );
define( 'LOGGED_IN_SALT',   'VrMFwE1:dpSHx8pT-+S:mxJ7L$vOIZFT$)PQG<eRk7XkPZOuN{23aP>ZRm@ISJj^' );
define( 'NONCE_SALT',       'VO]yaD4DBvX{YEXOXPl^uhJzXr>Se8dXJfl.L+xS$+kHQ9x_*r>A=Nu{T);Nw+y>' );

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
