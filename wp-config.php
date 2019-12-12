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
define( 'DB_NAME', 'testing123_db' );

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
define( 'AUTH_KEY',         'mJP,1+@)~Z8fkGG0Mtqv|2<)d_q3lSr[Xot[YP?t1uiNcJ!_a[^riXlkf%EKm dz' );
define( 'SECURE_AUTH_KEY',  '<98e`+<.nQL63mWnqM/VqL4cKF4kbL]g!Zkp_excTXr2PiSck{ 20cI7T2Pli#4h' );
define( 'LOGGED_IN_KEY',    'R>v@#LBiIk?,j#Q{#U5c/<_J*8wq9xIZ.[tNX~{vYCi4ZKsHKO7R$byo6qlc_*hN' );
define( 'NONCE_KEY',        'w%1K%{(qieo>{=n-!/0T6ON%A73t0Lza&b6Y4h!UI5Lx_qWR=U?0b@N ldJ1KGD0' );
define( 'AUTH_SALT',        'z)(VQVV@/4Ra2*#2zSmq]5kUK[$wr?[z(KLX;qUD@W=;D :2r,u|:yy]Y{`+q1}X' );
define( 'SECURE_AUTH_SALT', '-8yEd/4OgH7J&>_)|z~ry^ni|70k|8_tfhn|Ra&Bk#[}c$DE][cG; zy6:t* h`l' );
define( 'LOGGED_IN_SALT',   '[(:^kYlbh:N%Ro {M4~8@NFH]A^p3UE<pg!HfR^T%qhz>MSRt5&^pkg7x<|Rj,=l' );
define( 'NONCE_SALT',       '-o19N^jo4FyeD>sCS:V[vL&x[r-2 j%lC:|*U*~f1Pj{HsFAQeWkT_a,^yhQINLb' );

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
