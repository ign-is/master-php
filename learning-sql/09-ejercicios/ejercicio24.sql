SELECT e.id, co.modelo, cli.nombre, cli.ciudad FROM encargos e
INNER JOIN clientes cli ON e.cliente_id = cli.id
INNER JOIN coches co ON e.coche_id = co.id
WHERE cli.ciudad = 'Barcelona';