-- Delete Table If Exists
DROP TABLE IF EXISTS tb_book ;

-- Create Table

CREATE TABLE `db_car`.`tb_book` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
    `name` VARCHAR(50) NOT NULL COMMENT 'ชื่อผู้จอง' , 
    `surname` VARCHAR(50) NOT NULL COMMENT 'นามสกุลผู้จอง' , 
    `p_id` INT NOT NULL COMMENT 'ID ตำแหน่ง' , 
    `d_id` INT NOT NULL COMMENT 'ID สังกัด' , 
    `date_register` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่กรอกข้อมูล' , 
    `start_date` DATETIME NOT NULL COMMENT 'วันที่ใช้รถ' , 
    `end_date` DATETIME NOT NULL COMMENT 'ถึงวันที่' , 
    `origin` VARCHAR(255) NOT NULL COMMENT 'ต้นทาง' , 
    `destination` VARCHAR(255) NOT NULL COMMENT 'ปลายทาง' , 
    `title` VARCHAR(255) NOT NULL COMMENT 'เหตุผลขอใช้รถ' , 
    `count` INT NOT NULL COMMENT 'จำนวนผู้โดยสาร' , 
    `ch_id` INT NOT NULL COMMENT 'ID ตัวเลือกรับส่ง' , 
    `c_id` INT NOT NULL COMMENT 'ID ประเภทรถ' , 
    `idnum` VARCHAR(255) NOT NULL COMMENT 'เลขทะเบียนรถ' , 
    `staff` VARCHAR(255) NOT NULL COMMENT 'คนขับรถ' , 
    `remark` TEXT NOT NULL COMMENT 'รายละเอียดการรับส่ง' , 
    `user_add` VARCHAR(50) NOT NULL COMMENT 'USER ผู้กรอกข้อมูล' , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


INSERT INTO `tb_book` (
    `id`, 
    `name`, 
    `surname`, 
    `p_id`, 
    `d_id`, 
    `date_register`, 
    `start_date`, 
    `end_date`, 
    `origin`, 
    `destination`, 
    `title`, 
    `count`, 
    `ch_id`, 
    `c_id`, 
    `idnum`, 
    `staff`, 
    `remark`, 
    `user_add`
) VALUES (
    NULL, 
    'จามร',
    'เพ็งสวย', 
    '1', 
    '1', 
    current_timestamp(), 
    '2022-03-31 14:07:26.000000', 
    '2022-03-31 16:00:26.000000', 
    'คณะวิทยาศาสตร์', 
    'สุพรรณบุรี', 
    'ไปอบรม', 
    '4', 
    '1', 
    '1', 
    'กจ8472', 
    'บุญส่ง', 
    'ไปส่งแล้วกลับมารับวันที่ 11 เมษายน 2565', 
    'user1'
);


-- CREATE TABLE `db_car`.`tb_books` ( 
--     `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
--     `title` VARCHAR(255) NOT NULL COMMENT 'สถานที่ไป' , 
--     `name` VARCHAR(50) NOT NULL COMMENT 'ชื่อผู้จอง' , 
--     `t_id` INT NOT NULL COMMENT 'ประเภทรถ' , 
--     `count` VARCHAR(50) NOT NULL COMMENT 'จำนวนตนที่ไป' , 
--     `start_date` DATETIME NOT NULL COMMENT 'วันที่ไป' , 
--     `end_date` DATETIME NOT NULL COMMENT 'วันที่สิ้นสุด' , 
--     `date_add` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่บันทึก' , 
--     `user_add` VARCHAR(50) NOT NULL COMMENT 'ผู้ใช้ที่บันทึก' , 
--     `staff` VARCHAR(50) NOT NULL COMMENT 'ชื่อคนขับรถ' , 
--     `tel` VARCHAR(50) NOT NULL COMMENT 'เบอร์ติดต่อคนขับรถ' , 
--     `status` ENUM('','reject','accept') NOT NULL COMMENT 'สถานะ' , 
--     PRIMARY KEY (`id`)
-- ) ENGINE = InnoDB;

-- INSERT Data

-- INSERT INTO `tb_books` (
--     `id`, 
--     `title`, 
--     `name`, 
--     `t_id`, 
--     `count`, 
--     `start_date`, 
--     `end_date`, 
--     `date_add`, 
--     `user_add`, 
--     `staff`, 
--     `tel`, 
--     `status`
-- ) VALUES (
--     NULL, 
--     'ไป Maga Bangna', 
--     'จามร เพ็งสวย', 
--     '1', 
--     '4', 
--     '2022-03-29 12:31:08.000000', 
--     '2022-03-29 16:31:08.000000', 
--     current_timestamp(), 
--     'User1', 
--     'นายไก่', 
--     '0857332844', 
--     ''
-- );
