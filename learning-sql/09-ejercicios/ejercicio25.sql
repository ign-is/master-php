SELECT cli.nombre, (co.precio * e.cantidad) AS 'TOTAL GASTADO'
FROM clientes cli, coches co, encargos e 
WHERE cli.id = e.cliente_id AND co.id = e.coche_id; 

# CURSO RESULTADO #

SELECT ci.nombre, SUM(precio*cantidad) AS 'IMPORTE'
FROM clientes ci
INNER JOIN encargos en ON ci.id = en.cliente_id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY ci.nombre
ORDER BY 2 ASC;