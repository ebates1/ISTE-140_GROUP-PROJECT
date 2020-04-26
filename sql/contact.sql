use emb2065;

drop table if exists smartSolutionsContact;

create table smartSolutionsContact(
	messageID int NOT NULL AUTO_INCREMENT primary key,
    firstName varchar(255) not null,
    lastName varchar(255) not null,
    email varchar(50) not null,
    phone varchar(20) not null,
    messageText varchar(255) not null
);