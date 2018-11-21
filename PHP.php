<!--  Guía PHP -->

##########################################################################
########## Instalar y configurar PHP 7.2 en GNU/Linux Debian 9  ##########
##########################################################################

$ sudo apt-get install apt-transport-https lsb-release ca-certificates
$ sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
$ echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list
$ sudo apt-get update
$ sudo apt-get install php7.2-cli

// Verificar la versión de php que se instaló.

$ php -v

PHP 7.2.3-1+0~20180306120016.19+stretch~1.gbp81bf3b (cli) (built: Mar  6 2018 12:00:19) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.2.3-1+0~20180306120016.19+stretch~1.gbp81bf3b, Copyright (c) 1999-2018, by Zend Technologies


##########################################################################
########## Instalar y configurar PHP 7.0 en GNU/Linux Debian 9  ##########
##########################################################################

# apt-get install php7.0

// Verificar la versión de php que se instaló.

$ php -v

PHP 7.0.27-0+deb9u1 (cli) (built: Jan  5 2018 13:51:52) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
    with Zend OPcache v7.0.27-0+deb9u1, Copyright (c) 1999-2017, by Zend Technologies

// Para usar con mysql y apache
# aptitude install php7.0-gd php7.0-mysql libapache2-mod-php7.0 php7.0-mbstring

###############################################
########## Instalar y configurar PHP ##########
###############################################

// Para usar con mysql
# apt-get install php5 php5-gd php5-mysql

// Para usar con postgresql
# apt-get install php5 php5-gd php5-pgsql

-Este cuando se va a usar apache: libapache2-mod-php5

// Una vez que se hayan descargado e instalado los paquetes de PHP, solo tienes que reiniciar el
servidor Apache para que el servicio esté disponible. Para hacerlo solo tienes que teclear los siguientes comandos:

/etc/init.d/apache2 restart

// Para probar que tu servicio esta trabajando puedes crear un pequeño archivo y verlo en tu navegador.
// Para hacer esto puedes teclear los siguientes comandos:

nano /var/www/testphp.php

// agrega las lineas siguientes

<?php
// Muestra toda la información, por defecto INFO_ALL
phpinfo();
?>

Para ver este archivo abre tu navegador web y teclea la IP de tu servidor seguido del archivo que acabas de crear, por ejemplo:

http://127.0.0.1/testphp.php // Si aparece la pagina azul pastel de PHP se instalo correctamente.

<!-- Comentarios en HTML -->

<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
        <script src="jquery-1.9.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
</body>
</html>

----------

<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
    </head>
<body>
<!-- Uso de lenguaje php usanto la etiqueta script -->
<script language="php">
    echo ("XXXXXXXXX");
</script>
</body>
</html>

<!-- Bloque de código php -->
<?php # Comienzo del código php
echo "xxxxx"; # Contenido del bloque
?> <!-- Final del código php -->

<?php
// Comentarios de línea en PHP

# Comentarios de una línea en PHP

/*
Comentario de varias
líneas, igual a C++
*/
?>

<?php // Inicio del bloque php

##################################
##### Operadores aritméticos #####
##################################

$a + $b //Suma las dos variables.
$a - $b //Resta las dos variables.
$a * $b //Multiplicación de las variables.
$a / $b //División entre las dos variables.
$a % $b //Módulo Resto de la división de $a entre $b -->

#####################################
##### Operadores de comparación #####
#####################################

$a == $b //Igualdad Devuelve true si $a y $b son iguales.
$a === $b //Identidad Verdadero si son iguales y del mismo tipo.
$a != $b //Distinto True si son distintos.
$a <> $b //Distinto True si son distintos.
$a < $b //Menor que Cierto si $a es menor que $b
$a > $b //Mayor que Cierto si $a es mayor que $b
$a <= $b //Menor o igual Correcto si $a es menor o igual que $b
$a >= $b //Mayor o igual Correcto si $a es mayor o igual que $b -->

####################################
##### Operadores de asignación #####
####################################

$a++ Incremento $a = $a +1
$a~ Decremento $a = $a -1
++$a Incremento $a = $a +1
~$a Decremento $a = $a -1
$a += $b Suma $a = $a + $b
$a -= $b Resta $a = $a - $b
$a *= $b Multiplicación $a = $a * $b
$a /= $b División $a = $a / $b
$a %= $b Módulo $a = $a % $b
$a &= $b Y $a = $a & $b
$a |= $b O $a = $a | $b
$a A= $b O exclusiva $a = $a A $b
$a .= $b Concatenación $a = $a . $b
$a >>= $b Desplazamiento a la derecha $a = $a >> $b
$a <<= $b Desplazamiento a la izquierda $a = $a << $b -->

