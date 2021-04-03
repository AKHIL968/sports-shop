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
define( 'AUTH_KEY',         'q$|?t`BRCY6Y95m07@/)n!GeSx>M6i%yRP8;C#[;}!.|sJXuQ=GHSZq|p/1IrJXK' );
define( 'SECURE_AUTH_KEY',  '#DO5;O]jtl()6X7v]alS]})WERIt@UbEfNLX$db&dn{Yo.zpBm5E[LopNs^@Mk:y' );
define( 'LOGGED_IN_KEY',    '~6ysV8dTni=.@^^5`8<,jJVOf9mhTT,^GP&a=2V5jWCcTZc`p96F#bqcT`.,XE!#' );
define( 'NONCE_KEY',        'h1xI2J`CdP6jf9Zn7>%ORxnl6mvaJ>D+#F$fL?%aA$Y|T_-!h,/JR=3Sm0vwf}A0' );
define( 'AUTH_SALT',        'sZO`kFH91B=L{7?LH]_@W+WL*#$1mzbC`d! kS&W(trRP~|0a2>=>?bJ&Sl$Dd*s' );
define( 'SECURE_AUTH_SALT', 'IDT/r%n0CN7UH(%ul0D8@.t,V&v[hi+k;LIMqKy0U1f65;LK@]jS/Yr{@1aOT;B[' );
define( 'LOGGED_IN_SALT',   '[1$E,3Gp<`B!?v_Z%a~bsfJ#R[i3glkUl/]2^K^~u-k5Ffu8l/eraAooCBtj>.Bv' );
define( 'NONCE_SALT',       '$T(aridMBPVp*BOS5lVguCvynp+/j)7w))^Ga~Lj_vCgrzd.v|2Py4YjfuZijv1N' );

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
