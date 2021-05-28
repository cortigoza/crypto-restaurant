/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.17-MariaDB : Database - crypto-restaurant
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crypto-restaurant` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `crypto-restaurant`;

/*Table structure for table `bookings` */

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `id_booking` int(2) NOT NULL AUTO_INCREMENT,
  `id_user` int(2) DEFAULT NULL,
  `reservation_date` datetime DEFAULT NULL,
  `id_table` int(2) DEFAULT NULL,
  `state` int(2) DEFAULT 1,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `bookings` */

/*Table structure for table `campaigns` */

DROP TABLE IF EXISTS `campaigns`;

CREATE TABLE `campaigns` (
  `id_campaign` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `discount_code` int(2) DEFAULT NULL,
  `percent` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_campaign`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `campaigns` */

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `id_pay` int(2) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) DEFAULT NULL,
  `total_value` double DEFAULT NULL,
  `process` varchar(50) DEFAULT NULL,
  `transaction_code` int(11) DEFAULT NULL,
  `id_sale` varchar(50) DEFAULT NULL,
  `payment_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_pay`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `payments` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id_product` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `state` int(2) DEFAULT 1,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `products` */

/*Table structure for table `recurring` */

DROP TABLE IF EXISTS `recurring`;

CREATE TABLE `recurring` (
  `id_recurrent` int(2) NOT NULL AUTO_INCREMENT,
  `id_user` int(2) DEFAULT NULL,
  `cantidad_compras` int(10) DEFAULT NULL,
  `state` int(2) DEFAULT 1,
  PRIMARY KEY (`id_recurrent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `recurring` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id_role` int(2) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) DEFAULT NULL,
  `state` int(2) DEFAULT 1,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`id_role`,`description`,`state`) values 
(1,'administrador',1),
(2,'cliente',1);

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_sale` varchar(50) DEFAULT NULL,
  `id_user` int(2) DEFAULT NULL,
  `id_product` int(2) DEFAULT NULL,
  `unit_value` double DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `total_value` double DEFAULT NULL,
  `process` varchar(50) DEFAULT NULL,
  `sale_date` datetime DEFAULT current_timestamp(),
  `id_pay` int(2) DEFAULT NULL,
  `discount_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `sales` */

/*Table structure for table `tables` */

DROP TABLE IF EXISTS `tables`;

CREATE TABLE `tables` (
  `id_table` int(2) NOT NULL AUTO_INCREMENT,
  `state` int(2) DEFAULT 1,
  PRIMARY KEY (`id_table`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tables` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `address` varbinary(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `mobile` int(15) DEFAULT NULL,
  `cedula` int(50) DEFAULT NULL,
  `date_birth` datetime DEFAULT NULL,
  `id_rol` int(2) DEFAULT NULL,
  `state` int(2) DEFAULT 1,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id_user`,`name`,`surname`,`mail`,`address`,`password`,`mobile`,`cedula`,`date_birth`,`id_rol`,`state`) values 
(1,'Nicolas','Martinez','nicolasmartinezgo@gmail.com',NULL,'$2y$10$4bWl4WqZ8JiI927s0XwRK.17V19pFVjZrtXG10qWSwzaTUwF8ZtmO',2147483647,1006073254,'2001-10-21 15:12:32',1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
