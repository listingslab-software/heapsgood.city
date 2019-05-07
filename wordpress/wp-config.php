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
define('DB_NAME', 'heapsgood');

/** MySQL database username */
define('DB_USER', 'benbobwillis');

/** MySQL database password */
define('DB_PASSWORD', 'U24wa5b?');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'phtnjmlq6zma8za2p9buaqjqcmxduvvhu90ugobvxmqjsz8sez7sp5rzzs2jacea');
define('SECURE_AUTH_KEY',  'ygfvwqxgeby7ppl9s5fwfudko6br4hj7axibjg09jc4ntt8nreedketztp230gvs');
define('LOGGED_IN_KEY',    'tgdsxfpopgep3fqsvtlihlsroitvllrwyqaslwbjcla8l5nckoxsbua9dhpdq8ho');
define('NONCE_KEY',        'ujxng5x6cbz3kmrongwcqqxptmtn3tlioqwaxpiadamdzae0eov76mssbcdafgls');
define('AUTH_SALT',        '4rqenf7bfxgk7iajjmklk12kjep97v26iiulfbuahnmu5wp09yfzzxoqoxuyxspo');
define('SECURE_AUTH_SALT', 'mcgishhupphw60bmy3zkoii2qy3lbjnhgoihmterttyvubdgdhjj7tzjemwklc37');
define('LOGGED_IN_SALT',   'mflxyu3kz7v8irqniytx9spz7z2vigqez4t7nc9b3v6empynia2jp2cok2byk6rl');
define('NONCE_SALT',       '4fbowzovxelc8j1rxioe530xk9hvifgj7cdrcof3xzssdhyo1dnmrkjzzwd0vxdq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp5c_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
