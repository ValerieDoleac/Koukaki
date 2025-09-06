<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'koukaki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'i@>Z;RJdJS~<KmthXNgHc2KFOIu%uf`BLX}I*th(+?`x2)u58D~YJI6ndug|{Ud4' );
define( 'SECURE_AUTH_KEY',  '8Y [yNdBM(N-F)aL,U;rNR z-2/kF(%t5p;%E}oKVEOF7BDD*2QWZyq??ZG!,D4(' );
define( 'LOGGED_IN_KEY',    '{2@Su;rHiIz,v>GceM1Ygm?FhNE6.V0l,3hNAt;^;a1R%]J]RQlCzxXL|+iI/h~(' );
define( 'NONCE_KEY',        'RK{jr4hBMUU+pUHEp^|4v%Fb))+lO/dZ{X;BI,,/k{5W$]T|b{7uVZ0%OP7@NV/G' );
define( 'AUTH_SALT',        't?a=KE<zke@~9,D1ST/KkHK0y.i-6NJP7-LmovIzXyzz:`>?blX]&r*rY!l,U-lV' );
define( 'SECURE_AUTH_SALT', '3/kip(YC,tnhI0k[Fhe-Z07LW^.&G5c|jO8k=}u]R);h#&O{k[?y5Rv`f#>8f{+V' );
define( 'LOGGED_IN_SALT',   'K%:C&<^oM|q=[`oV<CUY{%pymxZG]zfLS}?2y[K$]*icKI.,pn564C[6w!#mP<Pa' );
define( 'NONCE_SALT',       ' }Gxm((gQ;nPd?3Z|apByyvEYmr@({73 p,^F>E &(u9t}P9>7IkN1F~U1B$InB`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true); // Affiche les erreurs directement sur la page
@ini_set('display_errors', 1);



/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
