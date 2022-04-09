CREATE TABLE db_car.tb_timebook (
  id INT NOT NULL AUTO_INCREMENT COMMENT 'PK' ,
  `time` varchar(6) NOT NULL DEFAULT '00:00',
  PRIMARY KEY (id)
) ENGINE=InnoDB;

INSERT INTO `tb_timebook` (
    `id`, 
    `time`
) VALUES
(NULL, '06:00'),
(NULL, '06:30'),
(NULL, '07:00'),
(NULL, '07:30'),
(NULL, '08:00'),
(NULL, '08:30'),
(NULL, '09:00'),
(NULL, '09:30'),
(NULL, '10:00'),
(NULL, '10:30'),
(NULL, '11:00'),
(NULL, '11:30'),
(NULL, '12:00'),
(NULL, '12:30'),
(NULL, '13:00'),
(NULL, '13:30'),
(NULL, '14:00'),
(NULL, '14:30'),
(NULL, '15:00'),
(NULL, '15:30'),
(NULL, '16:00'),
(NULL, '16:30'),
(NULL, '17:00'),
(NULL, '17:30'),
(NULL, '18:00');