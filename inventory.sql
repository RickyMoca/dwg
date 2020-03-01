/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `inventory`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` varchar(11) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `stok_awal` int(11) DEFAULT NULL,
  `cogs` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_sku` (`no_sku`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id`,`no_sku`,`nama_barang`,`stok_awal`,`cogs`,`status`) values (1,'SH0001','SANDAL SEHAT',50,20000,'Active'),(2,'SH0002','THERAFLEX',10,15000,'Archive'),(3,'RT0003','PEMBERSIH SEKAT KERAMIK',10,15000,'Archive'),(4,'SH0223777','Tile Reform',20,25000,'Active'),(5,'SH0223333','Sekukuku',20,25000,'Active'),(6,'SH0223777','Sekukuku',20,25000,'Active'),(8,'SH0223777','SANDAL SEHAT',20,25000,'Active'),(9,'SH0223777','Tile Reform',20,25000,'Active'),(10,'SH0223777','Tile Reform',20,25000,'Active'),(11,'SH0223777','Sekulumu',1000,2250,'Active'),(12,'SH0223777','Tile Reform',1000,25000,'Active'),(13,'SH0223777','Sukuus',20,25000,'Active'),(14,'SH0223','sugus',1000,25000,'Active'),(15,'SH0223','Tile Reform',20,2250,'Active'),(16,'SH0223777','oooooooo',20,25000,'Active'),(17,'SH0223777','Tile Reform',1000,25000,'active'),(19,'SH0223777','Kaka',20,25000,'active');

/*Table structure for table `config` */

DROP TABLE IF EXISTS `config`;

CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_app` varchar(255) DEFAULT NULL,
  `icon_app` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `config` */

insert  into `config`(`id`,`name_app`,`icon_app`) values (1,'System Dwg','logo.icon.png');

/*Table structure for table `purchase` */

DROP TABLE IF EXISTS `purchase`;

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` varchar(11) DEFAULT NULL,
  `tanggal_beli` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_sku` (`no_sku`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `purchase` */

insert  into `purchase`(`id`,`no_sku`,`tanggal_beli`,`qty`,`keterangan`) values (1,'0','2020-02-12 20:01:03',20,NULL);

/*Table structure for table `return` */

DROP TABLE IF EXISTS `return`;

CREATE TABLE `return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` int(11) DEFAULT NULL,
  `tanggal_return` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `return` */

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sales` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `no_sku` varchar(11) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `status` enum('Completed','Cancel') DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sales` */

insert  into `sales`(`id`,`id_sales`,`nama`,`tlp`,`no_sku`,`harga_satuan`,`qty`,`ongkir`,`discount`,`payment`,`status`,`tanggal_beli`,`keterangan`) values (1,7987778,'Mohamad Ricky','089877665677','SH001',179000,2,59000,10000,'cod','Completed','2020-02-12',NULL);

/*Table structure for table `todos` */

DROP TABLE IF EXISTS `todos`;

CREATE TABLE `todos` (
  `id_todos` int(1) NOT NULL AUTO_INCREMENT,
  `user_agent` varchar(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_recived` varchar(20) DEFAULT NULL,
  `subject_todos` varchar(255) DEFAULT NULL,
  `Message_todos` text DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_todos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `todos` */

insert  into `todos`(`id_todos`,`user_agent`,`date_created`,`user_recived`,`subject_todos`,`Message_todos`,`status`,`note`,`due_date`) values (1,'DWG02201','2020-02-21 20:58:56','DWG02203','#2323232352 - Alamat kurang lengkap yeuh kumha euy ','Pesanan dibatalkan',1,'Urgent euyyy',NULL),(2,'DWG02203','2020-02-24 01:20:42','DWG02201','#2323232352 - 2','Tolong konfrim ya ini lamat ga lengkap biar segera diproses dan mantap pokonya mah',1,'oke',NULL),(3,'DWG02203','2020-02-24 01:20:42','DWG02201','#2323232352 - Ini pesan untuk admin ya','Tolong konfrim ya ini lamat ga lengkap biar segera diproses dan mantap pokonya mah',1,NULL,NULL);

/*Table structure for table `todos_category` */

DROP TABLE IF EXISTS `todos_category`;

CREATE TABLE `todos_category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `todos_category` */

/*Table structure for table `todos_reply` */

DROP TABLE IF EXISTS `todos_reply`;

CREATE TABLE `todos_reply` (
  `id` int(11) NOT NULL,
  `id_todos` int(11) DEFAULT NULL,
  `reply_todos` text DEFAULT NULL,
  `date_reply` datetime DEFAULT NULL,
  `date_input` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `todos_reply` */

insert  into `todos_reply`(`id`,`id_todos`,`reply_todos`,`date_reply`,`date_input`) values (1,1,'Konsumen minta kirim ulang hari ini','2020-02-23 17:55:13','2020-02-23 17:55:15');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`email`,`image`,`password`,`role_id`,`is_active`,`date_created`) values ('DWG02201','ricky','admin@dwg.id','default.jpg','$2y$10$LvKjG6Hg0PjjIDjjKk7iDuvKV5Mr2CixeuwSQYKvViJ/aVUq147sO',1,1,0),('DWG03202','Mohamad Ricky','inventory.th@gmail.com','default.jpg','$2y$10$LvKjG6Hg0PjjIDjjKk7iDuvKV5Mr2CixeuwSQYKvViJ/aVUq147sO',1,1,1583081659),('DWG03203','Muhammad Ferdian','ferdi_0707@yahoo.co.id','default.jpg','$2y$10$xiED3uQoRPOOsbjgv5wjSOoFqlUjK9I0peZuxCYyuurHKfbmEVg2S',2,1,1583081706),('DWG03204','Bagus nugraha','mbagus2@dwg.id','default.jpg','$2y$10$z5jCE9FDCKbLGOsEbzgzsennevZ18KBkJsShuCMcEqZSZUgSq3UAi',1,1,1583081897),('DWG03205','Mahfads','mahfads@yahoo.id','default.jpg','$2y$10$hnT01YT4le4Rke/1Co8EIeAiKOzdNTEYRL8RZRDU/AWDPXTt63IBW',3,2,1583085734);

/*Table structure for table `user_access_menu` */

DROP TABLE IF EXISTS `user_access_menu`;

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

/*Data for the table `user_access_menu` */

insert  into `user_access_menu`(`id`,`role_id`,`menu_id`) values (1,1,1),(2,1,2),(3,1,3),(4,2,2),(5,2,3),(6,3,3);

/*Table structure for table `user_menu` */

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `user_menu` */

insert  into `user_menu`(`id`,`menu`) values (1,'Admin'),(2,'Warehouse'),(3,'Todo');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  `division` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `user_role` */

insert  into `user_role`(`id`,`role`,`division`) values (1,'Admin','Head Officer'),(2,'Warehouse','Warhouse Management'),(3,'cs','Customer Service');

/*Table structure for table `user_sub_menu` */

DROP TABLE IF EXISTS `user_sub_menu`;

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `position` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `user_sub_menu` */

insert  into `user_sub_menu`(`id`,`menu_id`,`title`,`url`,`icon`,`is_active`,`position`) values (1,1,'Dashboard','admin','icon-home4 mr-2',0,2),(2,2,'Inventory','user/inventory','icon-home4 mr-2',0,3),(3,2,'In Bound','user/purchase','icon-home4 mr-2',0,4),(4,2,'Return','user/return','icon-home4 mr-2',0,5),(5,2,'Sales','user/sales','icon-home4 mr-2',0,6),(6,3,'Home','todo','icon-home4',1,1),(7,3,'Todolist','todo/todolist','icon-clipboard2',1,7),(11,1,'Manage User','admin','icon-user',1,8);

/* Function  structure for function  `get_id_user` */

/*!50003 DROP FUNCTION IF EXISTS `get_id_user` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `get_id_user`() RETURNS varchar(8) CHARSET utf8mb4
BEGIN
    DECLARE kode varchar(8);
    
     SELECT RIGHT(MAX(id),2) FROM USER INTO kode;
     SET kode = CONCAT(DATE_FORMAT(CURDATE(),'%m%y'),kode+1);
     SET kode = LPAD(kode,8,'DWG');
    
	
     RETURN kode;
	
    END */$$
DELIMITER ;

/*Table structure for table `get_useragent` */

DROP TABLE IF EXISTS `get_useragent`;

/*!50001 DROP VIEW IF EXISTS `get_useragent` */;
/*!50001 DROP TABLE IF EXISTS `get_useragent` */;

/*!50001 CREATE TABLE  `get_useragent`(
 `id_todos` int(1) ,
 `user_agent` varchar(20) ,
 `name_agent` varchar(128) 
)*/;

/*Table structure for table `get_userrecived` */

DROP TABLE IF EXISTS `get_userrecived`;

/*!50001 DROP VIEW IF EXISTS `get_userrecived` */;
/*!50001 DROP TABLE IF EXISTS `get_userrecived` */;

/*!50001 CREATE TABLE  `get_userrecived`(
 `id_todos` int(1) ,
 `user_recived` varchar(20) ,
 `name_recived` varchar(128) 
)*/;

/*Table structure for table `v-access` */

DROP TABLE IF EXISTS `v-access`;

/*!50001 DROP VIEW IF EXISTS `v-access` */;
/*!50001 DROP TABLE IF EXISTS `v-access` */;

/*!50001 CREATE TABLE  `v-access`(
 `id` int(11) ,
 `role_id` int(11) ,
 `role` varchar(128) ,
 `menu_id` int(11) ,
 `menu` varchar(128) 
)*/;

/*Table structure for table `v-submenuu` */

DROP TABLE IF EXISTS `v-submenuu`;

/*!50001 DROP VIEW IF EXISTS `v-submenuu` */;
/*!50001 DROP TABLE IF EXISTS `v-submenuu` */;

/*!50001 CREATE TABLE  `v-submenuu`(
 `id` int(11) ,
 `title` varchar(128) ,
 `url` varchar(128) ,
 `icon` varchar(128) ,
 `is_active` int(1) ,
 `position` int(1) ,
 `menu_id` int(11) ,
 `menu` varchar(128) 
)*/;

/*Table structure for table `v-todos` */

DROP TABLE IF EXISTS `v-todos`;

/*!50001 DROP VIEW IF EXISTS `v-todos` */;
/*!50001 DROP TABLE IF EXISTS `v-todos` */;

/*!50001 CREATE TABLE  `v-todos`(
 `id_todos` int(1) ,
 `user_agent` varchar(20) ,
 `date_created` datetime ,
 `user_recived` varchar(20) ,
 `subject_todos` varchar(255) ,
 `Message_todos` text ,
 `status` int(1) ,
 `note` text ,
 `name_agent` varchar(128) ,
 `name_recived` varchar(128) 
)*/;

/*Table structure for table `v-userr` */

DROP TABLE IF EXISTS `v-userr`;

/*!50001 DROP VIEW IF EXISTS `v-userr` */;
/*!50001 DROP TABLE IF EXISTS `v-userr` */;

/*!50001 CREATE TABLE  `v-userr`(
 `id` varchar(20) ,
 `name` varchar(128) ,
 `email` varchar(128) ,
 `image` varchar(128) ,
 `password` varchar(256) ,
 `is_active` int(1) ,
 `date_created` int(11) ,
 `role_id` int(11) ,
 `role` varchar(128) 
)*/;

/*View structure for view get_useragent */

/*!50001 DROP TABLE IF EXISTS `get_useragent` */;
/*!50001 DROP VIEW IF EXISTS `get_useragent` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_useragent` AS select `todos`.`id_todos` AS `id_todos`,`todos`.`user_agent` AS `user_agent`,`user`.`name` AS `name_agent` from (`todos` join `user` on(`todos`.`user_agent` = `user`.`id`)) */;

/*View structure for view get_userrecived */

/*!50001 DROP TABLE IF EXISTS `get_userrecived` */;
/*!50001 DROP VIEW IF EXISTS `get_userrecived` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_userrecived` AS select `todos`.`id_todos` AS `id_todos`,`todos`.`user_recived` AS `user_recived`,`user`.`name` AS `name_recived` from (`todos` join `user` on(`todos`.`user_recived` = `user`.`id`)) */;

/*View structure for view v-access */

/*!50001 DROP TABLE IF EXISTS `v-access` */;
/*!50001 DROP VIEW IF EXISTS `v-access` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v-access` AS select `user_access_menu`.`id` AS `id`,`user_access_menu`.`role_id` AS `role_id`,`user_role`.`role` AS `role`,`user_access_menu`.`menu_id` AS `menu_id`,`user_menu`.`menu` AS `menu` from ((`user_access_menu` join `user_menu` on(`user_access_menu`.`menu_id` = `user_menu`.`id`)) join `user_role` on(`user_access_menu`.`role_id` = `user_role`.`id`)) */;

/*View structure for view v-submenuu */

/*!50001 DROP TABLE IF EXISTS `v-submenuu` */;
/*!50001 DROP VIEW IF EXISTS `v-submenuu` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v-submenuu` AS select `user_sub_menu`.`id` AS `id`,`user_sub_menu`.`title` AS `title`,`user_sub_menu`.`url` AS `url`,`user_sub_menu`.`icon` AS `icon`,`user_sub_menu`.`is_active` AS `is_active`,`user_sub_menu`.`position` AS `position`,`user_sub_menu`.`menu_id` AS `menu_id`,`user_menu`.`menu` AS `menu` from (`user_sub_menu` join `user_menu` on(`user_sub_menu`.`menu_id` = `user_menu`.`id`)) */;

/*View structure for view v-todos */

/*!50001 DROP TABLE IF EXISTS `v-todos` */;
/*!50001 DROP VIEW IF EXISTS `v-todos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v-todos` AS select `todos`.`id_todos` AS `id_todos`,`todos`.`user_agent` AS `user_agent`,`todos`.`date_created` AS `date_created`,`todos`.`user_recived` AS `user_recived`,`todos`.`subject_todos` AS `subject_todos`,`todos`.`Message_todos` AS `Message_todos`,`todos`.`status` AS `status`,`todos`.`note` AS `note`,`get_useragent`.`name_agent` AS `name_agent`,`get_userrecived`.`name_recived` AS `name_recived` from ((`todos` join `get_useragent` on(`todos`.`id_todos` = `get_useragent`.`id_todos`)) join `get_userrecived` on(`todos`.`id_todos` = `get_userrecived`.`id_todos`)) */;

/*View structure for view v-userr */

/*!50001 DROP TABLE IF EXISTS `v-userr` */;
/*!50001 DROP VIEW IF EXISTS `v-userr` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v-userr` AS select `user`.`id` AS `id`,`user`.`name` AS `name`,`user`.`email` AS `email`,`user`.`image` AS `image`,`user`.`password` AS `password`,`user`.`is_active` AS `is_active`,`user`.`date_created` AS `date_created`,`user`.`role_id` AS `role_id`,`user_role`.`role` AS `role` from (`user` join `user_role` on(`user`.`role_id` = `user_role`.`id`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
