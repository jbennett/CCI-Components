CREATE TABLE `#__siimpleshow_images` (
	`simpleshow_image_id` SERIAL,
	`filename` VARCHAR( 250 ) NOT NULL ,
	`title` VARCHAR( 250 ) NOT NULL,
	`subtitle` VARCHAR( 250 ) NOT NULL,
	
	`ordering` INT( 8 ) NOT NULL
) ENGINE = InnoDB;