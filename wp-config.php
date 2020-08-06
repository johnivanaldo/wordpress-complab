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
define( 'AUTH_KEY',         '0mR7n 8/`n`/A=];iAmh&EW V/Z^?Tuj.pBGvJMU`ySL<Wq8aiWo<A}!*JdY0)M6' );
define( 'SECURE_AUTH_KEY',  'JFfsFQ?xztwkY>QHhuJ+Y~.Q =T57gmfb!g;G$3aIXd7ZWJMsdk U9/d!{#g)iCm' );
define( 'LOGGED_IN_KEY',    'h:YpZ$@taN@4b*F=FxhV8XK?SU<|itV/k4WcN$;.t+2A 1|fu^*<M&GZ,e]F=Wc&' );
define( 'NONCE_KEY',        '-Y(_CLJZHQB`VF:MQl>_qJn$[}+)yT@]qQfJq9 t#76/tP#`1U)G{ AUTVhF($G!' );
define( 'AUTH_SALT',        '3C:d~J%9tSd}JJ*`>-)?$ffPtV. ge|$HFX/:H2gw1S]  Acg&v4?X;ct%zsC<A1' );
define( 'SECURE_AUTH_SALT', 'TLNUBw$Y/326,+rq ?:Sy{,sN[bgXlsUaRS(t^v=j k%Jq[>p60Gv:=?)~GY%* !' );
define( 'LOGGED_IN_SALT',   '{kYD_9jo(kK mC~v}mv|e8}1L,)b=s@rj4OJ!WlT4QFywP8:s/t[dU5wq?5NA:1/' );
define( 'NONCE_SALT',       'HCXFS9kuZ:}/SZ{`;Q=:Wz>*7ci}g.zfs~6Pd _74A;l-tfbXJBs+w.i2krvI~SM' );

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
