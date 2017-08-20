## Crear WebService con dos endpoints​ :
1. Listado de productos :
  - a. Id
  - b. Código producto
  - c. Nombre producto
2. Detalle producto {id} :
  - a. Id
  - b. Código producto
  - c. Nombre producto
  - d. Descripción
  - e. Imagen
  - f. Listado categorías relacionadas
3. Listado de categorías :
  - a. Id
  - b. Nombre
4. Detalle categoria {id} :
  - a. Id
  - b. Nombre
  - c. Listado productos relacionados

-> Una categoría puede estar asociada a 0..N productos y un producto puede tener varias
categorías.

Para realizar esta prueba sería recomendable utilizar un framework de PHP
moderno (nosotros usamos Symfony) ( +4 punto extra)

Usar una base de datos como almacenamiento para el almacenamiento de datos.
(+1 punto extra)

Crear una forma sencilla para generar datos de prueba ( +2 puntos extra)

Testing ( +2 / 5 puntos extra)

## Crear página web con las siguientes funcionalidades :
1. Listar los productos disponibles
2. Pulsando en un producto en concreto se visualiza dinámicamente su detalle
(Descripción, Imagen y categorías relacionadas)

Sería deseable que la web sea adaptable a cualquier tipo de resolución y dispositivo
puedes ayudarte de cualquier librería o framework CSS. (+2 puntos extra)

Todas las llamadas para obtener los datos deberían ser ejecutadas de forma
asíncrona. ( +2 puntos extra)

Usar un preprocesador CSS ( +2 puntos extra )

Usar un gestor de tareas (gulp.js webpack ...) ( +2 puntos extra )

-> Si necesitas indicar alguna información adicional ( por ejemplo cómo podemos ejecutar la
aplicación localmente ) nos lo puedes incluir en un file README.md en la raiz de la carpeta.
