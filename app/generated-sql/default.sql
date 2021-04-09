
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- candle_forgot_password
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `candle_forgot_password`;

CREATE TABLE `candle_forgot_password`
(
    `id` INTEGER NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `token` VARCHAR(200) NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- candle_models
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `candle_models`;

CREATE TABLE `candle_models`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(30) NOT NULL,
    `class` VARCHAR(30) NOT NULL,
    `master` TINYINT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- candle_role
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `candle_role`;

CREATE TABLE `candle_role`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `role` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- candle_role_permission
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `candle_role_permission`;

CREATE TABLE `candle_role_permission`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `permission` VARCHAR(30) NOT NULL,
    `role_id` INTEGER NOT NULL,
    `can` TINYINT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- candle_users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `candle_users`;

CREATE TABLE `candle_users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `fname` VARCHAR(30) NOT NULL,
    `lname` VARCHAR(30) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `mobile` VARCHAR(15) NOT NULL,
    `region` VARCHAR(15) NOT NULL,
    `city` VARCHAR(15) NOT NULL,
    `zip` VARCHAR(15) NOT NULL,
    `address` TEXT NOT NULL,
    `shipping_region` VARCHAR(15) NOT NULL,
    `shipping_city` VARCHAR(15) NOT NULL,
    `shipping_zip` VARCHAR(15) NOT NULL,
    `shipping_address` TEXT NOT NULL,
    `password` VARCHAR(191) NOT NULL,
    `token` VARCHAR(100),
    `role_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `email` (`email`),
    INDEX `candle_users_fi_0b2752` (`role_id`),
    CONSTRAINT `candle_users_fk_0b2752`
        FOREIGN KEY (`role_id`)
        REFERENCES `candle_role` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- categories
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `parent_id` INTEGER NOT NULL,
    `name` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ci_sessions
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions`
(
    `id` VARCHAR(128) NOT NULL,
    `ip_address` VARCHAR(45) NOT NULL,
    `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
    `data` BLOB NOT NULL,
    INDEX `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- order_product
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `order_product`;

CREATE TABLE `order_product`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `order_id` INTEGER NOT NULL,
    `product_id` INTEGER NOT NULL,
    `product_name` VARCHAR(255) NOT NULL,
    `price` DOUBLE NOT NULL,
    `quantity` INTEGER NOT NULL,
    `subtotal` DOUBLE NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- orders
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER NOT NULL,
    `note` TEXT NOT NULL,
    `first_name` VARCHAR(30) NOT NULL,
    `last_name` VARCHAR(30) NOT NULL,
    `mobile` VARCHAR(15) NOT NULL,
    `email` VARCHAR(30) NOT NULL,
    `region` VARCHAR(15) NOT NULL,
    `city` VARCHAR(15) NOT NULL,
    `zip` VARCHAR(15) NOT NULL,
    `address` TEXT NOT NULL,
    `shipping_first_name` VARCHAR(30) NOT NULL,
    `shipping_last_name` VARCHAR(30) NOT NULL,
    `shipping_mobile` VARCHAR(15) NOT NULL,
    `shipping_email` VARCHAR(30) NOT NULL,
    `shipping_region` VARCHAR(15) NOT NULL,
    `shipping_city` VARCHAR(15) NOT NULL,
    `shipping_zip` VARCHAR(15) NOT NULL,
    `shipping_address` TEXT NOT NULL,
    `status` enum('Pending','Approved','On Delivery','Delivered') NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- products
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(65) NOT NULL,
    `price` DECIMAL NOT NULL,
    `product_cat` TINYINT NOT NULL,
    `product_image` VARCHAR(50) NOT NULL,
    `description` TEXT NOT NULL,
    `viewed` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- quiz
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `quiz`;

CREATE TABLE `quiz`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `question` TEXT NOT NULL,
    `options` TEXT NOT NULL,
    `answer` TEXT NOT NULL,
    `topic_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- revision
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `revision`;

CREATE TABLE `revision`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER NOT NULL,
    `question_id` INTEGER NOT NULL,
    `revision` INTEGER NOT NULL,
    `topic_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
