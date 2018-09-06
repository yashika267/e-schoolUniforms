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
define('DB_NAME', 'kluniforms_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'VpK91WGJ(4kC+0frv ?y /5YvZ]z#Y7qdgij@R+:7jU2;yeBS +WU~F%k2 v&<z#');
define('SECURE_AUTH_KEY',  '[15Tf{g#O}i1,Xy5MMSfogkw)%+9Q)S}Q/+_5mU)d}yhQO;QI?7>dZUi@M^t-~` ');
define('LOGGED_IN_KEY',    'J _^V[gb%qigdA$R;VVdL!3UEy])8V=F3JZ[W1gSS;OkC?,9nfo}WK)zCbIB4&:e');
define('NONCE_KEY',        'PEEsP-.pO9JUtf4m@kWqbs0JPt_a)HfQ#TtPaa!5<+:iUVG8$RUT=!s2|E#L0_>w');
define('AUTH_SALT',        '~c:.?YJfQF!~UZq7UNm^U-]2.4eVDHf|tF`!fl#k_n!89;1vp} neCAh22sG_Yp&');
define('SECURE_AUTH_SALT', '3[iIUM]GxCS7m$T>SwLQ2ugG!$sJ2YnF=}S!~X*zC 8~8tS.<<_P=o-+hGsJAfZ|');
define('LOGGED_IN_SALT',   '@.K:l6w0~uMP@Zb*5wycC^5~T3~d+~@hvdhkyS6q,9h)LL8P07?!v$?:Tl`teHB!');
define('NONCE_SALT',       'iZ|zkJ@9LiDANTlauZ4{%+it2Mt7-Cb2HnbQNG*_9IP^.,e880?z}%b{f%yF7P0-');

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
