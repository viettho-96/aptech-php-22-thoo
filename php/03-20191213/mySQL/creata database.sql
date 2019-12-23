CREATE DATABASE aptech_php_22_tho;
CREATE TABLE aptech_php_22_tho.users (
	id INT,
	name VARCHAR(255),
);
INSERT INTO aptech_php_22_tho.users (id, name, age)
VALUES (1, "Nam", 19), (2, "Hiep", 20);






CREATE DATABASE aptech_php_22_05;
CREATE TABLE aptech_php_22_05.users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name  VARCHAR(255),
    email VARCHAR(255) UNIQUE
);
SELECT * FROM aptech_php_22_05.users;
INSERT INTO aptech_php_22_05.users (name, email)
VALUE ('Anh', 'quocanh@gmail.com'), ('Nam', 'nam@gamil.com'), ('Quoc', 'quoc@gmail.com'),
('Phu', 'phu@gmail.com'), ('Viet', 'viet@gmail.com');
SELECT * FROM aptech_php_22_05.users;

CREATE TABLE aptech_php_22_05.passports (
	id INT AUTO_INCREMENT PRIMARY KEY,
    sopassports VARCHAR(255),
    ngaycap DATE,
    diachi VARCHAR(255),
    userid INT
);
INSERT INTO aptech_php_22_05.passports (sopassports, ngaycap, diachi, userid)
VALUE ('G000004FG', '2009-6-23', 'TP. Da Nang', 5),
('H0003GE5', '2011-09-12', 'TP.Vinh', 4),
('HD00639RG', '2015-06-30', 'Quang Nam', 1), 
('SK45345K0', '2018-07-12', 'Hoi An', 2), 
('KV000FD99', '2019-09-09', 'TP. Hue', 3);
SELECT * FROM aptech_php_22_05.passports;
TRUNCATE aptech_php_22_05.passports;
SELECT * FROM aptech_php_22_05.passports
WHERE userid = 3;
SELECT * FROM aptech_php_22_05.users
WHERE id = 5;

SELECT * FROM aptech_php_22_05.passports
WHERE userid = (
	SELECT id FROM aptech_php_22_05.users
    WHERE email = 'phu@gmail.com'
);

SELECT users.id as userid,
users.name, users.email,
passports.id as passports_id,
passports.sopassports, passports.ngaycap, passports.diachi
FROM aptech_php_22_05.users
INNER JOIN aptech_php_22_05.passports
ON users.id = passports.userid
WHERE passports.userid =5;
