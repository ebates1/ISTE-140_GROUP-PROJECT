drop database if exists Smart_Solutions_DB;
create database Smart_Solutions_DB;
use Smart_Solutions_DB;

create table product(
	productId int(8) not null auto_increment primary key,
    productName varchar(255) not null,
    productDesc text not null,
    productCost double(5,2) not null,
    productCategory varchar(50) not null,
    productImgUrl varchar(50) not null
);

create table blog(
	postId int unsigned auto_increment primary key,
    postTitle varchar(50) not null,
    blogContent text
);


/**
* Start of all the products being inserted
*/

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'Amazon Echo', -- Product Name
'', -- Product Desc
,   -- Product Cost
'', -- Product Category
''  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'', -- Product Name
'', -- Product Desc
,   -- Product Cost
'', -- Product Category
''  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'', -- Product Name
'', -- Product Desc
,   -- Product Cost
'', -- Product Category
''  -- Product Image Url
);

insert into product(productName, productDesc, productCost, productCategory, productImgUrl) 
values (
'', -- Product Name
'', -- Product Desc
,   -- Product Cost
'', -- Product Category
''  -- Product Image Url
);