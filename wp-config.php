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
define('DB_NAME', 'puriwirata');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'CU|;k(Cq1^`QDh6Ix/U0P*2<V%X0|y)!`p$-`_Ns,No2kq#SXOx.hy[34.3N4 &(');
define('SECURE_AUTH_KEY',  'x}G~3Mp>$cq|ZR+%{P3Nti/F?_AFn|>0vwE1FsZFX$[%zxh3q=1X/,VJR 2dVNC>');
define('LOGGED_IN_KEY',    'V=R~v-^m]HSEJn_xnYBnk>R7PDe+I&q}~TeTCb<|FBWO4y-~%GU8fysbd$LR{,M4');
define('NONCE_KEY',        '>]Zl|>,qcZy4l}CQn0~,w>vA;_eo)NBJBC=zdecGTw?RU*n1RFle_x_N.]-++Q4q');
define('AUTH_SALT',        ']jdt2r_cx~0s cuvNAINGtXu+|na)4/,={BZ(<?[@NqXVW9U?= ?`Xle2ZF(c*DG');
define('SECURE_AUTH_SALT', 'Mcw@x@N9] RvNPD!j%Z|qhpKNOW2MV#Q]CwF*k^20YgykEB*qDE|h&bl8#@xEHst');
define('LOGGED_IN_SALT',   'FR=zGp-wr/mftp~_+I<aoBnFocb~*g-i JNQ:b:oI}H:3oPDa>Wj)Yn`dD}G){Y=');
define('NONCE_SALT',       'iTGb-+d_EhI84q$?ivk-{*:W9fuW34Iu(<x/:O`2]ohElYI|HR2nfM<)}Lo)Q%& ');

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
