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
define( 'DB_NAME', 'okkarinc_wp186' );

/** MySQL database username */
define( 'DB_USER', 'okkarinc_wp186' );

/** MySQL database password */
define( 'DB_PASSWORD', '0Sp5zr].5w' );

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
define( 'AUTH_KEY',         'qejhdupnli70ymjbznnxdiqlounmtzarzz3slqf2mpywbbycfo9izbll212k5nwc' );
define( 'SECURE_AUTH_KEY',  'ptffyezexowzduwbtcz7azwbdn7xu8htvdovfs7cakzzpgclzfixvwcnof1nvrmz' );
define( 'LOGGED_IN_KEY',    'njb5yrmdevepaatvyjofxxaf4c2sbah8u87duhbe1wlvf5z8xzzze27tt8fl0zj5' );
define( 'NONCE_KEY',        'u03q8e72k8j9auoc4ellmoeohhufthxgash32j5nh4lpyyhlxzlc0pfvh5zt0uhm' );
define( 'AUTH_SALT',        'l6i5u8kbdiajzeyxcnoumzetr1duyvm5oibyaou6j4cbmc82jus2kmrbh9uuhqpn' );
define( 'SECURE_AUTH_SALT', 'ahkzoq26fyeww9cjfdnuvxpxb1jh4m56ffzyqkqlxcvbr4d7todfpzgmwn8opnq9' );
define( 'LOGGED_IN_SALT',   'hxazclcm9jnespgnbnvmn3fxm24bk6ihr0grtxwmrfxmn1bkvijgwhrebf2somnc' );
define( 'NONCE_SALT',       'h2vphk9jm29hrktn5a7us9wiczavrde7rirjz4ixq9kk11e5zie9xbs4n00vilyt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpoh_';

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
