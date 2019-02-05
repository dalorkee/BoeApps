/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.7.19-log : Database - boe_apps
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`boe_apps` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `boe_apps`;

/*Table structure for table `apps` */

DROP TABLE IF EXISTS `apps`;

CREATE TABLE `apps` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_th` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_ref` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `modify_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `apps` */

insert  into `apps`(`id`,`name_en`,`name_th`,`desc`,`version`,`owner`,`group_ref`,`icon_name`,`app_link`,`create_date`,`modify_date`) values (1,'R506','โปรแกรม R506','R506 (สถานการณ์ & ฐานข้อมูลรายงาน 506)',NULL,'BOE','1','icon_r506.jpg','http://www.boe.moph.go.th/boedb/surdata/index.php','2019-01-31',NULL),(2,'R506 Intranet','โปรแกรม R506','ฐานข้อมูลรายงาน 506 (Login)',NULL,'BOE','1','icon_r506_internet.jpg','http://www.boe.moph.go.th','2019-01-31',NULL),(3,'Event-Based DDC','โปรแกรมตรวจสอบข่าวการระบาด','โปรแกรมตรวจสอบข่าวการระบาด',NULL,'BOE','1','icon_event_ddc.jpg','http://www.boeeoc.moph.go.th/eventbase/user/login/','2019-01-31',NULL),(4,'Event-Based Province','โปรแกรมตรวจสอบข่าวการระบาดสำหรับจังหวัด','โปรแกรมตรวจสอบข่าวการระบาด สำหรับจังหวัด',NULL,'BOE','1','icon_event_provine.jpg','http://www.boeeoc.moph.go.th/eventbase_prov/user/login/','2019-01-31',NULL),(5,'EIDSS','ระบบเฝ้าระวังโรคอิเล็กทรอนิกส์แบบบูรณาการ','ระบบเฝ้าระวังโรคอิเล็กทรอนิกส์ แบบบูรณาการ',NULL,'BOE','1','icon_eidss.jpg',NULL,'2019-01-31',NULL),(6,'Zika','โปรแกรม Zika','Zika Lab & Zika Investigation',NULL,'BOE','1','icon_zika.jpg','http://zika.ddc.moph.go.th/','2019-01-31',NULL),(7,'Measles','โปรแกรม Measles','ฐานข้อมูลรายงานโรค Measles',NULL,'BOE','1','icon_measles.jpg','http://www.eradicationthai.com/login.php','2019-01-31',NULL),(8,'ILI','ILI','ระบบเฝ้าระวังโรคทางระบาดวิทยาของกลุ่มอาการคล้ายไข้หวัดใหญ่',NULL,'BOE','1','icon_ilt.jpg','http://164.115.25.123/ili/','2019-01-31',NULL),(9,'AEFI','AEFI','อาการภายหลังได้รับการสร้างเสริมภูมิคุ้มกันโรค (AEFI)',NULL,'BOE','1','icon_aefi.jpg','http://www.boe.moph.go.th/boedb/prior09/aefi/','2019-01-31',NULL),(10,'AIDS','AIDS','ระบบเฝ้าระวังทางระบาดวิทยา AIDS/TB/STI',NULL,'BOE','1','icon_aids.jpg','http://www.boe.moph.go.th/aids/','2019-01-31',NULL),(11,'IS','IS','ระบบสารสนเทศการเฝ้าระวังการบาดเจ็บ',NULL,'BOE','1','icon_is.jpg','http://www.boe.moph.go.th/isis/','2019-01-31',NULL),(12,'AMR','AMR','Anti-Microbial Resistance',NULL,'BOE','1','icon_amr.jpg',NULL,'2019-01-31',NULL),(13,'BOE E-Learning','BOE E-Learning','BOE E-Learning',NULL,'BOE','2','icon_boe_elearning.jpg','http://elearningboe.moph.go.th/moodle/','2019-02-04',NULL),(14,'WHO E-Learning','WHO E-Learning','WHO E-Learning',NULL,'BOE','2','icon_wto_elearning.jpg','https://www.who.int/vaccine_safety/initiative/tech_support/ebasic/en/','2019-02-04',NULL),(15,'WESR','WESR','ระบบรายงานโรคทางระบาดวิทยาประจำสัปดาห์',NULL,'BOE','3','icon_wesr.jpg',NULL,'2019-02-04',NULL),(16,'AESR','AESR','ระบบรายงานโรคทางระบาดวิทยาประจำปี',NULL,'BOE','3','icon_aesr.jpg',NULL,'2019-02-04',NULL),(17,'DDC Watch','DDC Watch','DDC Watch',NULL,'BOE','3','icon_ddc watch.jpg','https://ddc.moph.go.th/th/site/office_pr/index/boe','2019-02-04',NULL),(18,'OSIR','OSIR','OSIR',NULL,'BOE','3','icon_osir.jpg',NULL,'2019-02-04',NULL),(19,'Population','Population','ฐานข้อมูลประชากร',NULL,'BOE','4','icon_poppulation.jpg',NULL,'2019-02-04',NULL),(20,'Software','Software','Software',NULL,'BOE','4','software.jpg',NULL,'2019-02-04',NULL),(21,'Documents','Documents','Documents',NULL,'BOE','4','icon_document.jpg',NULL,'2019-02-04',NULL),(22,'Intranet','BOE Intranet','จองรถ จองห้องประชุม ฯลฯ',NULL,'BOE','5','intranet.jpg','http://www.boe.moph.go.th/adm/','2019-02-04',NULL),(23,'ETC','ETC','ETC',NULL,'BOE','6','icon_etc.jpg',NULL,'2019-02-04',NULL);

/*Table structure for table `apps_group` */

DROP TABLE IF EXISTS `apps_group`;

CREATE TABLE `apps_group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_th` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `apps_group` */

insert  into `apps_group`(`id`,`name_en`,`name_th`,`icon_name`) values (1,'Surveillance Database','ฐานข้อมูลการเฝ้าระวัง','ion-soup-can-outline'),(2,'E-Learning','สื่อเรียนรู้อิเล็กทรอนิกส์','ion-ios-browsers-outline'),(3,'Publication','สื่อสิ่งพิมพ์','ion-ios-book-outline'),(4,'Download','ดาวน์โหลด','ion-ios-download-outline'),(5,'Intranet','Intranet','ion-log-in'),(6,'FETP','FETP','ion-ios-flag-outline');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
