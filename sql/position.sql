
CREATE TABLE `db_car`.`tb_position` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
    `name` VARCHAR(50) NOT NULL COMMENT 'ตำแหน่ง' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


INSERT INTO `tb_position` (
    `id`, 
    `name`
) VALUES 
    (NULL,'ผู้บริหาร'), 
    (NULL,'อาจารย์'), 
    (NULL,'เจ้าหน้าที่'), 
    (NULL,'นักศึกษา')