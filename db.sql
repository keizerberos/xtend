/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.1.41 : Database - xtend
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `acc` */

DROP TABLE IF EXISTS `acc`;

CREATE TABLE `acc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmod` int(11) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `idlog` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `acc` */

/*Table structure for table `adds` */

DROP TABLE IF EXISTS `adds`;

CREATE TABLE `adds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idservp` int(11) DEFAULT NULL,
  `idserv` int(11) DEFAULT NULL,
  `idtypser` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `adds` */

/*Table structure for table `bstrings` */

DROP TABLE IF EXISTS `bstrings`;

CREATE TABLE `bstrings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nam` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `bstrings` */

insert  into `bstrings`(`id`,`nam`) values (1,'bstrRev1'),(2,'bstrRev2'),(3,'bstrRev3');

/*Table structure for table `btrad` */

DROP TABLE IF EXISTS `btrad`;

CREATE TABLE `btrad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idStr` int(11) DEFAULT NULL,
  `idLang` int(11) DEFAULT NULL,
  `val` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `btrad` */

insert  into `btrad`(`id`,`idStr`,`idLang`,`val`) values (1,1,1,'<h2>Revision 0.0.2</h2>\r\n<ul>\r\n	<li>Interfaces</li>\r\n	<ul>\r\n		<li>Main Screen</li>\r\n		<li>Programmed control clock</li>\r\n		<li>Programmed control of Languages</li>\r\n		<li>Programmed control quotes</li>\r\n		<li>Programmed logging</li>\r\n		<li>Programmed \"News\"</li>\r\n	</ul>\r\n	<li>Database</li>\r\n	<ul>\r\n		<li>Loading variables</li>\r\n		<li>Loading Language</li>\r\n	</ul>\r\n</ul>'),(2,1,2,'<h2>Revisi&oacute;n 0.0.2</h2>\r\n<ul>\r\n	<li>Interfaces</li>\r\n	<ul>\r\n		<li>Pantalla principal</li>\r\n		<li>Programado control de reloj </li>\r\n		<li>Programado control de Idiomas</li>\r\n		<li>Programado control de cotizaciones</li>\r\n		<li>Programado Logueo</li>\r\n		<li>Programado \"News\"</li>\r\n	</ul>\r\n	<li>Base de Datos</li>\r\n	<ul>\r\n		<li>Carga de variables </li>\r\n		<li>Carga de idiomas</li>\r\n		<li>Carga de lenguajes</li>\r\n	</ul>\r\n</ul>'),(3,1,3,'<h2>R&eacute;vision 0.0.2</h2>\r\n<ul>\r\n	<li>Interfaces</li>\r\n	<ul>\r\n		<li>&Eacute;cran d\'accueil</li>\r\n		<li>D\'horloge de commande programm&eacute;e</li>\r\n		<li>Contrôle pr&eacute;vue des langues</li>\r\n		<li>Citations de controle pr&eacute;vues</li>\r\n		<li>l\'exploitation pr&eacute;vue</li>\r\n		<li>Pr&eacute;vu \"Nouvelles\"</li>\r\n	</ul>\r\n	<li>Base de donn&eacute;es</li>\r\n	<ul>\r\n		<li>Le chargement des variables</li>\r\n		<li>Langues de charge</li>\r\n	</ul>\r\n</ul>'),(4,2,1,'<h2>Tips</h2>\r\n<ul>\r\n	<li>Logging</li>\r\n	<ul>\r\n		<li>You must do click in the button login</li>\r\n	</ul>\r\n</ul>'),(5,2,2,'<h2>Consejos</h2>\r\n<ul>\r\n	<li>Identificaci&oacuten</li>\r\n	<ul>\r\n		<li>Al identificarse, usted puede recordar su contraseña marcando la casilla Recordar</li>\r\n	</ul>\r\n</ul>'),(6,2,3,'<h2>Conseils</h2>\r\n<ul>\r\n	<li>Enregistrement</li>\r\n	<ul>\r\n		<li> Vous devez faire clic dans le bouton de connexion</li>\r\n	</ul>\r\n</ul>'),(7,3,1,'<h2>How Start</h2>\r\n<ul>\r\n	<li>Creating Files</li>\r\n	<ul>\r\n		<li>Set Serices and rooming list</li>\r\n	</ul>\r\n</ul>'),(8,3,2,'<h2>Como empezar</h2>\r\n<ul>\r\n	<li>Primera Vez</li>\r\n	<ul>\r\n		<li>Comienze logueandose</li>\r\n		<li>Verifiqe sus servicios y los de la empresa</li>\r\n		<li>Verifique los tarifarios</li>\r\n		<li>Inicie abrindo files</li>\r\n	</ul>\r\n</ul>'),(9,3,3,'<h2>Comment faire pour d&eacutemarrer</h2>\r\n<ul>\r\n	<li>First Time</li>\r\n	<ul>\r\n		<li>Entrez logeandose</li>\r\n		<li>Commencez par v&eacuterifier vos services et entreprises</li>\r\n		<li>V&eacterifiez votre tarif</li>\r\n	</ul>\r\n</ul>');

