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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'TFULxd705nq6?YXW,bp{kbvxE!$A>2gM]q}t`j9* ~[@J]wpctFPMQ@;W*]lllgO' );
define( 'SECURE_AUTH_KEY',  'w&d)JX!kK@q_-[*g?eM66,YN#wptl^E$L7|NHTMQqf&puxk^z#aC%9wF8)JKm|#d' );
define( 'LOGGED_IN_KEY',    'MQ4P,s{}x3ql)ca~8^bo]xy|AY};Okb65.RV,y9N[P._,=eLp&glK^E3`C1?6|1?' );
define( 'NONCE_KEY',        'v{%i>E3AgX~JAcz;LYfjV9o[)FgRTr^@%nitK;6{6=5o_9_g0db+^b@A)z7t$x&<' );
define( 'AUTH_SALT',        'NqM(6jAf2=k^pU7-DwPlF>dnEUi5$%Aup;wtSn^sB}-;jy]R9Mz~dY!%Z):F $qQ' );
define( 'SECURE_AUTH_SALT', 'jm[)t4-}ZH~:q=w#K!zP#hHl-/1l)FBuO7~F#q]Eoc6cq7Hvg$G-5JQlb8NG6/t4' );
define( 'LOGGED_IN_SALT',   'FRWd=qdH/Bfq?VM v]{2bv+|OSD5)cZAY^Rs$H{Tbg`Gsk 7yi@>,D/TMD_bcdgt' );
define( 'NONCE_SALT',       '@N:t2?Tcudt{c%^-Fi%$c:jUS80y9T4<i%}(6]fvjD_n)A5h0-g5!8*4@vk`sSTu' );

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
