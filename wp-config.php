<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
if ( $local = file_exists( join( DIRECTORY_SEPARATOR, array( dirname(__FILE__), 'env_local' ) ) ) ) {
	/** The name of the database for WordPress */
	define('DB_NAME', 'freedombeat');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');

} else {
		/** The name of the database for WordPress */
	define('DB_NAME', 'freedpw2_freedombeat');

	/** MySQL database username */
	define('DB_USER', 'freedpw2_freedom');

	/** MySQL database password */
	define('DB_PASSWORD', 'C7kV@vKybdcPbhJnEKK,dRCrL3w)y8zNEeiq');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j9v)5uxz{Mf)Nd~y[LFOtJ7c^mpWkTp((DD$R1/{mBK.J xP}meTURQtIKY%0ZdK');
define('SECURE_AUTH_KEY',  'R%r|#,>FS-%!N+M[7XM^1t=##iBpbok>e?-KKmk)=.#a8966+:PBi$QJ:ud=O}67');
define('LOGGED_IN_KEY',    'd|uUg:#|i9b>;dM>c|~V9m_3kQo/8}[RQZ@X,B=h^/1yFmn&XI+-cr-{U,eb-_D$');
define('NONCE_KEY',        'qYt]WGZ/U(u+BF)4uxhd@|mM8 ;U}4sB2!N-7k]n_Dm[Nu-L|s&|| AH$#Upxz`q');
define('AUTH_SALT',        'R 1#`Mr8h+gmd_#0cfZo{~ZcG.wB-jO6=j(bZIJ/KU`Di+6/zQY3>{hmnd|I<J&I');
define('SECURE_AUTH_SALT', '+Dy}b;/`G4+w|&`1=T;L/C}FXw_z[fwyuFr2p<8GpFw$jw~Q]frL9Y,|0[Fq9V>B');
define('LOGGED_IN_SALT',   'F|pq|P qkj|JVX/])>Wg&5[JtX=ZfwSk(V)!cHiX@HdilfbW3&t5-nG|+j/59rNu');
define('NONCE_SALT',       'J%/]9#oQWa)8}e[K9xIFJmHKrdE{{K+{5|]szEqfwsDq<eZU].TKiaa!1zvd!2#?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
