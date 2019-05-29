use tcc;
show tables;
select * from cliente;
CREATE USER 'PayPizza'@'localhost' IDENTIFIED BY 'paypizza';
GRANT ALL PRIVILEGES ON *.* TO 'PayPizza'@'localhost';
