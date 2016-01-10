	CREATE TABLE `type_1` (
  	`id` int(10) unsigned NOT NULL auto_increment,
  	`tx_hash` varchar(100) NOT NULL,
  	`address` varchar(100) NOT NULL,
  	`amount` varchar(17) NOT NULL,
  	`complete` int(2) NOT NULL,
  	`block_no` int(20) NOT NULL,
  	PRIMARY KEY  (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


	CREATE TABLE `type_2` (
  	`id` int(10) unsigned NOT NULL auto_increment,
  	`tx_hash` varchar(100) NOT NULL,
  	`complete` int(2) NOT NULL,
  	`block_no` int(20) NOT NULL,
  	`tx_tag` varchar(100) NOT NULL,
  	PRIMARY KEY  (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;



	CREATE TABLE `type_3` (
  	`id` int(10) unsigned NOT NULL auto_increment,
  	`monitor_notify_content` varchar(4000) NOT NULL,
  	PRIMARY KEY  (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;