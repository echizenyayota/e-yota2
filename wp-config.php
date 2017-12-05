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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eyota2_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f2.q9.i1_e-yota_2_mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dnby:3%1)Y)/E8nCkb::_jv-s)D0+Q||L[qA=zc90}_!nR_4?U9Jzux9~Wy_?!e@' );
define( 'SECURE_AUTH_KEY',  '-H7L|)!9ceW#0q.*ZrW8PMBowG?YkGs|khxs0AfN_)2s;wW/@&mwFg;+rkMDDHvj' );
define( 'LOGGED_IN_KEY',    'Nj=^<k~G+<@ixN:wT5yN7kPAS+;:k^35L|:GGjC#KFWPNsi/mnb,e>twrP69mL2w' );
define( 'NONCE_KEY',        'OD&FWBDmnWp~;3_Ky8EA{t,a4OT^I!|`30NbZy_stbGYr.K^IH0F(#x<Y5(W2IKa' );
define( 'AUTH_SALT',        'D0`=1K]oDKM4X1uv[WzTZ:]#]Ar#]D!|aIMu__fwB&3{gUim_ *eVufwTvj18U%b' );
define( 'SECURE_AUTH_SALT', '/9uCOLJ 2E~dppDUDLG09E<QaVx`67=[@7OL_2ks3ijEaDZLh.H=!TyLIT8,rzl-' );
define( 'LOGGED_IN_SALT',   'M3<ry1keL}awg*Lk`=|klkV [sj9@QdH61+VSux,`<`u.Q.~SC])b{9$Po@&(l//' );
define( 'NONCE_SALT',       '+yF<>h+OAEJV/d;(.rjH);7>9> ^dKmH=qPq@;A<,768uYw@HE#As8>4nW8Ic}&?' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
