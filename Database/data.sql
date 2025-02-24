create database salama_farm_db;
use salama_farm_db;
 
 
 create table responses(
SN int primary key auto_increment,
First_Name varchar(50),
Last_Name varchar (50),
Email VARCHAR(255) unique,
Location text,
Crops text,
FeedBack text,
Reg_Date datetime default now()
);