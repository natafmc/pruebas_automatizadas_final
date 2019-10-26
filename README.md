PROYECTO: TOMATURN
==================
BBDD: MySQL
LENGUAJE: PHP
FRAMEWORK: CODEIGNITER
TEST: libreria en el FrameWork "UNIT TEST" 
CUCUMBER: directorio /cucumber-test 
        NodeJS(cucumber, selenium-webdriver, geckodriver, chromedriver, assert)	
==================
La aplicacion es un dispenser de ticket (parecido a los ticketeros de los bancos), incluye el admin, el display y el generador de tickets se llama "TickET", es un trabajo que desarrolle en colaboracion con un compañero de trabajo
1. Descargar el repositorio, y ubicarlo en opt/lampp/htdocs/
2. Crear la BBDD en Mysql, con el nombre "tk_ticket" e importar el sql ubicado en las carpetas del proyecto en: /_sql/tk_ticket.sql
3. Si es necesario, modificar los archivos 
	/application/config/config.php 
    Modificar la variable $config['base_url']
	/application/config/database.php 
    Modificar las varaibles: hostname, username, password, database si es necesario

4. Configurado todo ingresa a: http://localhost/pruebas_automatizadas_final/Turno/turnoTests
   vera las pruebas ejecutadas.
    1. INDEX - ZONAS ACTIVAS: Obtender el array de zonas activas
    2. countNroLlamada: Contador de llamadas por ticket
    3. DISPLAY TEST: Mostrar ticket siguiente en pantalla
    4. GET NEXT TICKET: Obtener el siguiente ticket(aun sin logica poruque el proyecto se paro...)
    5. DERIVAR TICKET: Deriva un ticket de una zona a otra

   Este Controlador es el core de toda la aplicacion, la cual consiste un sistema de ticket para un banco o un negocio que realize sus atenciones por turnos.
5. TEST CUCUMBER
 Abrir una terminal en el directorio raiz del proyecto, posteriormente 
 $ cd cucumber-test
 Instalar dependencias, si es necesario
 $ npm intall 
 Ejecutar test
 $ npm test
 TEST:
  1. Ingreso al sitio y verificacion del Title
  2. Logueo de Admin
  3. Impresion de ticket del tipo Caja


