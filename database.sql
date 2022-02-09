create databasa store;

create table item

(itemnumber varchar(10),
productid varchar(10),
itemname varchar(10),
status varchar(10),
describtion varchar(20),
quantity varchar(10),
unitprice varchar(10),
totalstock varchar(10));

create table purchase

(itenumber varchar(10),
purchasedate datetime,
purchaseid varchar(10),
itemname varchar(10),
vendorname varchar(20),
quantity varchar(20),
unitprice varchar(20),
totalcost varchar(20));


create table vendor

(fullname varchar(20),
status varchar(10),
vendorid varchar(10),
mobilephone varchar(20),
cellphone varchar(20),
email varchar(20),
state varchar(20),
city varchar(20),
address varchar(20));

create table sale
(itemnumber varchar(10),
customerid varchar(10),
customername varchar(10),
itemname varchar(10),
saledate datetime,
saleid varchar(20),
quantity varchar(10),
unitprice varchar(10),
totalstock varchar(10));

create table customer
(fullname varchar(20),
status varchar(10),
vendorid varchar(10),
mobilephone varchar(20),
cellphone varchar(20),
email varchar(20),
state varchar(10),
city varchar(20),
address varchar(20));

create table register

(firstname varchar(20),
lastname varchar(20),
emailaddress varchar(20),
password varchar(20),
confirmpassword varchar(20));

create table login
(
emailaddress varchar(20),
password varchar(20));

/* inserting data into login table*/
insert into login values('khemispeter78@gmail.com','khemis');
insert into login values('admin','admin');
