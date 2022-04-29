CREATE TABLE `db_car`.`tb_bs` ( 
    `id` INT NOT NULL AUTO_INCREMENT COMMENT 'PK' , 
    `b_id` INT NOT NULL COMMENT 'เลขที่ใบจองรถ' , 
    `number` VARCHAR(50) NULL COMMENT 'เลขทะเบียนรถ',
    `sname` VARCHAR(255) NULL COMMENT 'ชื่อคนขับรถ' ,
    `tel` VARCHAR(50) NULL COMMENT 'เบอร์โทรคนขับรถ',
    `s_id` INT NOT NULL COMMENT 'id สถานะ' , 
    `date_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่update' , 
    `user_add` VARCHAR(255) NOT NULL COMMENT 'user ที่ Update',
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;
