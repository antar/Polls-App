CREATE DATABASE IF NOT EXISTS m133;
USE m133;

DROP TABLE IF EXISTS polls;
CREATE TABLE polls (
	id serial NOT NULL,
	title text NOT NULL,
	`desc` text NOT NULL,
	closed BOOLEAN NOT NULL DEFAULT false
);

CREATE TABLE votes (
	id serial NOT NULL,
	poll_id BIGINT(20) UNSIGNED NOT NULL,
	answer BOOLEAN,
	FOREIGN KEY (poll_id) REFERENCES polls(id)
);

CREATE USER IF NOT EXISTS 'm133'@'localhost' IDENTIFIED BY 'm133';

GRANT ALL PRIVILEGES ON polls TO 'm133'@'localhost';
GRANT ALL PRIVILEGES ON votes TO 'm133'@'localhost';