CREATE TABLE IF NOT EXISTS `#__slideshow_slideshows` (
	`slideshow_slideshow_id` SERIAL,
	`title` VARCHAR (50) NOT NULL,

	PRIMARY KEY (`slideshow_slideshow_id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__slideshow_options` (
	`slideshow_option_id` SERIAL,
	`slideshow_slideshow_id` BIGINT(20) UNSIGNED,

	`title` VARCHAR (50) NOT NULL,
	`width` INT UNSIGNED NOT NULL,
	`height` INT UNSIGNED NOT NULL,
	`crop` TINYINT(1) DEFAULT '1',
	`greyscale` TINYINT(1) DEFAULT '0',

	PRIMARY KEY (`slideshow_option_id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `#__slideshow_images` (
	`slideshow_image_id` SERIAL,
	`slideshow_slideshow_id` BIGINT(20) UNSIGNED,

	`filename` VARCHAR (250) NOT NULL,

	PRIMARY KEY (`slideshow_image_id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
