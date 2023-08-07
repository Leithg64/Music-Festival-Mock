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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'Y3sqYngfNJB4OOdJNijHRUIr/2Iqvh1eFDWFTyXz+JqeIEkGELxyhVrmefhGgynp95IFT+oaqi5zzjseuabTfA==');
define('SECURE_AUTH_KEY',  'dKMlkSbATxLzqm64mJ5dXlnXAvSG1BkLFrrzuU83Knj3gDfVk9hAM9VQRHJbUCARy5jNj5Cg8iBOOJq1dOxPjQ==');
define('LOGGED_IN_KEY',    'n02dc3yh+SBhBrOKJBJcWVHhX3Vq+Bli1b2liAunMIcktoxkUjxCfGauKdK8w/74e7nuBzZx8xYDoSmRJ7SinA==');
define('NONCE_KEY',        'V22T20gaO/aLokW1SoeXE15eV4lxD6Cib0BIL8L/dpJc1/nfV79bHT/dCVYbprESrUMELRltyXUyuc13EwSA9w==');
define('AUTH_SALT',        '1zYlZMBTlGMh367K3XTg9BsLO30s5yOfG8ZCwM9RXj6NBsGwgyrpwRhVYC9x/As16R8RfTjl7Q/1+dBS86uzoQ==');
define('SECURE_AUTH_SALT', '4YuuOeKyx+/haVOsERMCyoQRFbpE2KzY1vdQWMDJxR3uVaJeXvZbUkoTmKnPYKoAGPlw0hK2jFSbMo+wXxWdRw==');
define('LOGGED_IN_SALT',   '7x2leZ9sTjPX5TQiDn/glPHuen83FKzI/pu37EkvfR2Om/WMQkhS/I9nBQDENp6hmNAVPZ3WqZe/fz9QSovBZA==');
define('NONCE_SALT',       'ePayeBrr9O8BeJfzmqTbmHNcGBxzY8BPHErhMiapHjFmE0cjTnllBEb0InaiamCsAwdm/y951YKi5SP6v5JVlA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
