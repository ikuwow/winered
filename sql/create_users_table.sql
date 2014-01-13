CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` char(255) NOT NULL,
  `password` char(12) NOT NULL,
  `display_name` char(255) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;