#League Of Legends Website/APP

drop database if exists LeagueTeams;
create database if not exists LeagueTeams;
use LeagueTeams;

#Tabellen Rolle (Lane), Teams, Spieler, Stats (gesamte Matches), Spieltag, Stats (Match), User

create table if not exists t_rolle 
(
  r_id int auto_increment not null,
  r_bezeichnung varchar(25),
  primary key (r_id)
);

create table if not exists t_team 
(
   te_id int auto_increment not null,
   te_name varchar(50),
   te_kuerzel varchar(3),
   primary key (te_id)
);

create table if not exists t_player 
(
    p_id int auto_increment not null,
    p_name varchar(25),
    p_vname varchar(25),
  	 p_ingamename varchar(50),
  	 p_herkunft varchar(50) default 'unbekannt',
    p_team int,
  	 p_r_rolle int,
    p_geb date,
    primary key (p_id),
    foreign key (p_team) references t_team(te_id),
  	 foreign KEY (p_r_rolle) references t_rolle(r_id)
);

CREATE TABLE if NOT EXISTS t_gesamt_stats
(
    s_te_id INT auto_increment not null,
    s_win INT,
    s_loose INT,
    s_nashes INT,
    s_tower INT,
    PRIMARY KEY (s_te_id),
    FOREIGN KEY (s_te_id) REFERENCES t_team(te_id)
);

Create table if not exists t_spieltag
(
	sp_id int auto_increment not null,
  sp_tag int not null,
  sp_blue_side int,
  sp_red_side int,
  sp_blue_win boolean,
  primary key (sp_id),
  foreign key (sp_blue_side) references t_team(te_id),
  foreign key (sp_red_side) references t_team(te_id)
);

Create table if not exists t_spiel_stats
(
  ss_sp_id int auto_increment not null,
  ss_blue_kills int,
  ss_blue_drakes int,
  ss_blue_nashes int,
  ss_blue_turrets int,
  ss_blue_inhibs int,
  ss_red_kills int,
  ss_red_drakes int,
  ss_red_nashes int,
  ss_red_turrets int,
  ss_red_inhibs int,
  primary key (ss_sp_id),
  foreign key (ss_sp_id) references t_team(te_id)
);

CREATE TABLE if NOT EXISTS t_user
(
	u_id INT AUTO_INCREMENT,
	u_email VARCHAR(100) NOT NULL,
	u_username VARCHAR(20) NOT NULL,
	u_passwort VARCHAR(20) NOT NULL,
	u_rolle VARCHAR(10) DEFAULT 'user',
	PRIMARY KEY (u_id)
); 


#INSERT INTO

#Rollen

INSERT INTO t_rolle (r_bezeichnung) VALUES

('Toplane'),
('Jungle'),
('Midlane'),
('Botlane'),
('Support');


#Teams

INSERT INTO t_team (te_name, te_kuerzel) VALUES

('G2 ESports', 'G2'), 
('Fnatic', 'FNC'),
('Rogue', 'RGE'), 
('Schalke 04', 'S04'),
('SK Gaming', 'SK'), 
('Unicorns of Love', 'UOL'),
('Funplus Phoenix', 'FPX'), 
('Vega Squadron', 'VEG'),
('Damwon Gaming', 'DWG'), 
('Gambit Esports', 'GMB');


#Active Roster  

INSERT INTO t_player (p_name, p_vname, p_ingamename, p_team, p_r_rolle) VALUES

#G2 Esports - Region EU

('Hansen', 'Martin', 'G2 Wunder', 1, 1),
('Jankowski', 'Marcin', 'G2 Jankos', 1, 2),
('Winther','Rasmus', 'G2 Caps', 1, 3),
('Larsson', 'Martin', 'G2 Rekkles', 1, 4),
('Mehle', 'Mihael', 'G2 Mikyx', 1, 5),

#Fnatic - Region EU

('Rau', 'Gabriël', 'FNC Bwipo ', 2, 1),
('Boderek', 'Oskar', 'FNC Selfmade', 2, 2),
('Dinçer', 'Yasin', 'FNC Nisqy', 2, 3),
('Lipp', 'Elias', 'FNC Upset', 3, 4),
('Iliev Galabov', 'Zdravets', 'FNC Hylissang', 3, 5),

#Rogue - Region EU 

('Pascu', 'Andrei', 'RGE Odoamne', 3, 1),
('Słoma','Kacper', 'RGE Inspired', 3, 2),
('Larsson', 'Emil', 'RGE Larssen ', 3, 3),
('Liv', 'Steven', 'RGE Hans Sama', 3, 4),
('Trybus', 'Adrian', 'RGE Trymbi', 3, 5),

