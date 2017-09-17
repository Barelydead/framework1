SET NAMES utf8;
USE chju16;


DROP TABLE IF EXISTS c_comments;
DROP TABLE IF EXISTS c_users;


-- User table
CREATE TABLE `c_users`(
	id INT AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(100),
    `password` VARCHAR(200),
);

-- Comment table
CREATE TABLE `c_comments`(
    id INT AUTO_INCREMENT PRIMARY KEY,
    msg TEXT,
    post_date timestamp,
    liked INT default 0,
    FOREIGN KEY (`user`) REFERENCES `c_users`(`id`)
);
