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
define('DB_NAME', 'wordpressDB');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'homestead');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY', '$~9GlOyER1R({lCuVL=CJ9rjqkS!L|$_q=X/NdDX!G1;Yr#*!gMa&KVAB[+(F1XQ');
define('SECURE_AUTH_KEY', '8YQ*3b?dZ4Umai|l?/seYV3%4qt4SD$3<4>+d m5(y6nsg4(Z1k~Jn5e3#PDh/fp');
define('LOGGED_IN_KEY', '+V<r#gfPx/f`UvaXs1ejT&%?C?>A3q_.k_#FqYkCs[$pMSP2gnSYs KOHiyJ{f Z');
define('NONCE_KEY', 'FwM+lc}^R$|^N?_Ia=a!lbZkuAV|R)}MgZ?Ej5iX~F`|W4OlZ{C*,}9T[wIa$}R2');
define('AUTH_SALT', 'z,:{}49hb_$ACcN|Imj e6US#8&X_^VO[{uVb4]$<Fx>^l:w#]n8VmJX)wfW!=LF');
define('SECURE_AUTH_SALT', 'ga/lz.F>sP 6ZtzJh./UI.mYz6IVFKpt@WgpRzLRn>*BVsSpMv?S!.0=@Eu2oeo ');
define('LOGGED_IN_SALT', 'QW?o]{u2q~A]Fh4zSvaBb*l<d/hgsB$uPUj^n*]LuGiyrJ!l5S$9}~M4B53YuJGR');
define('NONCE_SALT', ':$<m|IGtey  +jDh{/Z{/#(E:<EP+JmeueGJ/&hw`KU8JhE5FwKkaXm/yqUx(o_(');

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

