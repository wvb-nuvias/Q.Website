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
define( 'DB_NAME', 'q_website' );

/** Database username */
define( 'DB_USER', 'qwebsite' );

/** Database password */
define( 'DB_PASSWORD', 'NaQD<qwY4w@oT<0P@wHQ' );

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
define( 'AUTH_KEY',         'NbV2}CYz-#vA:9WlqY91)vp~^jcZBht^B*gM:lmU:Y$L&-5.H=<$vLffNXtQ.rZ/' );
define( 'SECURE_AUTH_KEY',  'CqBVw _p5kYo`L,;VD:wT&=UL-B og*+Q00A]<$&WpO(@L@cjPZyb!O/|Coy7=~G' );
define( 'LOGGED_IN_KEY',    'i!pLPB |ehODtnYCYBRSm}(bfP&KWKi}q^(moAA%@7iU=D}0V!7(TnMa]xAA>`a5' );
define( 'NONCE_KEY',        '(.*h:0~mR?Q;]B_ju<~#FEk^8p]CQR!(eJQ06KL/[,Z=XEQ1R.VxfXMjk]{PW>iN' );
define( 'AUTH_SALT',        'A!O%6d1S5>}zv%S /oZ$dnrp3}(nv=HW6k~/d*OI`{x$/>F0LS>3/&.}&0.ofwAw' );
define( 'SECURE_AUTH_SALT', 'PX%SR^fGTx^p9/a@}?lONWvEF(Y31KLh|JF+2PN&1w$cTXfZeL{_,7R:VTbd!7S4' );
define( 'LOGGED_IN_SALT',   '{42!PvH0fH}P-Hm;n%hCarur`gcSlghvpoSp3O7eS)|F0E+rLP}O14d~R}M)vDp{' );
define( 'NONCE_SALT',       'S}#GB7f]V!=d/S[y#`leg&tab:`Nm[gukH@uli*H<@iFRUk#d*?fd;1!v`+)]}.B' );

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
