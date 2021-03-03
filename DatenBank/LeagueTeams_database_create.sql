drop database if exists LeagueTeams;
create database if not exists LeagueTeams;
use LeagueTeams;

create table if not exists t_rolle (
  r_id int auto_increment not null,
  r_bezeichnung varchar(25),
  primary key (r_id)
);

create table if not exists t_team (
   te_id int auto_increment not null,
   te_name varchar(50),
   te_kuerzel varchar(3),
   primary key (te_id)
);

create table if not exists t_player (
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
  sp_blue_win boolean not null default 0,
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

#insert into
#rollen
INSERT INTO t_rolle (r_bezeichnung) VALUES
('Toplane'),
('Jungle'),
('Midlane'),
('Botlane'),
('Support');

#teams
insert into t_team (te_name, te_kuerzel) values
('G2 ESports', 'G2'), ('Fnatic', 'FNC'),
('Rogue', 'RGE'), ('Schalke 04', 'S04'),
('SK Gaming', 'SK'), ('Unicorns of Love', 'UOL'),
('Funplus Phoenix', 'FPX'), ('Vega Squadron', 'VEG'),
('Damwon Gaming', 'DWG'), ('Gambit Esports', 'GMB');

#spieler
insert into t_player (p_name, p_vname, p_ingamename, p_team, p_r_rolle) VALUES

#G2 Esports

('Larsson', 'Martin', 'G2 Rekkles', 1, 4),
('Winther','Rasmus', 'G2 Caps', 1, 3),
('Mehle', 'Mihael', 'G2 Mikyx', 1, 5),
('Hansen', 'Martin', 'G2 Wunder', 1, 1),
('Jankowski', 'Marcin', 'G2 Jankos', 1, 2),

#Fnatic

('', '', '', 2, 1),
('','', '', 2, 2),
('', '', '', 2, 3),
('', '', '', 3, 4),
('', '', '', 3, 5),

#Rogue

('', '', '', 3, 1),
('','', '', 3, 2),
('', '', ' ', 3, 3),
('', '', ' ', 3, 4),
('', '', '', 3, 5),

#Schalke 04

('', '', '', 4, 1),
('','', ' ', 4, 2),
('', '', ' ', 4, 3),
('', '', ' ', 4, 4),
('', '', ' ', 4, 5),

#SK Gaming

('', '', ' ', 5, 1),
('','', '', 5, 2),
('', '', ' ', 5, 3),
('', '', '', 5, 4),
('', '', ' ', 5, 5),

#Unicorns Of Love

('', '', ' ', 6, 1),
('','', ' ', 6, 2),
('', '', ' ', 6, 3),
('', '', ' ', 6, 4),
('', '', ' ', 6, 5),

#Funplus Phoenix

('', '', '', 7, 1),
('','', '', 7, 2),
('', '', '', 7, 3),
('', '', '', 7, 4),
('', '', ' ', 7, 5),

#Vega Squadron

('', '', '', 8, 1),
('','', '', 8, 2),
('', '', '', 8, 3),
('', '', '', 8, 4),
('', '', '', 8, 5),

#Damwon Gaming

('', '', '', 9, 1),
('','', '', 9, 2),
('', '', '', 9, 3),
('', '', '', 9, 4),
('', '', '', 9, 5),

#Gambit Esports

('', '', '', 10, 1),
('','', '', 10, 2),
('', '', '', 10, 3),
('', '', '', 10, 4),
('', '', '', 10, 5);