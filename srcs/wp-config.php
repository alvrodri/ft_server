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
define( 'DB_NAME', 'wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'alvaro' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'alvaro' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', '*,A>,#qQM9uAL#h59Deg {LfEKFw,o8!NNJ+:_Ac_6!gPL`kOr{$}2GVY;-#h82/' );
define( 'SECURE_AUTH_KEY', 'H-H_zLC^wl?9cj3cbIP6!E*![_L5B.1Xxy]Mp(i*(ejA@;+z,YS=I]1p*%]W]fr$' );
define( 'LOGGED_IN_KEY', 'q@CB@0D{C|1Vt]t)9t>vFvAU1r$|+^IO4Id9G[/^3a8-n([$E-R,TQ.t1Iu>)VHB' );
define( 'NONCE_KEY', 'kY!a`LeXFF*QtXK tLJB{apm3*e#Bn4D42-Ott*ToZV~F./4N^Lo|];CKi6wWJnQ' );
define( 'AUTH_SALT', 'xCfD=}R8Z=Azk_>sO*%9FOMHLbYpq(Z0cLWPa.hvKd<slU{$beHzx3$>&8~El6h~' );
define( 'SECURE_AUTH_SALT', '?zwd7GU{s84>t~K[rdY,9kfyu4:Qu]e_-1Tz~pKL ou&NHRhm@Po|)8fWIs2OP{4' );
define( 'LOGGED_IN_SALT', '}+WTXc^bdrgcsphhpUcUZ@]?sD?HNWuOUn TZLwSXuN K@y.lQR3q&tZvd,yM,^#' );
define( 'NONCE_SALT', 'DQ!6W7?$]9.y_3c3SwD,9JZAf}KP.:1`lRb#-;gIr|N~rrC?]H8/*+G=OkYcp? [' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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