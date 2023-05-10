
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `spices_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spices_db`;

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL UNIQUE,
   `address` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user_details` (`user_name`, `email`, `email`,'address','telephone','password') VALUES
('Themiya', 'Weerakoon', 'Themiya@gmail.com');


-- ADMIN TABLE

CREATE TABLE IF NOT EXISTS 'admin_details'(
    'user_name' varchar(50) NOT NULL UNIQUE  PRIMARY KEY,
    'password' varchar(50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO 'admin_details'('user_name','password') VALUES
('piyumi','admin@piyumi'),
('smith','admin@smith');


-- SPICES_DETAILS

CREATE TABLE IF NOT EXISTS 'spices_details'(
    'item_name' varchar(50) NOT NULL,
    'item_code' varchar(4) NOT NULL  PRIMARY KEY,
    'price' float(10,2)
)
INSERT INTO `spices_details` (`item_name`, 'item_code','price') VALUES
('cinamon','S001','200'),
('balck peper','S002','200'),
('white peper','S003','200'),
('Dried chillie'.'S005','200'),
('cocova'.'S006','200'),
('koththamalli'.'S007','200'),
('Mustard seeds'.'S008','200'),
('Fenugreek'.'S009','200'),
('Red chillie powder'.'S0010','200'),
('Garlic powder'.'S0011','200'),
('nutmeg'.'S0012','200'),
('termeric'.'S0013','200'),
('Cardamom'.'S0014','200'),
('mace'.'S0015','200'),
('cumin'.'S0016','200');



-- CART TABLE

CREATE TABLE IF NOT EXISTS 'cart'(
    'item_code' varchar(4) NOT NULL,
    'quantity' int,
    FOREIGN KEY (item_code) REFERENCES spices_details(item_code)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO 'cart' ( 'item_code', 'quantity') VALUES
();


-- STOCK

CREATE TABLE IF NOT EXISTS 'stock'(
    'item_code' varchar(4) NOT NULL,
    'stock_quantity' int,
    FOREIGN KEY (item_code) REFERENCES spices_details(item_code)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- SALES

CREATE TABLE IF NOT EXISTS 'sales'(
    'item_code' varchar(4) NOT NULL,
    'quantity' int,
    'user_name' varchar(50) NOT NULL,
     FOREIGN KEY (item_code) REFERENCES spices_details(item_code)
      FOREIGN KEY (user_name) REFERENCES user_details(user_name)
)