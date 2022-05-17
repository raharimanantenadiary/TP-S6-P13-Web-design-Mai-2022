create database testreference;

create table Actu(
	idActu int not null primary key auto_increment,
	daty date,
	idCategorie int,
	titre varchar(100),
	resume varchar(500),
	contenu varchar(1000),
	url varchar(50)
);

create table categorie(
	idCategorie int not null primary key auto_increment,
	categorie varchar(20)
);

insert into categorie values(null,'Sport');
insert into categorie values(null,'Actu');	

insert into actu values(null,'2022-03-24',1,'resy italie omaly hariva','tsy nahay ny goal de maty ho azy le bol','saika namono tena ny itale fa tena nisy vintana iany zareo omaly hariva ka.','resy-italie-omaly-hariva');


SELECT a.idActu,a.daty,c.categorie,a.titre,a.resume,a.contenu FROM actu as a join categorie as c on a.idCategorie=c.idCategorie where url="resy-diary" and idActu=2