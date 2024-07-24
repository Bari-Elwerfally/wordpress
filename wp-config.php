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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'dana' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '<duab!V)P(jI2YFH7,QIBR{/DpbI.32SCY4jv4p.KMmXXu0v{uXi,IYdRmKt6G[l' );
define( 'SECURE_AUTH_KEY',  'W5?#B~Fy!_4J>I%78<s2|[,q&=A~YY3Q(e0RPQZh0c.]7)-p3&-T)SlVQUWCt$O@' );
define( 'LOGGED_IN_KEY',    'E0|dj}90MhDBLF13Aq1RYM!.SWoN[@v*Ce%Npk:P>Q-lmIiJAN_Al-wmy-BM=;r$' );
define( 'NONCE_KEY',        'GRiV$+y*@M (V7E#?B-nWEi%@DJBbrPfjM_4[/ih0,K|Jm:!@mLPkbQk+-F3ZX6O' );
define( 'AUTH_SALT',        'm/rlA *!kt):$P4dLUZSglE;]{*W4XJhQc+D_CwL{nY]eaLV/,s~89UPC:gwzb;M' );
define( 'SECURE_AUTH_SALT', 'Rfsw ;8@Y%TYsUAx6u]+fn>8v@(PM}y}CS>n }5R  9k&hG8d5GbTpD&%CgxCzON' );
define( 'LOGGED_IN_SALT',   '|YOiuaRN8B]VNh$+DsmKpm1W9/nC9DPo;{?8O`g*B6pBig1@6+K6YZFsWfiA)[%]' );
define( 'NONCE_SALT',       ')e[&GYfEt(hF}.ju}/PzNsD mfu/KMigJc/4[Qv`;LxO)MgZ8ny:4m/~rE%Q2kF<' );

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
define('FS_METHOD', 'direct');
