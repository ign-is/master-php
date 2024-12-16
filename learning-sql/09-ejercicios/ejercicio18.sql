SELECT cli.id AS 'N cliente', cli.nombre, co.modelo, e.cantidad FROM clientes cli
INNER JOIN encargos e ON cli.id = e.cliente_id
INNER JOIN coches co ON  co.id = e.coche_id
WHERE co.modelo = 'Mercedes Ranchera';

# Lo que resolvio el del curso #

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id
    IN (SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));
