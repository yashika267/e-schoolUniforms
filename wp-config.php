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
define('DB_HOST', 'ec2-54-247-98-162.eu-west-1.compute.amazonaws.com');

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
define('AUTH_KEY',         'r~/NL4wxeosw_Eu6bmEfV}B{G!flac{fEcI%Q1KPk!+to)b}]^5|z|3KaiDF0!(2');
define('SECURE_AUTH_KEY',  'YZ/J8z:|1Lu!: !6hJ7]!T.5x@RK,N]X~?w/?I/Pu]yJqPos(:%f3p/O>L;u;WM)');
define('LOGGED_IN_KEY',    'kEc<!/f,|NT9DSY+:~aU*.nM<YN I]zKVqMmG&0|_t7oDO{i[a{qe!p[B|l}?@aN');
define('NONCE_KEY',        '{Q%Qk-%fXLoA6JnmGUvi2!iq{[*2uYckxw$]ZDZrzKOo%Vp@#f_xeiRRs^{E!|~j');
define('AUTH_SALT',        '$J@9edcf=?Z6 TP,S]T>k9C8K9zze<&LP(?ydl@how!sF#:YVn!gsUpW6=h+ p$%');
define('SECURE_AUTH_SALT', 'T/KG%&GW; /b%A}|yg.sPuti})pQBKG$3.X!7MHvYx0K;Q]BV|wYPsD-dRA$Czfh');
define('LOGGED_IN_SALT',   'pU^k9aATeYJ,CoVfRw,{2gwLO_z/Tg2|!nv&B.Kn%PiC3!;?0c)DhKXsh]O~SqJX');
define('NONCE_SALT',       'J$E?tCiF|wuN)YDO$?Zdo/FRK:64V%y{Fz_AnmdiH[?eeIQS(@$|>|[L{e_fKo,C');

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
