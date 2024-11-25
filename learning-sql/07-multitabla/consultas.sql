/* 
 CONSULTA MULTITABLA:
Son consultas que sirven para consultar varias tablas en una sola sentencia
 */

#Mostrar las entradas con el nombre del autor y el nombre de la categoria#

SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

#INNNER JOIN#
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;