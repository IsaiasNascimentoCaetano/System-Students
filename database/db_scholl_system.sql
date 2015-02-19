CREATE DATABASE iF NOT EXISTS db_scholl_system;

use db_scholl_system;

CREATE TABLE Type_User(

	 id_Type INT NOT NULL AUTO_INCREMENT,
         Name_of_type VARCHAR(30) NOT NULL,
	 PRIMARY KEY(id_Type)
);

CREATE TABLE Login(

	id_Login INT NOT NULL AUTO_INCREMENT,
	id_Type INT NOT NULL,
	Full_name VARCHAR(45) NOT NULL,
	Email VARCHAR(45) NOT NULL,
	Age INT NOT NULL,
	RG VARCHAR (20) NOT NULL,
	PRIMARY KEY (id_Login),
	FOREIGN KEY (id_Type) REFERENCES Type_User(id_Type)

);

CREATE TABLE Administration(

	id_Administration INT NOT NULL AUTO_INCREMENT,
	id_Login INT NOT NULL,
	Senior_position VARCHAR(20) NOT NULL,
	PRIMARY KEY (id_Administration),
 	FOREIGN KEY (id_Login) REFERENCES Login(id_Login)		

);

CREATE TABLE Student(

	id_Student INT NOT NULL AUTO_INCREMENT,
	id_Login INT NOT NULL,
	Call_Number INT NOT NULL,
 	PRIMARY KEY (id_Student),
	FOREIGN KEY (id_Login) REFERENCES Login(id_Login)	

);

CREATE TABLE Curricular_Component(

	id_Curricular_Component INT NOT NULL AUTO_INCREMENT,
	Name VARCHAR(25) NOT NULL,
	Number_of_classes INT NOT NULL,
	PRIMARY KEY (id_Curricular_Component)

);

CREATE TABLE Teachers(

	id_Teachers INT NOT NULL AUTO_INCREMENT,
	id_Login INT NOT NULL,
	id_Curricular_Component INT NOT NULL,
	Amont_of_classes INT NOT NULL,
	PRIMARY KEY (id_Teachers),
	FOREIGN KEY (id_Login) REFERENCES Login(id_Login),
	FOREIGN KEY (id_Curricular_Component) REFERENCES Curricular_Component(id_Curricular_Component)

);
CREATE TABLE Notes(

	id_Notes INT NOT NULL AUTO_INCREMENT,
	id_Student INT NOT NULL,
	id_Curricular_Component INT NOT NULL,
	Note VARCHAR(30) NOT NULL,
	PRIMARY KEY (id_Notes),
	FOREIGN KEY (id_Student) REFERENCES Student(id_Student),
	FOREIGN KEY (id_Curricular_Component) REFERENCES Curricular_Component(id_Curricular_Component)

);


INSERT INTO Type_User(Name_of_type) VALUES ('Administration');
INSERT INTO Type_User(Name_of_type) VALUES ('Teacher');
INSERT INTO Type_User(Name_of_type) VALUES ('Student');

INSERT INTO Login(id_Type,Full_name,Email,Age,RG) VALUES (1,'root','root',100,'root');

INSERT INTO Administration(id_Login,Senior_position) VALUES (1,'Administrador-Root');


