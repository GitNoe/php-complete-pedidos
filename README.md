# Ejemplo de Aplicación Completa en PHP

Este ejemplo desarrolla una aplicación web para realizar pedidos, uniendo elementos de capítulos anteriores, usando una base de datos ("pedidos") ya hecha y siguiendo una metodología en cascada, llevando a cabo las fases de análisis, diseño e implementación.

Tras la lectura del capítulo 4 del libro, donde se explica en detalle el proyecto, su diseño lógico y físico, sus elementos, su control de acceso, etc., se procede a la creación del proyecto (en blanco) en laragon y de los ficheros que siguen:

- login.php (html + php)
- logout.php (no venía código pero se ha hecho php)
- sesiones.php (php)
- categorias.php (html + php)
- cabecera.php (html)
- productos.php (html + php)
- carrito.php (html + php)
- anadir.php (php)
- eliminar.php (php)
- procesar_pedido.php (html + php)
- bd.php (php: funciones)
- correo.php (php: funciones)

Como se puede ver hay una serie de archivos con puro php que se componen básicamente de funciones de la aplicación, mientras que los que tienen php y html servirán como front-end cuando se complete el proyecto. La implementación de código en todos estos archivos se ha hecho siguiendo el orden y el contenido del capítulo, y también se han añadido estos adicionales para la configuración de la base de datos:

- configuracion.xml
- configuracion.xsd

Como tenemos un archivo "correo.php" que tendrá la función de enviar emails, necesitamos instalar una librería que se ocupe de los detalles del formato. En este caso usaremos phpMailer, instalándola con el comando composer ("composer require phpmailer/phpmailer"). Esto nos crea directamente los archivos composer.json y composer.lock, así como la carpeta vendor donde irán todas las dependencias que añadamos al proyecto.

Posteriormente también instalamos bootstrap ("composer require twbs/bootstrap") y referenciamos los archivos con links en los "head" de las partes html de las que disponemos. Esta librería es extensa y nos deja un layout general, pero es necesario implementar las referencias y, en ocasiones, un css personalizado. Herramientas utilizadas para esto:

- [Bootstrap](https://getbootstrap.com/)
- [cssgradient](https://cssgradient.io/)
- [Codepen](https://codepen.io/)

También se han realizado cierta tareas de organización y mejora de código mediante:

- Reestructuración de los archivos en directorios según sus funcionalidades (con los consecuentes cambios en la rutas de todos los links dentro de los archivos).
- Creación de un index.php que nos abre el login.php (sin él saldría el árbol de directorios, no la página).
- Creación de un pie.php como footer de las páginas.
- Creación de un .gitignore para que no se suban las dependencias (vendor) al repositorio online.

## Apuntes

- La aplicación funciona en los siguientes niveles:
  - Login con usuario y clave
  - Menú superior navegable
  - Salida por pantalla de las páginas de productos
  - Logout que devuelve a Login

- Lo que no funciona:
  - El botón "comprar" realiza la función de "cargar_productos", pero no muestra lo que se ha seleccionado sino que entiende que "No hay pedidos" y nunca se ve la tabla de productos comprados. Se ha repasado el código y comparado con uno que sí funciona y no se han encontrado diferencias.
