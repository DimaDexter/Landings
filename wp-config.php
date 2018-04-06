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
define('DB_NAME', 'landing2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$Z6I?D&*,1;=<Pb53|#?IGFN&ttGtEAMTzDG?<*_  Y{y8gLV},fn^8 PFv/Co{?');
define('SECURE_AUTH_KEY',  '>0/a]R|5Qwkmpf=f+3Ct8+G(65 P7b7A{F0FZhW<=R?%zsM*ZNSTZ`8@eamUa0{]');
define('LOGGED_IN_KEY',    'sT^Eoo)y4N(b[V6,NL`QlO O_%y|qM!LFG&$~TpzWFG~J@1~]w2x$(O*YXhSYT=(');
define('NONCE_KEY',        'O}|C6G?g>-K Co)wuw!jF`#*M_EIA^z<Zw~(>G2Am<1(h-17a~qU>$:UfipRH=D<');
define('AUTH_SALT',        '7|dWc[nfg((qolWm[OWcw$mz#OdU*j1Y7JYFfwj`bn3k-/zh*h(}~b_r8ZVeMbFB');
define('SECURE_AUTH_SALT', 'WDgN?z86rl<%U:/n8hMDh(A!8J+u5C=L96yGOepx8YJfk7AyW@% F^t2!w4S<G`w');
define('LOGGED_IN_SALT',   '{[e6:J/CB$EHj#<sa/zskj LDW=!UoQ#U[s%^vaBcr5G0{+@~F2wfuM@2cfkw$hC');
define('NONCE_SALT',       'L(~P+is|u~qkIwo+V.a=W_D9R.#3!/|E;r->RV}oPo}L9?eq0Wp8FAL@g41?&MRK');

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
