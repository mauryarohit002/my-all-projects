create table products(
	pro_id int auto_increment primary key,
	pro_name varchar(100),
	pro_price decimal(8,2),
	pro_discount tinyint,
	pro_description longtext,
	pro_caid int,
	pro_brid int,
	pro_path text,
	pro_time timestamp
);


create table users(
	log_id int auto_increment primary key,
	log_name varchar(100),
	log_mobile bigint,
	log_email varchar(100),
	log_password varchar(100),
	log_time timestamp
);

alter table users add column log_status int default 1 after log_password;

-- 999999.99
-- 2^32 -1 

