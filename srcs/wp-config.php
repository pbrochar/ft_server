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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dqfQsJbKrws;8xm=`L<9%i ;#.A=!I+w4#0U!:0A&<.BzNq($f7 56|O7#]$>:7)' );
define( 'SECURE_AUTH_KEY',  ' eJm] h1oqDsI!Av-;6p:vNRJe@cJs_qb4^v-I#*c(PE`Dqnn .;6Pv%YMH._wx*' );
define( 'LOGGED_IN_KEY',    '3hv@1+/Kwug&Y6Q~kN%UpEH#4y-OhmauiZ1GX0J8K9i58 Swumi?%st>`{-/{.?I' );
define( 'NONCE_KEY',        '0c.Y,X8f=2 ur&:>uV0^ g)+D|UtiqQ`({)/92HBvw%o6g$N;]PtaHC3NQ}sBQLx' );
define( 'AUTH_SALT',        '6kN/)M6s%w*F9uJ&_#-faK @z(PMc;6F?/.nFq](F-9u0D+=?M-MZ ~LbYB:N0G]' );
define( 'SECURE_AUTH_SALT', '1s@v8IXH#D|Nb(l$3=,B}mi|{^ej(ETeNF]]w%Y.*fN#gGmT{O;_>(2,Q1/h8n` ' );
define( 'LOGGED_IN_SALT',   '|/W3ge6n~|U5Cu=:/;H5PiP`N,2J/hR}|!hi,K=i=syDjLD8.+Mgm@O*Tuz?)F$5' );
define( 'NONCE_SALT',       '#c>vVz&opmpB/xD=JsmMh|y!]{Y4lJt(5=o87@Q^qGt{]/_~rYD-r2[`m&t%;tS,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';