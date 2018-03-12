DROP DATABASE IF EXISTS elvisdb;
CREATE DATABASE elvisdb;
USE elvisdb;
CREATE TABLE elvistbl(
	author varchar(255),
	msg varchar(1024),
	ts timestamp
);
