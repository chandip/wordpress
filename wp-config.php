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
define( 'DB_NAME', 'dbcarport1' );

/** MySQL database username */
define( 'DB_USER', 'carport1_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FAS7p3uGcYZKCcdgcv' );

/** MySQL hostname */
define( 'DB_HOST', 'carport1.cmpakly6j0hy.us-east-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'dA]3)-m?DB.y/^QJhYq!(8FVa.?h*_0_z+muX~z&X:U?%)lW~{`D~G2#<d-L#,]]' );
define( 'SECURE_AUTH_KEY',  'x{R6VBR$sUrO/7X:<G~:{>Sjy1!.dCl(C%LY_ Xou_K`Ef{qfveWs=jdC!MUj_;E' );
define( 'LOGGED_IN_KEY',    'qWe?W~ioRN)gTk-XIw,/Ed3)ad}7d^|mI0[Lk{t=b`;BnT|m:%bVF@]0=JnDhsk+' );
define( 'NONCE_KEY',        'R@]CEK/POP=D,ljtiJ}*9DC| S}7/2Shw8~7{]3H&AxR|.K<u} LdkwndOSYX_;7' );
define( 'AUTH_SALT',        '[o}b;F40>,/UH=HM|oB0uv!gN|0Ydo0$7VKswafq|j-:7{}`q-y$e6|@c~zd&+}i' );
define( 'SECURE_AUTH_SALT', '*2xPB*qU64x6lYFF+tj&0TIqiTIQs`_9`xWxe@/`84]$:8sWZFIT2*hlr|m`5em[' );
define( 'LOGGED_IN_SALT',   'Df|gqoY?(DQT#<-sCP@&,#9&)A. BDCxWrt~l:>9@Z;J9Mb.Z{%]sWedaU}!t-&X' );
define( 'NONCE_SALT',       't?Y>0|s{^>s#~i8$^8x+rpwQpm&n{in@y&t?wP`J1MT2  *oM3wh:a1ZqdO?K4Lm' );

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

