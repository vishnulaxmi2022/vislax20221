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
define('AUTH_KEY',         'hZ5/prG4uhN6PHkl9NDOQa10cz9/YobqrwNWTWlC8WJZk6tRBAYpLqFJs25F89qhOIgSqa/sVUD3dTqOVghbKg==');
define('SECURE_AUTH_KEY',  'pI9vYGMawb+ETgUHiq63U7Y+Jao4qKQ3Ol3Upl2ok90zRGQppGml8FuVyjs9knAzzEvGo2+MRrfyZe7uT18lFA==');
define('LOGGED_IN_KEY',    'BYds0f1MKiw/Bf8fBwISlT5dEBNsSvVL7tTbvmF3E9wAwGCUXC1dRFKxOGfMcRGULfafLSpqeMl14f+LMhLEQw==');
define('NONCE_KEY',        '7TzCdMZf4d8fRPoImzXuNb88RE9Nl8b4a/hIj80cXmun3KiaKjUz2PAPNOtl0fLnqxR61g18lqgNgBOmzqiRWQ==');
define('AUTH_SALT',        'K/+gfp1iR8B9FyY/XHa5dUQqfiPm8ydC1qSEn+LtCic9Ii3tIYvTome+OowceDBwGT7FqAq9ibVb9V8tfYQw2w==');
define('SECURE_AUTH_SALT', 'vgdAFiWHKaQa/knyApQGL6FgIMcc+H9uakqW7Ikz6K1hL1Otc8ngubdcHKCPNlOMSFs0OnP4CA8vbBX8Ds/vLA==');
define('LOGGED_IN_SALT',   'kKprze0mFo9NepPQRUbv72xXhIcUjie4h2LdYvsZ1H4D7iamCaRQghCx3bT4HM68oeJ2HR8nfidjj2miAf8mjw==');
define('NONCE_SALT',       'CiQoSJZIJTC32MotCvPfpe6NCqM/pbeQA67NdgF0JQfxLoNo6cP+k/fm4w7D///swaP4VlvQDujUiQfFN5ktHQ==');

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
