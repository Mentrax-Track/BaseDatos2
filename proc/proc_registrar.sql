/**El proc para no incertar producto con precio menor a 100 ni stock menor a 10*/
DROP PROCEDURE if EXISTS registrarProducto;

delimiter @

create procedure registrarProducto (in nom varchar(20), in pre int, in stock int)

  begin
    if (pre > 100  AND  stock >10)then 
            insert into producto (id,nombre,precio,stock)
                values(default,nom,pre,stock);
            select 0 as errno;
    else
        select 1 as errno;
    end if;
  end
  @

/*Procedimiento para verificar un CI existente*/
DROP PROCEDURE if EXISTS registrarCliente;

delimiter @

create procedure registrarCliente (in nom varchar(20), in apelli varchar(20), in cis int, in pass varchar(20))

  begin
    if not exists(select 1 from cliente where ci = cis)then 
            insert into cliente (id,nombre,apellido,ci,password)
                values(default,nom,apelli,cis,pass);
            select 0 as errno;
    else
        select 1 as errno;
    end if;
  end
  @



