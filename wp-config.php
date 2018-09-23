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
define('DB_NAME', 'demhgkhc905iqa');

/** MySQL database username */
define('DB_USER', 'tdqpfubupbbkos');

/** MySQL database password */
define('DB_PASSWORD', '74ea942d90a854611d2c0fc3846d7d988b751a3d3974dc9727ae6f83bffa4293');

/** MySQL hostname */
define('DB_HOST', 'ec2-54-247-98-162.eu-west-1.compute.amazonaws.com:5432');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
#define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('DB_PORT', '5432');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P5^d)w/#tc@~^56jBm&++*X?v:/F{36My>F_mkx$nh&GT}O,$%a|O~ePL%5[-A/x');
define('SECURE_AUTH_KEY',  '9S{9vdp|O$|l:?L-;I_#z@gI0^ 2~cAw7_{0#=F/XUa3*B$N-|oMS#Mx#Wa=--w)');
define('LOGGED_IN_KEY',    'R&s4QuHJ*oVoY|^lEuuETb3=%XQEsZN-wNFcyTZsb4<J[Flm%3fwo]-9CTLYs,_s');
define('NONCE_KEY',        '/;18m?X.+ahs^Uui*|,o{%]~h8w?RyT? 3|?nR?4 2ixudLN9kSL8^<Ri687S}[)');
define('AUTH_SALT',        '-Eb!N37zWC:?=&7ls9=0hSh;a;f=Tzf_Wadvu]jo$;xGv+S},A.SbPs$vWWL?fOg');
define('SECURE_AUTH_SALT', '4[oBXFfi}eSKK-hB:XDmuA^|}x|+NbEB-_V(Tumgp$E/#p;bVcF|eg.w%g)x3UK.');
define('LOGGED_IN_SALT',   '4[(I,hKizvbyKO1@~&*=hS}Bf&GdL/I<viC}K:M?-CsP]<0Vqv9K~DY=op>qVB6[');
define('NONCE_SALT',       '>>}E|IQ(S}_t(f?$Ai)r%yJ^sVUxiH*uJ~u:*8+ 2I9vPkRNoi)4sC0,$5KZqX7c');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
