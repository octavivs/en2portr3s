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
(5, 'Registro', '2015-06-30 18:17:05', '2015-06-30 18:17:05'),
(6, 'Privacidad', '2015-06-30 18:17:05', '2015-06-30 18:17:05');

-- --------------------------------------------------------

--
-- Dumping data for table 'content'
--

INSERT INTO content(id, kind, page_id) VALUES
(1, 'image', 1),
(2, 'image', 1),
(3, 'text', 1),
(4, 'text', 1),
(5, 'text', 1),
(6, 'image', 1),
(7, 'image', 1),
(8, 'image', 1),
(9, 'image', 1),
(10, 'image', 1),
(11, 'image', 1),
(12, 'text', 2),
(13, 'image', 2),
(14, 'text', 2),
(15, 'image', 2),
(16, 'text', 2),
(17, 'image', 2),
(18, 'text', 2),
(19, 'image', 2),
(20, 'text', 2),
(21, 'image', 2),
(22, 'text', 2),
(23, 'image', 2),
(24, 'text', 2),
(25, 'image', 2),
(26, 'text', 2),
(27, 'image', 2),
(28, 'text', 2),
(29, 'image', 2),
(30, 'text', 2),
(31, 'image', 2),
(32, 'text', 2),
(33, 'image', 2),
(34, 'text', 2),
(35, 'image', 2),
(36, 'text', 2),
(37, 'image', 2),
(38, 'text', 2),
(39, 'image', 2),
(40, 'text', 3),
(41, 'text', 3),
(42, 'text', 3),
(43, 'text', 3),
(44, 'text', 3),
(45, 'text', 3),
(46, 'text', 3),
(47, 'text', 3),
(48, 'text', 3),
(49, 'text', 3),
(50, 'text', 3),
(51, 'text', 3),
(52, 'text', 3),
(53, 'text', 3),
(54, 'text', 3),
(55, 'text', 3),
(56, 'text', 3),
(57, 'text', 3),
(58, 'text', 4),
(59, 'text', 4),
(60, 'text', 4),
(61, 'text', 4),
(62, 'text', 4),
(63, 'text', 4),
(64, 'text', 4),
(65, 'image', 4),
(66, 'text', 4),
(67, 'image', 4),
(68, 'text', 4),
(69, 'text', 4),
(70, 'text', 5),
(71, 'text', 5),
(72, 'text', 5),
(73, 'text', 5),
(74, 'text', 5),
(75, 'text', 5),
(76, 'text', 5),
(77, 'text', 5),
(78, 'text', 5),
(79, 'text', 5),
(80, 'text', 5),
(81, 'text', 6),
(82, 'text', 6),
(83, 'text', 6),
(84, 'text', 6),
(85, 'text', 6),
(86, 'text', 6),
(87, 'text', 6),
(88, 'text', 6),
(89, 'text', 6),
(90, 'text', 6),
(91, 'text', 6),
(92, 'text', 6),
(93, 'text', 6),
(94, 'text', 6),
(95, 'text', 6),
(96, 'text', 6),
(97, 'text', 6);

-- --------------------------------------------------------

--
-- Dumping data for table 'image'
--

