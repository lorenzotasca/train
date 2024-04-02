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
    ID_scheda char(10),
    giorni_della_settimana char(9),
    orario integer,
    dedizione integer,
    PRIMARY KEY (ID_scheda)
);

CREATE TABLE Allenamento(
    ID_allenamento char(10),
    orario integer,
    descrizione varchar(1000),
    PRIMARY KEY (ID_allenamento)
);

CREATE TABLE Statistica(
    ID_statistica char(20) PRIMARY KEY
);

CREATE TABLE comprende(
    ID_allenamento char(10),
    ID_scheda char(10),
    PRIMARY KEY (ID_allenamento, ID_scheda)
);

CREATE TABLE riceve(
    ID_giocatore char(10),
    ID_scheda char(10),
    PRIMARY KEY (ID_giocatore, ID_scheda)
);
