# API para gestion del CURP (Mexico) -curpAPI

Esto es lo que llevo hasta ahora, es mi intento por gestionar el CURP directo de la pagina de consultacurp de la RENAPO, si deseas contribuir bienvenido. 

- Ya intente generarla pero el incoveniente son los digitos verificados, que no hay una forma segura de hacerlo. Cotege lo generado con una bd verificada y coinciden muy pocos.

- Tambien con phython intente leer el capcha, pero no ha resultado muy eficiente.

- Asi que lo mejor que se me ocurrio es obtenerla directamente desde la pagina del gobierno.

### En el archivo curp.php, encontraras un abstracto para gestionar el curp a travez de variables en php, con esto podras semiautomatizar la gestion del curp. 
>Como te habras dado cuenta, el incoveniente por ahora es el captcha; sigo trabajando en eso.
![alt text](https://github.com/printepolis/curpAPI/blob/master/tuto%20(3).jpg)
* Me falta pasar a una variable toda la pagina y obtener solamente la linea del curp.

### En el archivo index.php, Esta una copia de la pagina original para gestionar el curp, tal y como la conoces desde siempre.
>Desde aqui tal vez te ayude, dependiendo la automatizacion que estas haciendo.
![alt text](https://github.com/printepolis/curpAPI/blob/master/tuto%20(1).jpg)


#### Mi opinion personal, es que la RENAPO, deberia de contar con una API oficial para que los desarrolladores pudieramos validar u obtener el curp, ya que es un buen dato para relacionar ya sea clientes, beneficiarios y otros, a nivel persona. En mi caso actualmente tengo una gran base de datos donde no todos llenaron su curp por x circunstancia y es necesario tenerla para dar el siguiente paso en la construccion de una aplicacion que esta en proceso.


comentarios y sugerencias estoy a sus ordenes:
Ing. J. Jose Pedraza | printepolis@gmail.com
