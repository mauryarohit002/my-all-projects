create table users(
log_id int auto increment primary key,
log_name varchar(100),
log_mobile bigint,
log_email varchar(100),
log_password varchar(100),
log_time timestamp
);



alter table users add column log_status int default 1 after log_password;

--999999.99
--2^32 -1

