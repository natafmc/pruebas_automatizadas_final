PROYECTO: TOMATURN
==================
BBDD: MySQL
LENGUAJE: PHP
FRAMEWORK: CODEIGNITER
TEST: libreria en el FrameWork "UNIT TEST" 
==================
1. Descargar el repositorio, y ubicarlo en xampp/htdocs
2. Crear la BBDD en Mysql, con el nombre "tk_ticket" e importar el sql ubicado en las carpetas del proyecto en: tomaturn/_sql/tk_ticket.sql

3. Si es necesario, modificar los archivos 
	tomaturn/application/config/config.php // configurar unicamente la base URL
	tomaturn/application/config/database.php // cambiar el user y pass de las variables de entorno

4. Configurado todo ingresa a: http://localhost/tomaturn/Turno/turnoTests
   vera las pruebas ejecutadas.
   Este Controlador es el core de toda la aplicacion, la cual consiste un sistema de ticket para un banco o un negocio que realize sus atenciones por turnos.
