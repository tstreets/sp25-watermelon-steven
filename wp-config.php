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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '<oC[/V{s:vjNww<:t?LAsvr%RgLC:J l+x`xmF.+chICYFX;K=M):hLJs18zEnK<' );
define( 'SECURE_AUTH_KEY',   'm(Tr-dG~/u|ktx~m}5E#=-8vCG1l8hKd<XS(,Z</sETJ)_NI6h gkj)<3P/R|u7u' );
define( 'LOGGED_IN_KEY',     'Q|b@ JTUm-ed,)CW[en/ufBf3VRo09+Z7e/pp2:<C.n:iA@P@&;N/lKu-MzWMKZ}' );
define( 'NONCE_KEY',         '*@Yg0VXA!z^}^)IgLw~wh:qsdIurgz]p)f<6n_SS2=4L:sK,{bgGCzYXpBSbR!5&' );
define( 'AUTH_SALT',         'iPV{<uCh/P.-5 $>M8GdLG_qtlha:#i >+~jVM_sfX<>]rZ-ZsN1R{+06X(m}jK?' );
define( 'SECURE_AUTH_SALT',  '5EGY|WEk=@r_mNvD4EGvtMi[0LTE3k w=D!O9dnb0bz-X-4Z+@~M2~l3%^dtv|J(' );
define( 'LOGGED_IN_SALT',    '@}<M_qK>:Cr+-[&?6Yrc7UUW+~)wM})>orrYl.#!GEC^%nqL!6o+zx[b>vma*51M' );
define( 'NONCE_SALT',        '|(`sHw{q5}&&dC7%^>]us_~YN_<=b6OM7NlXkU.^kF?E,8.-n5n<5H&E98%6VRhc' );
define( 'WP_CACHE_KEY_SALT', '!%k!~xDv#|ibdpodl2A?*zMNPO[/`<s&CZ0v?|~^cZ?Q]~kg&1q(W3hp:.[+E:~:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
