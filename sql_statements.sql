CREATE TABLE account(
ID int not null AUTO_INCREMENT,
email VARCHAR(255),
password VARCHAR(255),
PRIMARY KEY(ID)
);

CREATE TABLE persoon(
ID int not null AUTO_INCREMENT,
voornaam VARCHAR(255),
tussenvoegsel VARCHAR(255),
achternaam VARCHAR(255),
gebruikersnaam VARCHAR(255),
account_ID int not null,
PRIMARY KEY(ID),
FOREIGN KEY(account_ID) REFERENCES account(ID)
);