############################
##### Tipos de valores #####
############################

$bool = TRUE; // un valor booleano
$str = "foo"; // una cadena
$int = 12; // un entero
echo gettype($bool); // imprime "boolean"
echo gettype($str); // imprime "string"

#####################
##### Variables #####
#####################

##### Guardar valores en las variables #####

$nombre="Olivier";
$apellido="Dacourt";
$edad=24;

#-----

// php nota la diferencia entre mayúsculas y minúsculas en la declaración de variables
$var = "Bob";
$Var = "Joe";
echo "$var, $Var"; // outputs "Bob, Joe"

#-----

// Declaraciones válidas e inválidas
$4site = 'not yet'; // invalid; starts with a number
$_4site = 'not yet'; // valid; starts with an underscore
$tÃƒÂ¤yte = 'mansikka'; // valid; 'ÃƒÂ¤' is ASCII 228 (Extendido)

################
##### echo #####
################

# Sirve para imprimir por pantalla
echo '$nombre <br /> $apellido '; // Las '' simples, permiten imprimir el contenido literal de caracteres que esté entre las comillas
echo "El autor de esta página es: "; //Las "" dobles, permiten incluir variables para imprimirlas junto al texto
echo ("$nombre $apellido de $edad años"); // Usando la forma echo() original de la función;
echo ("xxxx <br /> xxxxxxx");

#-----

$a=2;
$b=3;
echo $a + $b; //Imprime 5

#-----

$a=2;
$b="3";
echo $a + $b; //Imprime 5

#-----

$a=2;
$b="3a";
echo $a + $b; //Imprime 5

#-----

$a=2;
$b="a3";
echo $a + $b; //Imprime 2

##### Variables predefinidas #####

// PHP proporciona una gran cantidad de variables predefinidas a cualquier script que se ejecute.
// Algunas son:

$GLOBALS // Contiene una referencia a cada variable disponible en el espectro de las variables del script.

$_GET // Variables proporcionadas al script por medio de HTTP GET.

$_POST // Variables proporcionadas al script por medio de HTTP POST.

$_COOKIE // Variables proporcionadas al script por medio de HTTP cookies.

$_SESSION // Variables registradas en la sesión del script.

###########################
##### Suma de Enteros #####
###########################

$cifra1=7;
$cifra2=8;
$suma=$cifra1+$cifra2;
echo "La suma de $cifra1 y de $cifra2 es igual a: $suma";

####################################
##### Concatenación de cadenas #####
####################################

$cadenal = "Hola ";
$cadena2 = "Mundo";
$cadenal = $cadenal . $cadena2;
echo $cadenal;

#-----

$cadenal = "Troya es ";
$cadena2 = "madre de todos, ";
$cadena3 = "peleen por ella!";
$supercadena = $cadenal . $cadena2 . $cadena3;
echo $supercadena;
echo "<br />";
echo $cadenal . $cadena2 . $cadena3;

##### Sintáxis para múltiples líneas #####

$texto = <<<INICIO
Existe en PHP una forma más de introducir cadenas, aparte de las comillas,
muy recomendable para largos textos o un considerable conjunto de
etiquetas HTML. La sintaxis es muy sencilla y comienza con el operador
(<<<) seguido de una etiqueta que indica el principio del texto. Después
de esto podemos escribir un conjunto de caracteres muy numerosos y, para
finalizar, la etiqueta de fin. El ejemplo muestra cómo almacenar un formulario
en una variable:
INICIO;
echo $texto;

#-----

$texto = <<<INICIO
<h1>xxxx<h1>
<br />
<h2>xxxx<h2>
<br />
<h3>xxxx<h3>
INICIO;
echo $texto;

###################
##### if else #####
###################

$a=15;
$b=10;
if ($a>=$b) {
    echo ("Verdadero $a es mayor que $b <p>");
}
else {
    echo ("Falso $a es menor que $b <p>");
}

#-----

$dia=5;
if ($dia == 1) {
    echo "El día es Lunes";
}
else { if ($dia == 2) {
    echo "El día es Martes";
}
else {if ($dia == 3) {
    echo "El día es Miércoles";
}
else {if ($dia == 4) {
    echo "El día es Jueves";
}
else {if ($dia == 5) {
    echo "El día es Viernes";
}    
}
}
}
}