INSERT INTO image(id, url, alt, content_id) VALUES
(1, 'view/img/navidad_banner.png', '¡Feliz navidad!', 1),
(2, 'view/img/en2portr3s_banner.png', 'Llamanos', 2),
(3, 'view/img/intel_logo.png', 'Intel', 6),
(4, 'view/img/dell_logo.png', 'DELL', 7),
(5, 'view/img/nvidia_logo.png', 'NVidia', 8),
(6, 'view/img/amd_logo.png', 'AMD', 9),
(7, 'view/img/autodesk_logo.png', 'Autodesk', 10),
(8, 'view/img/adobe_logo.png', 'Adobe', 11),
(9, 'view/img/playeras.png', 'playeras', 13),
(10, 'view/img/mouse_pack.png', 'Mouse pack', 15),
(11, 'view/img/platos.png', 'Platos', 17),
(12, 'view/img/rompecabezas.png', 'Rompecabezas', 19),
(13, 'view/img/almohadas.png', 'Almohadas', 21),
(14, 'view/img/tazas.png', 'Tazas', 23),
(15, 'view/img/fotobotones.png', 'Fotobotones', 25),
(16, 'view/img/flyers_digital.png', 'Flyers digital', 27),
(17, 'view/img/flyers_1_tinta.png', 'Flyers 1 tinta', 29),
(18, 'view/img/tarjetas.png', 'Tarjetas', 31),
(19, 'view/img/credenciales_4x1.png', 'Credenciales 4x1', 33),
(20, 'view/img/credenciales_4x4.png', 'Credenciales 4x4', 35),
(21, 'view/img/serigrafia.png', 'Serigrafía', 37),
(22, 'view/img/lonas.jpg', 'Lonas', 39),
(23, 'view/img/lugar.png', 'Lugar', 65),
(24, 'view/img/mail.png', 'Buzón', 67);

-- --------------------------------------------------------

--
-- Dumping data for table 'text_entry'
--

