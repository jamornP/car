-- Delete Table If Exists
DROP TABLE IF EXISTS tb_book ;

-- Create Table

CREATE TABLE `db_car`.`tb_books` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
    `title` VARCHAR(255) NOT NULL COMMENT 'สถานที่ไป' , 
    `name` VARCHAR(50) NOT NULL COMMENT 'ชื่อผู้จอง' , 
    `t_id` INT NOT NULL COMMENT 'ประเภทรถ' , 
    `count` VARCHAR(50) NOT NULL COMMENT 'จำนวนตนที่ไป' , 
    `start_date` DATETIME NOT NULL COMMENT 'วันที่ไป' , 
    `end_date` DATETIME NOT NULL COMMENT 'วันที่สิ้นสุด' , 
    `date_add` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่บันทึก' , 
    `user_add` VARCHAR(50) NOT NULL COMMENT 'ผู้ใช้ที่บันทึก' , 
    `staff` VARCHAR(50) NOT NULL COMMENT 'ชื่อคนขับรถ' , 
    `tel` VARCHAR(50) NOT NULL COMMENT 'เบอร์ติดต่อคนขับรถ' , 
    `status` ENUM('','reject','accept') NOT NULL COMMENT 'สถานะ' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- INSERT Data

INSERT INTO `tb_books` (
    `id`, 
    `title`, 
    `name`, 
    `t_id`, 
    `count`, 
    `start_date`, 
    `end_date`, 
    `date_add`, 
    `user_add`, 
    `staff`, 
    `tel`, 
    `status`
) VALUES (
    NULL, 
    'ไป Maga Bangna', 
    'จามร เพ็งสวย', 
    '1', 
    '4', 
    '2022-03-29 12:31:08.000000', 
    '2022-03-29 16:31:08.000000', 
    current_timestamp(), 
    'User1', 
    'นายไก่', 
    '0857332844', 
    ''
);
