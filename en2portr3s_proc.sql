--
-- Procedure to add a person to table.
--
delimiter $
create procedure register_person(
        in fname varchar(36),
        in lname varchar(64),
        in email varchar(64),
        in phone varchar(16),
        in addr varchar(255),
        in birth date
    )
    begin
        insert into person(
            first_name,
            last_name,
            email,
            phone,
            address,
            birthdate
        ) values (
            fname,
            lname,
            email,
            phone,
            addr,
            birth
        );
    end $
delimiter ;

--
-- Procedure to update a person in the table.
--
delimiter $
create procedure update_person_info(
        in ident int
        in fname varchar(36),
        in lname varchar(64),
        in email varchar(64),
        in phone varchar(16),
        in addr varchar(255),
        in birth date
    )
    begin
	update person
	set first_name = fname,
            last_name = lname,
            email = email,
            phone = phone,
            address = addr,
            birthdate = birth
        where id = ident;
    end $
delimiter ;

--
-- Procedure to delete a person from the table.
--
delimiter $
create procedure unreg_person(in ident int)
    begin
	delete from person where id = ident;
    end $
delimiter ;

--
-- Procedure to retrieve the information of a person in the table.
--
delimiter $
create procedure show_person(OUT comentarios varchar(255))
    begin
	select * from person;
    end $
delimiter ;
