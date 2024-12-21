SELECT co.marca, cli.nombre, e.cantidad 
FROM coches co, clientes cli, encargos e
WHERE co.id = e.coche_id AND cli.id = e.cliente_id;

#LO QUE RESOLVIO EL CURSO#

SELECT e.id, co.marca, c.nombre FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id;
