CREATE TABLE `db_car`.`tb_department` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
    `name` VARCHAR(50) NOT NULL COMMENT 'สังกัด' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `tb_department` (
    `id`, 
    `name`
) VALUES 
    (NULL, 'ส่วนสนับสนุนงิชาการ'), 
    (NULL, 'สาขาวิชาสถิติ'), 
    (NULL, 'สาขาวิทยาการคอมพิวเตอร์'), 
    (NULL, 'สาขาวิชาคณิตศาสตร์'), 
    (NULL, 'สาขาวิชาฟิสิกส์'), 
    (NULL, 'สาขาวิชาชีววิทยา'), 
    (NULL, 'สาขาวิชาเคมี'), 
    (NULL, 'K-DAI'), 
    (NULL, 'สโมสรนักศึกษา')