CREATE TABLE `SITE_DB`.`item_shoppinglist` (
  `id` int(11) NOT NULL auto_increment,
  `item_id` int(11) NOT NULL,
  

	`name` varchar(100) NOT NULL,
	`v_text` text NOT NULL DEFAULT '',
	`select` text NOT NULL DEFAULT '',


  PRIMARY KEY  (`id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `item_shoppinglist_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `SITE_DB`.`items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;