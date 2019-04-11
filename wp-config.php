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
define( 'DB_NAME', '3e' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY', '8!onM; 3a%{DjQU`);Ug([YY.+wKjZ3WEU*b(L+z8GP!zt:kSvR+J-Pa+@TT:vjE' );
define( 'SECURE_AUTH_KEY', ';nZXU$:)4Np+m:r%1JGdH+>(Et=t%mz5e(k<P-J<X`X91p(Ty`dKr1F!v;/q_@/ ' );
define( 'LOGGED_IN_KEY', '}Qk!na/esX6r9[cB`%FG[k0xV6c%9K8WFp<L;9uOVBdn{A:R]Yh$Vtc|:X=Fs_(K' );
define( 'NONCE_KEY', 'f9HDkJ{A=2 #lk_0Q Ii,myjXVYX:u7GPL`i8L=g+%oc}aA<V@`n?NUnh`,oBuig' );
define( 'AUTH_SALT', 'c(BW7PZv5m9ZZjYzUG+EBC$=@o:(=lwDsS?^*9R6!(BoV0I6%;wTG8Vk.1G2Q{It' );
define( 'SECURE_AUTH_SALT', '9w@cOMOJdE.zO}l`t`<A00Y8A,m>.{7{@9mOH9~9u,fe4=xXQPW-uY16RK.%e}Vi' );
define( 'LOGGED_IN_SALT', 's+g4RjG8p<IO(<,&G0AB7zT$-$(:1suV`GFJY~*(|kAT6R8hc^eXXC~GKzLa74Hc' );
define( 'NONCE_SALT', ':HTF|]cj!Hw3p=Q1Lf;&MAtdel{;vxUU2tbr.cg0mFXDA/P<~PC}2Lh!e#qv/<AQ' );

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

