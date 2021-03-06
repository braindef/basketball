CREATE USER 'marcland_telli'@'localhost' IDENTIFIED BY 'qayxswedc$';
GRANT ALL PRIVILEGES ON *.* TO 'marcland_telli'@'localhost' WITH GRANT OPTION;

CREATE DATABASE marcland_telli;

use marcland_telli;


CREATE TABLE IF NOT EXISTS `log` (
  `id` SMALLINT NOT NULL AUTO_INCREMENT,
  `timestamp` text NOT NULL,
  `ip` text NOT NULL,
  `proxy` text NOT NULL,
  `query` text NOT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS `basketball` (
  `id` SMALLINT NOT NULL AUTO_INCREMENT,
  `datum` DATE NOT NULL UNIQUE,
  `morgen` text NOT NULL,
  `abends` text NOT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS `test` (
	  `id` SMALLINT NOT NULL AUTO_INCREMENT,
	  `datum` DATE NOT NULL UNIQUE,
	  `morgen` text NOT NULL,
	  `abends` text NOT NULL,
	  PRIMARY KEY (id)
	);

INSERT INTO `test` (`datum`, `morgen`, `abends`) VALUES
	('2017-7-19', 'Hauswart Telli', '1'),
	('2017-7-20', '2', 'Hauswart Telli'),
	('2017-7-21', 'Hauswart Telli', '3'),
	('2017-7-22', 'Hauswart Telli', '4');


INSERT INTO `basketball` (`datum`, `morgen`, `abends`) VALUES
('2017-7-19', 'Hauswart Telli', ''),
('2017-7-20', 'Hauswart Telli', ''),
('2017-7-21', 'Hauswart Telli', ''),
('2017-7-22', 'Hauswart Telli', ''),
('2017-7-23', 'Hauswart Telli', ''),
('2017-7-24', 'Hauswart Telli', ''),
('2017-7-25', 'Hauswart Telli', ''),
('2017-7-26', 'Hauswart Telli', ''),
('2017-7-27', 'Hauswart Telli', ''),
('2017-7-28', 'Hauswart Telli', ''),
('2017-7-29', 'Hauswart Telli', ''),
('2017-7-30', 'Hauswart Telli', ''),
('2017-7-31', 'Hauswart Telli', ''),
('2017-8-1', 'Hauswart Telli', ''),
('2017-8-2', 'Hauswart Telli', ''),
('2017-8-3', 'Hauswart Telli', ''),
('2017-8-4', 'Hauswart Telli', ''),
('2017-8-5', 'Hauswart Telli', ''),
('2017-8-6', 'Hauswart Telli', ''),
('2017-8-7', 'Hauswart Telli', ''),
('2017-8-8', 'Hauswart Telli', ''),
('2017-8-9', 'Hauswart Telli', ''),
('2017-8-10', 'Hauswart Telli', ''),
('2017-8-11', 'Hauswart Telli', ''),
('2017-8-12', 'Hauswart Telli', ''),
('2017-8-13', 'Hauswart Telli', ''),
('2017-8-14', 'Hauswart Telli', ''),
('2017-8-15', 'Hauswart Telli', ''),
('2017-8-16', 'Hauswart Telli', ''),
('2017-8-17', 'Hauswart Telli', ''),
('2017-8-18', 'Hauswart Telli', ''),
('2017-8-19', 'Hauswart Telli', ''),
('2017-8-20', 'Hauswart Telli', ''),
('2017-8-21', 'Hauswart Telli', ''),
('2017-8-22', 'Hauswart Telli', ''),
('2017-8-23', 'Hauswart Telli', ''),
('2017-8-24', 'Hauswart Telli', ''),
('2017-8-25', 'Hauswart Telli', ''),
('2017-8-26', 'Hauswart Telli', ''),
('2017-8-27', 'Hauswart Telli', ''),
('2017-8-28', 'Hauswart Telli', ''),
('2017-8-29', 'Hauswart Telli', ''),
('2017-8-30', 'Hauswart Telli', ''),
('2017-8-31', 'Hauswart Telli', ''),
('2017-9-1', 'Hauswart Telli', ''),
('2017-9-2', '', ''),
('2017-9-3', '', ''),
('2017-9-4', '', ''),
('2017-9-5', '', ''),
('2017-9-6', '', ''),
('2017-9-7', '', ''),
('2017-9-8', '', ''),
('2017-9-9', '', ''),
('2017-9-10', '', ''),
('2017-9-11', '', ''),
('2017-9-12', '', ''),
('2017-9-13', '', ''),
('2017-9-14', '', ''),
('2017-9-15', '', ''),
('2017-9-16', 'Hauswart Telli', ''),
('2017-9-17', 'Hauswart Telli', ''),
('2017-9-18', 'Hauswart Telli', ''),
('2017-9-19', 'Hauswart Telli', ''),
('2017-9-20', 'Hauswart Telli', ''),
('2017-9-21', 'Hauswart Telli', ''),
('2017-9-22', 'Hauswart Telli', ''),
('2017-9-23', 'Hauswart Telli', ''),
('2017-9-24', 'Hauswart Telli', ''),
('2017-9-25', 'Hauswart Telli', ''),
('2017-9-26', 'Hauswart Telli', ''),
('2017-9-27', 'Hauswart Telli', ''),
('2017-9-28', 'Hauswart Telli', ''),
('2017-9-29', 'Hauswart Telli', ''),
('2017-9-30', 'Hauswart Telli', ''),
('2017-10-1', 'Hauswart Telli', ''),
('2017-10-2', 'Hauswart Telli', ''),
('2017-10-3', 'Hauswart Telli', ''),
('2017-10-4', 'Hauswart Telli', ''),
('2017-10-5', 'Hauswart Telli', ''),
('2017-10-6', 'Hauswart Telli', ''),
('2017-10-7', 'Hauswart Telli', ''),
('2017-10-8', 'Hauswart Telli', ''),
('2017-10-9', 'Hauswart Telli', ''),
('2017-10-10', 'Hauswart Telli', ''),
('2017-10-11', 'Hauswart Telli', ''),
('2017-10-12', 'Hauswart Telli', ''),
('2017-10-13', 'Hauswart Telli', ''),
('2017-10-14', 'Hauswart Telli', ''),
('2017-10-15', 'Hauswart Telli', ''),
('2017-10-16', 'Hauswart Telli', ''),
('2017-10-17', 'Hauswart Telli', ''),
('2017-10-18', 'Hauswart Telli', ''),
('2017-10-19', 'Hauswart Telli', ''),
('2017-10-20', 'Hauswart Telli', ''),
('2017-10-21', 'Hauswart Telli', ''),
('2017-10-22', 'Hauswart Telli', ''),
('2017-10-23', 'Hauswart Telli', ''),
('2017-10-24', 'Hauswart Telli', ''),
('2017-10-25', 'Hauswart Telli', ''),
('2017-10-26', 'Hauswart Telli', ''),
('2017-10-27', 'Hauswart Telli', ''),
('2017-10-28', 'Hauswart Telli', ''),
('2017-10-29', 'Hauswart Telli', ''),
('2017-10-30', 'Hauswart Telli', ''),
('2017-10-31', 'Hauswart Telli', ''),
('2017-11-1', 'Hauswart Telli', ''),
('2017-11-2', 'Hauswart Telli', ''),
('2017-11-3', 'Hauswart Telli', ''),
('2017-11-4', 'Hauswart Telli', ''),
('2017-11-5', 'Hauswart Telli', ''),
('2017-11-6', 'Hauswart Telli', ''),
('2017-11-7', 'Hauswart Telli', ''),
('2017-11-8', 'Hauswart Telli', ''),
('2017-11-9', 'Hauswart Telli', ''),
('2017-11-10', 'Hauswart Telli', ''),
('2017-11-11', 'Hauswart Telli', ''),
('2017-11-12', 'Hauswart Telli', ''),
('2017-11-13', 'Hauswart Telli', ''),
('2017-11-14', 'Hauswart Telli', ''),
('2017-11-15', 'Hauswart Telli', ''),
('2017-11-16', 'Hauswart Telli', ''),
('2017-11-17', 'Hauswart Telli', ''),
('2017-11-18', 'Hauswart Telli', ''),
('2017-11-19', 'Hauswart Telli', ''),
('2017-11-20', 'Hauswart Telli', ''),
('2017-11-21', 'Hauswart Telli', ''),
('2017-11-22', 'Hauswart Telli', ''),
('2017-11-23', 'Hauswart Telli', ''),
('2017-11-24', 'Hauswart Telli', ''),
('2017-11-25', 'Hauswart Telli', ''),
('2017-11-26', 'Hauswart Telli', ''),
('2017-11-27', 'Hauswart Telli', ''),
('2017-11-28', 'Hauswart Telli', ''),
('2017-11-29', 'Hauswart Telli', ''),
('2017-11-30', 'Hauswart Telli', ''),
('2017-12-1', 'Hauswart Telli', ''),
('2017-12-2', 'Hauswart Telli', ''),
('2017-12-3', 'Hauswart Telli', ''),
('2017-12-4', 'Hauswart Telli', ''),
('2017-12-5', 'Hauswart Telli', ''),
('2017-12-6', 'Hauswart Telli', ''),
('2017-12-7', 'Hauswart Telli', ''),
('2017-12-8', 'Hauswart Telli', ''),
('2017-12-9', 'Hauswart Telli', ''),
('2017-12-10', 'Hauswart Telli', ''),
('2017-12-11', 'Hauswart Telli', ''),
('2017-12-12', 'Hauswart Telli', ''),
('2017-12-13', 'Hauswart Telli', ''),
('2017-12-14', 'Hauswart Telli', ''),
('2017-12-15', 'Hauswart Telli', ''),
('2017-12-16', 'Hauswart Telli', ''),
('2017-12-17', 'Hauswart Telli', ''),
('2017-12-18', 'Hauswart Telli', ''),
('2017-12-19', 'Hauswart Telli', ''),
('2017-12-20', 'Hauswart Telli', ''),
('2017-12-21', 'Hauswart Telli', ''),
('2017-12-22', 'Hauswart Telli', ''),
('2017-12-23', 'Hauswart Telli', ''),
('2017-12-24', 'Hauswart Telli', ''),
('2017-12-25', 'Hauswart Telli', ''),
('2017-12-26', 'Hauswart Telli', ''),
('2017-12-27', 'Hauswart Telli', ''),
('2017-12-28', 'Hauswart Telli', ''),
('2017-12-29', 'Hauswart Telli', ''),
('2017-12-30', 'Hauswart Telli', ''),
('2017-12-31', 'Hauswart Telli', ''),
('2018-1-1', 'Hauswart Telli', ''),
('2018-1-2', 'Hauswart Telli', ''),
('2018-1-3', 'Hauswart Telli', ''),
('2018-1-4', 'Hauswart Telli', ''),
('2018-1-5', 'Hauswart Telli', ''),
('2018-1-6', 'Hauswart Telli', ''),
('2018-1-7', 'Hauswart Telli', ''),
('2018-1-8', 'Hauswart Telli', ''),
('2018-1-9', 'Hauswart Telli', ''),
('2018-1-10', 'Hauswart Telli', ''),
('2018-1-11', 'Hauswart Telli', ''),
('2018-1-12', 'Hauswart Telli', ''),
('2018-1-13', 'Hauswart Telli', ''),
('2018-1-14', 'Hauswart Telli', ''),
('2018-1-15', 'Hauswart Telli', ''),
('2018-1-16', 'Hauswart Telli', ''),
('2018-1-17', 'Hauswart Telli', ''),
('2018-1-18', 'Hauswart Telli', ''),
('2018-1-19', 'Hauswart Telli', ''),
('2018-1-20', 'Hauswart Telli', ''),
('2018-1-21', 'Hauswart Telli', ''),
('2018-1-22', 'Hauswart Telli', ''),
('2018-1-23', 'Hauswart Telli', ''),
('2018-1-24', 'Hauswart Telli', ''),
('2018-1-25', 'Hauswart Telli', ''),
('2018-1-26', 'Hauswart Telli', ''),
('2018-1-27', 'Hauswart Telli', ''),
('2018-1-28', 'Hauswart Telli', ''),
('2018-1-29', 'Hauswart Telli', ''),
('2018-1-30', 'Hauswart Telli', ''),
('2018-1-31', 'Hauswart Telli', ''),
('2018-2-1', 'Hauswart Telli', ''),
('2018-2-2', 'Hauswart Telli', ''),
('2018-2-3', 'Hauswart Telli', ''),
('2018-2-4', 'Hauswart Telli', ''),
('2018-2-5', 'Hauswart Telli', ''),
('2018-2-6', 'Hauswart Telli', ''),
('2018-2-7', 'Hauswart Telli', ''),
('2018-2-8', 'Hauswart Telli', ''),
('2018-2-9', 'Hauswart Telli', ''),
('2018-2-10', 'Hauswart Telli', ''),
('2018-2-11', 'Hauswart Telli', ''),
('2018-2-12', 'Hauswart Telli', ''),
('2018-2-13', 'Hauswart Telli', ''),
('2018-2-14', 'Hauswart Telli', ''),
('2018-2-15', 'Hauswart Telli', ''),
('2018-2-16', 'Hauswart Telli', ''),
('2018-2-17', 'Hauswart Telli', ''),
('2018-2-18', 'Hauswart Telli', ''),
('2018-2-19', 'Hauswart Telli', ''),
('2018-2-20', 'Hauswart Telli', ''),
('2018-2-21', 'Hauswart Telli', ''),
('2018-2-22', 'Hauswart Telli', ''),
('2018-2-23', 'Hauswart Telli', ''),
('2018-2-24', 'Hauswart Telli', ''),
('2018-2-25', 'Hauswart Telli', ''),
('2018-2-26', 'Hauswart Telli', ''),
('2018-2-27', 'Hauswart Telli', ''),
('2018-2-28', 'Hauswart Telli', ''),
('2018-3-1', 'Hauswart Telli', ''),
('2018-3-2', 'Hauswart Telli', ''),
('2018-3-3', 'Hauswart Telli', ''),
('2018-3-4', 'Hauswart Telli', ''),
('2018-3-5', 'Hauswart Telli', ''),
('2018-3-6', 'Hauswart Telli', ''),
('2018-3-7', 'Hauswart Telli', ''),
('2018-3-8', 'Hauswart Telli', ''),
('2018-3-9', 'Hauswart Telli', ''),
('2018-3-10', 'Hauswart Telli', ''),
('2018-3-11', 'Hauswart Telli', ''),
('2018-3-12', 'Hauswart Telli', ''),
('2018-3-13', 'Hauswart Telli', ''),
('2018-3-14', 'Hauswart Telli', ''),
('2018-3-15', 'Hauswart Telli', ''),
('2018-3-16', 'Hauswart Telli', ''),
('2018-3-17', 'Hauswart Telli', ''),
('2018-3-18', 'Hauswart Telli', ''),
('2018-3-19', 'Hauswart Telli', ''),
('2018-3-20', 'Hauswart Telli', ''),
('2018-3-21', 'Hauswart Telli', ''),
('2018-3-22', 'Hauswart Telli', ''),
('2018-3-23', 'Hauswart Telli', ''),
('2018-3-24', 'Hauswart Telli', ''),
('2018-3-25', 'Hauswart Telli', ''),
('2018-3-26', 'Hauswart Telli', ''),
('2018-3-27', 'Hauswart Telli', ''),
('2018-3-28', 'Hauswart Telli', ''),
('2018-3-29', 'Hauswart Telli', ''),
('2018-3-30', 'Hauswart Telli', ''),
('2018-3-31', 'Hauswart Telli', ''),
('2018-4-1', 'Hauswart Telli', ''),
('2018-4-2', 'Hauswart Telli', ''),
('2018-4-3', 'Hauswart Telli', ''),
('2018-4-4', 'Hauswart Telli', ''),
('2018-4-5', 'Hauswart Telli', ''),
('2018-4-6', 'Hauswart Telli', ''),
('2018-4-7', 'Hauswart Telli', ''),
('2018-4-8', 'Hauswart Telli', ''),
('2018-4-9', '', ''),
('2018-4-10', '', ''),
('2018-4-11', '', ''),
('2018-4-12', '', ''),
('2018-4-13', '', ''),
('2018-4-14', '', ''),
('2018-4-15', '', ''),
('2018-4-16', '', ''),
('2018-4-17', '', ''),
('2018-4-18', '', ''),
('2018-4-19', '', ''),
('2018-4-20', '', ''),
('2018-4-21', '', ''),
('2018-4-22', 'Hauswart Telli', ''),
('2018-4-23', 'Hauswart Telli', ''),
('2018-4-24', 'Hauswart Telli', ''),
('2018-4-25', 'Hauswart Telli', ''),
('2018-4-26', 'Hauswart Telli', ''),
('2018-4-27', 'Hauswart Telli', ''),
('2018-4-28', 'Hauswart Telli', ''),
('2018-4-29', 'Hauswart Telli', ''),
('2018-4-30', 'Hauswart Telli', ''),
('2018-5-1', 'Hauswart Telli', ''),
('2018-5-2', 'Hauswart Telli', ''),
('2018-5-3', 'Hauswart Telli', ''),
('2018-5-4', 'Hauswart Telli', ''),
('2018-5-5', 'Hauswart Telli', ''),
('2018-5-6', 'Hauswart Telli', ''),
('2018-5-7', 'Hauswart Telli', ''),
('2018-5-8', 'Hauswart Telli', ''),
('2018-5-9', 'Hauswart Telli', ''),
('2018-5-10', 'Hauswart Telli', ''),
('2018-5-11', 'Hauswart Telli', ''),
('2018-5-12', 'Hauswart Telli', ''),
('2018-5-13', 'Hauswart Telli', ''),
('2018-5-14', 'Hauswart Telli', ''),
('2018-5-15', 'Hauswart Telli', ''),
('2018-5-16', 'Hauswart Telli', ''),
('2018-5-17', 'Hauswart Telli', ''),
('2018-5-18', 'Hauswart Telli', ''),
('2018-5-19', 'Hauswart Telli', ''),
('2018-5-20', 'Hauswart Telli', ''),
('2018-5-21', 'Hauswart Telli', ''),
('2018-5-22', 'Hauswart Telli', ''),
('2018-5-23', 'Hauswart Telli', ''),
('2018-5-24', 'Hauswart Telli', ''),
('2018-5-25', 'Hauswart Telli', ''),
('2018-5-26', 'Hauswart Telli', ''),
('2018-5-27', 'Hauswart Telli', ''),
('2018-5-28', 'Hauswart Telli', ''),
('2018-5-29', 'Hauswart Telli', ''),
('2018-5-30', 'Hauswart Telli', ''),
('2018-5-31', 'Hauswart Telli', ''),
('2018-6-1', 'Hauswart Telli', ''),
('2018-6-2', 'Hauswart Telli', ''),
('2018-6-3', 'Hauswart Telli', ''),
('2018-6-4', 'Hauswart Telli', ''),
('2018-6-5', 'Hauswart Telli', ''),
('2018-6-6', 'Hauswart Telli', ''),
('2018-6-7', 'Hauswart Telli', ''),
('2018-6-8', 'Hauswart Telli', ''),
('2018-6-9', 'Hauswart Telli', ''),
('2018-6-10', 'Hauswart Telli', ''),
('2018-6-11', 'Hauswart Telli', ''),
('2018-6-12', 'Hauswart Telli', ''),
('2018-6-13', 'Hauswart Telli', ''),
('2018-6-14', 'Hauswart Telli', ''),
('2018-6-15', 'Hauswart Telli', ''),
('2018-6-16', 'Hauswart Telli', ''),
('2018-6-17', 'Hauswart Telli', ''),
('2018-6-18', 'Hauswart Telli', ''),
('2018-6-19', 'Hauswart Telli', ''),
('2018-6-20', 'Hauswart Telli', ''),
('2018-6-21', 'Hauswart Telli', ''),
('2018-6-22', 'Hauswart Telli', ''),
('2018-6-23', 'Hauswart Telli', ''),
('2018-6-24', 'Hauswart Telli', ''),
('2018-6-25', 'Hauswart Telli', ''),
('2018-6-26', 'Hauswart Telli', ''),
('2018-6-27', 'Hauswart Telli', ''),
('2018-6-28', 'Hauswart Telli', ''),
('2018-6-29', 'Hauswart Telli', ''),
('2018-6-30', 'Hauswart Telli', ''),
('2018-7-1', 'Hauswart Telli', ''),
('2018-7-2', 'Hauswart Telli', ''),
('2018-7-3', 'Hauswart Telli', ''),
('2018-7-4', 'Hauswart Telli', ''),
('2018-7-5', 'Hauswart Telli', ''),
('2018-7-6', 'Hauswart Telli', ''),
('2018-7-7', 'Hauswart Telli', ''),
('2018-7-8', 'Hauswart Telli', ''),
('2018-7-9', '', ''),
('2018-7-10', '', ''),
('2018-7-11', '', ''),
('2018-7-12', '', ''),
('2018-7-13', '', ''),
('2018-7-14', '', ''),
('2018-7-15', '', ''),
('2018-7-16', '', ''),
('2018-7-17', '', ''),
('2018-7-18', '', ''),
('2018-7-19', '', ''),
('2018-7-20', '', ''),
('2018-7-21', '', ''),
('2018-7-22', '', ''),
('2018-7-23', '', ''),
('2018-7-24', '', ''),
('2018-7-25', '', ''),
('2018-7-26', '', ''),
('2018-7-27', '', ''),
('2018-7-28', '', ''),
('2018-7-29', '', ''),
('2018-7-30', '', ''),
('2018-7-31', '', ''),
('2018-8-1', '', ''),
('2018-8-2', '', ''),
('2018-8-3', '', ''),
('2018-8-4', '', ''),
('2018-8-5', '', ''),
('2018-8-6', '', ''),
('2018-8-7', '', ''),
('2018-8-8', '', ''),
('2018-8-9', '', ''),
('2018-8-10', '', ''),
('2018-8-11', 'Hauswart Telli', ''),
('2018-8-12', 'Hauswart Telli', ''),
('2018-8-13', 'Hauswart Telli', ''),
('2018-8-14', 'Hauswart Telli', ''),
('2018-8-15', 'Hauswart Telli', ''),
('2018-8-16', 'Hauswart Telli', ''),
('2018-8-17', 'Hauswart Telli', ''),
('2018-8-18', 'Hauswart Telli', ''),
('2018-8-19', 'Hauswart Telli', ''),
('2018-8-20', 'Hauswart Telli', ''),
('2018-8-21', 'Hauswart Telli', ''),
('2018-8-22', 'Hauswart Telli', ''),
('2018-8-23', 'Hauswart Telli', ''),
('2018-8-24', 'Hauswart Telli', ''),
('2018-8-25', 'Hauswart Telli', ''),
('2018-8-26', 'Hauswart Telli', ''),
('2018-8-27', 'Hauswart Telli', ''),
('2018-8-28', 'Hauswart Telli', ''),
('2018-8-29', 'Hauswart Telli', ''),
('2018-8-30', 'Hauswart Telli', ''),
('2018-8-31', 'Hauswart Telli', ''),
('2018-9-1', 'Hauswart Telli', ''),
('2018-9-2', 'Hauswart Telli', ''),
('2018-9-3', 'Hauswart Telli', ''),
('2018-9-4', 'Hauswart Telli', ''),
('2018-9-5', 'Hauswart Telli', ''),
('2018-9-6', 'Hauswart Telli', ''),
('2018-9-7', 'Hauswart Telli', ''),
('2018-9-8', 'Hauswart Telli', ''),
('2018-9-9', 'Hauswart Telli', ''),
('2018-9-10', 'Hauswart Telli', ''),
('2018-9-11', 'Hauswart Telli', ''),
('2018-9-12', 'Hauswart Telli', ''),
('2018-9-13', 'Hauswart Telli', ''),
('2018-9-14', 'Hauswart Telli', ''),
('2018-9-15', 'Hauswart Telli', ''),
('2018-9-16', 'Hauswart Telli', ''),
('2018-9-17', 'Hauswart Telli', ''),
('2018-9-18', 'Hauswart Telli', ''),
('2018-9-19', 'Hauswart Telli', ''),
('2018-9-20', 'Hauswart Telli', ''),
('2018-9-21', 'Hauswart Telli', ''),
('2018-9-22', 'Hauswart Telli', ''),
('2018-9-23', 'Hauswart Telli', ''),
('2018-9-24', 'Hauswart Telli', ''),
('2018-9-25', 'Hauswart Telli', ''),
('2018-9-26', 'Hauswart Telli', ''),
('2018-9-27', 'Hauswart Telli', ''),
('2018-9-28', 'Hauswart Telli', ''),
('2018-9-29', 'Hauswart Telli', ''),
('2018-9-30', 'Hauswart Telli', ''),
('2018-10-1', 'Hauswart Telli', ''),
('2018-10-2', 'Hauswart Telli', ''),
('2018-10-3', 'Hauswart Telli', ''),
('2018-10-4', 'Hauswart Telli', ''),
('2018-10-5', 'Hauswart Telli', ''),
('2018-10-6', 'Hauswart Telli', ''),
('2018-10-7', 'Hauswart Telli', ''),
('2018-10-8', 'Hauswart Telli', ''),
('2018-10-9', 'Hauswart Telli', ''),
('2018-10-10', 'Hauswart Telli', ''),
('2018-10-11', 'Hauswart Telli', ''),
('2018-10-12', 'Hauswart Telli', ''),
('2018-10-13', 'Hauswart Telli', ''),
('2018-10-14', 'Hauswart Telli', ''),
('2018-10-15', 'Hauswart Telli', ''),
('2018-10-16', 'Hauswart Telli', ''),
('2018-10-17', 'Hauswart Telli', ''),
('2018-10-18', 'Hauswart Telli', ''),
('2018-10-19', 'Hauswart Telli', ''),
('2018-10-20', 'Hauswart Telli', ''),
('2018-10-21', 'Hauswart Telli', ''),
('2018-10-22', 'Hauswart Telli', ''),
('2018-10-23', 'Hauswart Telli', ''),
('2018-10-24', 'Hauswart Telli', ''),
('2018-10-25', 'Hauswart Telli', ''),
('2018-10-26', 'Hauswart Telli', ''),
('2018-10-27', 'Hauswart Telli', ''),
('2018-10-28', 'Hauswart Telli', ''),
('2018-10-29', 'Hauswart Telli', ''),
('2018-10-30', 'Hauswart Telli', ''),
('2018-10-31', 'Hauswart Telli', ''),
('2018-11-1', 'Hauswart Telli', ''),
('2018-11-2', 'Hauswart Telli', ''),
('2018-11-3', 'Hauswart Telli', ''),
('2018-11-4', 'Hauswart Telli', ''),
('2018-11-5', 'Hauswart Telli', ''),
('2018-11-6', 'Hauswart Telli', ''),
('2018-11-7', 'Hauswart Telli', ''),
('2018-11-8', 'Hauswart Telli', ''),
('2018-11-9', 'Hauswart Telli', ''),
('2018-11-10', 'Hauswart Telli', ''),
('2018-11-11', 'Hauswart Telli', ''),
('2018-11-12', 'Hauswart Telli', ''),
('2018-11-13', 'Hauswart Telli', ''),
('2018-11-14', 'Hauswart Telli', ''),
('2018-11-15', 'Hauswart Telli', ''),
('2018-11-16', 'Hauswart Telli', ''),
('2018-11-17', 'Hauswart Telli', ''),
('2018-11-18', 'Hauswart Telli', ''),
('2018-11-19', 'Hauswart Telli', ''),
('2018-11-20', 'Hauswart Telli', ''),
('2018-11-21', 'Hauswart Telli', ''),
('2018-11-22', 'Hauswart Telli', ''),
('2018-11-23', 'Hauswart Telli', ''),
('2018-11-24', 'Hauswart Telli', ''),
('2018-11-25', 'Hauswart Telli', ''),
('2018-11-26', 'Hauswart Telli', ''),
('2018-11-27', 'Hauswart Telli', ''),
('2018-11-28', 'Hauswart Telli', ''),
('2018-11-29', 'Hauswart Telli', ''),
('2018-11-30', 'Hauswart Telli', ''),
('2018-12-1', 'Hauswart Telli', ''),
('2018-12-2', 'Hauswart Telli', ''),
('2018-12-3', 'Hauswart Telli', ''),
('2018-12-4', 'Hauswart Telli', ''),
('2018-12-5', 'Hauswart Telli', ''),
('2018-12-6', 'Hauswart Telli', ''),
('2018-12-7', 'Hauswart Telli', ''),
('2018-12-8', 'Hauswart Telli', ''),
('2018-12-9', 'Hauswart Telli', ''),
('2018-12-10', 'Hauswart Telli', ''),
('2018-12-11', 'Hauswart Telli', ''),
('2018-12-12', 'Hauswart Telli', ''),
('2018-12-13', 'Hauswart Telli', ''),
('2018-12-14', 'Hauswart Telli', ''),
('2018-12-15', 'Hauswart Telli', ''),
('2018-12-16', 'Hauswart Telli', ''),
('2018-12-17', 'Hauswart Telli', ''),
('2018-12-18', 'Hauswart Telli', ''),
('2018-12-19', 'Hauswart Telli', ''),
('2018-12-20', 'Hauswart Telli', ''),
('2018-12-21', 'Hauswart Telli', ''),
('2018-12-22', 'Hauswart Telli', ''),
('2018-12-23', 'Hauswart Telli', ''),
('2018-12-24', 'Hauswart Telli', ''),
('2018-12-25', 'Hauswart Telli', ''),
('2018-12-26', 'Hauswart Telli', ''),
('2018-12-27', 'Hauswart Telli', ''),
('2018-12-28', 'Hauswart Telli', ''),
('2018-12-29', 'Hauswart Telli', ''),
('2018-12-30', 'Hauswart Telli', ''),
('2018-12-31', 'Hauswart Telli', '');


