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
define('DB_NAME', 'success');

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
define('AUTH_KEY',         'H[& /iY%I*!S[HL~DGW_D|-~cV#Q[+|}$?h-+R-mE:-{$;fc4v}ANVsj!%&KD)9m');
define('SECURE_AUTH_KEY',  '62:N&]KaA80D?{>cmF42hQ;Vl$t7y$/3iWyF2udh<jGF|vUC3(g6_.|+)Ak)8<qj');
define('LOGGED_IN_KEY',    'ST[?Yvt4$mXePsYK*Py|Wz7J$q`#59dD!*elViVQKSKs-!Z{uByyk2;LL.KDrKa[');
define('NONCE_KEY',        '9>,&]@3FHlm7#W1eb|,0B/&d%dF8qQ~ u+@MmR3TY4^ a$Wox%*Yh,/dFt6{QR$u');
define('AUTH_SALT',        'yaJLVZROq5,>Y4s1 txEl{Uq|n89nY5rQlo$J;vf7|*`yeQqfU[t-j%>[.Ba#g~i');
define('SECURE_AUTH_SALT', 'yEroTGV?+$!4^^(R,VZ9O3f++k]FgNA^Z3q@qwIt<%t;Ap0/#:+w&3K>)hNM&:%[');
define('LOGGED_IN_SALT',   '=t|Vc-1,dCt3yXf7`|bEGh(0y]ECy_KW&guJ*kI+$+|+2E{PG:smt9}Pq|}vI0bj');
define('NONCE_SALT',       '>n&T&YbnlAYC`> Y-AUQR@ 3S0!}8alL:&X9Vu^Xq@UZdgdF0Iiwuc|6bg:B;H8y');

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
