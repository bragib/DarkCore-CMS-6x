ALTER TABLE `account`
ADD COLUMN `rank` TINYINT(3) UNSIGNED NULL DEFAULT '0' AFTER `battlenet_index`;