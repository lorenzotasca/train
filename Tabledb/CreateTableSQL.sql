DROP DATABASE IF EXISTS progetto;
CREATE DATABASE progetto;
USE progetto;
CREATE TABLE Giocatore(
    ID_giocatore char(50), 
    cognome char(20),
    nome char(20),
    data_nascita char (10),
    tipo char (10),
    ruolo char(20),
    standing_reach float,
    altezza_senza_scarpe float,
    apertura_alare float,
    username char(20),
    passwordCode char(255),
    PRIMARY KEY (ID_giocatore)
);

CREATE TABLE Scheda(
    ID_scheda INT AUTO_INCREMENT,
    dedizione integer,
    PRIMARY KEY (ID_scheda)
);

CREATE TABLE Allenamento(
    ID_allenamento INT AUTO_INCREMENT,
    descrizione varchar(1000),
    PRIMARY KEY (ID_allenamento)
);

CREATE TABLE Statistica(
    ID_statistica INT AUTO_INCREMENT PRIMARY KEY,
    libero integer, 
    pt_2 integer, 
    pt_3 integer, 
    scatto float, 
    salto_vert_da_fermo float, 
    salto_vert_max float
);

CREATE TABLE comprende(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_allenamento INT,
    ID_scheda INT,
    FOREIGN KEY (ID_allenamento) REFERENCES Allenamento(ID_allenamento),
    FOREIGN KEY (ID_scheda) REFERENCES Scheda(ID_scheda)
);

CREATE TABLE riceve(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_giocatore char(50),
    ID_scheda INT,
    FOREIGN KEY (ID_giocatore) REFERENCES Giocatore(ID_giocatore),
    FOREIGN KEY (ID_scheda) REFERENCES Scheda(ID_scheda)
);

CREATE TABLE registra(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_giocatore char(50),
    ID_statistica INT,
    FOREIGN KEY (ID_giocatore) REFERENCES Giocatore(ID_giocatore),
    FOREIGN KEY (ID_statistica) REFERENCES Statistica(ID_statistica)
);
