##### Guía Ruby #####

Cabecera para los scripts de ruby, indica al compilador o editor que se trata de un fichero ruby
es recomendable ponerla siempre al inicio de los scripts.
#!/usr/bin/ruby

#################################
##### Instalación en Debian #####
#################################

# apt-get install ruby

Características:
-Casi todo es un objeto
-Son innecesarias las declaraciones de variables
-Las variables no tienen tipo
-La sintaxis es simple y consistente
-La gestión de memoria se realiza automáticamente

###########################
##### Consola de Ruby #####
###########################

$ ruby -v # Para saber mi version de Ruby

En mi caso sería: 
ruby 2.2.1p85 (2020-01-01 revision 58769) [x86_64-linux]

Por lo tanto, al entrar a la consola Ruby nos saldrá el intérprete

Abrimos un terminal y escribimos:

$ irb # Interactive Ruby Shell

2.2.1 :001 > # Este es el intérprete de Ruby lo que indica que ya podemos
# comenzar a escribir, se muestra la versión instalada (2.2.1)

Si no accede a la consola de Ruby es porque no esta instaladado o no
instaló correctametne.

Ctrl + D # Salir de la Consola

###############################
##### Comentarios en ruby #####
###############################

# Comentario de una línea

=begin
  Comentario
  de varias
  lineas
=end

'''
Comentarios
de Multiple
Línea
'''

##################################
##### Indentación del código #####
##################################

La indentación no es significativa pero es recomendable
hacerla para una mejor lectura del código.

#################################
##### Imprimir por pantalla #####
#################################

puts "¿Por qué estas aqui?" # Agrega una linea en blanco al final, como un fin de línea.

print "Esto es un sueño dentro de un sueño" # Imprime el texto normalmente, sin fin de linea.

print "Hola\nRuby\n3\n" # \n Salto de linea.

print "Hola\tRuby\t3\t" # \t Tabulación

###############################
##### Operaciones básicas #####
###############################

# Ruby permite hacer operaciones aritmeticas básicas

2 + 2

2 - 2

2 * 2

2 / 2

2 ** 2

#####################################################
##### Creación y ejecución de un script de ruby #####
#####################################################

Los archivos o los programas de ruby se guardan con la 
extencion (.rb)

Crear un archivo ejemplo.rb y dentro escribimos:

#!/usr/bin/ruby
print "Hola Ruby"
puts "Hola Ruby 2"

Guardamos como "ejemplo.rb" y para ejecutarlo hacemos un:

$ ruby ejemplo.rb # Se debe estar en el directorio del archivo o en su defecto.

$ ruby /home/user/ejemplo.rb # Le podemos pasar la ruta del archivo.

#####################
##### Variables #####
#####################

En ruby las variables no tienen tipos
Se pueden declarar variables sin especificar el tipo de dato que va a
almacenar, similar a Python.

mi_num = 25
mi_booleano = true
mi_booleano = false
mi_string = "Ruby"

En ruby, las cadenas son objetos pertenecientes a la clase String
¡no confundir con pertenecientes al tipo String!

##############################################
##### Mostrando el valor de una variable #####
##############################################

nombre = "David Webb" # Declaramos una variable y le asignamos una cadena
puts "#{nombre}" # Imprimimos el valor de la variable declarada y cargada
puts "Tu nombre es #{nombre}" # Imprimimos una cadena y a su vez el valor de la variable cargada

# Otro ejemplo

# Asignación de valores a las variables.
nombre = 'David Webb'
edad = 31
ojos = "marrón"
cabello = 'negro'

# Imprimiendo el valor de las variables.
puts "Mi nombre es #{nombre}"
puts "tengo #{edad}"
puts "mis ojos son de color #{ojos} "
puts "y mi cabello es de color #{cabello}"

##########################
##### Usando métodos #####
##########################

"David Webb".length # Nos sirve para contar la cantidad de caracteres de una cadena, como el metodo de JavaScript
#10

"David Webb".reverse # Nos mostrara el reverso de la cadena que escribimos
#"bbeW divaD"

"David Webb".upcase # Nos mostrara la cadena que escribimos en mayúsculas
#"DAVID WEBB"

