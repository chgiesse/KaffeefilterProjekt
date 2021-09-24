-- Shop Products
drop table benutzer;

create table benutzer (
	user_id int AUTO_INCREMENT primary key,
	name varchar(300),
	email varchar(300),
  	passwort varchar(500)
	);

insert into shop_product (product_name, product_descr, product_link) values
('Gorilla Superbar Crema', 'Silber', 'https://www.roastmarket.de/gorilla-bar-crema-bohnen-1kg.html'),
('Gorilla Crema No.1', 'Schwarz', 'https://www.roastmarket.de/gorilla-crema-no-1-bohnen-1kg.html'),
('Gorilla Superbar Crema', 'Rot', 'https://www.roastmarket.de/gorilla-superbar-crema-bohnen-1kg.html'),
('Gorilla Espresso Impianto', 'Grün', 'https://www.roastmarket.de/gorilla-espresso-impianto-1kg.html'),
('Gorilla Café Creme', 'Balu', 'https://www.roastmarket.de/gorilla-cafe-creme-bohnen-1kg.html')