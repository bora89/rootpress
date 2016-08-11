<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_mdemo');

/** MySQL database username */
define('DB_USER', 'wp_mdemo');

/** MySQL database password */
define('DB_PASSWORD', 'EPF4Kzyhs4cRVL47');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'R}YIi.k}CG|y|6^OM=gs7b]!9f2)bP 57u-s-Z#0ySln>x#NM@V&ED^NLc03!bY#');
define('SECURE_AUTH_KEY',  '|tb%lyouo+Xwxix?6THaj+~-g9I1RJ&T}5u-0l7Nb0b`LK!5P+o5;,`3(!bG9+b|');
define('LOGGED_IN_KEY',    'zx X/tv2+/v5(l|lMYv6Nq,-Ts<1xsj*/e7,q<qt2(NNx|rl>Ee quK+x`_cz6G(');
define('NONCE_KEY',        'v(E^;!_d4](GS[sk5IwP:Lxz `@Dh+Q7>~yDrLH:=`LUO8V[h-:~?e#knZYG5_|-');
define('AUTH_SALT',        ',Xcf,-f+GkB:DrPeRm&=Wt:=a^> |^w>+Gvt) X)4|jYiI>D_|*y~x6jBE{=y-;m');
define('SECURE_AUTH_SALT', '^BTI,%@D_vA+-{ki=p+x0);T.-{/|VCPiJqS#~%PE/Z)DlUy$.*_`)(?JR5`@~XF');
define('LOGGED_IN_SALT',   'RmCii(Nd}dI]gi;poOeONAp9[{3{</^/8X]L7NjkMy- E3,LsvM_|HI_&Off1Vq/');
define('NONCE_SALT',       '|_`B.LGTBz<[(Zn.%~+p_N!zYE/{hngd.B3Z9.|a,+{o/Ip]]7lRA%9@:++|;$pO');


$table_prefix = 'wp_';





define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'demo.linnovate.net' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// StackSight start config
$ss_inc = dirname(__FILE__) . '/wp-content/plugins/stacksight/stacksight-php-sdk/bootstrap-wp.php';
if(is_file($ss_inc)) {
    define('STACKSIGHT_TOKEN', 'ss-d6502862bfcdb2813fdd71aa805c5b2bad47e71ec84275d360afc554518a0459');
    define('STACKSIGHT_DEBUG', true);
    define('STACKSIGHT_GROUP', 'michlala-ms');
    require_once($ss_inc);
}
// StackSight end config


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
