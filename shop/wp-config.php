<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** Database username */
define( 'DB_USER', 'adminadmin1' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '8:N,JZ+{/q(9tm[4[O6`XSYspbI7i,}/a75gSra!<UIpn%)@Pin*J2zr=+?:KiPW' );
define( 'SECURE_AUTH_KEY',  'MR_ttt#zfug{ 2dPo8A/Ow9JDRW6b)4&)1AGKm=.)-<V-iu5W2}ot5 Y-0g$@*ti' );
define( 'LOGGED_IN_KEY',    'c}*_]nxSml&3,0EQI`<i>GfEA~S1]X.5L,IMkvB?)k+2#!7(d(jTL=}.OlUXo2,7' );
define( 'NONCE_KEY',        'eR8M)JZkWJ%J{i^(eLYk@(UYvDP3#v }:@(ZC^XRCdW0FlNc}o;XWScN`TI,i@NF' );
define( 'AUTH_SALT',        'V<]M]`]Ce!VAHIzWGe*lCd(]t()S_9^1|Yfg]*68@Yj70=nb,Ol$7J>v$A|^-C6J' );
define( 'SECURE_AUTH_SALT', 'eW8(B5A3(n=E{YN9TtOb>h!Vx`[s7#n;!m*^:7I~x6,x$Sj!9q$UF6>KkyQDjW!:' );
define( 'LOGGED_IN_SALT',   '0o*_Yhs>{nXr8Uqm,GVD#W:?5QSgq]i*8 K6R@8,;,*zyK&-H^{.n[SRW,uO,dbi' );
define( 'NONCE_SALT',       '.w- sAE$;XV;^,2kB(^]5O+nTyZt~wQS8V?v0:,ua}z:8j+c!x2M/O)i%AU0vK,g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
