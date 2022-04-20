DROP TABLE IF EXISTS tb_users;

CREATE TABLE tb_users (
    id INT NOT NULL AUTO_INCREMENT COMMENT 'PK' ,
    name VARCHAR(50) NOT NULL COMMENT 'ชื่อ' , 
    surname VARCHAR(50) NOT NULL COMMENT 'นามสกุล' ,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) DEFAULT 'member',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME,
    p_id INT NULL, 
    d_id INT NULL, 
    PRIMARY KEY (id)
);

INSERT INTO tb_users (
    name,
    surname,
    email,
    password,
    role,
    p_id,
    d_id
) VALUES (
    'จามร',
    'เพ็งสวย',
    'jamorn.pe@kmitl.ac.th',
    '$2y$10$a51xCXB4bNaaTVvZt3gUVuPI1KVko6zkb.GLlYt60TrXHBUFKQHrW',
    'admin',
    '3',
    '1'
);
--password = admincar
