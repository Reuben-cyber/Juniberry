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
define( 'DB_NAME', 'juniberry_db' );

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
define( 'AUTH_KEY',         '6]lMZZB70t$#7@lz*eJ)pU^;h/*uaea8/7rgtASVgDQQm#5gB)~r$uCQ7:F:P%9Y' );
define( 'SECURE_AUTH_KEY',  's^J^Qnjb*:<6okeN?<gRFLT,]Zm8}Ts#2Bj7CM$SddgE#z.[ ;|w_IN/AWdOJw3n' );
define( 'LOGGED_IN_KEY',    't?uqv8PX6>aSUf`]sp.gL#Zr({6b>asmbRe?{GpnsB.CydmIIbWlGw5CqWkS$>X[' );
define( 'NONCE_KEY',        '+R-b%}?C7gCVJ8_CY~^kRxM7[r9}[MgNBf8~B&?R,yr2*,D&hdm9ZO-).K~dFS`j' );
define( 'AUTH_SALT',        '=#{UyB&J{KYJVb&lL(k-`A;ej*L$58)?tU{L{T=P7;rkyclDau*@cEK@.0A9=kr;' );
define( 'SECURE_AUTH_SALT', 'hwM#3p-dD1[rn5*@h#S3S-ac=;kwPM3KZABw;5J~WVU]$Ox3+SFRQ(uKKl-x3zJd' );
define( 'LOGGED_IN_SALT',   'T _SgYg?a`y 5|Ln`Fo*.:7!M`UxK.~4e0PN^6RpSLb~xl~gn4& UZn9WfE.8h=c' );
define( 'NONCE_SALT',       '7nC frRvV>MYw$XCNbnMx&,Tqdh?5%yzDx#@t&RI1}UZ6FM)aO6OPH$Jsz1i$NL(' );

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
