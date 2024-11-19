# CONSULTA CON UNA CONDICION #
SELECT * FROM usuarios WHERE eamil = 'admin@admin.com';

/*
OPERADORES DE COMPARACION:
Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         is null
No nulo         is not null
Como            like
No es como      not like
*/

/*
OPERADORES LOGICOS:
O       OR
Y       AND
NO      NOT
*/

/*
COMODINES:
Cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/

# EJEMPLOS #

# 1. Mostrar Nombre y Apellidos de todos los usuarios registrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# 2. Mostrar Nombre y Apellidos de todos los usuarios QUE NO se registraron en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

# 3. Mostrar el email de los usuarios cuyo apellido contenga la letra A
#    y que contraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';

# 4. Sacar todos los registros de la tabla usuarios cuyo año sea PAR
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5. Sacar todos los registro de la tabla usuarios cuyo nombre tenga más de
#    5 letras y que se hayan registrado antes de 2020, y mostrar el nombre en mayus
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(FECHA) < 2020;


# Limit y order by
SELECT * FROM usuarios ORDER BY id; 
SELECT * FROM usuarios ORDER BY id ASC; 
SELECT * FROM usuarios ORDER BY id DESC; 
SELECT * FROM usuarios ORDER BY fecha DESC; 
SELECT * FROM usuarios ORDER BY fecha ASC;

SELECT * FROM usuarios LIMIT 1;
SELECT * FROM usuarios LIMIT 3;
SELECT * FROM usuarios LIMIT 0,2;
SELECT * FROM usuarios LIMIT 0,4;