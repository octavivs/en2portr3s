--
-- Procedure: registration of people's personal data in the database.
--

DELIMITER $
CREATE DEFINER = 'n2x3_user'@'localhost' PROCEDURE register_person(
    IN fname VARCHAR(36),
    IN lname VARCHAR(64),
    IN email VARCHAR(64),
    IN phone VARCHAR(16),
    IN addr VARCHAR(255),
    IN birth TIMESTAMP
) SQL SECURITY INVOKER
BEGIN
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

-- --------------------------------------------------------

--
-- Procedure: updates people's personal data in the database.
--

DELIMITER $
CREATE DEFINER = 'n2x3_user'@'localhost' PROCEDURE update_person_info(
    IN ident INT(10),
    IN fname VARCHAR(36),
    IN lname VARCHAR(64),
    IN email VARCHAR(64),
    IN phone VARCHAR(16),
    IN addr VARCHAR(255),
    IN birth TIMESTAMP
) SQL SECURITY INVOKER
BEGIN
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

-- --------------------------------------------------------

--
-- Procedure: deletes people's personal data in the database.
--

DELIMITER $
CREATE DEFINER = 'n2x3_user'@'localhost' PROCEDURE unreg_person(
    IN ident INT(10)
) SQL SECURITY INVOKER
BEGIN
    DELETE FROM person WHERE id = ident;
END $
DELIMITER ;

-- --------------------------------------------------------

--
-- Procedure: retrieves people's personal data from the database.
--

DELIMITER $
CREATE DEFINER = 'n2x3_user'@'localhost' PROCEDURE show_person(
    OUT info VARCHAR(255),
    IN ident INT(10)
) SQL SECURITY INVOKER
BEGIN
    SELECT * FROM person ;
END $
DELIMITER ;
