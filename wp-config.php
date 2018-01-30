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
define('DB_NAME', 'Ceos');

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
define('AUTH_KEY',         '&0dQ~w5+#vvw<%4ArFtR&z=iTLqK;zd5a%LnF4=pGp3S/l*EA>pm?VV(:1Zd.[oZ');
define('SECURE_AUTH_KEY',  ' F.bga?-7~Ws<<9H@8Md? KE>$CYapAN2NtGX8s0Ls%mVi,[SmnLJ.$9ZK,w]Rq=');
define('LOGGED_IN_KEY',    '39-KsBY#G ^#:`1;T-&^_M:-HI.gB+9T99Fc*>qwZ*p68;[sA9pbN)] Yf=LU`s)');
define('NONCE_KEY',        '5|mQ.]jaP%SoK-j*a*&=2Hg6K>RA@J.p+$%.GVj9N<q+wZjv?*r$`yWl~H3Od}~B');
define('AUTH_SALT',        's6>C8M^`WbxaZrBz2RYzsvlW~q}G6 !m{NdrH*Jb>@i!!c9{^J>~DT0!hy!i#%/d');
define('SECURE_AUTH_SALT', 'wpR8)|E9y*v@,zjH8!YF%uT%.d_]1_W[J0L.i[xqKu>uCHX$=C2o>Qwn<O&Z<Kn5');
define('LOGGED_IN_SALT',   'k+G!$(Daq6T]58wu9I3y3QQ278(^RlOxyWt0sK7yqXQEZ$7J|1[*.t51#ulW^Hl ');
define('NONCE_SALT',       'E;)v7i-n.^KyKP6,,tOJZ$Ni6<|DNNE^?mJ8 %lhLf34bpt:v7g!aC?*>R#ewq|N');

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
