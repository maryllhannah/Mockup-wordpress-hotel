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
define( 'DB_NAME', 'mockup-design' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'k647AUsGAUcBXvsbu2LOmiWo5UkG3g25Oryep9hPi8yjXda7XFSefhURPSQd3S3d' );
define( 'SECURE_AUTH_KEY',  'QVCaDgWI5ME4HOKhBfH247smiTSBTcTAJZK6zHAyXXI8SuCA4QCYlxwSl4Jm5NKu' );
define( 'LOGGED_IN_KEY',    'qIgc9QYEZCHe8MhiFGAvvzUwGWNJCgp5Ft4Yf2iMypLmJAEAXpyWZiaDJGEAbKgw' );
define( 'NONCE_KEY',        '2uVdDq1zVsKpwKNiI8tYX2nF4YHQkkUyBXlRWl210SOBzFGARXvUD3Nn8kAOiIMz' );
define( 'AUTH_SALT',        'GVfnViIVYBAMt0NyFmtcIf1wMib9WNLump4Mqx8tK5UZfhtOEdKO7wOPZPKCM74S' );
define( 'SECURE_AUTH_SALT', 'wlDXB4uxkGMJ3Rbyj4MDkHawuqkThtCMBMYNhnmFmo8OquwM4ySA4aYplVDaoQFW' );
define( 'LOGGED_IN_SALT',   'S3uFFaLvxggcW6jwbfXZi8KdSJZUSp0FrUa5sfIM1rGLhWAEsvnWAC9ECWqmZ0r5' );
define( 'NONCE_SALT',       'x2K6ILsAhpFDxuMKywE3JidsWprIZmmOqTovAvZ8G4rqh3pJeWn5eHbrmhpsrG6t' );

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
