CREATE TABLE Users (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(30) NOT NULL,
    firstname varchar(30) NOT NULL,
    username varchar(30) NOT NULL,
    password BINARY(60) NOT NULL,
	email varchar(128) NOT NULL,
    PRIMARY KEY (id)
 	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    
INSERT INTO users(name, firstname, username, password, email) VALUES ('Lamoureux', 'Antoine', 'antoine', 'afpa2020', 'antoine@afpa.com'), ('Dupont', 'Pauline', 'pauline', 'monnmotdepasse', 'pauline@yahoo.fr')