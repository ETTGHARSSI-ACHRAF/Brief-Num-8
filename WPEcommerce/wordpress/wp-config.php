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
define( 'DB_NAME', 'wpecomme' );

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
define( 'AUTH_KEY',         'gI3;>75H0~E4{F7K7nM17@p=VABAEg-c@&~k1*KASLPJt53OD.k_5W-nS0y49:X4' );
define( 'SECURE_AUTH_KEY',  'lrJL$S$eD?_3*o5h&jVGQTU}8hhMSK<vE``?O+X7%25;yd? f%4h!;tyAQ! J!k?' );
define( 'LOGGED_IN_KEY',    'YhilJnHRzp%h*9/;MUK:d?WSU1=HnZ>-MeDB0IE5q.=PI[=I:2Rpux)$k~wR`q%>' );
define( 'NONCE_KEY',        'd`5v-td^*|5ZuU-MIyad~Oc_fF@DY<JlLDwavOrqc{U ~U1I6cY[1{pW##=$8-yp' );
define( 'AUTH_SALT',        'rHcpu0P53OJt<R >T8Y}RbFQ^AaG(0hi2W%%ckVB/ }@fav(IH CY[BU5#ifP[_9' );
define( 'SECURE_AUTH_SALT', 'ZsWX4-ldXgJ{{[?QyO!fh[Qg2$Hf.zz0={-k?pL+o:3uAy3WLG`Yj@q)F/mho,~H' );
define( 'LOGGED_IN_SALT',   'tq{F-O4OWtQUyXghKN^q.9?}sC)xYm(.Kwxnsc}*u|c -9>KqpQ+Q4kDr0uL jGz' );
define( 'NONCE_SALT',       'V3l>jC.3z2i[J27_.Dyf^.g[e3Vt{mLL>m{cl%1 ~u,kfXOx^/hwyN!Q`?Jv/jWn' );

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
