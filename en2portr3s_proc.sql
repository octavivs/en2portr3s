--
-- Procedure to add a person to table.
--
delimiter $
create procedure add_person(
        in first_name varchar(36),
        in last_name varchar(64),
        in email varchar(64),
        in phone varchar(16),
        in address varchar(255),
        in birthdate date
    )
    begin
        insert into clientes(
            nombre_cliente,
            apaterno_cliente,
            amaterno_cliente,
            fecha_de_nacimiento,
            fecha_de_inscripcion
        ) values (
            nombre,
            apaterno,
            amaterno,
            nacimiento,
            CURDATE()
        );
    end $
delimiter ;

--
-- Procedure to update a person in the table.
--
delimiter $
create procedure update_person_info(
        in id int,
        in nombre varchar(30),
        in apaterno varchar(30),
        in amaterno varchar(30),
        in nacimiento date
    )
    begin
	update clientes
	set nombre_cliente = nombre,
            apaterno_cliente = apaterno,
            amaterno_cliente = amaterno,
            fecha_de_nacimiento = nacimiento
        where id_cliente = id;
    end $
delimiter ;

--
-- Procedure to delete a person from the table.
--
delimiter $
create procedure borrar(in id int)
    begin
	delete from clientes where id_cliente = id;
    end $
delimiter ;

--
-- Procedure to retrieve the information of a person in the table.
--
delimiter $
create procedure mostrar(OUT comentarios varchar(255))
    begin
	select * from comentarios;
    end $
delimiter ;
