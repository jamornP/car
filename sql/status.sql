CREATE TABLE `db_car`.`tb_status` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
    `name` VARCHAR(50) NOT NULL COMMENT 'สถานะ' , 
    `color` VARCHAR(10) NOT NULL COMMENT 'สี' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `tb_status` (
    `id`, 
    `name`, 
    `color`
) VALUES (
    NULL, 
    'แจ้ง', 
    '#cc770b'
);