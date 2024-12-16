SELECT c.modelo, e.cantidad, cl.nombre FROM coches c
INNER JOIN encargos e ON e.coche_id = c.id
INNER JOIN clientes cl ON cl.id = e.cliente_id 
WHERE cl.nombre = 'Fruteria Antonia inc';

# Esto resolvio el del curso #
SELECT e.id AS 'N ENCARGO', cantidad, c.nombre, co.modelo, e.fecha
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN
(SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');