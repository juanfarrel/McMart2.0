-- MySql Script for MCMart2.0

-- 10/20/2020

-- Created By: Arthur

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';


-- Checks For Exisitng DB
-- Delete if Exist
DROP DATABASE IF EXISTS McMart ;

-- Create if dosent Exist
CREATE DATABASE IF NOT EXISTS McMart DEFAULT CHARACTER SET utf8 ;

-- USING MCMART DATABASE OR SCHEMA
USE McMart;

-- DROP TABLE IF EXIST
DROP TABLE IF EXISTS McMart.Users;

-- CREATE TABLE IF DOSENT EXIST
CREATE TABLE IF NOT EXISTS McMart.Users
(

    UserID   INT          NOT NULL AUTO_INCREMENT,
    Name     VARCHAR(255) NOT NULL,
    UserName VARCHAR(255) NOT NULL,
    Email    VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Role     VARCHAR(15)  NOT NULL,
    PRIMARY KEY (UserID)
);

DROP TABLE IF EXISTS McMart.Products;

CREATE TABLE IF NOT EXISTS McMart.Products
(
    ProductId       INT          NOT NULL AUTO_INCREMENT,
    DateAdded       DATETIME     NOT NULL ,
    SKU             INT          NOT NULL ,
    Name            VARCHAR(255) NOT NULL ,
    ProductCategory VARCHAR(255) NOT NULL ,
    Price           FLOAT        NOT NULL ,
    Status          VARCHAR(255) NOT NULL ,
    PictureURI      VARCHAR(255) NOT NULL ,
    StockAmount     VARCHAR(255) NOT NULL ,
    ProductDesc     VARCHAR(255) NOT NULL ,
    PRIMARY KEY (ProductId)



);

DROP TABLE IF EXISTS McMart.Requests;

CREATE TABLE IF NOT EXISTS McMart.Requests
(
  RequestID           INT          NOT NULL AUTO_INCREMENT,
  DateRequests        DATE         NOT NULL ,
  DateFullFiled       DATE         ,
  UserRequestName     VARCHAR(255) NOT NULL ,
  UserRequestIDNumber INT          NOT NULL ,
  ItemName            VARCHAR(255) NOT NULL ,
  ProductCategory     VARCHAR(255) NOT NULL ,
  RequestQuantity     INT          NOT NULL ,
  ProductRequestDesc  VARCHAR(500) NOT NULL ,
  Status              VARCHAR(50)  NOT NULL ,
  PRIMARY KEY (RequestID)

);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;