--
-- Dumping data for table 'person'
--

INSERT INTO person (id, first_name, last_name, email, phone, birthdate) VALUES
(1, 'José Octavio', 'Sánchez Contreras', 'josco1982@hotmail.com', '7215289', '1982-03-22 06:00:00'),
(2, 'Juan Daniel', 'Gutiérrez Torres', 'guti_dani2@hotmail.com', '2725939023', '1994-02-16 06:00:00'),
(3, 'Kevin Uriel', 'Domínguez Riquelme', '6778@utcv.edu.mx', '2717409620', '1995-04-01 06:00:00'),
(4, 'Luis Felipe', 'Crescencio Castro', 'felipin@mail.com', '7256734', '1996-07-15 05:00:00'),
(5, 'María José', 'Romero Castillo', 'maryjose@mail.com', '7248096', '1997-10-16 05:00:00'),
(6, 'Armando', 'Sánchez González', 'ar47s@hotmail.com', '2725939023', '1994-02-15 06:00:00'),
(7, 'Josue', 'Castillo Jurado', 'josue_cast@gmail.com', '987654321', '1987-06-09 05:00:00'),
(8, 'Genaro', 'Gutiérrez Hernández', 'gen1@gmail.com', '7852456852', '1991-06-28 05:00:00'),
(9, 'Karina', 'García Chelius', 'kagachel@live.com', '543216789', '1997-08-14 05:00:00'),
(10, 'Miranda', 'Romero Hernández', 'miranda@yahoo.com.mx', '987612345', '1994-10-16 05:00:00');

-- --------------------------------------------------------

--
-- Dumping data for table 'account'
--

INSERT INTO account (id, username, pass, kind, status, since, person_id) VALUES
(1, 'josco1982@hotmail.com', 'erika', 'admin', 'activo', '2015-06-04 15:05:44', 1),
(2, 'guti_dani2@hotmail.com', '6968daniel', 'admin', 'activo', '2015-06-08 15:45:56', 2),
(3, '6778@utcv.edu.mx', 'laquesea', 'admin', 'activo', '2015-06-08 15:52:43', 3),
(4, 'felipin@mail.com', 'IamBatman', 'normal', 'activo', '2015-06-08 16:41:33', 4),
(5, 'maryjose@mail.com', 'IamPretty', 'normal', 'activo', '2015-06-09 03:02:15', 5),
(6, 'ar47s@hotmail.com', 'militar23', 'normal', 'activo', '2015-06-30 18:45:39', 6),
(7, 'josue_cast@gmail.com', 'J0sueCA87', 'normal', 'activo', '2015-06-30 18:47:12', 7),
(8, 'gen1@gmail.com', 'gena2309', 'normal', 'activo', '2015-06-30 18:47:37', 8),
(9, 'kagachel@live.com', 'K@rinaGaChe', 'normal', 'activo', '2015-06-30 18:50:41', 9),
(10, 'miranda@yahoo.com.mx', 'Mir@ndaRoH', 'normal', 'activo', '2015-06-30 18:54:35', 10);

-- --------------------------------------------------------

--
-- Dumping data for table 'question'
--

