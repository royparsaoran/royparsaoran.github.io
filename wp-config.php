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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         '{lEjfhIsB.$~RgfUXlw*LBx^ijI)Vgyvnj!bqwAuM-jm_#,c)y^&](OI4RG)6dp7' );
define( 'SECURE_AUTH_KEY',  '3zrpCP(%ogBj7G_yDzWx)4-oQ!BcFa0]2mxXSnm0_KoE]6h}2s+4)fO9*?3Ih]+E' );
define( 'LOGGED_IN_KEY',    'hT{SeEnklqug{BHF<8}|cxv;d`%_RsUglp7_xA,mu0uh9EP{#,q7d!$h[s>?HMHX' );
define( 'NONCE_KEY',        '|UM}KKnp}!F%2leQbA`L%Z8F|TA3` ,a>*GOK;3Eg%[oFqCQYi;JIX|lF/@S|+w[' );
define( 'AUTH_SALT',        '(y$]:0Ici1LQ]|6C*.,`CZU]x1EOCIK4fxC;ScQb*zfA)YkY&oiPu1ENHl|8R(M[' );
define( 'SECURE_AUTH_SALT', '9U`SJ]hC7,LT36E?PwGi=kn$:N=.6q=H)$/Hb0*cz2UCejRKtr^#r8TU;-xfX-:x' );
define( 'LOGGED_IN_SALT',   'VYn,[cGgA,w&)9.~tf3EmSh}%V</PJdg/C3heM!&a|Q;,z sT(/:8L$7C$}olo_|' );
define( 'NONCE_SALT',       '}#[,dQsI}FiQ~YdUJ3V&Y~Q3{U0K+.T@6>l+mq *@n=0?t!xluy%^OIW^HO=6]i/' );

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
