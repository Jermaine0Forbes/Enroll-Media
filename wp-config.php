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
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'FS_METHOD', 'direct' );

define('RELOCATE',true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

 define('AUTH_KEY',         'HuJ-a4nJm.8y&-;rW+3FEy5u%pZ,`+Z1O0kDM[q8eyXoI[R!7[e=V>+/1N-I%Z`2');
 define('SECURE_AUTH_KEY',  'f.+wf7-x>BZ05/<HU| J?5L6jL:%8MALd2UC^+xFH-6TB`>V:A3?yxc1+;oA&4wf');
 define('LOGGED_IN_KEY',    'Sij~EC2:DLJPm7+V02e;;No^9+v+[^-lR%Lr |]^LViMJ A_w+!WZ|pK!N%A50#~');
 define('NONCE_KEY',        ')o3xi3s+;:@jSRM*gI#RD(lYTwHRaZD7XBR|>m*0fuO0t!/IuK.@Mt]wNh DPPz;');
 define('AUTH_SALT',        '[f~&Y@n(LbP0-.~*M?{2Yv8Y1kG[].-{^%)RR|{4[`wA5Kzh.oL:rP|n=AZM,Kb/');
 define('SECURE_AUTH_SALT', 'i%d~fCFTcjn:e+n9X],s%}keh,uY`*hdR;d(qrUd@29.tbOK-|=xNO~k8^PL<gK1');
 define('LOGGED_IN_SALT',   '3/.JKtl=Qmi-urS-U#jIF%[i4H*HCy1?6[yX_Ln>U!NgrhWv5f!t<6Nm~Cd5OV47');
 define('NONCE_SALT',       'a=MS|Jy|@~pqcXyj3+M]]cjN_B,ZGGE?cnz^1-_tU|>92A^*KmNg hX+-y|+txi/');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