"David Webb".downcase # Nos mostrara la cadena que escribimos en minusculas
#"david webb"

"Webb".downcase.reverse.upcase # Usamos 3 metodos en en una sola linea de código
# Convertimos la cadena a minusculas, luego la invertimos y hacemos que se transforme en mayusculas
# "BBEW"

---

#!/usr/bin/ruby
nombre = "David Webb"
puts nombre.reverse

############################
##### Capturando datos #####
############################

(gets) es el método de Ruby que obtiene datos de parte de los usuarios. 
Cuando se obtienen datos, Ruby agrega automáticamente una línea en blanco (o línea nueva)
después de esos datos; chomp elimina esa línea adicional.

(chomp) es un metodo que omite el fin de línea que se muestra al momento de imprimir
una variable

print "¿Cuál es tu nombre?" # Pedimos por pantalla al usuario que introduzca un dato
nombre = gets.chomp # Almacenamos el dato en una variable (nombre)

# Ejemplo:
print "¿Cuál es tu edad 1?"
edad1 = gets
puts "Tienes #{edad1} años"

print "¿Cuál es tu edad 2?"
edad2 = gets.chomp
puts "Tienes #{edad2} años"

----------

print "¿Cuál es tu Nombre? " 
nombre = gets.chomp

print "¿Cuál es tu Apellido? "
apellido = gets.chomp

print "¿Cuál es tu Ciudad? "
ciudad = gets.chomp

##############
##### if #####
##############

print "Entero, por favor: "
num_usuario = Integer(gets.chomp)

if num_usuario < 0
  puts "¡Elegiste un entero negativo!"
elsif num_usuario > 0
  puts "¡Elegiste un entero positivo!"
else
  puts "¡Elegiste cero!"
end

#####################
##### Funciones #####
#####################

Una funcion de suma...
Como vimos anteriormente, en ruby las variables no tienen tipos,
esto implica que al pasar variables a funciones, estas no necesitan tipo,
implica, además, que ruby tan solo se limita a ejecutar el método
llamado para un objeto, da igual cual sea éste mientras tenga ese método

def
  suma (a, b)
    a + b
end
puts suma(3, 3)
puts suma("hola", "mundo")

--- Otro Ejemplo ---

def
  fun1()
    puts ("cadena 1")
end
def
  fun2()
    puts ("cadena 2")
end
fun1
fun2
#print fun1
#print fun2

##################
##### Clases #####
##################

#!/usr/bin/ruby
# Hola mundo usando funciones y clases
class HolaMundo
  def initialize()
  end
  def saluda()
    puts "Hola Mundo" # Imprimimos el mensaje
  end
end

objeto = HolaMundo.new()
objeto.saluda
gets()

-----

#!/usr/bin/ruby
# Sumando dos cifras usando clases y funciones
class Operacion
  def initialize()
  end
  def SumaBasica()
    num1 = 23.6
    num2 = 7.4
    puts "La suma es:"
    puts num1 + num2
  end
end
# Creamos el objeto de la clase Hola Mundo
objeto = Operacion.new()
objeto.SumaBasica
gets()

###################################
##### Operaciones aritmeticas #####
###################################

#!/usr/bin/ruby
def suma (a, b)
    a + b
end
def resta (a, b)
    a - b
end
def multiplicacion (a, b)
    a * b
end
def division (a, b)
    a * b
end
puts suma(3, 3)
puts resta(10, 3)
puts multiplicacion(5,5)
puts division(100, 2)

# Operaciones aritmeticas pidiendo datos al usuario
#!/usr/bin/ruby
print "Dato 1: "
a = gets.to_i

print "Dato 2: "
b = gets.to_i

def suma (a, b)
  a + b
end
def resta (a, b)
  a - b
end
def multiplicacion (a, b)
  a * b
end
def division (a, b)
  a * b
end
puts suma(a, b)
puts resta(a, b)
puts multiplicacion(a, b)
puts division(a, b)


####################
##### Archivos #####
####################

#!/usr/bin/ruby
f = File.open("prueba.txt", "r")
f.each_line do |line|
  puts line
end
f.close
