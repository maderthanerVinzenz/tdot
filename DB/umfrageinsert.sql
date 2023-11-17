--1
INSERT INTO t_Fragedef(Bez) VALUES ("Ich interessiere mich dafür ein eigenes Programm zu erstellen");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte unterschiedliche Programmiersprachen erlernen");
--2
INSERT INTO t_Fragedef(Bez) VALUES ("Ich interessiere mich für KI-Programme, wie ChatGPT u.ä.");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte lernen wie man KI für hochkomplexe Anwendungen einsetzt.");
--3
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte lernen, wie man ein eigenes Netzwerk erstellt");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte wissen, wie ich mein Netzwerk vor Hackern schütze.");
--4
INSERT INTO t_Fragedef(Bez) VALUES ("Ich interessiere mich für Fotobearbeitung");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte eine eigene Webseite designen und erstellen");
--5
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte wissen, wie ich verschlüsselt kommuniziere");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte wissen, wie ich mein Netzwerk vor Hackern schütze.");
--6
INSERT INTO t_Fragedef(Bez) VALUES ("Ich interessiere mich für die Speicherung und Verwaltung großer Datenmengen.");
--7
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte einen eigenen Server betreiben.");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich interessiere mich für die Grundlagen der Elektrotechnik.");
--8
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte wissen, wie ein IT-Projekt abläuft");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich will IT-Projekte planen, leiten und durchführen.");
--9
INSERT INTO t_Fragedef(Bez) VALUES ("Ich will eine Schule mit moderner Ausstattung besuchen.");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte Teil einer aktiven Schulgemeinschaft sein.");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich möchte den schulinternen Fitnessraum nutzen");
INSERT INTO t_Fragedef(Bez) VALUES ("Ich will an zahlreichen, abwechslungsreichen Ausflügen und Exkursionen teilnehmen.");

INSERT INTO t_Fachdef(Fach) VALUES ("SEW");
INSERT INTO t_Fachdef(Fach) VALUES ("KI");
INSERT INTO t_Fachdef(Fach) VALUES ("NWT");
INSERT INTO t_Fachdef(Fach) VALUES ("MEDT");
INSERT INTO t_Fachdef(Fach) VALUES ("CS");
INSERT INTO t_Fachdef(Fach) VALUES ("INSY");
INSERT INTO t_Fachdef(Fach) VALUES ("SYT");
INSERT INTO t_Fachdef(Fach) VALUES ("PM");
INSERT INTO t_Fachdef(Fach) VALUES ("SA");
--1
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (1, 1);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (1, 2);
--2
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (2, 3);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (2, 4);
--3
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (3, 5);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (3, 6);
--4
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (4, 7);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (4, 8);
--5
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (5, 9);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (5, 10);
--6
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (6, 11);
--7
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (7, 12);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (7, 13);
--8
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (8, 14);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (8, 15);
--9
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (9, 16);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (9, 17);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (9, 18);
INSERT INTO t_FachFrageDef(FachID, FragenID) VALUES (9, 19);

INSERT INTO t_Persdef(PLZ) Values (3324);
INSERT INTO t_Persdef(PLZ) Values (3320);
INSERT INTO t_Persdef(PLZ) Values (3334);

INSERT INTO t_umfrage(TST, FragenID, PersID) VALUES ("2012-08-04", 1, 1);
INSERT INTO t_umfrage(TST, FragenID, PersID) VALUES ("2012-08-05", 2, 2);
INSERT INTO t_umfrage(TST, FragenID, PersID) VALUES ("2012-08-06", 3, 3);
INSERT INTO t_umfrage(TST, FragenID, PersID) VALUES ("2012-08-06", 3, 3);
