SELECT co.modelo AS 'COCHE', cl.nombre AS 'CLIENTE', SUM(e.cantidad) AS 'UNIDADES'
FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;