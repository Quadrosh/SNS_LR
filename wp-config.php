<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'snsgsm.ru289df6');

/** MySQL database username */
define('DB_USER', 'u18091a');

/** MySQL database password */
define('DB_PASSWORD', 'KgxBtmtES5zs');

/** MySQL hostname */
define('DB_HOST', 'localhost:');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EBeoD*OMEAsf5mwHikA#$NyiBD7DNHWe3tOlMLlOP#u2J4Mlis$5^nCGkIqvPkFR');
define('SECURE_AUTH_KEY',  'Y(vahF^d!6z6$t9P%v7rcoRE1%sWsC!4B*ZdG(KWntsYW!Dwy4zeqLyCuvBV9raE');
define('LOGGED_IN_KEY',    'oRwu1Q^*0Xoj!jaqhAVrqcigyYSoaJAye)d4z)!AdaZHC0ts@8rf&E8h$AOqFNWB');
define('NONCE_KEY',        '1AxwHo(&)NYje7WQ#Dwt$PvijGpyyTOpWuNfybW21ac2$Po&L9mykF*#H)Lup(F&');
define('AUTH_SALT',        'CNvCiYuuD5us^P^MCbMxXk(csbFYo54BD*QFioqSF30h&l4#60$^#I(R3jpHIX)%');
define('SECURE_AUTH_SALT', '6#qHYRkDRow7d6@2rG^lU96$m!ysZ#BX1E#uEvX@PkrgW5a0F7jUWniQTSyo1EqS');
define('LOGGED_IN_SALT',   'Ju%1TGmvJgm6SXWnXXFD*cGV$RQm)Myr8es8K6JUrC6L7VY0a4HAn#BDSqVG)SwK');
define('NONCE_SALT',       's3GAGw9ehGP9HJ3mQfP@y%Ju*6@dXTEav5$g7hIF2Jxl3vDx9G6W%&asGt2^jHeC');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '@@LOCALE@@');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
