--
-- Procedure to add a person to table.
--
DELIMITER $
CREATE PROCEDURE register_person(
    IN fname VARCHAR(36),
    IN lname VARCHAR(64),
    IN email VARCHAR(64),
    IN phone VARCHAR(16),
    IN addr VARCHAR(255),
    IN birth TIMESTAMP
)BEGIN
    insert INTO person(
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
END $
DELIMITER ;

--
-- Procedure to update a person in the table.
--
DELIMITER $
CREATE DEFINER='n2x3_user'@'localhost'
PROCEDURE update_person_info(
    IN ident INT
    IN fname VARCHAR(36),
    IN lname VARCHAR(64),
    IN email VARCHAR(64),
    IN phone VARCHAR(16),
    IN addr VARCHAR(255),
    IN birth TIMESTAMP
)BEGIN
    UPDATE person
    SET first_name = fname,
        last_name = lname,
        email = email,
        phone = phone,
        address = addr,
        birthdate = birth
    WHERE id = ident;
END $
DELIMITER ;

--
-- Procedure to delete a person from the table.
--
DELIMITER $
CREATE PROCEDURE unreg_person(IN ident INT)
BEGIN
    DELETE FROM person WHERE id = ident;
END $
DELIMITER ;

--
-- Procedure to retrieve the information of a person in the table.
--
DELIMITER $
CREATE PROCEDURE show_person(OUT info VARCHAR, IN ident INT)
BEGIN
    SELECT * FROM person ;
END $
DELIMITER ;
