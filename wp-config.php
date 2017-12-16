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
define('DB_NAME', 'portfolio_db');

/** MySQL database username */
define('DB_USER', 'quarters');

/** MySQL database password */
define('DB_PASSWORD', 'quartersproduction');

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
define('AUTH_KEY',         '>}XH M#rH}La>d;Vv4qpk4`e?a<r?`-Tn+A=RF0.3ZK<JK4yr+2$9&J}o7D3!HZ?');
define('SECURE_AUTH_KEY',  '4Tcjgc(Cb2lXH#hu_2#bY~dyM_X]n$aRaxPk7.fAFUO7?[iFB>xH`yv1S[2j]5@k');
define('LOGGED_IN_KEY',    '+~m>b}kTC2 .ne+=8-<y6:,8y%sP1fRY2O5*f5d+~{Q!f,Ha>yjpt))IRXZPSV7|');
define('NONCE_KEY',        '@lK-04mb%$d.xx2/YL+>vy BqD,o-E]5aTJ5IGf2zhSIu{N$wPe[N#d6i;.?ED[2');
define('AUTH_SALT',        'U27;gCEz/j`KN{5Sf12lT tEu$9YCfpxK&.sY`+CyS4<pGd<DAPoe%>I>gOut9aT');
define('SECURE_AUTH_SALT', 'j+5%0r!.W)HP7c;CWDS[c%wJi. PRfx,l+1-}j<PxaAljsjvU1_f3fbBo}xE9bHs');
define('LOGGED_IN_SALT',   '9PgVFv8?`n|<R9^S.>Yp!,h>;s C}%6K(:?]n#=6x5[op /P`0s_lE6 )/Rq%09_');
define('NONCE_SALT',       '!acDBNcoa/oWHSK_JE[WD8qNoU!Xl0H%0JArBR/KK3MDqtBt#`&EPsY+HTsQkc&W');

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
