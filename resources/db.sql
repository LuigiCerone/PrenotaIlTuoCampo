DROP DATABASE IF EXISTS tdwproject;
CREATE DATABASE tdwproject;
USE tdwproject;

DROP TABLE IF EXISTS availability;
CREATE TABLE availability
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  user_fk    INT REFERENCES user (id),
  partner_fk INT REFERENCES partner (id),
  sport_fk   INT REFERENCES sport (id),
  date       DATE                        NOT NULL,
  time       TIME                        NULL,
  busy       TINYINT(1) DEFAULT '0'      NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS award;
CREATE TABLE award
(
  id            INT AUTO_INCREMENT
    PRIMARY KEY,
  name          VARCHAR(40) NOT NULL,
  tournament_fk INT REFERENCES tournament (id),
  place         INT         NOT NULL,
  CONSTRAINT idx
  UNIQUE (tournament_fk, place)
)
  ENGINE = InnoDB;


DROP TABLE IF EXISTS field;
CREATE TABLE field
(
  id          INT AUTO_INCREMENT
    PRIMARY KEY,
  partner_fk  INT REFERENCES partner (id),
  sport_fk    INT REFERENCES sport (id),
  outdoor     TINYINT(1) DEFAULT '1'                                            NULL,
  province_fk VARCHAR(2) REFERENCES province (sign),
  type        VARCHAR(40)                                                       NOT NULL,
  warmed      TINYINT(1) DEFAULT '0'                                            NOT NULL,
  number      INT                                                               NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS invitation;
CREATE TABLE invitation
(
  id              INT AUTO_INCREMENT
    PRIMARY KEY,
  from_user_fk    INT REFERENCES user (id),
  to_user_fk      INT REFERENCES user (id),
  date            TIMESTAMP DEFAULT CURRENT_TIMESTAMP                                            NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  status          TINYINT(1) DEFAULT '2'                                                         NOT NULL,
  availability_fk INT REFERENCES availability (id)
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS `match`;
CREATE TABLE `match`
(
  id             INT AUTO_INCREMENT
    PRIMARY KEY,
  first_team_fk  INT REFERENCES team (id),
  second_team_fk INT REFERENCES team (id),
  tournament_fk  INT REFERENCES tournament (id),
  date           DATE        NULL,
  time           TIME        NULL,
  field_fk       INT         NULL,
  day            INT         NOT NULL
  COMMENT 'Giornata del campionato',
  result         VARCHAR(20) NULL,
  FOREIGN KEY (field_fk) REFERENCES field (id)
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS partner;
CREATE TABLE partner
(
  id          INT AUTO_INCREMENT
    PRIMARY KEY,
  name        VARCHAR(30)                                            NOT NULL,
  description VARCHAR(255)                                           NOT NULL,
  region      VARCHAR(30)                                            NOT NULL,
  area        VARCHAR(2)                                             NOT NULL,
  address     VARCHAR(40)                                            NULL,
  email       VARCHAR(40)                                            NOT NULL,
  telnumber   VARCHAR(30)                                            NOT NULL,
  img         VARCHAR(500) DEFAULT 'public/images/partner_logo.jpeg' NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS user;
CREATE TABLE user
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  firstName  VARCHAR(30)                  NOT NULL,
  lastName   VARCHAR(30)                  NOT NULL,
  email      VARCHAR(100)                 NOT NULL,
  password   VARCHAR(30)                  NOT NULL,
  telnumber  VARCHAR(20)                  NULL,
  birthdate  DATE                         NULL,
  created_at DATE                         NOT NULL,
  active     TINYINT(1) DEFAULT '0'       NOT NULL,
  gender     ENUM ('M', 'F') DEFAULT 'M'  NOT NULL,
  admin      TINYINT(1) DEFAULT '0'       NOT NULL,
  partner_fk INT DEFAULT NULL             NULL,
  FOREIGN KEY (partner_fk) REFERENCES partner (id)
)
  ENGINE = InnoDB;


DROP TABLE IF EXISTS news;
CREATE TABLE news
(
  id      INT AUTO_INCREMENT
    PRIMARY KEY,
  title   VARCHAR(50) NULL,
  date    DATE        NULL,
  text    TEXT        NULL,
  user_fk INT         NULL,
  FOREIGN KEY (user_fk) REFERENCES user (id)
)
  ENGINE = InnoDB;


DROP TABLE IF EXISTS province;
CREATE TABLE province
(
  sign VARCHAR(2)  NOT NULL
    PRIMARY KEY,
  name VARCHAR(40) NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS ranking;
CREATE TABLE ranking
(
  id            INT AUTO_INCREMENT
    PRIMARY KEY,
  tournament_fk INT REFERENCES tournament (id),
  team_fk       INT REFERENCES team (id),
  point         INT DEFAULT '0'                        NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS resource;
CREATE TABLE resource
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  supply_fk  INT REFERENCES supply (id),
  partner_fk INT REFERENCES partner (id),
  available  TINYINT(1) DEFAULT '0'              NOT NULL
)
  ENGINE = InnoDB;


DROP TABLE IF EXISTS sponsor;
CREATE TABLE sponsor
(
  id   INT AUTO_INCREMENT
    PRIMARY KEY,
  name VARCHAR(40) NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS sponsor2tournament;
CREATE TABLE sponsor2tournament
(
  sponsor_fk    INT REFERENCES sponsor (id),
  tournament_fk INT REFERENCES tournament (id),
  money         INT  NOT NULL,
  date          DATE NOT NULL,
  CONSTRAINT idx
  UNIQUE (tournament_fk, sponsor_fk)
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS sport;
CREATE TABLE sport
(
  id             INT AUTO_INCREMENT
    PRIMARY KEY,
  name           VARCHAR(40) NULL,
  number_players INT         NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS supply;
CREATE TABLE supply
(
  id          INT AUTO_INCREMENT
    PRIMARY KEY,
  name        VARCHAR(255) NOT NULL,
  description VARCHAR(255) NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS team;
CREATE TABLE team
(
  id            INT AUTO_INCREMENT
    PRIMARY KEY,
  name          VARCHAR(50)  NOT NULL,
  number        INT          NOT NULL,
  user_fk       INT REFERENCES user (id),
  players       VARCHAR(500) NOT NULL,
  tournament_fk INT REFERENCES tournament (id),
  CONSTRAINT team_name_uindex
  UNIQUE (name)
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS tournament;
CREATE TABLE tournament
(
  id              INT AUTO_INCREMENT
    PRIMARY KEY,
  name            VARCHAR(40)                                        NOT NULL,
  partner_fk      INT REFERENCES partner (id),
  startDate       DATE                                               NOT NULL,
  endSubscription DATE                                               NULL,
  teamNumber      INT                                                NOT NULL,
  teamLeft        INT                                                NOT NULL,
  sport_fk        INT REFERENCES sport (id),
  scheduled       TINYINT(1) DEFAULT '0'                             NOT NULL
  COMMENT 'Se true significa che le partite sono state organizzate'
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS booking;
CREATE TABLE booking
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  date     DATE                             NOT NULL,
  time     TIME                             NOT NULL,
  user_fk  INT                              NULL,
  field_fk INT                              NULL,
  approved TINYINT(1) DEFAULT '0'           NOT NULL,
  valid    TINYINT(1) DEFAULT '1'           NOT NULL,
  FOREIGN KEY (user_fk) REFERENCES user (id),
  FOREIGN KEY (field_fk) REFERENCES field (id)
);

DROP TABLE IF EXISTS review;
CREATE TABLE review
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  user_fk  INT                           NULL,
  text     VARCHAR(255)                  NOT NULL,
  stars    INT                           NOT NULL,
  approved TINYINT(1) DEFAULT '0'        NULL,
  FOREIGN KEY (user_fk) REFERENCES user (id)
)
  ENGINE = InnoDB;

INSERT INTO `partner` (`id`, `name`, `description`, `region`, `area`, `address`, `email`, `telnumber`) VALUES
  (1, 'Paterno', 'Impianto che dispone campi di ogni tipo di sport. Moderni e praticabili.', 'Abruzzo', 'AQ',
   'Via del fosso 10', 'paterno@gmail.com', '3257548125'),
  (2, 'TorVergata',
   'Impianto situato nei pressi della capitale, Frequentato maggiormente da studenti. DisponibilitÃ  limitate.',
   'Lazio', 'RM', 'via salaria 72', 'torvergata@gmail.com', '3254515485'),
  (3, 'Fiorentina', 'Impianto di notevole importanza per le sue origini. Impianti non moderni ma efficenti', 'Toscana',
   'FI', 'via merla 80', 'fiorentina@gmail.com', '32874156256'),
  (4, 'Corropoli', 'Impinato situato sulla costa adriatica. Vista mare.', 'Abruzzo', 'TE', 'Via Ros 45',
   'corropoli@gmail.com', '32458766265');


INSERT INTO `user` (`firstName`, `lastName`, `id`, `email`, `password`, `telnumber`, `birthdate`, `created_at`, `active`, `gender`, `admin`, `partner_fk`)
VALUES
  ('Alessandro', 'Taglieri', 1, 'taglieri@gmail.com', 'taglieri', '3881938676', '1996-04-19', '2018-02-01', 1, 'M', 0,
   1),
  ('Luigi', 'Cerone', 2, 'cerone@gmail.com', 'cerone', '33315148567', '1996-09-15', '2018-02-02', 1, 'M', 1, NULL),
  ('Danilo', 'Rosati', 3, 'rosati@gmail.com', 'rosati', '3257845755', '1996-05-12', '2018-02-01', 1, 'M', 0, NULL),
  ('Serena', 'Rossi', 4, 'rossi@gmail.com', 'rossi', '3285745615', '1998-08-29', '2018-02-02', 1, 'F', 0, NULL),
  ('Massimiliano', 'Nucci', 5, 'nucci@gmail.com', 'nucci', '325874525', '1997-05-02', '2018-02-02', 1, 'M', 0, NULL),
  ('Sara', 'Bianchi', 6, 'bianchi@gmail.com', 'bianchi', '3548423654', '1987-05-01', '2018-02-03', 1, 'F', 0, NULL),
  ('Giovanni', 'Gemini', 7, 'gemini@gmail.com', 'gemini', '325415255', '1998-02-02', '2018-02-03', 1, 'M', 0, NULL),
  ('Segio', 'Cornelio', 8, 'cornelio@gmail.com', 'cornelio', '3254454866', '1995-05-05', '2018-02-02', 1, 'M', 0, 2),
  ('Andea', 'Paris', 9, 'paris@gmail.com', 'paris', '32515485', '1999-02-02', '2018-02-02', 1, 'M', 0, NULL),
  ('Mattia', 'Masci', 10, 'masci@gmail.com', 'masci', '325155625', '1996-02-02', '2018-02-02', 1, 'M', 0, NULL),
  ('Luigi', 'Fidanza', 11, 'fidanza@gmail.com', 'fidanza', '3251588916', '1998-02-02', '2018-02-02', 1, 'M', 0, NULL);

INSERT INTO `availability` (`id`, `user_fk`, `partner_fk`, `sport_fk`, `date`, `time`, `busy`) VALUES
  (1, 1, 1, 1, '2018-02-13', NULL, 1),
  (2, 7, 1, 1, '2018-02-28', '12:00:00', 0),
  (3, 3, 3, 2, '2018-02-20', NULL, 1),
  (4, 3, 3, 2, '2018-02-18', '12:00:00', 0),
  (5, 1, 3, 2, '2018-02-28', NULL, 1);

INSERT INTO `award` (`id`, `name`, `tournament_fk`, `place`) VALUES
  (1, 'medaglia d\'oro', 1, 1),
  (2, 'medaglia d\'argento', 1, 2),
  (3, 'medaglia di bronzo', 1, 3),
  (8, '333 euro', 4, 1),
  (9, '100 euro', 2, 1),
  (10, '200 euro', 4, 2),
  (11, '100 euro', 4, 3),
  (12, '5000 euro', 3, 1),
  (13, '4500 euro', 3, 2),
  (14, '2000 euro', 3, 3);


INSERT INTO `field` (`id`, `partner_fk`, `sport_fk`, `outdoor`, `province_fk`, `type`, `warmed`, `number`) VALUES
  (1, 1, 1, 1, 'AQ', 'erba', 0, 1),
  (2, 2, 1, 0, 'RM', 'tera', 0, 1),
  (3, 2, 3, 1, 'RM', 'terra', 0, 2),
  (4, 3, 4, 1, 'FI', 'parquet', 1, 1),
  (5, 3, 1, 1, 'FI', 'erba', 0, 2),
  (6, 4, 1, 1, 'TE', 'erba', 0, 1),
  (7, 1, 5, 1, 'AQ', 'erba sintetica', 0, 2),
  (8, 1, 4, 1, 'AQ', 'Parquet', 0, 3),
  (9, 3, 2, 1, 'FI', 'Parquet', 0, 2);

INSERT INTO `booking` (`id`, `date`, `time`, `user_fk`, `field_fk`, `approved`, `valid`) VALUES
  (1, '2018-02-21', '11:00:00', NULL, 2, 0, 1),
  (2, '2018-02-13', '13:00:00', 1, 1, 1, 1),
  (3, '2018-02-12', '14:00:00', 1, 1, 1, 1),
  (14, '2018-02-10', '14:00:00', 3, 1, 1, 1),
  (15, '2018-02-5', '14:00:00', 3, 2, 1, 1),
  (16, '2018-02-6', '14:00:00', 3, 1, 1, 1),
  (4, '2018-02-11', '14:00:00', 3, 3, 1, 1),
  (17, '2018-02-8', '14:00:00', 3, 1, 1, 1),
  (18, '2018-02-4', '14:00:00', 3, 5, 1, 1),
  (5, '2018-02-28', '12:00:00', 1, 1, 0, 0),
  (6, '2018-02-15', '13:00:00', 1, 6, 1, 1),
  (7, '2018-02-22', '11:00:00', 7, 7, 1, 0),
  (8, '2018-02-27', '13:00:00', 1, 7, 1, 1),
  (9, '2018-02-13', '13:00:00', 7, 8, 0, 1),
  (10, '2018-02-20', '13:00:00', 4, 9, 1, 1),
  (11, '2018-02-20', '12:00:00', 1, 9, 1, 1),
  (12, '2018-02-18', '12:00:00', 4, 9, 0, 1),
  (13, '2018-02-28', '18:00:00', 4, 9, 0, 1);

INSERT INTO `invitation` (`id`, `from_user_fk`, `to_user_fk`, `date`, `status`, `availability_fk`) VALUES
  (1, 9, 1, '2018-02-05 11:40:06', 1, 1),
  (2, 1, 3, '2018-02-06 15:52:48', 1, 3),
  (3, 4, 3, '2018-02-06 15:58:09', 2, 4),
  (4, 4, 1, '2018-02-06 17:10:08', 1, 5);

INSERT INTO `match` (`id`, `first_team_fk`, `second_team_fk`, `tournament_fk`, `date`, `time`, `field_fk`, `day`, `result`)
VALUES
  (1, 2, 10, 2, '2018-02-21', '11:00:00', 2, 0, '1-2'),
  (2, 3, 4, 2, NULL, NULL, NULL, 0, NULL),
  (3, 5, 9, 2, NULL, NULL, NULL, 0, NULL),
  (4, 6, 7, 2, NULL, NULL, NULL, 0, NULL),
  (5, 12, 11, 2, NULL, NULL, NULL, 0, NULL),
  (6, 4, 2, 2, NULL, NULL, NULL, 1, NULL),
  (7, 7, 12, 2, NULL, NULL, NULL, 1, NULL),
  (8, 9, 6, 2, NULL, NULL, NULL, 1, NULL),
  (9, 10, 5, 2, NULL, NULL, NULL, 1, NULL),
  (10, 11, 3, 2, NULL, NULL, NULL, 1, NULL),
  (11, 2, 11, 2, NULL, NULL, NULL, 2, NULL),
  (12, 3, 7, 2, NULL, NULL, NULL, 2, NULL),
  (13, 5, 4, 2, NULL, NULL, NULL, 2, NULL),
  (14, 10, 9, 2, NULL, NULL, NULL, 2, NULL),
  (15, 12, 6, 2, NULL, NULL, NULL, 2, NULL),
  (16, 4, 10, 2, NULL, NULL, NULL, 3, NULL),
  (17, 6, 3, 2, NULL, NULL, NULL, 3, NULL),
  (18, 7, 2, 2, NULL, NULL, NULL, 3, NULL),
  (19, 9, 12, 2, NULL, NULL, NULL, 3, NULL),
  (20, 11, 5, 2, NULL, NULL, NULL, 3, NULL),
  (21, 2, 6, 2, NULL, NULL, NULL, 4, NULL),
  (22, 3, 12, 2, NULL, NULL, NULL, 4, NULL),
  (23, 4, 9, 2, NULL, NULL, NULL, 4, NULL),
  (24, 5, 7, 2, NULL, NULL, NULL, 4, NULL),
  (25, 10, 11, 2, NULL, NULL, NULL, 4, NULL),
  (26, 6, 5, 2, NULL, NULL, NULL, 5, NULL),
  (27, 7, 10, 2, NULL, NULL, NULL, 5, NULL),
  (28, 9, 3, 2, NULL, NULL, NULL, 5, NULL),
  (29, 11, 4, 2, NULL, NULL, NULL, 5, NULL),
  (30, 12, 2, 2, NULL, NULL, NULL, 5, NULL),
  (31, 2, 3, 2, NULL, NULL, NULL, 6, NULL),
  (32, 4, 7, 2, NULL, NULL, NULL, 6, NULL),
  (33, 5, 12, 2, NULL, NULL, NULL, 6, NULL),
  (34, 10, 6, 2, NULL, NULL, NULL, 6, NULL),
  (35, 11, 9, 2, NULL, NULL, NULL, 6, NULL),
  (36, 2, 9, 2, NULL, NULL, NULL, 7, NULL),
  (37, 3, 5, 2, NULL, NULL, NULL, 7, NULL),
  (38, 6, 4, 2, NULL, NULL, NULL, 7, NULL),
  (39, 7, 11, 2, NULL, NULL, NULL, 7, NULL),
  (40, 12, 10, 2, NULL, NULL, NULL, 7, NULL),
  (41, 4, 12, 2, NULL, NULL, NULL, 8, NULL),
  (42, 5, 2, 2, NULL, NULL, NULL, 8, NULL),
  (43, 9, 7, 2, NULL, NULL, NULL, 8, NULL),
  (44, 10, 3, 2, NULL, NULL, NULL, 8, NULL),
  (45, 11, 6, 2, NULL, NULL, NULL, 8, NULL);

INSERT INTO `news` (`id`, `title`, `date`, `text`, `user_fk`) VALUES
  (3, 'Inserimento del centro sportivo Paterno', '2018-02-02', 'E\' inserita una nuova azienda.',
   2),
  (4, 'Torneo terminato', '2018-02-02', 'Si e concluso il torneo Serie C.',
   2),
  (1, 'Creazione torneo', '2018-02-02', 'E\' stato creato il torneo Serie A. Sport: Calcio. Partecipanti: 10 squadre',
   2),
  (2, 'Creazione sito', '2018-02-01', 'E\' stato creato il sito \"PRENOTAILTUOCAMPO\"', 2);


INSERT INTO `province` (`sign`, `name`) VALUES
  ('AG', 'Agrigento'),
  ('AL', 'Alessandria'),
  ('AN', 'Ancona'),
  ('AO', 'Aosta'),
  ('AP', 'Ascoli Piceno'),
  ('AQ', 'L\'Aquila'),
  ('AR', 'Arezzo'),
  ('AT', 'Asti'),
  ('AV', 'Avellino'),
  ('BA', 'Bari'),
  ('BG', 'Bergamo'),
  ('BI', 'Biella'),
  ('BL', 'Belluno'),
  ('BN', 'Benevento'),
  ('BO', 'Bologna'),
  ('BR', 'Brindisi'),
  ('BS', 'Brescia'),
  ('BT', 'Barletta-Andria-Trani'),
  ('BZ', 'Bolzano'),
  ('CA', 'Cagliari'),
  ('CB', 'Campobasso'),
  ('CE', 'Caserta'),
  ('CH', 'Chieti'),
  ('CI', 'Carbonia-Iglesias'),
  ('CL', 'Caltanissetta'),
  ('CN', 'Cuneo'),
  ('CO', 'Como'),
  ('CR', 'Cremona'),
  ('CS', 'Cosenza'),
  ('CT', 'Catania'),
  ('CZ', 'Catanzaro'),
  ('EN', 'Enna'),
  ('FC', 'ForlÃ¬-Cesena'),
  ('FE', 'Ferrara'),
  ('FG', 'Foggia'),
  ('FI', 'Firenze'),
  ('FM', 'Fermo'),
  ('FR', 'Frosinone'),
  ('GE', 'Genova'),
  ('GO', 'Gorizia'),
  ('GR', 'Grosseto'),
  ('IM', 'Imperia'),
  ('IS', 'Isernia'),
  ('KR', 'Crotone'),
  ('LC', 'Lecco'),
  ('LE', 'Lecce'),
  ('LI', 'Livorno'),
  ('LO', 'Lodi'),
  ('LT', 'Latina'),
  ('LU', 'Lucca'),
  ('MB', 'Monza e della Brianza'),
  ('MC', 'Macerata'),
  ('ME', 'Messina'),
  ('MI', 'Milano'),
  ('MN', 'Mantova'),
  ('MO', 'Modena'),
  ('MS', 'Massa-Carrara'),
  ('MT', 'Matera'),
  ('NA', 'Napoli'),
  ('NO', 'Novara'),
  ('NU', 'Nuoro'),
  ('OG', 'Ogliastra'),
  ('OR', 'Oristano'),
  ('OT', 'Olbia-Tempio'),
  ('PA', 'Palermo'),
  ('PC', 'Piacenza'),
  ('PD', 'Padova'),
  ('PE', 'Pescara'),
  ('PG', 'Perugia'),
  ('PI', 'Pisa'),
  ('PN', 'Pordenone'),
  ('PO', 'Prato'),
  ('PR', 'Parma'),
  ('PT', 'Pistoia'),
  ('PU', 'Pesaro e Urbino'),
  ('PV', 'Pavia'),
  ('PZ', 'Potenza'),
  ('RA', 'Ravenna'),
  ('RC', 'Reggio Calabria'),
  ('RE', 'Reggio Emilia'),
  ('RG', 'Ragusa'),
  ('RI', 'Rieti'),
  ('RM', 'Roma'),
  ('RN', 'Rimini'),
  ('RO', 'Rovigo'),
  ('SA', 'Salerno'),
  ('SI', 'Siena'),
  ('SO', 'Sondrio'),
  ('SP', 'La Spezia'),
  ('SR', 'Siracusa'),
  ('SS', 'Sassari'),
  ('SV', 'Savona'),
  ('TA', 'Taranto'),
  ('TE', 'Teramo'),
  ('TN', 'Trento'),
  ('TO', 'Torino'),
  ('TP', 'Trapani'),
  ('TR', 'Terni'),
  ('TS', 'Trieste'),
  ('TV', 'Treviso'),
  ('UD', 'Udine'),
  ('VA', 'Varese'),
  ('VB', 'Verbano-Cusio-Ossola'),
  ('VC', 'Vercelli'),
  ('VE', 'Venezia'),
  ('VI', 'Vicenza'),
  ('VR', 'Verona'),
  ('VS', 'Medio Campidano'),
  ('VT', 'Viterbo'),
  ('VV', 'Vibo Valentia');

INSERT INTO `ranking` (`id`, `tournament_fk`, `team_fk`, `point`) VALUES
  (1, 2, 2, 0),
  (2, 2, 3, 0),
  (3, 2, 5, 0),
  (4, 2, 6, 0),
  (5, 2, 12, 0),
  (6, 2, 4, 0),
  (7, 2, 7, 0),
  (8, 2, 9, 0),
  (9, 2, 10, 3),
  (10, 2, 11, 0);

INSERT INTO `review` (`id`, `user_fk`, `text`, `stars`, `approved`) VALUES
  (1, 1, 'Sito molto utile.', 3, 1),
  (2, 4, 'Il campo dell\'azienda A.S. Paterno Ã¨ spettacolare', 5, 0),
  (3, 3, 'Interesante', 2, 1),
  (4, 1, 'Bello', 1, 1),
  (5, 1, 'Sito interessante', 5, 0);

INSERT INTO `sponsor` (`id`, `name`) VALUES
  (1, 'Adidas'),
  (2, 'Nike'),
  (3, 'Puma'),
  (4, 'Amazon');

INSERT INTO `sponsor2tournament` (`sponsor_fk`, `tournament_fk`, `money`, `date`) VALUES
  (1, 1, 200, '2018-02-07'),
  (1, 2, 350, '2018-02-02'),
  (2, 1, 1000, '2018-02-01'),
  (2, 2, 1500, '2018-02-05');

INSERT INTO `sport` (`id`, `name`, `number_players`) VALUES
  (1, 'Calcetto', 10),
  (2, 'Basket', 12),
  (3, 'Pallavolo', 12),
  (4, 'Pallamano', 13),
  (5, 'Calcio', 18);

INSERT INTO `supply` (`id`, `name`, `description`) VALUES
  (1, 'casacca', ''),
  (2, 'doccia', ''),
  (3, 'pallone da calcio', ''),
  (4, 'pallone da basket', ''),
  (5, 'pallone da pallavolo', ''),
  (6, 'pallone da pallamano', ''),
  (7, 'pallone da calcetto', '');


INSERT INTO `team` (`id`, `name`, `number`, `user_fk`, `players`, `tournament_fk`) VALUES
  (1, 'JUVE', 1, 1,
   '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI <br>AMERIGO ROSSI <br>PAOLA FRACASSI <br>MITICO PAOLINO <br>DANILO BIANCHI <br>ALFIO RAGUSA <br>DANIELE LALLONE <br>LUIGI FIDANZA <br>LUIGI CERONE <br>LORETO CICERONE <br>',
   1),
  (2, 'INTER', 1, 3, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (3, 'MILAN', 10, 7, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (4, 'SAMPDORIA', 2, 4, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (5, 'GENOA', 4, 6, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (6, 'LAZIO', 5, 9, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (7, 'ROMA', 7, 10, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (9, 'CAGLIARI', 8, 11, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (10, 'PESCARA', 4, 5, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (11, 'FOGGIA', 5, 8, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2),
  (12, 'SALERNITANA', 44, 1, '<br>ALE ROSATI <br>GIACOMO ROSSI <br>POLLO MARCIO <br>DAVIDE FRACASSI <br>SERGIO BIANCHI <br>FILIPPO CERASOLI <br>SERGIO TAGLIERI <br>AGOSTINO BIANCHI ', 2);

INSERT INTO `tournament` (`id`, `name`, `partner_fk`, `startDate`, `endSubscription`, `teamNumber`, `teamLeft`, `sport_fk`, `scheduled`)
VALUES
  (1, 'Serie A', 1, '2018-02-24', '2018-02-22', 10, 9, 5, 0),
  (2, 'A1', 2, '2018-02-25', '2018-02-23', 10, 0, 1, 1),
  (3, 'Serie B', 2, '2018-02-26', '2018-02-24', 10, 10, 3, 0),
  (4, 'Serie B', 1, '2018-02-28', '2018-02-20', 10, 10, 5, 0);
