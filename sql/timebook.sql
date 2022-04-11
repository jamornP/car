CREATE TABLE db_car.tb_timebook (
  id INT NOT NULL AUTO_INCREMENT COMMENT 'PK' ,
  `time` varchar(6) NOT NULL DEFAULT '00:00',
  PRIMARY KEY (id)
) ENGINE=InnoDB;

INSERT INTO `tb_timebook` (
    `id`, 
    `time`
) VALUES
(NULL, '05:00'),
(NULL, '05:30'),
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
(NULL, '18:00'),
(NULL, '18:30'),
(NULL, '19:00'),
(NULL, '19:30'),
(NULL, '20:00'),
(NULL, '20:30'),
(NULL, '21:00'),
(NULL, '21:30'),
(NULL, '22:00');