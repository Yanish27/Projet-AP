drop database if exists BDDEscapeGame;
create database BDDEscapeGame;
use BDDEscapeGame;

create table Client(
IdClient int primary key auto_increment,
Nom varchar(50),
Prenom varchar(50),
Photo blob,
adresse longtext,
datenaissance datetime,
Mail varchar(20),
telephone int(10)
) engine innodb;

create table Joueur(
IdJoueur int primary key auto_increment,
IdClient int,
IdSalle int,
constraint foreign key (IdClient) references Client (IdClient),
constraint foreign key (IdSalle) references Salle (IdSalle)
) engine innodb;

create table DetailJoueur (
IdJoueur int,
IdObstacle int,
TpsPassageObstacle time,
NbrEchecObstacle int,
Media varchar(100),
Commentaire longtext,
constraint foreign key (IdJoueur) references Joueur (IdJoueur),
constraint foreign key (IdObstacle) references Obstacle (IdObstacle)
) engine innodb;

create table Salle(
IdSalle int primary key auto_increment,
Entrée varchar(50),
Sortie varchar(50),
NuméroTablette int
/*photo début/fin pour tablette */
) engine innodb;

create table Obstacle(
Idsalle int,
Nom varchar(50),
Emplacement varchar(50),
Photo blob,
IdObstacle int primary key auto_increment,
Type varchar(50), /* Un enum ? */
Prix float,
constraint foreign key (Idsalle) references Salle (IdSalle)
) engine innodb;

create table Tarification (
IdTarif int primary key auto_increment,
Prix_heure int,
Prix_Obstacle int,
Prix_NbrJoueur int
) engine innodb;

create table Partie(
IdPartie int primary key auto_increment,
JourParty datetime,
HeurePartie time,
NombreJoueur int,
NombreObstacle int,
IdClient int,
IdSalle int,
constraint foreign key (IdClient) references Client (IdClient)
) engine innodb;

create table Reservation(
NbrJoueur int,
DateReservation datetime,
NbrHeure int
) engine innodb;





