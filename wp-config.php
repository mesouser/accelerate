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
/** The name of the database for WordPress */
define('DB_NAME', 'accelerate');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dUZ+z]6~hXHtj5I=B51zLQmhU1wr+[EKya?WS,RO=<s,mVFDxH)bCr+pkS.ZqF.Z');
define('SECURE_AUTH_KEY',  '-Us1+?h3B6s_bMw*m.&B3|U&v,/M` bSnt1wZ:O eWu}b(Q(4ti]J9W>:|3$zC24');
define('LOGGED_IN_KEY',    '8n]3}a$UAr]{%-x^r|Dt]|-LXAFX1l:90:sLK?/~D4,&E;`T$1eYI^1Nz2Wq3,*@');
define('NONCE_KEY',        '#g;h/k+]]rBEV-?0|#02[m|)-Mqi1p6.R~o cey_o:3(P{x!%PECst%nfeA$!kzN');
define('AUTH_SALT',        '~:+]o;=hO9jb%t+m!(!/B!UF#-E7]<b/.MJ%%5JY[vUMt+@RPe)hP ?^&1MIJ^lj');
define('SECURE_AUTH_SALT', '{iadQYnz2iBmye_-)GywBQ/+,=E/cHkXB;M|P/8uH-?1  ]4O+4 L%XTG$a0aEr6');
define('LOGGED_IN_SALT',   '7|.[B+OdCYlm%<F7tkc7vf*HU|{=3?PGDevPh3VXI-@{i_n>r]=1^#lZsVoo0Ptf');
define('NONCE_SALT',       'v67|a;fahKDRCurj$6%Ci7 e<:p]vw]1N{>rJyPqOwG(!d/?.ShE:jQN$FJM~ Xi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
