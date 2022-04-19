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
define( 'DB_NAME', 'wpdeveloper' );

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
define( 'AUTH_KEY',         'I`{1ccbQ7vDQ8(#a7~tzZK[HnnQ@tIhfeE]{f3yZBH`,Q0nU3r5vmjUP.OMrHS}a' );
define( 'SECURE_AUTH_KEY',  '@`uV7}6P9G*k:xfI7dnD{uuPJh=(B1h(x%xOFP^F5hC4L(0W,wM+|O09bPzYmK|N' );
define( 'LOGGED_IN_KEY',    'oBE#/jJf<_&R$v;&<2vq}cEnG@LTQzy,|-A[9xAqiCtdzj.V7=C&2g5.xDye@kli' );
define( 'NONCE_KEY',        'LjQ-A6 s(k8ZjAVVGyQq4t:}MM`< =}cRg80FmeG*wu)T^_Z@a1b_UkfMD5,zAuI' );
define( 'AUTH_SALT',        '>&1%TL +)$V-.jJWW~0zMO/1CC30u>;4f_vEoIMOtr_$~[ikF$gUK;Y#39tmlcBl' );
define( 'SECURE_AUTH_SALT', '@vxUe(J[:K}q02zOOJE2Kg^FgUk{_GsGh0sy7 pzCghJ6gH@  ^BQ>8P&5vB&@JC' );
define( 'LOGGED_IN_SALT',   'L{LeQ~hes:;KKx4aoyaRJ4BzaN*&qE8pM%4S-b[&8jpM/SLuHjyKU?OHs+dYs3T|' );
define( 'NONCE_SALT',       'z7J4?o2QikZv:VW+m!&Vt!jwZay:/f|G&;l2,sI4{Zao5J_0Ref93E)Y.*M*EY7O' );

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
