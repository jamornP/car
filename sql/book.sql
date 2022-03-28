-- Delete Table If Exists
DROP TABLE IF EXISTS tb_book ;

-- Create Table

CREATE TABLE tb_book ( 
    id INT NOT NULL AUTO_INCREMENT COMMENT 'Pk' , 
    fullname VARCHAR(50) NOT NULL COMMENT 'ชื่อผู้จอง' , 
    sdate DATETIME NOT NULL COMMENT 'วันที่เริ่ม' , 
    edate DATETIME NOT NULL COMMENT 'วันที่สิ้นสุด' , 
    t_id INT NOT NULL COMMENT 'id ประเภทรถ' , 
    status ENUM('accept','cancel') NOT NULL COMMENT 'สถานะ' , 
    user_add VARCHAR(50) NOT NULL COMMENT 'ผู้บันทึกข้อมูล' , 
    date_add DATETIME  NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่บันทึก',
    PRIMARY KEY (id)
    ) ENGINE = InnoDB;


-- Insert persons data
INSERT INTO `tb_book` (
    `id`, 
    `fullname`, 
    `sdate`, 
    `edate`, 
    `t_id`, 
    `status`, 
    `user_add`, 
    `date_add`
) VALUES (
    NULL, 
    'จามร เพ็งสวย', 
    '2022-03-28 16:36:10.000000', 
    '2022-03-28 16:36:10.000000', 
    '1', 
    'accept', 
    'user1', 
    current_timestamp()
);

INSERT INTO `tb_book` (
    `id`, 
    `fullname`, 
    `sdate`, 
    `edate`, 
    `t_id`, 
    `status`, 
    `user_add`, 
    `date_add`
) VALUES (
    NULL, 
    'อชิรยา', 
    '2022-03-29 16:40:00', 
    '2022-03-30 16:40:00', 
    '1', 
    'accept', 
    'user1', 
    current_timestamp()
);