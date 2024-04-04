CREATE TABLE Giocatore(
    ID_giocatore char(50), 
    cognome char(20),
    nome char(20),
    data_nascita char (10),
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
    giorni_della_settimana char(9),
    orario integer,
    dedizione integer,
    PRIMARY KEY (ID_scheda)
);

CREATE TABLE Allenamento(
    ID_allenamento INT AUTO_INCREMENT,
    orario integer,
    descrizione varchar(1000),
    PRIMARY KEY (ID_allenamento)
);

CREATE TABLE Statistica(
    ID_statistica INT AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE comprende(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_allenamento INT,
    ID_scheda INT,
    FOREIGN KEY (ID_allenamento) REFERENCES Allenamento(ID_allenamento),
    FOREIGN KEY (ID_scheda) REFERENCES Scheda(ID_scheda)
);

CREATE TABLE riceve(
    ID AUTO_INCREMENT PRIMARY KEY,
    ID_giocatore char(50),
    ID_scheda INT AUTO_INCREMENT,
    Foreign KEY (ID_giocatore, ID_scheda)
);