/*Table structure for table `info` */

DROP TABLE IF EXISTS `info`;

CREATE TABLE `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idserv` int(11) DEFAULT NULL,
  `ima` longtext,
  `txt` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `info` */

/*Table structure for table `lang` */

DROP TABLE IF EXISTS `lang`;

CREATE TABLE `lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `abrev` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `lang` */

insert  into `lang`(`id`,`name`,`abrev`) values (1,'English','EN'),(2,'Español','ES'),(3,'French','FR');

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `use1` varchar(50) DEFAULT NULL,
  `pas1` varchar(20) DEFAULT NULL,
  `use2` decimal(5,0) DEFAULT NULL,
  `fnam` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `log` */

insert  into `log`(`id`,`use1`,`pas1`,`use2`,`fnam`) values (1,'admin','12345','1','Administrador');

/*Table structure for table `mod` */

DROP TABLE IF EXISTS `mod`;

CREATE TABLE `mod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stringnam` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `mod` */

insert  into `mod`(`id`,`stringnam`) values (1,NULL);

/*Table structure for table `money` */

DROP TABLE IF EXISTS `money`;

CREATE TABLE `money` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stringname` varchar(30) DEFAULT NULL,
  `sus` double DEFAULT NULL,
  `abrev` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `money` */

insert  into `money`(`id`,`stringname`,`sus`,`abrev`) values (1,'strmoney1',1,'$us'),(2,'strmoney2',6.96,'Bs');

/*Table structure for table `prov` */

DROP TABLE IF EXISTS `prov`;

CREATE TABLE `prov` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nam` varchar(100) DEFAULT NULL,
  `nick` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `prov` */

insert  into `prov`(`id`,`nam`,`nick`) values (1,'Carlos Viscarra','cv'),(2,'Ivana Miranda','ivana'),(3,'Hotel Presidente','pre'),(4,'Hotel Radisson','radis');

/*Table structure for table `servcost` */

DROP TABLE IF EXISTS `servcost`;

CREATE TABLE `servcost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idserv` int(11) DEFAULT NULL,
  `pax` int(11) DEFAULT NULL,
  `typecost` varchar(10) DEFAULT NULL,
  `mon` int(11) DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `com` double DEFAULT NULL,
  `rac` double DEFAULT NULL,
  `dlun` tinyint(1) DEFAULT NULL,
  `dmar` tinyint(1) DEFAULT NULL,
  `dmie` tinyint(1) DEFAULT NULL,
  `djue` tinyint(1) DEFAULT NULL,
  `dvie` tinyint(1) DEFAULT NULL,
  `dsab` tinyint(1) DEFAULT NULL,
  `ddom` tinyint(1) DEFAULT NULL,
  `dfer` tinyint(1) DEFAULT NULL,
  `hour1` time DEFAULT NULL,
  `hour2` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `servcost` */

/*Table structure for table `servsit` */

DROP TABLE IF EXISTS `servsit`;

CREATE TABLE `servsit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idserv` int(11) DEFAULT NULL,
  `idsite` int(11) DEFAULT NULL,
  `hour` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `servsit` */

/*Table structure for table `site` */

DROP TABLE IF EXISTS `site`;

CREATE TABLE `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lon` double DEFAULT NULL,
  `par` int(11) DEFAULT NULL,
  `idsitetype` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `site` */

/*Table structure for table `sitetype` */

DROP TABLE IF EXISTS `sitetype`;

CREATE TABLE `sitetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stringnam` varchar(20) DEFAULT NULL,
  `abrev` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sitetype` */

