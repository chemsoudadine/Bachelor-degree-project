CREATE TABLE `General_Chairs`(
   ID_GC INT,
   Name VARCHAR(255) NOT NULL,
   University VARCHAR(255) NOT NULL,
   Country VARCHAR(255) NOT NULL,
   username VARCHAR(50) NOT NULL,
   pswd VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID_GC)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT  INTO General_Chairs VALUES 
(1,'Chems Eddine BOUANANI','University of Saida Dr Tahar Moulay','Algeria','Chemsou','ISIL'),
(2,'Zakaria BENDAOUD','University of Saida Dr Tahar Moulay','Algeria','Zaki','Zaki');

ALTER TABLE `General_Chairs`
  MODIFY `ID_GC` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


CREATE TABLE `pgm_chairs`(
   ID_PCH INT,
   Name VARCHAR(255) NOT NULL,
   University VARCHAR(255) NOT NULL,
   Country VARCHAR(255) NOT NULL,
   PRIMARY KEY(ID_PCH)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT  INTO pgm_chairs VALUES 
(1,'Chemsou ','USMT-Saida','Algeria'),
(2,'Zaki','USMT-Saida','Algeria');

ALTER TABLE `pgm_chairs`
  MODIFY `ID_PCH` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


CREATE TABLE `Pgm_Committee`(
   ID_PC INT,
   Name VARCHAR(255) NOT NULL,
   University VARCHAR(255) NOT NULL,
   Country VARCHAR(255) NOT NULL,
   PRIMARY KEY(ID_PC)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Pgm_Committee` VALUES 
(1,'Chems Eddine BOUANANI','University of Saida Dr Tahar Moulay','Algeria'),
(2,'Zakaria BENDAOUD','University of Saida Dr Tahar Moulay','Algeria'),
(3,'Imed Salah Eddine FRIKI','University of Saida Dr Tahar Moulay','Algeria'),
(4,'Youcef AOUAD','University of Saida Dr Tahar Moulay','Algeria'),
(5,'Mansour MEKOUR','University of Saida Dr Tahar Moulay','Algeria'),
(6,'Ahmed ZAHAF','University of Saida Dr Tahar Moulay','Algeria'),
(7,'Chaouki lOKBANI','University of Saida Dr Tahar Moulay','Algeria'),
(8,'Djelloul MOKADEM','University of Saida Dr Tahar Moulay','Algeria'),
(9,'Nour Edddine ADJIR','University of Saida Dr Tahar Moulay','Algeria'),
(10,'Kadda BENYAHIA','University of Saida Dr Tahar Moulay','Algeria');


ALTER TABLE `Pgm_Committee`
  MODIFY `ID_PC` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


CREATE TABLE `org_chairs`(
   ID_OCH INT,
   Name VARCHAR(255) NOT NULL,
   University VARCHAR(255) NOT NULL,
   Country VARCHAR(255) NOT NULL,
   PRIMARY KEY(ID_OCH)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT  INTO org_chairs VALUES 
(1,'Dadine ','USMT-Saida','Algeria'),
(2,'Imed','USMT-Saida','Algeria');

ALTER TABLE `org_chairs`
  MODIFY `ID_OCH` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

CREATE TABLE `org_Committee`(
   ID_OC INT,
   Name VARCHAR(255) NOT NULL,
   University VARCHAR(255) NOT NULL,
   Country VARCHAR(255) NOT NULL,
   PRIMARY KEY(ID_OC)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `org_Committee` VALUES 
(1,'Chems Eddine BOUANANI','University of Saida Dr Tahar Moulay','Algeria'),
(2,'Zakaria BENDAOUD','University of Saida Dr Tahar Moulay','Algeria'),
(3,'Imed Salah Eddine FRIKI','University of Saida Dr Tahar Moulay','Algeria'),
(4,'Youcef AOUAD','University of Saida Dr Tahar Moulay','Algeria'),
(5,'Mansour MEKOUR','University of Saida Dr Tahar Moulay','Algeria'),
(6,'Ahmed ZAHAF','University of Saida Dr Tahar Moulay','Algeria'),
(7,'Chaouki lOKBANI','University of Saida Dr Tahar Moulay','Algeria'),
(8,'Djelloul MOKADEM','University of Saida Dr Tahar Moulay','Algeria'),
(9,'Nour Edddine ADJIR','University of Saida Dr Tahar Moulay','Algeria'),
(10,'Kadda BENYAHIA','University of Saida Dr Tahar Moulay','Algeria');


ALTER TABLE `org_Committee`
  MODIFY `ID_OC` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


CREATE TABLE `stee_committee`(
   ID_ST INT,
   Name VARCHAR(255) NOT NULL,
   University VARCHAR(255) NOT NULL,
   Country VARCHAR(255) NOT NULL,
   PRIMARY KEY(ID_ST)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `stee_committee` VALUES 
(1,'Chems Eddine BOUANANI','University of Saida Dr Tahar Moulay','Algeria'),
(2,'Zakaria BENDAOUD','University of Saida Dr Tahar Moulay','Algeria'),
(3,'Imed Salah Eddine FRIKI','University of Saida Dr Tahar Moulay','Algeria'),
(4,'Youcef AOUAD','University of Saida Dr Tahar Moulay','Algeria'),
(5,'Mansour MEKOUR','University of Saida Dr Tahar Moulay','Algeria'),
(6,'Ahmed ZAHAF','University of Saida Dr Tahar Moulay','Algeria'),
(7,'Chaouki lOKBANI','University of Saida Dr Tahar Moulay','Algeria'),
(8,'Djelloul MOKADEM','University of Saida Dr Tahar Moulay','Algeria'),
(9,'Nour Edddine ADJIR','University of Saida Dr Tahar Moulay','Algeria'),
(10,'Kadda BENYAHIA','University of Saida Dr Tahar Moulay','Algeria');


ALTER TABLE `stee_committee`
  MODIFY `ID_ST` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


CREATE TABLE `Important_Dates`(
   ID_IMP INT,
   Deadline DATE NOT NULL,
   Notification DATE NOT NULL,
   Camera_Ready DATE NOT NULL,
   ConferenceFr DATE NOT NULL,
   ConferenceTo DATE NOT NULL,
   PRIMARY KEY(ID_IMP)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `Important_Dates` VALUES
(1,'2020-10-01','2020-10-15','2020-10-20','2020-12-01','2020-12-02');


ALTER TABLE `Important_Dates`
  MODIFY `ID_IMP` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

CREATE TABLE `Sponsors`(
   ID_SP INT,
   Img BLOB NOT NULL,
   PRIMARY KEY(ID_SP)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `Sponsors`
  MODIFY `ID_SP` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


CREATE TABLE `Topics`(
   ID_TP INT,
   Title VARCHAR(255) NOT NULL,
   PRIMARY KEY(ID_TP)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Topics` VALUES 
(1,'Wireless Multimedia Systems'),
(2,'Network Security'),
(3,'Routing, Switching And Addressing Techniques'),
(4,'Network Architectures'),
(5,'Mobile Networks & Wireless LAN'),
(6,'Internet Of Things (IoT)'),
(7,'Big Data / IoT Analytics In Networking'),
(8,'Internet And Web Applications'),
(9,'Internet Measurement And Modeling'),
(10,'Machine Learning And AI In Networking');

ALTER TABLE `Topics`
  MODIFY `ID_TP` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


CREATE TABLE `Submission`(
   ID_SB INT,
   URL VARCHAR(500) NOT NULL,
   PRIMARY KEY(ID_SB)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `Submission` VALUES (1,'www.google.com');


ALTER TABLE `Submission`
  MODIFY `ID_SB` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

CREATE TABLE `Conference`(
   ID_CNF INT,
   Nom_Cnf VARCHAR(400) NOT NULL,
   Titre VARCHAR(50) NOT NULL,
   Ville VARCHAR(50) NOT NULL,
   Country VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID_CNF)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Conference` VALUES (1,'International Conference of Saida on Artificial Intelligence- 2021','ICSAI-2021','Saïda','Algeria');


ALTER TABLE `Conference`
MODIFY `ID_CNF` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
