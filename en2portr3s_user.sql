--
--  Database user: 'n2x3_user'@'localhost'
--

CREATE USER 'n2x3_user'@'localhost' IDENTIFIED BY PASSWORD '*19512569C8A15356DAC518DD4B2F14BC2B9524E0';
GRANT USAGE ON *.* TO 'n2x3_user'@'localhost';
GRANT ALL PRIVILEGES ON en2portr3s.* TO 'n2x3_user'@'localhost';