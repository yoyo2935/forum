CREATE TABLE `topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(10) COLLATE utf8_unicode_ci NOT NULL,
  `ctime` int(11) NOT NULL COMMENT '话题发布时间',
  `istop` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;