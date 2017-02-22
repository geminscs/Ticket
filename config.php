<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/5
 * Time: 15:01
 */
const MYSQL_HOST='localhost';
const MYSQL_USER='root';
const MYSQL_PW='';
const SELECT_DB='Ticket';

$conn = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW,SELECT_DB) or die("connect failed".mysql_error());
mysql_select_db(SELECT_DB,$conn);

mysql_query("INSERT INTO `User`(`email`, `password`, `name`, `sex`, `birthday`, `address`, `phone`, `cardtime`, `cardnumber`, `cardname`)
VALUES ('tammytangg@gmail.com','hu199361','TANG CHENMIN',1,'1993/06/01','siga','18642837601','201003','123','TANG CHENMIN')");
//
//const USER_TABLE='CREATE TABLE `Ticket`.`User` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL ,
//`password` VARCHAR(50) NOT NULL , `name` VARCHAR(50) NOT NULL , `sex` BOOLEAN NOT NULL , `birthday` DATE NOT NULL ,
//`address` VARCHAR(100) NOT NULL , `phone` VARCHAR(50) NOT NULL , `cardtime` VARCHAR(50) NOT NULL , `cardnumber`
//VARCHAR(50) NOT NULL , `cardname` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE = InnoDB;';


