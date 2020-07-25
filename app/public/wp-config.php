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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V5TFvf6B8R08mvyntr4dmizferMKL1f5DVjXZsOheDQQSP0NDLb92ejAqnUt+02g6aKBxvCctjwsP0by1cw2IQ==');
define('SECURE_AUTH_KEY',  'BLLySNsyka92LJA8UIR8MflYE2zcF+ryjY8YEm4zKN7YIczDctc0+u+vTWyjnq5ZHNFX3jSofIStlTJW51jkjg==');
define('LOGGED_IN_KEY',    'GoJI2TD6sCA2xdiZeFuSpLNwU4AS2fBgwXArzLSOYvYAXxUcctSzQWce7jjJ4rsNk4LscJKWDf3+H4rzTvXtxw==');
define('NONCE_KEY',        'vAjNTFGIi7PNDGR18b64zwBCV/hUYpOEpI6PzNcy96XyiPJyb9aa+WktCRXM//tEVbbbuTqdmexE3wvwssQzbA==');
define('AUTH_SALT',        'IT9KJoHYIeGKFlxvuiXzQPNkIDXA7in3waeYtZyy+1EYjU/BFoYYxqK3+yoOL9YShV4CMmUG1F/xJIOvnFJaCw==');
define('SECURE_AUTH_SALT', 'nqOw5dBU2Pc3WC/dhC+cndMoFqBOW9wjqlwQeeCwPLbda0DB7RTU90mGafUd1+XvWHVRvdsp3JwfL2f6oVnG+Q==');
define('LOGGED_IN_SALT',   '287GawsbXodIPa3dSN6Z/9AH7gh8sdHcH3tQYLrgsfXSNE/bRMlVoJtQLM//zAgibbKYFsPAUQlre73zCL8Phg==');
define('NONCE_SALT',       'hEamoCy3UtKskuUW3IdQTw9MUuL0cgiqK/Mj1LeFUyXFBN/VlNRCuesGmk0BC85iBFGRulmmcEkRls9Gqun55Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
