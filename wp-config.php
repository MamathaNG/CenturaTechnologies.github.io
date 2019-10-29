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
define( 'DB_NAME', 'Centura' );

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
define( 'AUTH_KEY',         'G_JDP6Oe jPg7A{&U[ksBrB:|~),KtSJH)OA,[sL_&}LHR?$-IO/G]W9s7tQr&4J' );
define( 'SECURE_AUTH_KEY',  '<%=(C$cGyh!_]3/mBVHl*[C|Zb8.=(3qn>as:*HPsOIQ@[hw=5bQ;WP<H`<?y(0b' );
define( 'LOGGED_IN_KEY',    '0:YT<T&A<m.:9MRQh@O]8?Od@W@GY?_D=~Xxj.>3+xfo:AuiGx9/Dj<9W}=hqQD&' );
define( 'NONCE_KEY',        '9w.g&S*bbf`m+7Z5QJG0+T@3U%}@Ld<,C1qllRWJq!crsh%Bt[9SC(H_Gm>3y8gE' );
define( 'AUTH_SALT',        '-JmxOy[F=o*f0<=@G7vDDuxR_Z.{YnU},yaDA#$QEG%Y;jj#S~KF9!MhGG]*sJV}' );
define( 'SECURE_AUTH_SALT', 'XCnZMT<==CgyV1075-M!)0U%L+sly3bSNdESQ_N}alYsU-(.!l[v_5 Ey`gb_zg^' );
define( 'LOGGED_IN_SALT',   '[GOszOY`{R=La0zV+eaU*O>|zcg/i;7Xz|~Tc6^NdNE8,M|!ob)E$:Zg48+Z)u,_' );
define( 'NONCE_SALT',       '<2r&)+z{MDk/0yJpOJbM,kUy*Z_=*-<JxVq`SVlP(*9.U%Ds._|3qj>X}BF{yb9@' );

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
