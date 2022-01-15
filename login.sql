

CREATE TABLE userCredentials(
	id INTEGER AUTO_INCREMENT,
    userName VARCHAR(25) NOT NULL,
    loginpassword VARCHAR(25) NOT NULL,
    PRIMARY KEY (id)
);

Insert into userCredentials (userName, loginpassword)
	values('admin','secret'),('guest','password'),('moderator','123'),('ghost','password');
