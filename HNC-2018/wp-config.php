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
define('DB_NAME', 'historiasnocontadas-2018');

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
define('AUTH_KEY',         '/j:$63R#<XgFN,[I9?Mw?V*BSO~2BoC%AgP=|g?mU`bYf,K(F4 >zuj8/|=16ID#');
define('SECURE_AUTH_KEY',  '37d`I&IDw%hBLR5DnkeRD;AvCoMM`!];z]!p&hebVV{iBEjYT]Z&{loi$OIW?*|e');
define('LOGGED_IN_KEY',    'eJ=9=r9<tsL!4F,2dI_`NU>%-e&1JfM (v:cic3<7S>Zu1nOi:.tHBD:rgn>lo<2');
define('NONCE_KEY',        'i)TWU^^7rn|l>KJ/W/::E3*fKT]=ELIPXj#(q55q_xSJIe*bt*c-XB<YPs4/lrl_');
define('AUTH_SALT',        'Q|#1Q3K?;6lG/9ir~!Z!fTr$ Sb(wd6tL@tKI0sDaGp8*t#B&4;l&<J9C?.bbhW9');
define('SECURE_AUTH_SALT', 'O8-1(b}!%iYsRj7FnwTAN_s0}ap;H+a~vk<FcY }EyblqCc$-u]&dIrb&EZZBqX!');
define('LOGGED_IN_SALT',   'cUE,qGkdx:QJj`$%Kmgc$7n;E(P^s(Lr+x{|b~T=P 9`Fswq[g9V.BHl+_em5S(n');
define('NONCE_SALT',       '6`Yzo|hIaDuA&:P9iCuR.yG]ZeNHVv~TfF?z=?VFBSbb<fs?As-sO:GC_I)|cm-e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hnc_';

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
