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
define('DB_NAME', 'finalproject');

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
define('AUTH_KEY',         'pj^0puPEDPdHs/#-=3-eT_uwaT6)U{J_#<6tEaVkdN~ ~mSR4WFd0,wbj_TIC=ZC');
define('SECURE_AUTH_KEY',  'tQqtU d&,a>7#s,-CGBN!wnb@,h31LoK9*Y6gTe=b#4OEvR^[:J*F1-YDVYr!jDR');
define('LOGGED_IN_KEY',    'BOaxtjH^WR[As~Rs{@zW8r@Kz0L>/&YVUW{P:u8?A_qOz~(?2{SE>-}-O-k5C=,G');
define('NONCE_KEY',        'IOIWFL3t>xB5eVTg!C7fCm?MeYvXWb11* jB(uPi[Xb _G792Foh{r)pa46Nw#aD');
define('AUTH_SALT',        'p<!BM&)|KvOMm{W@=&eY<&^wyN+HDr4K$qQ<751U%b@*Fw2Xh6VLL=$?;VFg0NZo');
define('SECURE_AUTH_SALT', 'Xwr&OWCl66x*MPiOeczNz8sR3nC>ua;nD=}>[YByz$=b0Nu>ov,n5iZjFQwcS@OC');
define('LOGGED_IN_SALT',   'X|{z6C(`^;Q{&_>@!hrll:X?KT&3ZsJ+y-!MzsIg%#[-@X9g(|R0sLGcg(B18bZ$');
define('NONCE_SALT',       'tnEw` uGK|g~>C~3r3_K+AFmS%Ks1]/BjdaAWtP_:*]Fthmn8Xnhu*?MI,hx]eR[');

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
