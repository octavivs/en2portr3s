--
-- Dumping data for table 'person'
--

INSERT INTO person (first_name, last_name, email, phone, address, birthdate) VALUES
('José Octavio', 'Sánchez Contreras', 'josco1982@hotmail.com', '7215289', 'Poniente 9 # 309', '1982-03-22 06:00:00'),
('Juan Daniel', 'Gutiérrez Torres', 'guti_dani2@hotmail.com', '2725939023', 'Calle Pípila S/N Barrio Novillero', '1994-02-16 06:00:00'),
('Kevin Uriel', 'Domínguez Riquelme', '6778@utcv.edu.mx', '2717409620', 'Rincón del Bosque Calle 42', '1995-04-01 06:00:00'),
('Luis Felipe', 'Crescencio Castro', 'felipin@mail.com', '7256734', 'Circunvalación', '1996-07-15 05:00:00'),
('María José', 'Romero Castillo', 'maryjose@mail.com', '7248096', 'Cuautlapan', '1997-10-16 05:00:00');

-- --------------------------------------------------------

--
-- Dumping data for table 'account'
--

INSERT INTO account (username, pass, kind, since, person_id) VALUES
('josco1982@hotmail.com', 'erika', 'admin', '2015-06-04 15:05:44', 1),
('guti_dani2@hotmail.com', '6968daniel', 'admin', '2015-06-08 15:45:56', 2),
('6778@utcv.edu.mx', 'laquesea', 'admin', '2015-06-08 15:52:43', 3),
('felipin@mail.com', 'IamBatman', 'normal', '2015-06-08 16:41:33', 4),
('maryjose@mail.com', 'IamPretty', 'normal', '2015-06-09 03:02:15', 5);
