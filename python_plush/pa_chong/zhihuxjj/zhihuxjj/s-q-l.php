<?php
CREATE TABLE `zhihu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(120) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `user_sign` varchar(120) DEFAULT NULL,
  `user_avatar` varchar(120) DEFAULT NULL,
  `user_url` varchar(120) DEFAULT NULL,
  `user_add` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;