insert  into `sitetype`(`id`,`stringnam`,`abrev`) values (1,'strSite1','htl'),(2,'strSite2','mov');

/*Table structure for table `strings` */

DROP TABLE IF EXISTS `strings`;

CREATE TABLE `strings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nam` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `strings` */

insert  into `strings`(`id`,`nam`) values (1,'strMain'),(2,'strCotiz'),(3,'strUfv'),(4,'strCompra'),(5,'strVenta'),(6,'strIdioma'),(7,'strSelec'),(8,'strLogin'),(9,'strUser'),(10,'strPass'),(11,'strButIng'),(12,'strRemPas'),(13,'strTypeSer1'),(14,'strTypeSer2'),(15,'strSite1'),(16,'strSite2'),(17,'strError'),(18,'strButOut'),(19,'strLoad'),(20,'strSkin'),(21,'strOp1'),(22,'strOp2'),(23,'strOp3');

/*Table structure for table `taxs` */

DROP TABLE IF EXISTS `taxs`;

CREATE TABLE `taxs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idserv` int(11) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `ges` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `taxs` */

/*Table structure for table `trad` */

DROP TABLE IF EXISTS `trad`;

CREATE TABLE `trad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idStr` int(11) DEFAULT NULL,
  `idLang` int(11) DEFAULT NULL,
  `val` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

/*Data for the table `trad` */

insert  into `trad`(`id`,`idStr`,`idLang`,`val`) values (1,1,1,'Tend'),(2,1,2,'Tend'),(3,1,3,'Tend'),(4,2,1,'Quotation'),(5,2,2,'Cotizaci&oacuten'),(6,2,3,'Citation'),(7,3,1,'UFV'),(8,3,2,'UFV'),(9,3,3,'UFV'),(10,4,1,'Purchase'),(11,4,2,'Compra'),(12,4,3,'Acheter'),(13,5,1,'Sale'),(14,5,2,'Venta'),(15,5,3,'Vente'),(16,6,1,'Language'),(17,6,2,'Idioma'),(18,6,3,'Langue'),(19,7,1,'Select'),(20,7,2,'Seleccionar'),(21,7,3,'S&eacutelectionner'),(22,8,1,'Login'),(23,8,2,'Identificaci&oacuten'),(24,8,3,'Identifiant'),(25,9,1,'User'),(26,9,2,'Usuario'),(27,9,3,'Utilisateur'),(28,10,1,'Password'),(29,10,2,'Clave'),(30,10,3,'Mot de Pass'),(31,11,1,'Sign in'),(32,11,2,'Ingresar'),(33,11,3,'Se connecter'),(34,12,1,'Keep me logged in'),(35,12,2,'No cerrar sesi&oacuten'),(36,12,3,'Rester connect&eacute'),(37,13,1,'Hosteling'),(38,13,2,'Hospedaje'),(39,13,3,'H&eacutebergement'),(40,14,1,'Mobility'),(41,14,2,'Movilidad'),(42,14,3,'Mobilit&eacute'),(43,15,1,'Hotel'),(44,15,2,'Hotel'),(45,15,3,'Hotel'),(46,16,1,'Museum'),(47,16,2,'Museo'),(48,16,3,'Mus&eacutee'),(49,17,1,'Username or password incorrect'),(50,17,2,'Usuario o clave incorrecta'),(51,17,3,'Nom d\'utilisateur ou mot de passe incorrect'),(52,18,1,'Sign Out'),(53,18,2,'Desconectar'),(54,18,3,'Se de connecter'),(55,19,1,'Loading'),(56,19,2,'Cargando'),(57,19,3,'Chargement'),(58,20,1,'Skin'),(59,20,2,'M&aacute;scara'),(60,20,3,'Peau'),(61,21,1,'News'),(62,21,2,'Noticias'),(63,21,3,'Nouvelles'),(64,22,1,'Tips'),(65,22,2,'Consejos'),(66,22,3,'Conseils'),(67,23,1,'How to start'),(68,23,2,'Como empezar'),(69,23,3,'Comment'),(70,NULL,NULL,NULL);

/*Table structure for table `typeser` */

DROP TABLE IF EXISTS `typeser`;

CREATE TABLE `typeser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stringname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `typeser` */

insert  into `typeser`(`id`,`stringname`) values (1,'strTypeSer1'),(2,'strTypeSer2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
