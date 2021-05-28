<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
require_once 'credentials.php';
$cred_env = ($_SERVER['HTTP_HOST'] == 'someshop.loc') ? 'dev' : 'prod';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $cred[$cred_env]['db_name']);

/** MySQL database username */
define( 'DB_USER', $cred[$cred_env]['db_user']);

/** MySQL database password */
define( 'DB_PASSWORD', $cred[$cred_env]['db_password']);

/** MySQL hostname */
define( 'DB_HOST', $cred[$cred_env]['db_host']);

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U!>s/3OAP)8pz|J^A3?Cf0:PBEDRDR}^4O},81_H&vvP;Wv 6k`Zi2GS_Rji8/d#' );
define( 'SECURE_AUTH_KEY',  '1]#a3.DqfvxW}<@an_1m`t4mX}l;34ht0%Isi^v$(@*&e5HC~rjxAOqFx&tQ)kUC' );
define( 'LOGGED_IN_KEY',    'z75m A~ZS6}JJ:{s+Gq=[iaKOk_N{?QM*Og?&: 36EET17sNRR262eR/GpuTwHZK' );
define( 'NONCE_KEY',        'ncB&s6c.1JZ;8G3@&4{A){{@wZUu`ywigEh]qXb *[, ^z;=$-hIQ!(&<Fg@{<D&' );
define( 'AUTH_SALT',        ':3q*kG2`;}nS/G)g?lT^KCfjlx`BsHT-d}6^YIU,Mr5vG<&Nr7%k1b<^%u~-Uax3' );
define( 'SECURE_AUTH_SALT', 'HgSk_HStD%{.F3|RKuvC{!Zd1CF/I(wrG%3s]DY8.?3e8OXqP!lUap|p=3f B.Wu' );
define( 'LOGGED_IN_SALT',   'S+] 01:o`At9owYS^XWMI?{itzZUk(]5%(_OP4..%0#}mgP^qY+e}q]U_Ln|WTR~' );
define( 'NONCE_SALT',       '.;n$N<j9^5u]L+{b!n&e321}#4DCP#rgJ#B3QL+a+_8:%~uLI4NPZ=I&yK%0e FC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
