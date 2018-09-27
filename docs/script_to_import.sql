/*
Created		24/09/2018
Modified		26/09/2018
Project		RCC - Gestão de companhias
Model	  	Modelo fisico de SQL
Company		RCC - Gestão de companhias
Author		,SrGabriel e Wire
Version		1.0
Database		mySQL 5
*/



DROP DATABASE IF EXISTS RCC_Company_DB;

CREATE DATABASE RCC_Company_DB;

USE RCC_Company_DB;


drop table IF EXISTS type_result_project;
drop table IF EXISTS Correcoes_script;
drop table IF EXISTS User_medalhas;
drop table IF EXISTS Type_user;
drop table IF EXISTS Access_for_type;
drop table IF EXISTS Pages;
drop table IF EXISTS Projetos;
drop table IF EXISTS Eventos;
drop table IF EXISTS Scripts;
drop table IF EXISTS Medalhas;
drop table IF EXISTS Company_position;
drop table IF EXISTS Company;
drop table IF EXISTS User;


Create table User (
	pk_user Serial NOT NULL,
	pk_type_user Bigint UNSIGNED NOT NULL,
	nickname Varchar(80) NOT NULL,
	email Varchar(255) NOT NULL,
	password Text NOT NULL,
	is_active SMALLINT,
	is_ban SMALLINT,
	UNIQUE (pk_user),
 Primary Key (pk_user)) ENGINE = MyISAM;

Create table Company (
	pk_company Serial NOT NULL,
	company_name Varchar(40) NOT NULL,
	is_active int,
	is_in_maint int,
	UNIQUE (pk_company),
	UNIQUE (company_name),
 Primary Key (pk_company)) ENGINE = MyISAM;

Create table Company_position (
	pk_company_position Serial NOT NULL,
	pk_company Bigint UNSIGNED NOT NULL,
	pk_user Bigint UNSIGNED,
	position_designation Varchar(30) NOT NULL,
	is_valid SMALLINT,
	start_date Datetime NOT NULL,
	updated_date Datetime NOT NULL,
	UNIQUE (pk_company_position),
 Primary Key (pk_company_position)) ENGINE = MyISAM;

Create table Medalhas (
	pk_medalhas Serial NOT NULL,
	pk_company Bigint UNSIGNED NOT NULL,
	course_name Varchar(100) NOT NULL,
	quantity Int NOT NULL,
	UNIQUE (pk_medalhas),
 Primary Key (pk_medalhas)) ENGINE = MyISAM;

Create table Scripts (
	pk_scripts Serial NOT NULL,
	pk_company Bigint UNSIGNED NOT NULL,
	script_name Varchar(60) NOT NULL,
	script_body Text NOT NULL,
	UNIQUE (pk_scripts),
	UNIQUE (script_name),
 Primary Key (pk_scripts)) ENGINE = MyISAM;

Create table Eventos (
	pk_eventos Serial NOT NULL,
	pk_company Bigint UNSIGNED NOT NULL,
	pk_user Bigint UNSIGNED NOT NULL,
	begin_date Datetime NOT NULL,
	event_title Varchar(255) NOT NULL,
	event_body Text NOT NULL,
	UNIQUE (pk_eventos),
 Primary Key (pk_eventos)) ENGINE = MyISAM;

Create table Projetos (
	pk_projetos Serial NOT NULL,
	pk_project_result Bigint UNSIGNED NOT NULL,
	pk_company Bigint UNSIGNED NOT NULL,
	pk_user Bigint UNSIGNED NOT NULL,
	project_title Varchar(100) NOT NULL,
	project_body Text NOT NULL,
	post_date Datetime NOT NULL,
	voted_date Datetime,
	UNIQUE (pk_projetos),
	UNIQUE (project_title),
 Primary Key (pk_projetos)) ENGINE = MyISAM;

Create table Pages (
	pk_pages Serial NOT NULL,
	route_name Varchar(100) NOT NULL,
	UNIQUE (pk_pages),
 Primary Key (pk_pages)) ENGINE = MyISAM;

Create table Access_for_type (
	pk_pages Bigint UNSIGNED NOT NULL,
	pk_company_position Bigint UNSIGNED NOT NULL,
	pk_access Serial NOT NULL,
	UNIQUE (pk_access),
 Primary Key (pk_pages,pk_company_position,pk_access)) ENGINE = MyISAM;

Create table Type_user (
	pk_type_user Serial NOT NULL,
	type_designation Varchar(80) NOT NULL,
	UNIQUE (pk_type_user),
 Primary Key (pk_type_user)) ENGINE = MyISAM;

Create table User_medalhas (
	pk_user Bigint UNSIGNED NOT NULL,
	pk_medalhas Bigint UNSIGNED NOT NULL,
	pk_user_medalhas Serial NOT NULL,
	week_date Date NOT NULL,
	UNIQUE (pk_user_medalhas),
	UNIQUE (week_date),
 Primary Key (pk_user,pk_medalhas,pk_user_medalhas)) ENGINE = MyISAM;

Create table Correcoes_script (
	pk_user Bigint UNSIGNED NOT NULL,
	pk_scripts Bigint UNSIGNED NOT NULL,
	pk_correcoes_script Serial NOT NULL,
	UNIQUE (pk_correcoes_script),
 Primary Key (pk_user,pk_scripts,pk_correcoes_script)) ENGINE = MyISAM;

Create table type_result_project (
	pk_project_result Serial NOT NULL,
	pk_project_designation Char(20) NOT NULL,
	UNIQUE (pk_project_result),
 Primary Key (pk_project_result)) ENGINE = MyISAM;


Alter table Company_position add Foreign Key (pk_user) references User (pk_user) on delete  restrict on update  restrict;
Alter table Projetos add Foreign Key (pk_user) references User (pk_user) on delete  restrict on update  restrict;
Alter table User_medalhas add Foreign Key (pk_user) references User (pk_user) on delete  restrict on update  restrict;
Alter table Correcoes_script add Foreign Key (pk_user) references User (pk_user) on delete  restrict on update  restrict;
Alter table Eventos add Foreign Key (pk_user) references User (pk_user) on delete  restrict on update  restrict;
Alter table Company_position add Foreign Key (pk_company) references Company (pk_company) on delete  restrict on update  restrict;
Alter table Medalhas add Foreign Key (pk_company) references Company (pk_company) on delete  restrict on update  restrict;
Alter table Scripts add Foreign Key (pk_company) references Company (pk_company) on delete  restrict on update  restrict;
Alter table Eventos add Foreign Key (pk_company) references Company (pk_company) on delete  restrict on update  restrict;
Alter table Projetos add Foreign Key (pk_company) references Company (pk_company) on delete  restrict on update  restrict;
Alter table Access_for_type add Foreign Key (pk_company_position) references Company_position (pk_company_position) on delete  restrict on update  restrict;
Alter table User_medalhas add Foreign Key (pk_medalhas) references Medalhas (pk_medalhas) on delete  restrict on update  restrict;
Alter table Correcoes_script add Foreign Key (pk_scripts) references Scripts (pk_scripts) on delete  restrict on update  restrict;
Alter table Access_for_type add Foreign Key (pk_pages) references Pages (pk_pages) on delete  restrict on update  restrict;
Alter table User add Foreign Key (pk_type_user) references Type_user (pk_type_user) on delete  restrict on update  restrict;
Alter table Projetos add Foreign Key (pk_project_result) references type_result_project (pk_project_result) on delete  restrict on update  restrict;


/* Users permissions */


