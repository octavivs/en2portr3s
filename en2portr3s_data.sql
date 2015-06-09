--
-- Dumping data for table 'account'
--

INSERT INTO account (username, pass, kind, since, person_id) VALUES
('josco1982@hotmail.com', 'erika', 'normal', '2015-06-04 05:45:03', 1),
('felipin@mail.com', 'IamBatman', 'normal', '2015-06-08 10:44:26', 2);

--
-- Dumping data for table 'person'
--

INSERT INTO person (first_name, last_name, email, phone, address, birthdate) VALUES
('José Octavio', 'Sánchez Contreras', 'josco1982@hotmail.com', '7215289', 'Poniente 9 # 309', '1982-03-22 06:00:00'),
('Felipe', 'Crescencio', 'felipin@mail.com', '7284936', 'Circunvalación', '1996-06-07 05:00:00');
