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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'X{FU2E!B8*AN?}Xvs:zP>{AFTnifRaEUst6rFQ7UzW)*=5hs=m+/-RPC!)WoLi^K' );
define( 'SECURE_AUTH_KEY',  'knsHN:,+*hX9gLGF,2|.U6y[=5*xa#7Wb&iSI2<Pg9lFv.J(b_h /_C Z^CI448m' );
define( 'LOGGED_IN_KEY',    '3#><$|[^psW/=N@@c76I:E`%WD_W0$(_NZc0sgdcA$+{cLsJf|!b]TSLF2AgulXP' );
define( 'NONCE_KEY',        'O+[^2OfN(=#<K} EEcq9=)]7->9~u6 Y;a%v9k!elol8D1=~@Fnr.Mbg$@dvs8e&' );
define( 'AUTH_SALT',        'veCCRdZWjQtDb/5KEJGG2J(~GA5Ue*x 14Ui~(hs,X-|V72.,oDH?y3j=Ru%HxKP' );
define( 'SECURE_AUTH_SALT', '.; =/_ mLKs7U4w%p2fiY;+r2/Dj0rUp <j!i+Z>>ThXsNDi zz|bL~zn1-gv6=_' );
define( 'LOGGED_IN_SALT',   'Dm4}y~(Mm$<[7jC0Gc:%00L%?k&3_7Xf(TK_:-R4:(k}X)#n%<gFz]ai)XR><,5i' );
define( 'NONCE_SALT',       'VNrbM/3tg|0?d2~8K~u b~UrSwHVMHp<JGg!;?r=$h;V;m9r:%uiajFL0^HmZ8h<' );

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
