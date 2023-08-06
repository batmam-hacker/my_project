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
define( 'DB_NAME', 'word2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'gon?=K6>Vg8npk/sM*}sTapz(gk5SXn*f&Rqc7aHFeofUYvm5BgXpMz9^AdAw%}5' );
define( 'SECURE_AUTH_KEY',  '1xJ_WkXgM9SobX0<jN5i2%)t&jq4JWD!WMfB.B?g!TkvMI,}4fzl]DP}[T>!97Cd' );
define( 'LOGGED_IN_KEY',    'C5[.7zzKpC8qSro+?>.AjL5at{:edYhEcO<#D~Wrc#r~{{>+IQrf4O().q-~#5AI' );
define( 'NONCE_KEY',        'd2M826O5u?~1$8w (=-5y/^O|GWY(jwW1lR8,GQfviZSf_YvS67{k4V5_Ku]Ud)5' );
define( 'AUTH_SALT',        ';lwlUOxAmtTtx;2F:3zfb^sip{!n@JJUe-2)D%Po<HivFdw{yynV1,)$NbgJyr:z' );
define( 'SECURE_AUTH_SALT', 'Wfuj|}mS^@C5IBBU^.*3vl[&nqW>Y fqQ64F^j/jrAcP{H<yS?>VyqD-sk|2dJ=R' );
define( 'LOGGED_IN_SALT',   'dV;k>%m=~V8nH)_!v=2#_4U}9>kxjm07{[Jf@v3|x*D%zW8Un2koM;~B[lJB+D|*' );
define( 'NONCE_SALT',       '7W5*G:W;caUKpQs012`0.Cpx.S|v_>BKqtlEPbR&+Lel%VjHrea_S 3*boN`Pet<' );

/**#@-*/

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
