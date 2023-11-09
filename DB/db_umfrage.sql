

CREATE TABLE t_Fachdef
(
    FachID INTEGER AUTO_INCREMENT,
    Fach VARCHAR(30),
    PRIMARY KEY(FachID)
);

CREATE TABLE t_Persdef
(
    PersID INTEGER AUTO_INCREMENT,
    PLZ INTEGER,
    PRIMARY KEY(PersID)
);

CREATE TABLE t_umfrage
(
    ID INTEGER AUTO_INCREMENT,
    TST date NOT NULL,
    FachID INTEGER NOT NULL,
    PersID INTEGER NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY(FachID) REFERENCES t_Fachdef(FachID),
    FOREIGN KEY(PersID) REFERENCES t_Persdef(PersID)
);
