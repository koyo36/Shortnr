# gulp-project-setup
Gulp setup for future projects


# DB Structure

## Table structure for table `urls`


DROP TABLE IF EXISTS `urls`;
CREATE TABLE IF NOT EXISTS `urls` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `timestamp` int(50) NOT NULL,
  `encode` varchar(255) NOT NULL,
  `counter` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
