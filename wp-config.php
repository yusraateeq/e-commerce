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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'R8~1p5Q o!{K]NpElaUi6D?9WLv[[vri7Mb{N,EPL.7+uRJKk$(@*JS+V=E7`Jvp' );
define( 'SECURE_AUTH_KEY',  'b9WEL.#@HvRcL/87u5>F2aXlS/upD|gBT~t,:_!dAbfM_Sp??%^9,#K/!A+JouVc' );
define( 'LOGGED_IN_KEY',    'z)TfiEkiIz1V9W+Vs J,b10 ,ny}.+hZ;{5wk1nK.:d+WaS9*<tcN?1V%yC!C}PY' );
define( 'NONCE_KEY',        'QaG&;5F[2d1S6[dr[0.mTaQ; u4|5C#@rz*}+TLW]BAc2sHcM84u7}_tp|[k:GIR' );
define( 'AUTH_SALT',        '#dyTlT$$@O^WBC{JSfW$)In{-S`(rbQVT|}B$5RX8>@#/ [iMnh=|NHRNA}f0TP4' );
define( 'SECURE_AUTH_SALT', 'y7$_{gP)vF)mj A@Wy8WY1{#d}%UE+fPzwQTMdi^V%a9c~>p.ssSz]]Tux(jE&lu' );
define( 'LOGGED_IN_SALT',   'l}=^#/nl7#Q4F@w?gG=j:&~a:~x9aTc*.$F-a0)/oBax{^|>oG_EwSzJ!LynDhh3' );
define( 'NONCE_SALT',       'COh;1gNYj-6J;;?(ofk&pL? }HH@yVKgRmcK$OW~<AEJ~J9k^ant((~K2}9sT:g2' );

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
