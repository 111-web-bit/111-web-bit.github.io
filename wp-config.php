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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ' n<,BJ;tTAC@^nWZAg/jh^]ipJ^w;wo0:UeT,_-rD4RCVb@s?@z!d5R*xX{q[$fP' );
define( 'SECURE_AUTH_KEY',  'W8deY5ALhk%HH[MJ`KTwn/B Kwc2d0Q.uQ*zBeA7psb$ GdcZYhkAU,&hT6U3}Av' );
define( 'LOGGED_IN_KEY',    'AL%3+EA!gB1zQ3YkH_y{Bf,8I_-j02~[{_4]kQ ~},`1Z<7wF_M3Af1#&@ykxDxb' );
define( 'NONCE_KEY',        'ACJ448VVM`>zxH|?L@#pI/Z|hKf@(FH-4K7!eC_nTvnJjt~.MWvI$!*&`Lo?4[]R' );
define( 'AUTH_SALT',        'rnKi)>9=sDdot`I/KoIUzVwA,g~y5c0m1dJYdu{]qq(AE.k^lz-XY~m-Tcgc)xU2' );
define( 'SECURE_AUTH_SALT', 'm$^X+<=VX5<tjgk1~:W.5N_uqV#2sj{Mw_i1o6j e;%K4%oLo5t[q;Yr[/F*2C4k' );
define( 'LOGGED_IN_SALT',   '+`{i+^z;2mH99I^*Ut7[LX{}M+H0DT,}!:GZ9|<:Uo=%RuSYdTXV}Mjm0i1GU?sd' );
define( 'NONCE_SALT',       ',d|f|A(]%F92$OQSB,ixCkN(`ZRIpWf^Yg_Je>Z^=t0bW^bZ{}kw*u>r0-0w ~Wd' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