INSERT INTO question (id, first_name, last_name, email, content, status, since) VALUES
(1, 'Kevin', 'Dominguez', 'backtunn@gmail.com', 'Hola, me gustaría saber el precio de una camisa xD', 'Pendiente', '2015-06-30 18:10:15'),
(2, 'Juan Daniel', 'Gutierrez Torres', 'guti_dani2@hotmail.com', 'jajajajajjjaajjaja xd xd xd dx', 'Pendiente', '2015-06-30 18:10:42'),
(3, 'Paco', 'Perez', 'paco@hotmail.com', 'Me gusto mucho el servicio', 'Pendiente', '2015-06-30 18:11:35'),
(4, 'Juan', 'Banana', 'juanito@gmail.com', 'Van a sacar más productos para el 15 de Sep?', 'Pendiente', '2015-06-30 18:12:29'),
(5, 'Felipe', 'Calderón Juarez', 'felipe6823@hotmail.com', 'Le hace falta más presentación a su página.', 'Pendiente', '2015-06-30 18:12:43'),
(6, 'Armando', 'Sanchez', 'ar47s@hotmail.com', 'jajajajajjajajjajajaaajajajaj probandi jaajja', 'Pendiente', '2015-06-30 18:12:45'),
(7, 'Maria', 'Gonzalez', 'maria@hotmail.com', 'Me gustaría poder ver mas productos en su pagina web ', 'Pendiente', '2015-06-30 18:13:05'),
(8, 'Ali', 'Farfan', 'ALTE@outlook.com', 'ASDFGTERSDVSCDRWBEASDC :D', 'Pendiente', '2015-06-30 18:14:00'),
(9, 'Olga', 'Domínguez Torres', 'Olgita_dt@gmail.com', 'Está bonita su página, pero corrijan esas imágenes que tienen en la sección de servicios.', 'Pendiente', '2015-06-30 18:14:37'),
(10, 'Cesar', 'Mendoza', 'CM@hotmail.com', 'mensajeria de prueba ', 'Pendiente', '2015-06-30 18:14:41'),
(11, 'Daniel ', 'Gutierrez', 'dan@gmail.com', 'jajajajjajajaajjaaj', 'Pendiente', '2015-06-30 18:15:13'),
(12, 'Toño', 'Melo Rodríguez', 'Tomelo@live.com.mx', '¿Que promociones tienen por el momento?', 'Pendiente', '2015-06-30 18:26:56'),
(13, 'Karla', 'Peña Nieto', 'karlis_pen@yahoo.com.mx', '¿Tienen más de esas tasas navideñas?', 'Pendiente', '2015-06-30 19:00:05'),
(14, 'Roberto', 'Porras Castro', 'robert@utcv.edu.mx', 'Me podrían ayudar con un diseño para una exposición.', 'Pendiente', '2015-06-30 19:02:40'),
(15, 'Eva', 'Cortés de Sánchez', 'EvaCoSita@hotmail.com', 'Saludos, necesito una cotización de unas camisetas, ¡urgen! son 500 para al rato.', 'Pendiente', '2015-06-30 19:06:32');

-- --------------------------------------------------------

--
-- Dumping data for table 'suggestion'
--

INSERT INTO suggestion (id, content, status, since) VALUES
(1, 'Debería de haber mas promociones ', 'Pendiente', '2015-06-30 18:10:42'),
(2, 'Saquen mas productos :P', 'Pendiente', '2015-06-30 18:10:57'),
(3, 'Probando probando probando jajajajajjjajjajaj xdxdxdxdxdxdxdx', 'Pendiente', '2015-06-30 18:11:06'),
(4, 'Buen servicio muy atentos en todo', 'Pendiente', '2015-06-30 18:11:44'),
(5, 'Holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa que hay de nuevooooooooooooooooooooooooooooooooo', 'Pendiente', '2015-06-30 18:11:48'),
(6, 'Cecatto esta feo', 'Pendiente', '2015-06-30 18:11:50'),
(7, 'String cadenaUno = &#34;1234&#34;; if (cadenaUno.matches(&#34;[0-9]*&#34;))  System.out.println(&#34;Es un número&#34;);else  System.out.println(&#34;No es un número&#34;);', 'Pendiente', '2015-06-30 18:13:29'),
(8, 'Revisa si todavia te faltan ejejejejejjeje', 'Pendiente', '2015-06-30 18:15:37'),
(9, 'Hajdjnsadjsncsklwjsdnv c', 'Pendiente', '2015-06-30 18:15:43'),
(10, 'Hechenle más ganas, la página no tiene panel para modificar la información personal de los usuarios.', 'Pendiente', '2015-06-30 18:30:07'),
(11, 'Por favor ¿pueden actualizar su dirección en google maps?', 'Pendiente', '2015-06-30 18:30:56'),
(12, '¿No tienen una imagen mejor del local?', 'Pendiente', '2015-06-30 18:35:18'),
(13, 'Sería genial que tuviera un mapa su página para las personas que no son de Orizaba.', 'Pendiente', '2015-06-30 18:36:22'),
(14, '¡Hola Mundo!', 'Pendiente', '2015-06-30 18:36:41'),
(15, 'ZzZzZzZzZzZz...', 'Pendiente', '2015-06-30 18:36:54'),
(16, 'Buuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu!', 'Pendiente', '2015-06-30 18:37:05'),
(17, 'Agregen emoticons. :)', 'Pendiente', '2015-06-30 18:37:34'),
(18, '¿Necesitan sugerencias?¿Esta cuenta como una?', 'Pendiente', '2015-06-30 18:41:51'),
(19, 'Hmmmmmmmmmmmm...', 'Pendiente', '2015-06-30 18:42:04'),
(20, '^_^', 'Pendiente', '2015-06-30 18:56:23');

