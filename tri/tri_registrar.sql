/*Trigger para audtoria a los clientes eliminados */
CREATE OR REPLACE TRIGGER trigger_auditoria_clientes 
AFTER DELETE 
ON cliente 
   FOR EACH ROW
   INSERT INTO auditoria_cliente(nombre, apellido, usuario, modificado )
   VALUES (OLD.nombre, OLD.apellido, CURRENT_USER(), NOW() );

/*Trigger para audtoria a los clientes editados */
CREATE TRIGGER clientes_actualizados
AFTER UPDATE 
ON cliente 
   FOR EACH ROW
   INSERT INTO cliente_actualizado(nombre, apellido, usuario, modificado )
   VALUES (OLD.nombre, OLD.apellido, CURRENT_USER(), NOW() );


/*trigger para que controle que el precio de un producto es nulo*/
delimiter $$
create trigger control_direccion 
after insert 
on producto
for each row
begin
  if((NEW.precio)is null)then
    delete from producto where id=NEW.id;
  end if;
end
$$

insert into producto values(11,'celulares',null,12);
insert into producto values(11,'celulares',50,12);

select * from producto;

/*para que controle el stock de un producto*/
delimiter $$
create trigger control_stock 
after insert 
on producto
for each row
begin
  if((NEW.stock)<1)then
    delete from producto where id=NEW.id;
  end if;
end
$$

select * from producto;

insert into producto values('televisores',23,0);



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




delimiter $$
create trigger control_nulos 
after insert 
on cliente
for each row
begin
  if((NEW.nombre)='')then
          raiserror('El nombre esta vacio asnito', 16, 1)
          rollback transaction
  end if;
end
$$