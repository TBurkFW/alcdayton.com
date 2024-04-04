<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** Database username */
define('DB_USER', 'bn_wordpress');

/** Database password */
define('DB_PASSWORD', '%DATABASE_PASSWORD%');

/** Database hostname */
define('DB_HOST', '127.0.0.1:3306');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '_B?!6sJ+JW5Ub-|~c@=$FXU$gR7r!H9ex>Qsz*F_+{s}+sIz/k}ey $h9c9 <1[>');
define('SECURE_AUTH_KEY',  ',7_H4/@|FUEY qjn0<K/h0]&)E1Jxh~v+M8 v9{K8(zMFxC)Z<On|x!^,Yz,aR]+');
define('LOGGED_IN_KEY',    '_-ACPvKRlc(=L0d(3ryLZ*T<rFKHxAa8+z!5k!t7?R[e/ +BPLo$@?S&`~.COQjG');
define('NONCE_KEY',        'f-|+XE9+z^AM]-|6j1MM+^`z].~9ibHC<]-]!7|0N?O~QL;Oi#?:l{8y_;es,;d:');
define('AUTH_SALT',        '3-OeunE0U{zau~FqcEvjuFy00,MTcwgd-XKfxVGTRkM_b^~D&vBN0~FOq|mlE5%[');
define('SECURE_AUTH_SALT', '54gDxs<t-d|$!XX%m*Oa8&F)[9),uZIv6QT;>-^4V$C|_$=cg)Z?1!R90$B*8fn;');
define('LOGGED_IN_SALT',   '(Iliz@I&j$Vwip`[:VfS}/.(X xq-AT4hbSeJm-e?g:|x3g&(e+T.9mxU7ymqd:=');
define('NONCE_SALT',       '/M)Ukr?x>3qrzYQ-f,7M)?Aulp,|hUTobBYTWV=iq4a^gB/#gSg-c>S?,=Z$!&v@');

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('ENABLE_CACHE', true);

/* Add any custom values between this line and the "stop editing" line. */

$domain = "%DOMAIN%";
$fw_root = str_replace('/config', '', __DIR__);

define('WP_SITEURL', "https://{$domain}/wp");
define('WP_HOME', "https://{$domain}");
define('WP_CONTENT_DIR', "$fw_root/public/app");
define('WP_CONTENT_URL', 'https://' . $domain . '/app');

define('S3_UPLOADS_BUCKET', "faithworksuploads/$domain");
define('S3_UPLOADS_REGION', 'us-east-2');
define('S3_UPLOADS_KEY', '%AWS_KEY%');
define('S3_UPLOADS_SECRET', '%AWS_SECRET%');
// define('S3_UPLOADS_DISABLE_REPLACE_UPLOAD_URL', true);
define('AWS_ACCESS_KEY_ID', '%AWS_KEY%');
define('AWS_SECRET_ACCESS_KEY', '%AWS_SECRET%');

define('SMTP_USER', AWS_ACCESS_KEY_ID);
define('SMTP_PASS', '%SES_PASSWORD%');
define('SMTP_HOST', 'email-smtp.us-east-2.amazonaws.com');
define('SMTP_EMAIL', '%ADMIN_EMAIL%');
define('SMTP_PORT', 587);
define('SMTP_DEBUG', 0);

define('WP_AUTO_UPDATE_CORE', false);

require_once __DIR__ . '/../vendor/autoload.php';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', "$fw_root/public/wp");
}
define( 'FS_METHOD', 'direct' );
