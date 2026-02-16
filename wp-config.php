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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u731710703_dBviNaYk' );

/** Database username */
define( 'DB_USER', 'u731710703_UViNayK' );

/** Database password */
define( 'DB_PASSWORD', '&kz7MzT]C4sFK2xBs3Ho#' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'B%<_bHWEF)fFQU?b/8fXLh -9xjJhc%Qv<V>Om>*wKHBf%>x`$~q%?OM6f>Nm.!@' );
define( 'SECURE_AUTH_KEY',   '#>[X!%.-C5BI_]cS!v.w)mC`Or@B|yB)i_mT0i:&0BYvA-r<y93RrOu[$tr!om5#' );
define( 'LOGGED_IN_KEY',     '[L@P0H2=/VjXPRDI(v[&P*@Dc_I;yVsndSK;_(QwGF7sq!7#1m`wlCp}RT>m8fMc' );
define( 'NONCE_KEY',         'LV@DC`Fx@x(SDgi4bEf+=jwcnG:/uUt(i0&{8 tK!B73{0ni)3KT>::M0@R`e; A' );
define( 'AUTH_SALT',         'P_Iz.(!ei![wMla<?kTufcC,WsUx&<DX@wh(iY1(Z%85qJnHp4b%Zw9^2h>JUmb#' );
define( 'SECURE_AUTH_SALT',  '?{,,BK5)rd-)g8}9!nOz>:T_I.,t,XBB|f?m.PD^{8^lDWFhF#(D)$<VIy&[!UoD' );
define( 'LOGGED_IN_SALT',    '&TvngA{3t~UroPB]%q?@1TZ b&DBE;/il]aDy,r&K]GjoyNatW#! kqiZO;[_C/b' );
define( 'NONCE_SALT',        ')<+.bC*kux2TrF*of}+C77b?t.g;Ke0fyRgj(z^Ya&:HW|8DCaa1iL[8xlfXANEn' );
define( 'WP_CACHE_KEY_SALT', '|!=I`XHz{RUB~pWriy_P5;/0YC0vi|53#8EL?H$xqL>|`:%z.Ad;%)h[%Uo <3zW' );


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
define( 'DISABLE_WP_CRON' , true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );

/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