-- --------------------------------------------------------

--
-- Dumping data for table 'page'
--

INSERT INTO page (id, label, since, modified) VALUES
(1, 'Inicio', '2015-06-30 18:17:05', '2015-06-30 18:17:05'),
(2, 'Servicios', '2015-06-30 18:17:05', '2015-06-30 18:17:05'),
(3, 'Conócenos', '2015-06-30 18:17:05', '2015-06-30 18:17:05'),
(4, 'Contacto', '2015-06-30 18:17:05', '2015-06-30 18:17:05'),
(5, 'Registro', '2015-06-30 18:17:05', '2015-06-30 18:17:05');

-- --------------------------------------------------------

--
-- Dumping data for table 'content'
--

INSERT INTO content(id, kind, page_id) VALUES
(1, 'image', 1),
(2, 'image', 1),
(3, 'text', 1),
(4, 'text', 1),
(5, 'image', 1),
(6, 'image', 1),
(7, 'image', 1),
(8, 'image', 1),
(9, 'image', 1),
(10, 'image', 1),
(11, 'text', 2),
(12, 'image', 2),
(13, 'text', 2),
(14, 'image', 2),
(15, 'text', 2),
(16, 'image', 2),
(17, 'text', 2),
(18, 'image', 2),
(19, 'text', 2),
(20, 'image', 2),
(21, 'text', 2),
(22, 'image', 2),
(23, 'text', 2),
(24, 'image', 2),
(25, 'text', 2),
(26, 'image', 2),
(27, 'text', 2),
(28, 'image', 2),
(29, 'text', 2),
(30, 'image', 2),
(31, 'text', 2),
(32, 'image', 2),
(33, 'text', 2),
(34, 'image', 2),
(35, 'text', 2),
(36, 'image', 2),
(37, 'text', 2),
(38, 'image', 2);

-- --------------------------------------------------------

--
-- Dumping data for table 'image'
--

INSERT INTO image(id, url, alt, content_id) VALUES
(1, 'view/img/navidad_banner.png', '¡Feliz navidad!', 1),
(2, 'view/img/en2portr3s_banner.png', 'Llamanos', 2),
(3, 'view/img/intel_logo.png', 'Intel', 5),
(4, 'view/img/dell_logo.png', 'DELL', 6),
(5, 'view/img/nvidia_logo.png', 'NVidia', 7),
(6, 'view/img/amd_logo.png', 'AMD', 8),
(7, 'view/img/autodesk_logo.png', 'Autodesk', 9),
(8, 'view/img/adobe_logo.png', 'Adobe', 10);

-- --------------------------------------------------------

--
-- Dumping data for table 'text_entry'
--

INSERT INTO text_entry(id, body, lang_code, content_id) VALUES
(1, 'text_entry_1', 'es', 3),
(2, 'text_entry_2', 'es', 3);
