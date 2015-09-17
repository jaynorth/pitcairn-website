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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_pitcairn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Y~veFKEmmYf1Z(1SnN#G5hB%EvD*FTZVd>2sNR5S]<l_o}Ti^Lu?W.5RHODeDLWo');
define('SECURE_AUTH_KEY',  'P1>8Hw@hc5|`6(sP- xq[oqxhAKyw*DG_{/~~+KE+@+n^?DaXBP^/zA@pYQGeYN=');
define('LOGGED_IN_KEY',    'B7&_^%5Yy>C;K1jk)HvTie+E}GYc`QUc<YS1*!1!j+Df`y(+U--W`21vWkVIRjFF');
define('NONCE_KEY',        'Ah+xX>;w0cO-kdM/e;BcfYF^;I<:2*$A2zO%J3ECQU*it5L>8_,$}[)={. +`DVh');
define('AUTH_SALT',        '@-c+@JK+M_SHLqbu_+Ud#X.y FhBpv!|coO|6?Qm$.0~v+ZD*I4XY_J1)Mn-j|+]');
define('SECURE_AUTH_SALT', 'W*|?{jro,G;_gso+UO{FAnF{_hhQ?;7a6Us$6l~ }&=6@Q6}8Juj!apc40WW}|Z.');
define('LOGGED_IN_SALT',   'eB_P.1%(agQZb4~9;GRt7oNe|fbfX9-7ZTm7sW_t~T7ihnaEeKw(_(O%,{FK`k];');
define('NONCE_SALT',       'y>pwd.Y-Bqz4Qa$fd+fS0+|6N-(kQ|lj-9$oQ_6J`Z{i>|9vydN4q3rWuK+Qo@?{');

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
