drop database if exists LeagueTeams;
create database if not exists LeagueTeams;
use LeagueTeams;

create table if not exists t_team (
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
    p_geb date,
    primary key (p_id),
    foreign key (p_team) references t_team(te_id)
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
#teams
insert into t_team (te_name, te_kuerzel) values
('G2 ESports', 'G2'), ('Fnatic', 'FNC'), 
('Rogue', 'RGE'), ('Schalke 04', 'S04'), 
('SK Gaming', 'SK'), ('Unicorns of Love', 'UOL'),
('Funplus Phoenix', 'FPX'), ('SKT1', 'T1'),
('Damwon Gaming', 'DWG'), ('Invictus Gaming', 'IG');