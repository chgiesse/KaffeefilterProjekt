-- Shop Products
drop table shop_product;

create table shop_product (
	product_id int AUTO_INCREMENT primary key,
	product_name varchar(100),
	product_descr varchar(300),
  	product_link varchar(300),
	product_img int
	);

insert into shop_product (product_name, product_descr, product_link) values
('Gorilla Superbar Crema', 'Silber', 'https://www.roastmarket.de/gorilla-bar-crema-bohnen-1kg.html'),
('Gorilla Crema No.1', 'Schwarz', 'https://www.roastmarket.de/gorilla-crema-no-1-bohnen-1kg.html'),
('Gorilla Superbar Crema', 'Rot', 'https://www.roastmarket.de/gorilla-superbar-crema-bohnen-1kg.html'),
('Gorilla Espresso Impianto', 'Grün', 'https://www.roastmarket.de/gorilla-espresso-impianto-1kg.html'),
('Gorilla Café Creme', 'Balu', 'https://www.roastmarket.de/gorilla-cafe-creme-bohnen-1kg.html')

select * from shop_product;

------------------------------------------------------------------------------------------------------------------

-- Building Attribute Categories
drop table shop_attribute;

create table shop_attribute (
	attribute_id int AUTO_INCREMENT,
	attribute_name varchar(300),
	primary key (attribute_id, attribute_name)
	);

insert into shop_attribute (attribute_id, attribute_name) values
(1, 'Koffeingehalt'),
(2, 'Röstgrad'),
(3, 'Geschmacksrichtung'),
(4, 'Zubereitungsart'),
(5, 'Mahlgrad')

select * from shop_attribute;

------------------------------------------------------------------------------------------------------------------

-- Creating Attributes
drop table shop_attributevalue;

create table shop_attributevalue (
	attributevalue_id int AUTO_INCREMENT,
	attribute_id int,
	attribute_value varchar (200),
	answer varchar (200),
	answer_descr varchar (500),
	primary key (attributevalue_id, attribute_id, attribute_value)
	);

insert into shop_attributevalue (attribute_id, attribute_value) values 
(1, 'Ja'),
(1, 'Nein'),

(2, 'Helle Röstung'),
(2, 'Mittlere Röstung'),
(2, 'Dunkle Röstung'),

(3, 'Fruchtig'),
(3, 'Säuerlich'),
(3, 'Würzig'),
(3, 'Süß'),

(4, 'French Press'),
(4, 'Espressomaschine'),
(4, 'Vollautomat'),
(4, 'Aeropress'),
(4, 'Chemex'),
(4, 'Handfilter'),

(5, 'Bohne'),
(5, 'Gemahlen')


-- Matching Products with Attributes
drop table shop_product_attributevalue;

create table shop_product_attributevalue (
	product_id int,
	attributevalue_id int,
	primary key (product_id, attributevalue_id)
	);

insert into shop_product_attributevalue (product_id, attributevalue_id) values 
(1, 1), 
(1, 4),
(1, 7),
(1, 8),

(2, 1), 
(2, 3),
(2, 4),
(2, 7),
(2, 9),

(3, 2), 
(3, 3),
(3, 4),
(3, 7),
(3, 10),

(4, 2), 
(4, 3),
(4, 4),
(4, 7),
(4, 11)


select * from shop_product_attributevalue;

------------------------------------------------------------------------------------------------------------------

-- JOINS UND SELECT ABFRAGEN

------------------------------------------------------------------------------------------------------------------

-- Alle IDs von Produkten mit Koffein
SELECT product_id
  FROM shop_product_attributevalue
  WHERE attributevalue_id = '1'

-- Alle Produktinformationen von Produkten mit Koffein
SELECT *
  FROM shop_product AS p 
  JOIN shop_product_attributevalue AS a1
  ON p.product_id =  a1.product_id
  WHERE a1.attributevalue_id = '1'

-- Alle Produktinformationen von Produkten mit Koffein und der Zubereitungsmethode Kaffeemaschine
SELECT *
  FROM shop_product AS p 
  
  JOIN shop_product_attributevalue AS a1
  ON p.product_id =  a1.product_id
  
  JOIN shop_product_attributevalue AS a2
  ON p.product_id =  a2.product_id

  WHERE a1.attributevalue_id = '1'
  AND a2.attributevalue_id = '6'


  -- Join Abfrage funktionieren so nicht, wir brauchen stattdessen ein Self-Join
-- 	select p.product_id, p.product_name, attr.attribute_name, attrval.attribute_value 
-- 		from shop_product as p
-- 		join shop_product_attributevalue as map
-- 		on p.product_id = map.product_id
-- 		join shop_attributevalue as attrval
-- 		on attrval.attributevalue_id = map.attributevalue_id 
-- 		join shop_attribute as attr
-- 		on attrval.attribute_id = attr.attribute_id
-- 	where (attr.attribute_name = 'Koffeingehalt' and attrval.attribute_value = 'Ja')
-- 	  and (attr.attribute_name = 'Zubereitungsart' and attrval.attribute_value = 'Espressokanne')


-- Attribute von Produkt laden
SELECT * FROM shop_attributevalue WHERE attribute_id = 1


SELECT * FROM shop_product AS p 
	JOIN shop_product_attributevalue AS a0
	ON p.product_id = a0.product_id 
	
	JOIN shop_product_attributevalue AS a1
	ON p.product_id = a1.product_id 
	
	JOIN shop_product_attributevalue AS a2 
	ON p.product_id = a2.product_id 
	
WHERE a0.attributevalue_id = '1'
	AND a1.attributevalue_id = '3'
	AND a2.attributevalue_id = '6'