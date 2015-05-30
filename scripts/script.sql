use my_app;

create table stores (id int(10) AUTO_INCREMENT, item_name varchar(50), item_price decimal(10,2), PRIMARY KEY(id));

insert into stores VALUES(1, 'Circle', 15.00);
insert into stores VALUES(2, 'Triangle', 5.00);
insert into stores VALUES(3, 'Square', 25.00);