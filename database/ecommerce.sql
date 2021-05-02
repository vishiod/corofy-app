SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `product` (
  `id` int(11)  PRIMARY KEY,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into `product` (`id`,`product_name`,`product_price`,`product_image`)values
  (1,'Venus V-4400 Face Mask','199','./images/venus.jpg'),
  (2,'Venus N-95 Face Mask','299','./images/N95.jpg'),
  (3,'Dabur Hand Sanitizer','499','./images/dabur.jpg'),
  (4,'Dettol Handwash','199','./images/dettol.jpg'),
  (5,'Mediker Shampoo','199','./images/mediker.jpg'),
  (6,'Puurell','199','./images/purell.jpg');

  CREATE TABLE `user` (
    `id` int(11)  PRIMARY KEY,
    `username` varchar(255) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(200) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into `user` (`id`,`username`,`email`,`password`)values
  (101,'Vishal Sharma','vishalsharma@gmail.com','admin'),
  (102,'Arnav Sharma','arnavsharma@gmail.com','password');

-- create table `cart`()ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `cart` (
  `id` int(11)  PRIMARY KEY,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

