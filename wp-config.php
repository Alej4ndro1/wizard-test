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
define( 'DB_NAME', 'testwork' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!Ke-m+7l+F;5XC:`4O)k}fAY8>b&C~u6OYzE|:>S5f3%Rg>k1+dEc1c7DF`x=n}l' );
define( 'SECURE_AUTH_KEY',  '4&8_GA{N0?)v-R,1${)ol)WYT*N&&N4D6&D87yF M]2ES,%WTfL$bnvdH[tUU=!(' );
define( 'LOGGED_IN_KEY',    '_1_PlmS xhvLhPeK|%v7oau~{MKVw$aNx*>9kNh=j`rXZ?m>7ZSTnP7Bu(`L[WNp' );
define( 'NONCE_KEY',        'q;3_o3FC|y*Jd|2akps<5h:lliM9g-srZ;iFuhQ-`;Geb^dt2xqM%ChEsPpb*ei[' );
define( 'AUTH_SALT',        'gC.=6,[}Fs9<=cWEO+SVg_,nkfXO6E[{S0Pm7PM@-W*O)<Bv*E#CZRcqzYZ!B3nJ' );
define( 'SECURE_AUTH_SALT', 'wV[O$+wT9h8H@9pw5`F^Z3Z,J&_[O(Glz>6I^-WI-ZvH_, v2DOSo?TaKt|[:Sh*' );
define( 'LOGGED_IN_SALT',   '(lUG$aH9F]dq>lYAF:86?AjovF%%HaF2FWC$giAX;|aB<%F@3#6G 6xl >geX#-&' );
define( 'NONCE_SALT',       '`=3yAjS8kQn-uTqFJrKpVWm&VI4oD_ :s2c Rh{lno EV+!J;EhNPxq>,v<qJ7LD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'my_';

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
