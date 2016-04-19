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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'RootPassword');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '7)$)g2y),_O2bkh|3*@[;ldPlKC:%b1;49PD/4j_Xd$J-~@OK8/$yIWu:p glO x');
define('SECURE_AUTH_KEY',  'L`y^o7ud(e:3L2eV7(`02]:Bef;p@I|5L.wj84bw .c1d9lGG=N^wCkNqr8g$/L-');
define('LOGGED_IN_KEY',    '@Kp5x3Ue:6@W+,]u~W2JszA>WJ}t_|&nt$MorV;jNBfuM1N+f--YHa{=!,54n=>M');
define('NONCE_KEY',        '6|fSF}l_zTgsMFeNl^{:j-NehF+bLU((]J$j|=sW(^z,r.w`lZUb6jIs/pGHpW0(');
define('AUTH_SALT',        'K0 {@9r&Rg^_sIT8Aj`)#3/ SI0j du}@Wx[AC]$?0BU_1-b1kmxkGUXT~8F<:3{');
define('SECURE_AUTH_SALT', '@v)h{=H1-yj(-a.Y-R@<?k,E!/_!xbVbM-;%5g-;C=&V!HbV9m+X--m-Mm2K*- [');
define('LOGGED_IN_SALT',   't{XJ@-<;D8Y2tdp0CW/SBG@DJXG-}g+~Y< 5H$sMG Q,Vg>G>*FQ$/@G)s<=4`ea');
define('NONCE_SALT',       'NasL)o~;b+x]a5WY*SHu+6j0`+wEBxFAA6/TR-y][;5/fmGG~y1`QtI;Q}kENOzN');

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