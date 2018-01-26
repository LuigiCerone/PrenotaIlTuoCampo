CREATE DATABASE tdwproject;
USE tdwproject;

CREATE TABLE booking
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  date     DATE NOT NULL,
  time     TIME NOT NULL,
  user_fk  INT  NOT NULL,
  field_fk INT  NULL
)
  ENGINE = InnoDB;

CREATE TABLE field
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  partner_fk INT                    NOT NULL,
  sport_fk   INT                    NOT NULL,
  outdoor    TINYINT(1) DEFAULT '1' NULL
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
  address     VARCHAR(40)  NULL,
  email       VARCHAR(40)  NOT NULL,
  telnumber   VARCHAR(30)  NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE review
(
  id       INT AUTO_INCREMENT
    PRIMARY KEY,
  user_fk  INT                    NOT NULL,
  text     VARCHAR(255)           NOT NULL,
  stars    INT                    NOT NULL,
  approved TINYINT(1) DEFAULT '0' NULL
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
  tokenCode  VARCHAR(100)                NOT NULL,
  gender     ENUM ('M', 'F') DEFAULT 'M' NOT NULL
)
  ENGINE = InnoDB;