#-----

$day=1;
if ($day == 1) {
    echo "El día es Lunes";
} elseif ($day == 2) {
    echo "El día es Martes";
} elseif ($day == 3) {
    echo "El día es Miércoles";
} elseif ($day == 4) {
    echo "El día es Jueves";
} elseif ($day == 5) {
    echo "El día es Viernes";
}

#-----

$num=2;
$num2=4;
$num3=6;
echo "El numero mayor es: ";
if($num > $num2) {
    if($num > $num3) {
        echo $num;
    }
}
if($num2 > $num) {
    if($num2 > $num3) {
        echo $num2;
    }
}
if($num3 > $num2) {
    if($num3 > $num) {
    echo $num3;
    }
}

######################
##### Constantes #####
######################

/*
Una constante es un identificador para expresar un valor simple. Como el nombre sugiere, este
valor no puede variar durante la ejecución del script.

El nombre de una constante sigue las mismas reglas que cualquier etiqueta en PHP. Un nombre de
constante válido empieza con una letra o un caracter de subrayado, seguido por cualquier
número deletras, números, o subrayados

Se puede definir una constante usando la función define(). Una vez definida, no puede ser
modificada ni eliminada.

Solo se puede definir como constantes valores escalares (boolean, integer, float y string).

Para obtener el valor de una constante solo es necesario especificar su nombre. A diferencia de las
variables, no se tiene que especificar el prefijo $.

Las contantes y las variables (globales) se encuentran en un espacio de nombres
distinto. Esto implica que por ejemplo TRUE y $TRUE son diferentes.

Las contantes solo pueden ser definidas usando la función define(), nunca por simple
asignación
*/

define("CONSTANT", "Hello world.");
echo CONSTANT; // outputs "Hello world."
echo Constant; // outputs "Constant" and issues a notice.

#-----

define ("CONSTANTE","Contenido_constante"); // Definimos primero la constante y su contenido
echo CONSTANTE; // Hay que destacar que el signo de $ no hace falta ponerlo

#-----

