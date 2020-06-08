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
define( 'DB_PASSWORD', 'raspberry' );

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
define( 'AUTH_KEY',         'l`,g18( k5lR)fe(,[*{t?BrtbhK+J.Q}cURH]h@6TTT|/!`pGMlE[xsWiCX7F!%' );
define( 'SECURE_AUTH_KEY',  '5|1g?Zt7!<eU+sA@mxL[,fJDA&+eow5&p5n{A<dWcd8To89v{vf+5?MN&9Blx^t>' );
define( 'LOGGED_IN_KEY',    '|v)K0h|hH S!L>OL-T#;h1o?}XFOO->x_&+U*/p|r,JLe{ D<6YId8~SR?y)HUo]' );
define( 'NONCE_KEY',        'kcls!drRg%o-knFQDZ(vhXtZvc49Q1:BfQeh40W3`HU(E7GO>z6~$`Pvc}SLNdbU' );
define( 'AUTH_SALT',        '-nLfz{Rg@k<Q>[vnL$oXp=PZ!h*~iQ{6Z-5t|5d;I~ViZI5yv5{{_X4*;W&,(,T3' );
define( 'SECURE_AUTH_SALT', 'axBa&s1L&RR4fdEWez}X`#A{V4X65|%l8[;nB?=wtWh6Sy}h:[+A@olWO7-hiXBL' );
define( 'LOGGED_IN_SALT',   'KiH@)34$Am{yf2[Im2D{;p9XX[v.f+W#F.EGQNGSg})w9|J8P*jny?lU?:NpmT*O' );
define( 'NONCE_SALT',       '-b+SrpJS] N>-mU)zlGy)bNh#L0mOg:}31r z!.9(?p>-Sa!$2t@3-]d0JN6%/6x' );

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
