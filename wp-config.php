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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'yacine-boucetta_wordpress_b');

/** MySQL database username */
define('DB_USER', 'wordpress_b');

/** MySQL database password */
define('DB_PASSWORD', '7$3TGb0Kwb');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wb)blGeIzw54ql4Ece6We4ilDqEt9GQxJO#HR6qLdL1V)bq2No7Eu7!ZURtvnkqX');
define('SECURE_AUTH_KEY',  'gU1mZS6Wrr(Pn402UOY5!GIsmyg%3&@Ig&r2Q559)8cBm!WtdoCljZUp)FXzGZ%g');
define('LOGGED_IN_KEY',    'd&Av!SUL%)vSWD7Ic%GL9wRsueAUQ0vnJkYIOnUm1)f1&X)4VgF@O9(tfwzrEQnT');
define('NONCE_KEY',        '25rGNibPl&VLivhC)4*3vKjx6j#m0lZ(DX6ggL7shGYU8uUTsPccTQ1JnSaEo@kt');
define('AUTH_SALT',        'ba&WoD1%re6UMsr7sv8GSI7bqajuPaSpyR)%wI91*)GS%e5m0vTS4xwLeWVIVwOW');
define('SECURE_AUTH_SALT', 'Tccw&P0AAhd6w(PerIvC8j^os&2nfowLCeYBGBANTYcnOMNOOtfu%MzN2a6ntRjR');
define('LOGGED_IN_SALT',   'nuMnrd4S29t%hZ0Fy0MH2eMYyXMpDUaj&KmoTL4jrzXWbzxu5Aya*wI53keURCr8');
define('NONCE_SALT',       'TpnM)#w357gbQbYhDusBgs6uwvrciEMsVZK4JAqeYNQmrfVOU#e7fc6P^N&F8Fao');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
