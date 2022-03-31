CREATE TABLE `db_car`.`tb_car` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
    `name` VARCHAR(50) NOT NULL COMMENT 'ประเภทรถ' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `tb_car` (
    `id`, 
    `name`
) VALUES 
    (NULL, 'รถตู้'), 
    (NULL, 'รถกระบะ'), 
    (NULL, 'รถหกล้อ')
    