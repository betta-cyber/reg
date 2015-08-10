CREATE TABLE IF NOT EXISTS `register` (
  `Id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT '',
  `sex` enum('男','女') DEFAULT '男',
  `img` varchar(30) NOT NULL,
  `department` varchar(20) DEFAULT '',
  `grade` varchar(8) DEFAULT '',
  `intention` varchar(8) NOT NULL DEFAULT '',
  `phone` varchar(11) NOT NULL DEFAULT '',
  `summary` varchar(255) DEFAULT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;