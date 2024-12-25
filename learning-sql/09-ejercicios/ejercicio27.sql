SELECT cli.nombre, e.cantidad FROM clientes cli, encargos e WHERE
cli.id = e.cliente_id;


/* Solucion del curso, no sabe plantear los ejercicios */

SELECT c.nombre, COUNT(e.id) FROM clientes c 
LEFT JOIN encargos e ON c.id = e.cliente_id
GROUP BY 1;