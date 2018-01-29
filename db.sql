CREATE DATABASE tdwproject;
USE tdwproject;


CREATE TABLE availability
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  user_fk    INT  NOT NULL,
  partner_fk INT  NOT NULL,
  sport_fk   INT  NOT NULL,
  date       DATE NOT NULL,
  time       TIME NULL
)
  ENGINE = InnoDB;

CREATE TABLE award
(
  id            INT AUTO_INCREMENT
    PRIMARY KEY,
  name          VARCHAR(40) NOT NULL,
  tournament_fk INT         NOT NULL,
  place         INT         NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE booking
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  date     DATE                   NOT NULL,
  time     TIME                   NOT NULL,
  user_fk  INT                    NOT NULL,
  field_fk INT                    NULL,
  approved TINYINT(1) DEFAULT '0' NOT NULL,
  valid    TINYINT(1) DEFAULT '1' NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE field
(
  id          INT AUTO_INCREMENT
    PRIMARY KEY,
  partner_fk  INT                    NOT NULL,
  sport_fk    INT                    NOT NULL,
  outdoor     TINYINT(1) DEFAULT '1' NOT NULL,
  province_fk VARCHAR(2)             NOT NULL,
  type        VARCHAR(40)            NOT NULL,
  warmed      TINYINT(1) DEFAULT '0' NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE partner
(
  id          INT AUTO_INCREMENT
    PRIMARY KEY,
  name        VARCHAR(30)  NOT NULL,
  description VARCHAR(255) NOT NULL,
  region      VARCHAR(30)  NOT NULL,
  area        VARCHAR(2)   NOT NULL,
  address     VARCHAR(40)  NOT NULL,
  email       VARCHAR(40)  NOT NULL,
  telnumber   VARCHAR(30)  NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE province
(
  sign VARCHAR(2)  NOT NULL
    PRIMARY KEY,
  name VARCHAR(40) NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE review
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  user_fk  INT                    NOT NULL,
  text     VARCHAR(255)           NOT NULL,
  stars    INT                    NOT NULL,
  approved TINYINT(1) DEFAULT '0' NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE sponsor
(
  id   INT AUTO_INCREMENT
    PRIMARY KEY,
  name VARCHAR(40) NOT NULL,
  type VARCHAR(50) NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE sponsor2tournament
(
  sponsor_fk    INT  NOT NULL,
  tournament_fk INT  NOT NULL,
  money         INT  NOT NULL,
  date          DATE NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE sport
(
  id             INT AUTO_INCREMENT
    PRIMARY KEY,
  name           VARCHAR(40) NULL,
  number_players INT         NULL
)
  ENGINE = InnoDB;

CREATE TABLE team
(
  id     INT AUTO_INCREMENT
    PRIMARY KEY,
  name   VARCHAR(50) NOT NULL,
  number INT         NOT NULL,
  CONSTRAINT team_name_uindex
  UNIQUE (name)
)
  ENGINE = InnoDB;

CREATE TABLE tournament
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  name       VARCHAR(40) NOT NULL,
  partner_fk INT         NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE user
(
  firstName  VARCHAR(30)                 NOT NULL,
  lastName   VARCHAR(30)                 NOT NULL,
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  email      VARCHAR(100)                NOT NULL,
  password   VARCHAR(30)                 NOT NULL,
  telnumber  VARCHAR(20)                 NOT NULL,
  birthdate  DATE                        NOT NULL,
  created_at DATE                        NOT NULL,
  active     TINYINT(1) DEFAULT '0'      NOT NULL,
  tokenCode  VARCHAR(100)                NOT NULL,
  gender     ENUM ('M', 'F') DEFAULT 'M' NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE user2team
(
  user_fk INT                    NOT NULL,
  team_fk INT                    NOT NULL,
  status  TINYINT(1) DEFAULT '0' NOT NULL
)
  ENGINE = InnoDB;

