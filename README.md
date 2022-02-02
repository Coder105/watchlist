# watchlist
small coding project example

To run and test this project, first just put all of its files in a single directory.
It will not run without a database, so make sure you have MySQL running on your local environment and that you are using PHP 7.
When you have it running, create a database named "watchlist". I used "utf8_general_ci" collation.
My database user is "root" with no password, but it can be changed in the connect.php file to suit your local setup.
Lastly, run the SQL code below to create the database tables and an initial user (you can change username and password how you like.

CREATE TABLE `film` (
 `film_id` int(8) NOT NULL AUTO_INCREMENT,
 `user_id` int(8) NOT NULL,
 `title` varchar(64) NOT NULL,
 `release_date` date NOT NULL,
 `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`film_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8

CREATE TABLE `user` (
 `user_id` int(8) NOT NULL AUTO_INCREMENT,
 `username` varchar(32) NOT NULL,
 `password` varchar(32) DEFAULT NULL,
 `date_crated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8

INSERT INTO `user` (`username`, `password`) VALUES ('username', 'pw');
