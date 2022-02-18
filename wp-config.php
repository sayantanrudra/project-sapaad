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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project-sapaad' );

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
define( 'AUTH_KEY',         'M~PFza>DmXzq#qqvC95Uqf*]^zxdH*ceWFcT=KPC3)-*h)+tV7][uMS27Azw.-&e' );
define( 'SECURE_AUTH_KEY',  '{~e?x3-$Ma;5{s+U/v(!2/CY56iXPP,$9o/z#9^DqV*rlUhdef$dA@3#]l}YS<j-' );
define( 'LOGGED_IN_KEY',    's#^ZOOS`Az:3a}#Fo/v>yw7$~$O$KlpIHnp|z!2.=Lne2fuZ#_Mv902<UD9;8={r' );
define( 'NONCE_KEY',        '6wt&a]s m8F{{h0dnJQTr7MXP^T@51MPl^.Jk1I)0C?oeRQ#>%mZ;zu{xD5wqbi/' );
define( 'AUTH_SALT',        '|b|vR>s[lUr;]&fcJiYr4tf=6w.*`U%h(+~:c}a Q}o_BE%|]Oia6}~x Er4fLa8' );
define( 'SECURE_AUTH_SALT', 'oR],`0h3c/_UaC[N*w&<B}|9qI53W@MB>g!>{Kgh$%Jg=T{|2r1;<z6?sHP_b_)P' );
define( 'LOGGED_IN_SALT',   'x/C8H,%Ea;7>;e8:Z-p6;U?i@baj8i]&IeF9>-2qj&iT+DxOdJ(@5/d]S?M~`_jb' );
define( 'NONCE_SALT',       'PEJCoX&?X-Ugw.$6yRf~yQ.qc-+GAln<oTNU%OxH#;VX8+.;9#75O6fu}igWAZ)&' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
