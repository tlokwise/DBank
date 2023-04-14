CREATE TABLE `user`(
    accountnumber VARCHAR(10) PRIMARY KEY,
    idnumber VARCHAR(12) UNIQUE NOT NULL,
    phonenumber VARCHAR(10) UNIQUE NOT NULL,
    username VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    pin INT(8) NOT NULL
);

