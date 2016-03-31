<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.dsiprr.0001.euc1.cache.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Wordpress');

/** MySQL database username */
define('DB_USER', 'Wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cjhdtidf9vsf.eu-central-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'rH)08Z4oUpiqd9{lOzRMw+ W&&UYHH&6+<X%]1=xzgWQbUH?Zp#GsL;^|?1[|8,o');
define('SECURE_AUTH_KEY',  '|U[)&( !CWwB,J(iGCJ`k !eIDis*%Nu.|_g|XlPJl:,-H-QrsY3jt8fQa>k_<AJ');
define('LOGGED_IN_KEY',    ')WD^+Yi-qC5N|qS>Z{+SusJBYCna;xv9@/A=GK+t%gMQf{NU9+$rlMu#<]%}wB(|');
define('NONCE_KEY',        'z8&ISx:kH4!.0tAW5mh?-2?n#j;!+#nCVNYxom3r{RMS4L~S+jg+U5f.v+in8<.t');
define('AUTH_SALT',        'QBH68L?kv{CZyhZ-V0Ax+RYLa}h;F1BNATE?_HG@2DrpP3=~41r7KX=xn +6FJ2h');
define('SECURE_AUTH_SALT', 'ajM0 8O23sI}Q8E,^46>|Y[:9{zGA<|x=%<t2t* JLuZ(bS*>f+C~gmFz/fR+9 q');
define('LOGGED_IN_SALT',   '|)9uZTewD_`RMtQcFg,K+M_IaXus~gIa&hm[g#dn:1/AZvG0{rwp`v^4*5,2H?Xj');
define('NONCE_SALT',       '0^>U;-^B[soK4hAA]`?m3t-jImErr02F#57hl;Hw^i>u-A1|;Df?=%iylorFPr%)');

/**#@-*/

/**
