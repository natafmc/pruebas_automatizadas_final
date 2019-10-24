<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('NOMBRE_SIS', 'tickET');
/* CONSTANTES DE EMPRESA*/
define('NOMBRE_EMP','Imagination STUDIO');
define('WEB_EMPRESA','www.iS.bo');
define('ENCABEZADO_TK','BIENVENIDO A ');
define('SUCURSAL_TK','SUCURSAL-01');
/* MAXIMO DE LLAMADAS*/
define('MAX_LLAMADAS', 3);
/* TIEMPO DE ESPERA ENTRE LlAMADAS EXPRESADO EN MILISEGUNDOS */
define('TIEMPO_ENTRE_LLAMADA', 15000);
/* DISPLAY TEXT */
define('BIENVENIDO_DISPLAY', 'BIENVENIDOS A '.NOMBRE_EMP);
/* CONSTANTES DE SISTEMA */
define('SIST_INC',1);
define('SIST_SEP','-');
/* ESTADOS DE REGISTROS */
define('EST_ACTIVO','activo');
define('EST_INACTIVO','inactivo');
/* ESTADOS DISPLAY*/
define('ON_DISPLAY_BLINK', 3); // MOSTRAR
define('ON_DISPLAY_FIN', 2); // SE FINALIZO, SE FUE
define('ON_DISPLAY_TRUE', 1); // MOSTRAR
define('ON_DISPLAY_FALSE', 0); // ESPERANDO
/* ESTADOS TICKETS */
define('TK_EST_1','1'); //recien imprimio
define('TK_EST_2','2'); // lo estan llamando
define('TK_EST_3','3'); // esta siendo atendido
define('TK_EST_4','4'); // fin atencion
define('TK_EST_5','5'); // derivado
define('TK_EST_6','6'); // SE FUE :(
/* ESTADOS DE ATENCION */
define('EST_LLAMANDO','1');
define('EST_INICIO_ATENCION','2');
define('EST_FINALIZADO','3');
define('EST_DERIVADO','4');
define('EST_SIN_ATENDER', '5');
/* ESTADOS DE OPERARIO */
define('EST_OPERARIO_LIBRE', 1);
define('EST_OPERARIO_ATENCION', 2);
define('EST_OPERARIO_PAUSA_INICIO', 3);
define('EST_OPERARIO_PAUSA_FIN', 4);
/*LEYENDA TICKETS*/
define('LEYENDA_TK','Conserve su ticket para cualquier reclamo. Ley 2018');
define('COPYRIGHT','Todos los Derechos Reservados &copy; iS, 2018');
/* MENSAJES*/
define('MSG_NO_TICKET','NO hay tickets para su atención');
define('MSG_MAX_LLAMADAS','Este ticket sera cerrado, cumplio el maximo de llamadas');
define('MSG_OK_TICKET','Ticket recuperado');
define('MSG_TK_INICIO_ATENCION', 'Atendiendo el ticket');
define('MSG_TK_FIN_ATENCION', 'Finalizado el ticket');
/* PATH PARA ARCHIVOS */
define('PATH_ICONO_CATEGORIA', 'public/imgs/categoria');
define('PATH_MULTIMEDIA_DISPLAY', 'public/multimedia/');
