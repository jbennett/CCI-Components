CREATE TABLE IF NOT EXISTS `#_gridview_galleries` (
	`gridview_gallery_id` SERIAL,
	`title` VARCHAR(255) NOT NULL,
	`label1` VARCHAR(255) NOT NULL DEFAULT 'Client',
	`label2` VARCHAR(255) NOT NULL,

	PRIMARY KEY (`gridview_gallery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#_gridview_samples` (
	`gridview_sample_id` SERIAL,
	`title` VARCHAR(255) NOT NULL,
	`alternate` VARCHAR(255) NOT NULL,
	`description` TEXT COMMENT '@FILTER("html, tidy")',
	`site_link` varchar(255) NOT NULL,
	`video_link` VARCHAR(255) NOT NULL,

	`ordering` BIGINT(20) UNSIGNED NOT NULL,

	`gridview_gallery_id` BIGINT(20) UNSIGNED NOT NULL,

	PRIMARY KEY (`gridview_sample_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#_gridview_images` (
	`gridview_image_id` SERIAL,
	`filename` VARCHAR(255),

	`ordering` BIGINT(20) UNSIGNED NOT NULL,

	`gridview_sample_id` BIGINT(20) UNSIGNED NOT NULL,

	PRIMARY KEY (`gridview_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

