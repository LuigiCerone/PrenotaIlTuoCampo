CREATE DATABASE tdwproject;
USE tdwproject;

DROP TABLE IF EXISTS availability;
CREATE TABLE availability
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  user_fk    INT REFERENCES user (id)    NOT NULL,
  partner_fk INT REFERENCES partner (id) NOT NULL,
  sport_fk   INT REFERENCES sport (id)   NOT NULL,
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
  name          VARCHAR(40)                    NOT NULL,
  tournament_fk INT REFERENCES tournament (id) NOT NULL,
  place         INT                            NOT NULL,
  CONSTRAINT idx
  UNIQUE (tournament_fk, place)
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS booking;
CREATE TABLE booking
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  date     DATE                             NOT NULL,
  time     TIME                             NOT NULL,
  user_fk  INT REFERENCES user (id)         NULL,
  field_fk INT REFERENCES field (id)        NULL,
  approved TINYINT(1) DEFAULT '0'           NOT NULL,
  valid    TINYINT(1) DEFAULT '1'           NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS field;
CREATE TABLE field
(
  id          INT AUTO_INCREMENT
    PRIMARY KEY,
  partner_fk  INT REFERENCES partner (id)                                       NOT NULL,
  sport_fk    INT REFERENCES sport (id)                                         NOT NULL,
  outdoor     TINYINT(1) DEFAULT '1'                                            NULL,
  province_fk VARCHAR(2) REFERENCES province (sign)                             NOT NULL,
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
  from_user_fk    INT REFERENCES user (id)                                                       NOT NULL,
  to_user_fk      INT REFERENCES user (id)                                                       NOT NULL,
  date            TIMESTAMP DEFAULT CURRENT_TIMESTAMP                                            NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  status          TINYINT(1) DEFAULT '2'                                                         NOT NULL,
  availability_fk INT REFERENCES availability (id)                                               NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS `match`;
CREATE TABLE `match`
(
  id             INT AUTO_INCREMENT
    PRIMARY KEY,
  first_team_fk  INT REFERENCES team (id)                                  NOT NULL,
  second_team_fk INT REFERENCES team (id)                                  NOT NULL,
  tournament_fk  INT REFERENCES tournament (id)                            NOT NULL,
  date           DATE                                                      NULL,
  time           TIME                                                      NULL,
  field_fk       INT REFERENCES field (id)                                 NULL,
  day            INT                                                       NOT NULL
  COMMENT 'Giornata del campionato',
  result         VARCHAR(20)                                               NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS news;
CREATE TABLE news
(
  id      INT AUTO_INCREMENT
    PRIMARY KEY,
  title   VARCHAR(30)                   NULL,
  date    DATE                          NULL,
  text    TEXT                          NULL,
  user_fk INT REFERENCES user (id)      NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS partner;
CREATE TABLE partner
(
  id          INT AUTO_INCREMENT
    PRIMARY KEY,
  name        VARCHAR(30)  NOT NULL,
  description VARCHAR(255) NOT NULL,
  region      VARCHAR(30)  NOT NULL,
  area        VARCHAR(2)   NOT NULL,
  address     VARCHAR(40)  NULL,
  email       VARCHAR(40)  NOT NULL,
  telnumber   VARCHAR(30)  NOT NULL
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
  tournament_fk INT REFERENCES tournament (id)         NOT NULL,
  team_fk       INT REFERENCES team (id)               NOT NULL,
  point         INT DEFAULT '0'                        NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS resource;
CREATE TABLE resource
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  supply_fk  INT REFERENCES supply (id)          NOT NULL,
  partner_fk INT REFERENCES partner (id)         NOT NULL,
  available  TINYINT(1) DEFAULT '0'              NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS review;
CREATE TABLE review
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  user_fk  INT REFERENCES user (id)      NOT NULL,
  text     VARCHAR(255)                  NOT NULL,
  stars    INT                           NOT NULL,
  approved TINYINT(1) DEFAULT '0'        NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS sponsor;
CREATE TABLE sponsor
(
  id   INT AUTO_INCREMENT
    PRIMARY KEY,
  name VARCHAR(40) NOT NULL,
  type VARCHAR(50) NOT NULL
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS sponsor2tournament;
CREATE TABLE sponsor2tournament
(
  sponsor_fk    INT REFERENCES sponsor (id)    NOT NULL,
  tournament_fk INT REFERENCES tournament (id) NOT NULL,
  money         INT                            NOT NULL,
  date          DATE                           NOT NULL,
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
  name          VARCHAR(50)                     NOT NULL,
  number        INT                             NOT NULL,
  user_fk       INT REFERENCES user (id)        NOT NULL,
  players       VARCHAR(255)                    NOT NULL,
  tournament_fk INT REFERENCES tournament (id)  NOT NULL,
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
  partner_fk      INT REFERENCES partner (id)                        NOT NULL,
  startDate       DATE                                               NOT NULL,
  endSubscription DATE                                               NULL,
  teamNumber      INT                                                NOT NULL,
  teamLeft        INT                                                NOT NULL,
  sport_fk        INT REFERENCES sport (id)                          NOT NULL,
  scheduled       TINYINT(1) DEFAULT '0'                             NOT NULL
  COMMENT 'Se true significa che le partite sono state organizzate'
)
  ENGINE = InnoDB;

DROP TABLE IF EXISTS user;
CREATE TABLE user
(
  firstName  VARCHAR(30)                 NOT NULL,
  lastName   VARCHAR(30)                 NOT NULL,
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  email      VARCHAR(100)                NOT NULL,
  password   VARCHAR(30)                 NOT NULL,
  telnumber  VARCHAR(20)                 NULL,
  birthdate  DATE                        NULL,
  created_at DATE                        NOT NULL,
  active     TINYINT(1) DEFAULT '0'      NOT NULL,
  gender     ENUM ('M', 'F') DEFAULT 'M' NOT NULL,
  admin      TINYINT(1) DEFAULT '0'      NOT NULL
)
  ENGINE = InnoDB;

