SELECT * FROM grupos WHERE id =
    (SELECT grupo_id FROM vendedores WHERE sueldo =
        (SELECT MAX(sueldo) FROM vendedores));