// Agregando un texto largo y etiquetas html
define ("CONSTANTE","El lenguaje SQL permite la comunicación con el sistema gestor de base de datos. Fue desarrollado<br>
sobre un prototipo de gestor de b.d.d relacionales denominados system r<br>
Diseñado por IBM desarrollado en los años 70, alrededor del 1979 oracle corp. Presento la primera<br>
implementación comercial de SQL.<br>");
echo CONSTANTE;

##################
##### switch #####
##################

$dia = 7 ;
switch ($dia) {
    case 1:
        echo "El día es Lunes";
        break;
    case 2 :
        echo "El día es Martes";
        break;
    case 3 :
        echo "El día es Miércoles";
        break;
    case 4 :
        echo "El día es Jueves";
        break;
    case 5:
        echo "El día es Viernes";
        break;
    case 6 :
        echo "El día es Sábado";
        break;
    case 7:
        echo "El día es Domingo" ;
        break;
    default:
    echo "El día de la semana es incorrecto";
}

###############
##### for #####
###############

#Imprimir los números del 1 al 19
for ($x = 1; $x < 20; $x++) {
    echo "$x<br>";
}

#-----

#Imprimir los números del 1 al 9
for ($x = 1; $x < 20; $x++) {
    if ($x == 10) {
        break;
    }
    else {
        echo "$x<br>";
    }
}

#################
##### while #####
#################

#Imprimir los números del 1 al 10
$num=1;
while ($num <= 10) {
    echo $num . "<br />";
    $num++;
}

#####################
##### Funciones #####
#####################

function miFuncion() {
    $a = 6; // Declaración de variable
    $b = 11; // Declaración de variable
    $c = $a + $b; // Operación con las variables
    echo $c; // Imprimir el resultado
}
miFuncion(); // Llamado de la función

##### Variables globales y locales #####

$a = 6; // Variable global
$b = 12; // Variable global
function miFuncion() {
    global $a, $b; // Declaración de variables globales dentro de la función
    $c = 1; // Variable local
    $d = $a + $b + $c;
    echo $d;
}
miFuncion();

#-----

$a = 5; // Variable global
$b = 10; // Variable global
function miFuncion() {
    $c = $GLOBALS["a"] + $GLOBALS["b"]; // Declarando variables globales dentro de la función
    echo $c;
}
miFuncion();

##### Parámetros en una función #####

# Pasando valores por parámetros a una función
function miFuncion($x) {
    echo $x;
}
miFuncion(5);

#-----

# Pasando valores por parámetros a una función
function miFuncion($a,$b) {
    $c = $a + $b;
    echo $c;
}
miFuncion(3,9);

##### Consultar todas las variables predefinidas con phpinfo() #####

phpinfo();

###################################################
##### Argumentos por defecto de las funciones #####
###################################################

function capitales($Pais,$Capital = "Madrid",$habitantes = "muchos") {
    return ("La capital de $Pais es $Capital y tiene $habitantes habitantes.<br>") ;
}
echo capitales("España");
echo capitales("Portugal","Lisboa");
echo capitales("Francia","Paris","muchísimos");

##### Funciones matemáticas #####

echo sqrt(9); // Raíz cuadrada de 9 es 3
echo "<br />";
echo rand(1,20); // Número aleatorio entre 1 y 20
echo "<br />";
echo pi(); // Número pi

##### Obtener fecha actual del sistema #####

/*
a Imprime "am" o "pm" 
A "AM" o "PM"
h La hora en formato (01-12).
H Hora en formato 24 (00-23).
g Hora de 1 a 12 sin un cero delante.
G Hora de 1 a 23 sin cero delante.
i Minutos de 00 a 59.
s Segundos de 00 a 59.
d Día del mes (01 a 31).
j Día del mes sin cero (1 a 31).
w Día de la semana (0 a 6). El 0 es el domingo.
m Mes actual (01 al 12).
n Mes actual sin ceros (1 a 12).
Y Año con 4 dígitos (2004).
y Año con 2 dígitos (04).
z Día del año (0 a 365).
t Número de días que tiene el mes actual.
*/

echo date ("d");
echo "/";
echo date ("m");
echo "/";
echo date ("Y");

#----

echo "Fecha actual: " . date("d-m-Y") . "<br>";
echo "Día del año: " . date("z") . "<br>";

##### Comparación de cadenas #####

$cadenal = "Prueba";
$cadena2 = "Prueba";
if (strcmp($cadenal,$cadena2) == 0) { 
    echo "Las dos cadenas son iguales";
}

#----

$cadenal = "Prueba";
$cadena2 = "prueba";
if (strcasecmp($cadenal,$cadena2) == 0) { # strcasecmp no hace distinción entre mayúsculas y minúsculas
    echo "Las dos cadenas son iguales";
}

##### Sustitución de cadenas #####

$cadena = "Esta cadena tiene muchas letras";
$cadena = str_replace("Esta","Este",$cadena);
echo str_replace("cadena","conjunto",$cadena);

################
#### array #####
################

// Un array puede ser creado por la construcción de lenguaje array(). Ésta toma un cierto número de arejas clave => valor separadas con coma.

$matriz = array("foo" => "bar", 12 => true);
echo $matriz["foo"]; // Imprime bar
echo $matriz[12]; // Imprime 1

#-----

$arreglo = array(5,1,4,2,3);
print_r($arreglo); // print_r() Función que permite imprimir matrices o arreglos

#-----

# Declaración de un arreglo, imprimir el contenido del arreglo, por posición
$arreglo = array(5,1,4,2,3);
echo $arreglo[0]."<br />";
echo $arreglo[1]."<br />";
echo $arreglo[2]."<br />";
echo $arreglo[3]."<br />";
echo $arreglo[4]."<br />";

#-----

# Recorrer e imprimir el contenido de un arreglo
$arreglo = array(5,1,4,2,3) ;
for ($x = 0; $x <= 4; $x++) {
    echo $arreglo[$x];
}

#-----

// Array como mapa de propiedades
$mapa = array('version' => 5,
              'SO' => 'Linux',
              'idioma' => 'Español',
              'etiquetas_cortas' => true
              );
print_r($mapa);

#-----

// foreach() para recorrer matrices o arrays
$colores = array('rojo', 'azul', 'verde', 'amarillo');
foreach ($colores as $color) {
echo "$color <br />";
}

?> <!-- Final del código php -->

############################
##### Clases y Objetos #####
############################

--- Objetos --- 

Inicialización de Objetos

Para inicializar un objeto, use la sentencia new, lo que
instancia el objeto a una variable.

<?php
class saludo {
  function saludar() {
    echo "Hola esto es un saludo.";
  }
  function saludar2() {
    echo "Hola esto es otro saludo.";
  }
}
$objeto = new saludo; // Creando el objeto
$objeto->saludar(); // Llamando al método de la clase.
$objeto->saludar2();
?>

--- Clases ---

Una clase es una colección de variables y de funciones que acceden a esas variables.

<?php
class saludo {
  function saludar($cadena) { // Método de la clase que recibe una cadena como parámetro.
    echo $cadena; // Imprimiendo el valor recibido
  }
}
$objeto = new saludo; // Creando el objeto
$objeto->saludar("Esto es un saludo"); // Llamando al método de la clase y pasandole un valor como parámetro.
?>

----

<?php
/* Clase Calculadora con dos metodos para sumar y restar los valores recibidos por
parametros */
class Calculadora {
  function sumar($a,$b) {
    echo $c = $a + $b . "<br />";
  }
  function restar($a,$b) {
    echo $c = $a - $b;
  }
}
$object = new Calculadora;
$object->sumar(10,6);
$object->restar(10,6);
?>

############################
##### xampp en windows #####
############################

Los proyectos se copian en -->  xampp/htdocs/

Panel de administracion de xampp --> http://127.0.0.1/xampp/

En el navegador para ver los proyectos --> 127.0.0.1/name_project

Dashboard del PhpMyAdmin --> http://127.0.0.1/phpmyadmin/

----------

<!-- Guardar datos de un formulario en una variable -->
<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
    </head>
<body>
<form action="#" method="POST">
    Username: <input type="text" name="username"><br />
    <input type="submit" name="submit" value="Submit">
</form>
<?php
$username = $_POST['username'];
echo $username;
?>
</body>
</html>

----------

<!-- Cargar variables con datos de un formulario e imprimirlas -->
<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
        <script src="jquery-1.9.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>  
<form action="#" method="post">
  Cifra 1: <input type="text" name="a"/>
  <br />
  Cifra 2: <input type="text" name="b"/>
  <br />
  <input type="submit" value="Enviar"/>
</form>
<?php
   $a = $_REQUEST['a'];
   $b = $_REQUEST['b'];
   echo $a;
   echo $b;
?>
</body>
</html>

----------

<!-- Capturar datos desde un formulario y escribirlos en el documento -->
<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
        <script src="jquery-1.9.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
<form action="index.php" method="post">
    Cifra 1: <input type="text" name="cifra1" required>
    <p />
    Cifra 2: <input type="text" name="cifra2" required>
    <p />
    <input type="submit" value="Registrar">
    <input type="reset" value="Limpiar">
</form>
<?php
if (array_key_exists('cifra1',$_POST) and array_key_exists('cifra2',$_POST)
    and $_POST['cifra1']!="" and $_POST['cifra2']!="") {
        $cifra1=$_POST['cifra1'];
        $cifra2=$_POST['cifra2'];
        echo $cifra1."<p />";
        echo $cifra2;
}
?>
</body>
</html>

----------

<!-- Capturar datos desde un formulario y realizar operaciones con los datos -->
<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
        <script src="jquery-1.9.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
<form action="index.php" method="post">
    Suma de dos cifras:
    <p />
    Cifra 1: <input type="text" name="cifra1" required>
    <p />
    Cifra 2: <input type="text" name="cifra2" required>
    <p />
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpiar">
</form>
<?php
if (array_key_exists('cifra1',$_POST) and array_key_exists('cifra2',$_POST)
    and $_POST['cifra1']!="" and $_POST['cifra2']!="") {
        $cifra1=$_POST['cifra1'];
        $cifra2=$_POST['cifra2'];
        $resultado = $cifra1 + $cifra2;
        echo "El resultado es: ".$resultado;
}
?>
</body>
</html>

----------

<!-- Capturar datos desde un formulario y realizar operaciones con los datos, pasando valores por parámetro a una función -->
<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
        <script src="jquery-1.9.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
<form action="index.php" method="post">
    Suma de dos cifras:
    <p />
    Cifra 1: <input type="text" name="cifra1" required>
    <p />
    Cifra 2: <input type="text" name="cifra2" required>
    <p />
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpiar">
</form>
<?php
if (array_key_exists('cifra1',$_POST) and array_key_exists('cifra2',$_POST)
    and $_POST['cifra1']!="" and $_POST['cifra2']!="") {
        $cifra1=$_POST['cifra1'];
        $cifra2=$_POST['cifra2'];
        function miFuncion($cifra1,$cifra2) {
            $resultado = $cifra1 + $cifra2;
            echo $resultado;
        }
        miFuncion($cifra1,$cifra2);
}
?>
</body>
</html>

----------

<!-- Capturar datos de un formulario para realizar operaciones (suma y multiplicacion) pasando valores por parámetro a una función -->
<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
        <script src="jquery-1.9.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
<form action="index.php" method="post">
    Escribir dos cifras:
    <p />
    Cifra 1: <input type="text" name="cifra1" required>
    <p />
    Cifra 2: <input type="text" name="cifra2" required>
    <p />
    Escoja la operación:
    <select name="var_select">
      <option value="suma">suma</option>
      <option value="multiplicacion">multiplicación</option>
    </select>
    <p />
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpiar">
</form>
<?php
if (array_key_exists('cifra1',$_POST) and array_key_exists('cifra2',$_POST) and array_key_exists('var_select',$_POST)
    and $_POST['cifra1']!="" and $_POST['cifra2']!="" and $_POST['var_select']!="") {
        $cifra1=$_POST['cifra1'];
        $cifra2=$_POST['cifra2'];
        $var_select=$_POST['var_select'];
        if ($var_select=="suma") {
            function suma($cifra1,$cifra2) {
                $resultado = $cifra1 + $cifra2;
                echo "El resultado es: ".$resultado;
            }
            suma($cifra1,$cifra2);
        }
        else {
            function multiplicacion($cifra1,$cifra2) {
                $resultado = $cifra1 * $cifra2;
                echo "El resultado es: ".$resultado;
            }
            multiplicacion($cifra1,$cifra2);
        }
}
?>
</body>
</html>

----------

<!-- Calculadora básica en php, capturar datos de un formulario para realizar operaciones basicas pasando valores por parámetro a una función -->
<!doctype html>
<html lang="en">
    <head>
        <title>XXX</title>
        <meta charset="UTF-8">
        <script src="jquery-1.9.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
<form action="index.php" method="post">
    Escribir dos cifras:
    <p />
    Cifra 1: <input type="text" name="cifra1" required>
    <p />
    Cifra 2: <input type="text" name="cifra2" required>
    <p />
    Escoja la operación:
    <select name="var_select">
      <option value="suma">suma</option>
      <option value="resta">resta</option>
      <option value="multiplicacion">multiplicación</option>
      <option value="division">division</option>
    </select>
    <p />
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpiar">
</form>
<?php
if (array_key_exists('cifra1',$_POST) and array_key_exists('cifra2',$_POST) and array_key_exists('var_select',$_POST)
    and $_POST['cifra1']!="" and $_POST['cifra2']!="" and $_POST['var_select']!="") {
        $cifra1=$_POST['cifra1'];
        $cifra2=$_POST['cifra2'];
        $var_select=$_POST['var_select'];
        if ($var_select=="suma") {
            function suma($cifra1,$cifra2) {
                $resultado = $cifra1 + $cifra2;
                echo "El resultado es: ".$resultado;
            }
            suma($cifra1,$cifra2);
        }
        else { if ($var_select=="resta") {
            function resta($cifra1,$cifra2) {
                $resultado = $cifra1 - $cifra2;
                echo "El resultado es: ".$resultado;
            }
            resta($cifra1,$cifra2);
        }
        else {if ($var_select=="multiplicacion") {
            function multiplicacion($cifra1,$cifra2) {
                $resultado = $cifra1 * $cifra2;
                echo "El resultado es: ".$resultado;
            }
            multiplicacion($cifra1,$cifra2);
        }
        else {if ($var_select=="division") {
            function division($cifra1,$cifra2) {
                $resultado = $cifra1 / $cifra2;
                echo "El resultado es: ".$resultado;
            }
            division($cifra1,$cifra2);
        }
        }
        }
        }
}
?>
</body>
</html>

###############################################
##### El fichero de configuración php.ini #####
###############################################

El fichero de configuración (php.ini) es leído al arrancar PHP. En las versiones
en que PHP funciona como módulo de servidor, esto sucede únicamente cuando se
inicia el servidor. En las versiones CGI y CLI, esto ocurre en cada ejecución.

La ubicaión del fichero es /etc/php5/apache2/php.ini
