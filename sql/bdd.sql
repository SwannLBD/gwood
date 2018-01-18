#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        idUser      int (11) Auto_increment  NOT NULL ,
        nomUser     Varchar (25) NOT NULL ,
        prenomUser  Varchar (25) NOT NULL ,
        pseudoUser  Varchar (25) NOT NULL ,
        mailUser    Varchar (25) NOT NULL ,
        mdpUser     Varchar (25) NOT NULL ,
        dateUser    Varchar (25) NOT NULL ,
        avatarUser  Varchar (25) NOT NULL ,
        idAdresse   Int NOT NULL ,
        idAdresse_1 Int NOT NULL ,
        idPanier    Int NOT NULL ,
        PRIMARY KEY (idUser ) ,
        INDEX (idAdresse )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Instrument
#------------------------------------------------------------

CREATE TABLE Instrument(
        idInstr     int (11) Auto_increment  NOT NULL ,
        typeInstr   Varchar (25) NOT NULL ,
        refInstr    Varchar (25) NOT NULL ,
        caractInstr Varchar (25) NOT NULL ,
        prixInstr   DECIMAL (15,3)  NOT NULL ,
        descInstr   Varchar (25) NOT NULL ,
        PRIMARY KEY (idInstr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Avis
#------------------------------------------------------------

CREATE TABLE Avis(
        idAvis   int (11) Auto_increment  NOT NULL ,
        noteAvis Int NOT NULL ,
        textAvis Varchar (25) NOT NULL ,
        idUser   Int NOT NULL ,
        idInstr  Int NOT NULL ,
        PRIMARY KEY (idAvis )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Adresse
#------------------------------------------------------------

CREATE TABLE Adresse(
        idAdresse     int (11) Auto_increment  NOT NULL ,
        cpAdresse     Int NOT NULL ,
        villeAdresse  Varchar (25) NOT NULL ,
        detailAdresse Varchar (25) NOT NULL ,
        idUser        Int NOT NULL ,
        PRIMARY KEY (idAdresse )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Panier
#------------------------------------------------------------

CREATE TABLE Panier(
        idPanier int (11) Auto_increment  NOT NULL ,
        idInstr  Varchar (25) NOT NULL ,
        idUser   Int NOT NULL ,
        PRIMARY KEY (idPanier ) ,
        INDEX (idInstr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Instrument perso
#------------------------------------------------------------

CREATE TABLE Instrument_perso(
        idPers        int (11) Auto_increment  NOT NULL ,
        couleurCorps  Varchar (25) NOT NULL ,
        imgPers       Varchar (25) NOT NULL ,
        couleurCorde  Varchar (25) NOT NULL ,
        matCorde      Varchar (25) NOT NULL ,
        couleurRosace Varchar (25) NOT NULL ,
        motifRosace   Varchar (25) NOT NULL ,
        couleurBouton Varchar (25) NOT NULL ,
        couleurManche Varchar (25) NOT NULL ,
        couleurMeca   Varchar (25) NOT NULL ,
        numSerie      Int NOT NULL ,
        idInstr       Int NOT NULL ,
        idPanier      Int NOT NULL ,
        PRIMARY KEY (idPers )
)ENGINE=InnoDB;

ALTER TABLE User ADD CONSTRAINT FK_User_idAdresse_1 FOREIGN KEY (idAdresse_1) REFERENCES Adresse(idAdresse);
ALTER TABLE User ADD CONSTRAINT FK_User_idPanier FOREIGN KEY (idPanier) REFERENCES Panier(idPanier);
ALTER TABLE Avis ADD CONSTRAINT FK_Avis_idUser FOREIGN KEY (idUser) REFERENCES User(idUser);
ALTER TABLE Avis ADD CONSTRAINT FK_Avis_idInstr FOREIGN KEY (idInstr) REFERENCES Instrument(idInstr);
ALTER TABLE Adresse ADD CONSTRAINT FK_Adresse_idUser FOREIGN KEY (idUser) REFERENCES User(idUser);
ALTER TABLE Panier ADD CONSTRAINT FK_Panier_idUser FOREIGN KEY (idUser) REFERENCES User(idUser);
ALTER TABLE Instrument_perso ADD CONSTRAINT FK_Instrument_perso_idInstr FOREIGN KEY (idInstr) REFERENCES Instrument(idInstr);
ALTER TABLE Instrument_perso ADD CONSTRAINT FK_Instrument_perso_idPanier FOREIGN KEY (idPanier) REFERENCES Panier(idPanier);