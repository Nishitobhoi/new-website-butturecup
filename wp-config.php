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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
 
if (isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'corporate-office-branding-india') !== false) {
    header("HTTP/1.1 404 Not Found");
    exit;
}

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'buttercu_new_250523' );

/** Database username */
define( 'DB_USER', 'buttercu_newuser' );

/** Database password */
define( 'DB_PASSWORD', '(!=dOaTc_Tq}' );

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
define( 'AUTH_KEY',         'zET=_L)`%~&yiwR~Rc<t6h0pIZZX;q;4AVJyU.VF rJF8Wx}~[.|HN=R.uN}1^4.' );
define( 'SECURE_AUTH_KEY',  'lkZpul]qbp8guXnaP-ul#xnmF_3HK0h |66|h]~4*T^^HF=GZfvA`G2}kW]+5t*/' );
define( 'LOGGED_IN_KEY',    '@0}:zAmF>?+:-KR)),-(CMjQ-_QonQ0JRlh<XGs)h~X4QDmm@AKJYQk9t_ QUK{5' );
define( 'NONCE_KEY',        '*A^L$j5mxZQ~RH~#w:o]dIK()P.~I&Xdvd|qp|ClV~dROp5n`YJUg:1a<sDE5j=H' );
define( 'AUTH_SALT',        '_.MducZB;S-B^Box+^GVo9gK^$gB<$|L ~Y6@t42Q%=`f0#`6!;Oz_zt,VGMaL)B' );
define( 'SECURE_AUTH_SALT', 'kl*;1.Am80M]eSzgPc|.Gv}9`I$n7%Gn$`R4^W@lD]VMtXC0Z+kb!~}.Z5%jO!#G' );
define( 'LOGGED_IN_SALT',   ':yqm+paR/idwljbi9,9<G~MYx9kgnlOa7$)^ewDvH2DhB^T;HQ)G`?%4$c}pmq T' );
define( 'NONCE_SALT',       'cP73#M%;~FMYk`Cjj.L;Cskj#f5*K8o0@kp|tD5<]P:/!jH7GEeDYTD7h?^9;IOO' );

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
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define('UPLOADS', 'wp-content/uploads');