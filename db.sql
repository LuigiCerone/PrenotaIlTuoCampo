CREATE DATABASE tdwproject;
USE tdwproject;

CREATE TABLE availability
(
  id         INT AUTO_INCREMENT
    PRIMARY KEY,
  user_fk    INT                    NOT NULL,
  partner_fk INT                    NOT NULL,
  sport_fk   INT                    NOT NULL,
  date       DATE                   NOT NULL,
  time       TIME                   NULL,
  busy       TINYINT(1) DEFAULT '0' NOT NULL
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
  outdoor     TINYINT(1) DEFAULT '1' NULL,
  province_fk VARCHAR(2)             NOT NULL,
  type        VARCHAR(40)            NOT NULL,
  warmed      TINYINT(1) DEFAULT '0' NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE invitation
(
  id              INT AUTO_INCREMENT
    PRIMARY KEY,
  from_user_fk    INT                                 NOT NULL,
  to_user_fk      INT                                 NOT NULL,
  date            TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  status          TINYINT(1) DEFAULT '2'              NOT NULL,
  availability_fk INT                                 NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE `match`
(
  id             INT AUTO_INCREMENT
    PRIMARY KEY,
  first_team_fk  INT  NOT NULL,
  second_team_fk INT  NOT NULL,
  tournament_fk  INT  NOT NULL,
  date           DATE NULL,
  time           TIME NULL,
  field_fk       INT  NULL,
  day            INT  NOT NULL
  COMMENT 'Giornata del campionato'
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
  approved TINYINT(1) DEFAULT '0' NULL
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
  id            INT AUTO_INCREMENT
    PRIMARY KEY,
  name          VARCHAR(50)  NOT NULL,
  number        INT          NOT NULL,
  user_fk       INT          NOT NULL,
  players       VARCHAR(255) NOT NULL,
  tournament_fk INT          NOT NULL,
  CONSTRAINT team_name_uindex
  UNIQUE (name)
)
  ENGINE = InnoDB;

CREATE TABLE tournament
(
  id              INT AUTO_INCREMENT
    PRIMARY KEY,
  name            VARCHAR(40)            NOT NULL,
  partner_fk      INT                    NOT NULL,
  startDate       DATE                   NOT NULL,
  endSubscription DATE                   NULL,
  teamNumber      INT                    NOT NULL,
  teamLeft        INT                    NOT NULL,
  sport_fk        INT                    NOT NULL,
  scheduled       TINYINT(1) DEFAULT '0' NOT NULL
  COMMENT 'Se true significa che le partite sono state organizzate'
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
  gender     ENUM ('M', 'F') DEFAULT 'M' NOT NULL,
  admin      TINYINT(1) DEFAULT '0'      NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE user2team
(
  user_fk INT                    NOT NULL,
  team_fk INT                    NULL,
  status  TINYINT(1) DEFAULT '0' NOT NULL
)
  ENGINE = InnoDB;