#Schalke 04 - Region EU

('Çelik', 'Sergen', 'S04 Broken Blade', 4, 1),
('Demir','Erberk', 'S04 Gilius', 4, 2),
('Braun', 'Felix', 'S04 Abbedagge', 4, 3),
('Jakubčík', 'Matúš', 'S04 Neon', 4, 4),
('Tot', 'Dino', 'S04 LIMIT', 4, 5),

#SK Gaming - Region EU

('Bartels', 'Janik', 'SK Jenax', 5, 1),
('Østergaard Hansen','Kristian', 'SK TynX', 5, 2),
('Gören', 'Ersin', 'SK Blue', 5, 3),
('Massol', 'Jean', 'SK Jezu', 5, 4),
('Wessén', 'Erik', 'SK Treatz', 5, 5),

#Unicorns Of Love - Region CIS

('Fomin', 'Vladislav', 'UOL BOSS', 6, 1),
('Skvortsov','Kirill', 'UOL AHaHaCiK ', 6, 2),
('Yakshin', 'Lev', 'UOL Nomanz', 6, 3),
('Botezatu', 'Antonio', 'UOL Frappii', 6, 4),
('Lifashin', 'Aleksandr', 'UOL SaNTaS', 6, 5),

#Funplus Phoenix - Region China

('Jang', 'Ha-gwon', 'FPX Nuguri', 7, 1),
('Yang','Ling', 'FPX Beichuan', 7, 2),
('Kim', 'Tae-sang', 'FPX Doinb', 7, 3),
('Lin', 'Wei-Xiang', 'FPX Lwx', 7, 4),
('Liu', 'Quing-Song', 'FPX Crisp', 7, 5),

#Vega Squadron - Region CIS 

('Zuravlev', 'Oleg', 'VEG Charger ', 8, 1),
('Zenyan','Artem', 'VEG Rein ', 8, 2),
('Moskalenko', 'Zhenya', 'VEG PekiDo', 8, 3),
('Averin', 'Vadim', 'VEG CyraXx', 8, 4),
('Musaev', 'Ali', 'VEG Mercenary', 8, 5),

#Damwon Gaming - Region Korea

('Kim', 'Dong-ha', 'DWG Khan', 9, 1),
('Kim','Geon-bu', 'DWG Canyon', 9, 2),
('Heo', 'Su', 'DWG ShowMaker', 9, 3),
('Jang', 'Yong-jun', 'DWG Ghost', 9, 4),
('Cho', 'Geon-hee', 'DWG BeryL', 9, 5),

#Gambit Esports - Region CIS

('Leksin', 'Mark', 'GMB DREAMPYLLA', 10, 1),
('Glazkov','Alexander', 'GMB PvPStejos', 10, 2),
('Lemeshchuk', 'Alexey', 'GMB Phlaty', 10, 3),
('Pervushin', 'Artyom', 'GMB Shiganari', 10, 4),
('Lexikov', 'Alexander', 'GMB Lekcycc', 10, 5);

#Spiele

INSERT INTO t_spieltag (sp_tag, sp_blue_side, sp_red_side) VALUES

#Spieltag 1
(1, 1, 10),
(1, 2, 9),
(1, 3, 8),
(1, 4, 7),
(1, 5, 6),

#Spieltag 2
(2, 10, 2),
(2, 3, 1),
(2, 4, 9),
(2, 5, 8),
(2, 6, 7),

#Spieltag 3
(3, 3, 10),
(3, 4, 2),
(3, 5, 1),
(3, 6, 9),
(3, 7, 8),

#Spieltag 4
(4, 10, 4),
(4, 5, 3),
(4, 6, 2),
(4, 7, 1),
(4, 8, 9),

#Spieltag 5
(5, 5, 10),
(5, 6, 4),
(5, 7, 3),
(5, 8, 2),
(5, 9, 1),

#Spieltag 6
(6, 10, 6),
(6, 7, 5),
(6, 8, 4),
(6, 9, 3),
(6, 1, 2),

#Spieltag 7
(7, 7, 10),
(7, 8, 6),
(7, 9, 5),
(7, 1, 4),
(7, 2, 3),

#Spieltag 8
(8, 10, 8),
(8, 9, 7),
(8, 1, 6),
(8, 2, 5),
(8, 3, 4),

#Spieltag 9
(9, 9, 10),
(9, 1, 8),
(9, 2, 7),
(9, 3, 6),
(9, 4, 5);
