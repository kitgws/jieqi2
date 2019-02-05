DROP TABLE IF EXISTS `jieqi_news_attachment`;
CREATE TABLE `jieqi_news_attachment` (
  `attachid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attachname` varchar(50) NOT NULL DEFAULT '',
  `attachtype` varchar(5) NOT NULL DEFAULT '',
  `attachpath` varchar(50) NOT NULL DEFAULT '',
  `attachsize` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attachdate` date NOT NULL,
  PRIMARY KEY (`attachid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `jieqi_news_category`;
CREATE TABLE `jieqi_news_category` (
  `categoryid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `categoryname` varchar(20) NOT NULL DEFAULT '',
  `categoryorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`categoryid`),
  KEY `parentid` (`parentid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `jieqi_news_content`;
CREATE TABLE `jieqi_news_content` (
  `newsid` int(10) unsigned NOT NULL,
  `newscontent` text NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `jieqi_news_topic`;
CREATE TABLE `jieqi_news_topic` (
  `newsid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `secondid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `newstitle` varchar(50) NOT NULL DEFAULT '',
  `newskeyword` varchar(50) DEFAULT '',
  `newssummary` varchar(255) DEFAULT '',
  `newssource` varchar(20) DEFAULT '',
  `newsimage` varchar(50) NOT NULL DEFAULT '',
  `newsputtop` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `newsclick` smallint(5) unsigned NOT NULL DEFAULT '0',
  `newsstatus` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `newsdate` date NOT NULL,
  `newshtmlpath` varchar(100) NOT NULL DEFAULT '',
  `newsauthorid` int(10) unsigned NOT NULL DEFAULT '0',
  `newsauthor` varchar(20) NOT NULL DEFAULT '',
  `newsposterid` int(10) unsigned NOT NULL DEFAULT '0',
  `newsposter` varchar(20) NOT NULL DEFAULT '',
  `newsip` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`newsid`),
  KEY `firstid` (`firstid`),
  KEY `secondid` (`secondid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

