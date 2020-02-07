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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressUser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qawsedrf123!' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '{?IV3N{$a-7g:mX %A35d#3MF]V6{e$SF>R.-2g$HXd=jOtL3l4zg[ </]`gj:m-' );
define( 'SECURE_AUTH_KEY',  '3YbV964=sG0,YBM!nb422:;fA;FkH|K#}*@u!0DGX$E)]~!NiO`2{n^yMBB5l*N_' );
define( 'LOGGED_IN_KEY',    'uAamJ.:hKsBNlRu4#6&eJCQ^ihyn8-OxM)n?bR>6XEzkG3XOO FCUo-*Io%_n{+7' );
define( 'NONCE_KEY',        'KY&<ZW:sV=TtlhcGE7>B%=w~QbDh0nh{/)7w$ 5w.~KHn=7?<~4/=5fi>I<n=T;*' );
define( 'AUTH_SALT',        '`of8nz@ .K[B+i).r*w[_YJkLOVV|hiG#Sz:Pmdv0`As_.u-F)6O!zCHZnqVoM6h' );
define( 'SECURE_AUTH_SALT', 'HsB-0pw$#oT>](JCVeb:3QII,GjL03g<dLEk28+3p2{ht7.N5i8ZYrW~41JtLR#T' );
define( 'LOGGED_IN_SALT',   '(a#j8&]s>Qd3KRa9X*C!k2d16qw!3C8CansJ?ksWW*I|zDgKrUC)Cd-O0i?G=vQe' );
define( 'NONCE_SALT',       '&b;gL2`{x?&}?4%@R[8WK^Qe%%Ti`n>e9Kq~,OB5pd.=TD.+d@iVMG<0d^oL-]gv' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
