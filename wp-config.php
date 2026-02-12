<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'L,KAHX=ZX6m~5XwX-/eUzB82A1Q pG>%zeON#Yx++7@=A1I4NG(5BT9P-1/Jl}0J' );
define( 'SECURE_AUTH_KEY',  'hk>|6tym>afpAei)#o=3@XIa73AMz_cP=+wb}yL/BM,j,)xF{{1is`*d|_svkWCy' );
define( 'LOGGED_IN_KEY',    'ObJ=gM9Y&c1Kg;b/R~Sb Q)M<NxpvKRl[fCu8u(cojuqAu!}aYjs5Hyv8ZeTFJ|Q' );
define( 'NONCE_KEY',        '[2]3{DWRywGJx}U@)9BuAL+]yGn~u,*84C(?I!c-G>;BZod+5{ -.j{Je5<D4fD.' );
define( 'AUTH_SALT',        'G/U07oey)(Zjorkm?2X&rB]-)&20brs}qk+_Cb!fO_#Z5q_?__ MQ2(oSpS}Oi)?' );
define( 'SECURE_AUTH_SALT', '{2!}R_@OU+lH8oH.70<W;}8@toJb:2YSWe2xbTz-/=Z-z}G3X-!|s_)YLiF0(p/5' );
define( 'LOGGED_IN_SALT',   'nO |;>6ih87F&1%}rAQ*Y!ABq}t7@w%JSQ>aO.PE{57FE{K)R|eXr&/SQ.=.8C}8' );
define( 'NONCE_SALT',       '[M{TUY[6gPd<Zs-p8av%(;!t?a~IGFkb@|,d97u:=UfvM.}@4QRaCqzF~X^I>F~{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
