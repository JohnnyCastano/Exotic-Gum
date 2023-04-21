CREATE TABLE customer (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null
);

INSERT INTO customer (first_name, last_name, date_of_birth, address, phone, email, customer_pwd)
VALUES ('Johnnerelsen', 'Dannni', '1/1/1911', 'agrerere 11 pl.', ' +1 (555) - 101 - 1911', 'person.1@gmel.got', 'JonDahn');