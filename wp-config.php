<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'gailurra');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'mon');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'lur1');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '${dYcTf)oq 9FH&(WKMx=zF{iH,EIfM$n-}9)iK>J^ic]J8O|0U})M=p|B&40+Ij');
define('SECURE_AUTH_KEY', 'KR%:&,(87US0z?%[k]5-DD_C1@Tfc&.mux8CSA(x*>1x|h!& C,z_IR#=Uv.C$_}');
define('LOGGED_IN_KEY', 'iep<WeF=@HT@SK-+3xnXu$Nl)[d<Z:t]):fL(Cn/C|OzQ.#v6 ]b5f=}d) I(vi=');
define('NONCE_KEY', '+=xdOpyS9s/x&fk:,D6`%E&iYi$B-n]=Zt|^[vIK(e$-p1CQzj*G[(^89_VRCAl)');
define('AUTH_SALT', 'My.|ikQ6tEi+/FX;MwV+VFHGd0d)0i|^K;-I%c9VY}CQrHmPaEx<2I+jQ{}u=+HY');
define('SECURE_AUTH_SALT', 'c/pF Z#<GPxS7U*JD31E{?32UKK;8_3SgUkH9/W$_CsQn~}LI)wcyr>,g`Iq;ox&');
define('LOGGED_IN_SALT', 'PG9uCM-t/~iWYCm,DA,|#9%t/Ac;e*,UbLKxMInL[@iBJoa:jm#{.MR|$cKl;uzN');
define('NONCE_SALT', 'c0V6MW,g;3@n@g.Bf_%lVwJV?wuLpXVkX_>f;#WjLJBUc/wuyb be_!zA@D#_2%{');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

