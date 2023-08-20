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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'm`<X:W$Soqt G% _7ih.b}bnf,[,|:V9c/0$bZBAM0&8y.@@0pe[qi1YQ&As|wj`' );
define( 'SECURE_AUTH_KEY',  '-Ncd.{%F7F@yoy>HwB&?XJ86etp[JB;/ Pn7~(/{d+pU-slB$7o%GBZ@r>g_B[ g' );
define( 'LOGGED_IN_KEY',    'G.u!F@4P]L+ttYhVIE^)4et5/9pwB,Jqk2e|vo]RX<B0.)6Ib,?&7qlRBB*]0wLp' );
define( 'NONCE_KEY',        '_{Du=:2,;vh@>^EF7M]7(fNdp]M_n/Pzin3ZBUWVS6~<=ROk&P,[:*Iwu2$t.q:X' );
define( 'AUTH_SALT',        '[32u2jhrFO##%Fr(5Zvv4QDD1:#2YLw^FM9auuqtg8<t.lJMz_O>7mE%L@?[J,8!' );
define( 'SECURE_AUTH_SALT', '>&8Y1qhQblmR4R]4xA*8b4]GLeeb$.qdPB[;HYI5dEMWzeqy&50 ,1e&5RM!/i5Y' );
define( 'LOGGED_IN_SALT',   'VtW(DvTdF-l*)>z)ep]c%Gwr<Y*|NJJ)AnvnN:>chKJ@QPi~:,7VRdLTFT1dru7?' );
define( 'NONCE_SALT',       'E{WDSvebfz+s-+}a;tMQnAyo&;fv95]}0N|+^4P aqw$%R{dO7;NAg1u0QgF7Inc' );

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
