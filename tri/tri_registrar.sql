/**El trigger para no incertar nombre de clientes con vacio*/
DROP trigger if EXISTS registrarNulos;

CREATE TRIGGER registrarNulos 
AFTER INSERT 
ON cliente 
FOR EACH ROW 
BEGIN 
INSERT INTO disparador (`pedido_n`, `id_detalle`) VALUES (NEW.id_order,NEW.id_order_detail)
END

delimiter //
CREATE TRIGGER registrarNulos 
BEFORE INSERT 
ON cliente
FOR EACH
ROW
BEGIN
    if(select nombre from inserted)= ''
    begin
        raiserror('No puede ingresar empleados en la sección "Gerencia".',16, 1)
        rollback transaction
        select 1 as errno;
    end 
    end if;
END;
//

delimiter ;