Jessica Alexandra Gaitan Aguila Codigo: SMSS042524
Julio Alberto Funes Alfaro Codigo: SMSS216923
Usuario: admin
Contraseña: 1234



1. ¿Cómo manejan la conexión a la BD y qué pasa si algunos de los datos son incorrectos?
La conexión a la base de datos se realiza utilizando la función mysqli_connect() de PHP, donde se especifica el servidor (localhost), usuario (root), contraseña (vacía) y el nombre de la base de datos (ugb).

En caso de que alguno de los datos sea incorrecto (por ejemplo, nombre de la base de datos o credenciales), la conexión falla automáticamente. Para manejar esto, se valida la conexión utilizando una condición que verifica si la conexión fue exitosa. Si falla, se muestra un mensaje de error y se detiene la ejecución del sistema.


2. ¿Cuál es la diferencia entre $_GET y $_POST en PHP? ¿Cuándo es más apropiado usar cada uno?
La diferencia principal entre $_GET y $_POST es la forma en que envían los datos al servidor:

$_GET: envía los datos a través de la URL, por lo que son visibles y tienen un límite de tamaño.
$_POST: envía los datos de forma oculta dentro de la petición HTTP, lo que permite mayor seguridad y envío de mayor cantidad de datos.

¿Cuándo usar cada uno?

$_GET: cuando se desea obtener información o realizar consultas (por ejemplo, mostrar datos).
$_POST: cuando se envían datos sensibles o formularios (por ejemplo, login o registro).

3. Riesgos de seguridad y cómo mitigarlos
Riesgos identificados:
Inyección SQL (ingreso de código malicioso en consultas)
Robo de información de usuarios
Acceso no autorizado al sistema
Contraseñas almacenadas de forma insegura
Medidas de seguridad implementadas o recomendadas:
Validación de datos en formularios (evitar campos vacíos o inválidos)
Uso de sesiones ($_SESSION) para controlar el acceso
Encriptación de contraseñas (aunque se usó MD5, se recomienda password_hash() para mayor seguridad)
Uso de consultas preparadas (prepared statements) para evitar inyección SQL

Tabla: estudiantes

| Columna        | Tipo de dato | Límite de caracteres | ¿Es nulo? | Descripción |
|---------------|-------------|----------------------|----------|------------|
| id_estudiante | INT         | -                    | No       | Identificador único del estudiante |
| nombre        | VARCHAR     | 100                  | No       | Nombre del estudiante |
| apellido      | VARCHAR     | 100                  | No       | Apellido del estudiante |
| correo        | VARCHAR     | 150                  | No       | Correo electrónico |
| telefono      | VARCHAR     | 15                   | Sí       | Número de teléfono |
| carrera       | VARCHAR     | 100                  | No       | Carrera seleccionada |

Tabla: usuarios

| Columna     | Tipo de dato | Límite de caracteres | ¿Es nulo? | Descripción |
|------------|-------------|----------------------|----------|------------|
| id_usuario | INT         | -                    | No       | Identificador del usuario |
| usuario    | VARCHAR     | 50                   | No       | Nombre de usuario |
| contraseña | VARCHAR     | 255                  | No       | Contraseña encriptada |
| rol        | VARCHAR     | 20                   | No       | Tipo de usuario (admin) |