INSERT INTO text_entry(id, body, lang_code, content_id) VALUES
(1, 'Acerca de nosotros', 'es', 3),
(2, 'Somos una empresa dedicada a brindar soluciones gráficas, asesorando y educando a nuestros clientes sobre las buenas prácticas publicitarias. Nuestro servicio está enfocado en brindar una solución integral, enfocándonos en escuchar al cliente y proponer soluciones cumpliendo con las necesidades que requieren.', 'es', 4),
(3, 'Algunos de nuestros clientes', 'es', 5),
(4, 'Playeras', 'es', 12),
(5, 'Mouse pack', 'es', 14),
(6, 'Platos', 'es', 16),
(7, 'Rompecabezas', 'es', 18),
(8, 'Almohadas', 'es', 20),
(9, 'Tazas', 'es', 22),
(10, 'Fotobotones', 'es', 24),
(11, 'Flyers digital', 'es', 26),
(12, 'Flyers 1 tinta', 'es', 28),
(13, 'Tarjetas', 'es', 30),
(14, 'Credenciales 4x1', 'es', 32),
(15, 'Credenciales 4x4', 'es', 34),
(16, 'Serigrafía', 'es', 36),
(17, 'Lonas', 'es', 38),
(18, 'Quienes somos', 'es', 40),
(19, 'Somos una empresa dedicada a brindar soluciones gráficas, asesorando y educando a nuestros clientes sobre las buenas practicas publicitarias. Nuestro servicio está enfocado en brindar una solución integral, enfocándonos en escuchar al cliente y proponer soluciones cumpliendo con las necesidades que requieren.', 'es', 41),
(20, 'Misión', 'es', 42),
(21, 'Desarrollar soluciones gráficas, creativas, versátiles, oportunas y profesionales en el ámbito del diseño gráfico con personal capacitado,  innovado en base a nuestros conocimientos y métodos para realizar proyectos únicos funcionales y satisfactorios.', 'es', 43),
(22, 'Visión', 'es', 44),
(23, 'Consolidar el liderazgo de en dosportr3s mediante el crecimiento con nuestros clientes brindando compromiso y pasión por el servicio, la creatividad y la innovación.', 'es', 45),
(24, 'Valores', 'es', 46),
(25, 'Nuestros valores son las cualidades que nos distinguen y nos orienta, apoyando nuestra misión y sustenta nuestra visión. Los valores de nuestra cultura corporativa son:', 'es', 47),
(26, 'Creatividad', 'es', 48),
(27, 'Innovación en nuestros desarrollos para marcar la diferencia.', 'es', 49),
(28, 'Excelencia', 'es', 50),
(29, 'Calidad de trabajo y cumplimiento con estándares.', 'es', 51),
(30, 'Integridad', 'es', 52),
(31, 'Ética y coherencia en nuestro trabajo y servicio.', 'es', 53),
(32, 'Compromiso', 'es', 54),
(33, 'Atención y seguimiento personalizado a los proyectos.', 'es', 55),
(34, 'Responsabilidad', 'es', 56),
(35, 'Satisfacción total de nuestros clientes.', 'es', 57),
(36, 'Contáctanos', 'es', 58),
(37, 'Nombre', 'es', 59),
(38, 'Apellidos', 'es', 60),
(39, 'Email', 'es', 61),
(40, 'Mensaje', 'es', 62),
(41, 'Enviar', 'es', 63),
(42, 'Ubicación', 'es', 64),
(43, 'Norte 12 entre Oriente 3 y Colón Oriente.', 'es', 66),
(44, 'Buzón de sugerencias', 'es', 68),
(45, 'Enviar', 'es', 69),
(46, 'Crear una cuenta', 'es', 70),
(47, 'Usa cualquier dirección de correo electrónico como nombre de usuario de tu nueva cuenta. Se Recomienda que la contraseña sea diferente a la del correo electrónico, por seguridad la contraseña debería contener letras mayuscula, letras minusculas y caracteres especiales (cualquiera de los siguientes @#$%).', 'es', 71),
(48, 'Nombre', 'es', 72),
(49, 'Apellidos', 'es', 73),
(50, 'Nombre de usuario', 'es', 74),
(51, 'Contraseña', 'es', 75),
(52, 'Vuelve a escribir la contraseña', 'es', 76),
(53, 'Teléfono', 'es', 77),
(54, 'Fecha de nacimiento', 'es', 78),
(55, 'Registrarse', 'es', 79),
(56, 'Limpiar registro', 'es', 80),
(57, 'Política de privacidad', 'es', 81),
(58, 'Cuando usa los servicios de nosotros, nos confía su información. Esta Política de privacidad está destinada a ayudarlo a entender qué datos recopilamos, por qué los recopilamos y qué hacemos con ellos. Esto es importante; esperamos que se tome su tiempo para leerlo con cuidado.', 'es', 82),
(59, 'En nuestra Política de Privacidad se explica:', 'es', 83),
(60, 'qué información recopilamos y por qué la recopilamos,', 'es', 84),
(61, 'cómo usamos esa información.', 'es', 85),
(62, 'Información que recopilamos', 'es', 86),
(63, 'Recopilamos información para brindar mejores servicios a todos nuestros clientes: cosas básicas como su nombre, apellidos, domicilio, dirección de correo electrónico, número de teléfono.', 'es', 87),
(64, 'Recopilamos información de dos maneras:', 'es', 88),
(65, 'Información que usted nos proporciona. ', 'es', 89),
(66, 'Por ejemplo, muchos de nuestros servicios requieren que se registre para obtener una cuenta. Cuando lo hace, le solicitamos información personal, como su nombre, dirección de correo electrónico, número de teléfono.', 'es', 90),
(67, 'Información que obtenemos del uso de nuestros servicios. ', 'es', 91),
(68, 'Podemos recopilar información sobre los trabajos que usted solicita y los tiempos de entrega.', 'es', 92),
(69, 'Cómo utilizamos la información que recopilamos', 'es', 93),
(70, 'Utilizamos la información que recopilamos de todos nuestros servicios para proveerlos, mantenerlos, protegerlos y mejorarlos, para desarrollar otros servicios nuevos. También utilizamos esta información para ofrecerle contenido personalizado.', 'es', 94),
(71, 'Podremos utilizar el nombre que usted proporcione para su perfil en todos los servicios que ofrecemos. Además, podremos reemplazar los nombres anteriores relacionados con su cuenta de modo que usted sea identificado en forma consistente en todos nuestros servicios.', 'es', 95),
(72, 'Si usted nos contacta, conservaremos un registro de su comunicación para ayudar a solucionar cualquier problema que pueda tener. Podremos utilizar su dirección de correo electrónico para informarle sobre nuestros servicios, como hacerle saber los próximos cambios o mejoras.', 'es', 96),
(73, 'Usamos la información que proporcionan las cookies y otras tecnologías para que nuestros usuarios disfruten de una mejor experiencia y para mejorar la calidad general de nuestros servicios. Uno de los productos que usamos para hacer esto, es Google Analytics.', 'es', 97);
