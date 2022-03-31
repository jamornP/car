CREATE TABLE `db_car`.`tb_choose` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
    `name` VARCHAR(50) NOT NULL COMMENT 'ตัวเลือกรับส่ง' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


INSERT INTO `tb_choose` (
    `id`, 
    `name`
) VALUES 
    (NULL, 'ส่งเที่ยวเดียว'), 
    (NULL, 'ส่งแล้วรอรับกลับ'), 
    (NULL, 'ส่งแล้วให้ไปรับเวลา')