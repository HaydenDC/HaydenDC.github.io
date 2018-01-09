
--Player--
CREATE TABLE player
(
	id SERIAL PRIMARY KEY
	, first_name VARCHAR(10) NOT NULL
	, last_name VARCHAR(15)  NOT NULL
	, user_name VARCHAR(12)  NOT NULL
	, password VARCHAR(12)   NOT NULL
);


--Player_smash_level--
CREATE TABLE Player_smash_level
(
	id SERIAL PRIMARY KEY
	, player_id INT REFERENCES player(id)
	, games_played INT NOT NULL
	, experience DECIMAL NOT NULL
	, presteige INT NOT NULL
	, kills INT NOT NULL
	, falls INT NOT NULL
	, kdr DECIMAL NOT NULL
	, position_first INT NOT NULL
	, position_second INT NOT NULL
	, position_third INT NOT NULL
	, position_dnp INT NOT NULL
	, damage_given DECIMAL NOT NULL
	, damage_taken DECIMAL NOT NULL
	, slogan VARCHAR(50)
);

--Bassarlson League--
CREATE TABLE bassarlson
(
	id SERIAL PRIMARY KEY
	, player_league_id INT REFERENCES player(id)
	, league_score DECIMAL NOT NULL
	, league_kills INT NOT NULL
	, league_falls INT NOT NULL
	, league_kdr DECIMAL NOT NULL
	, league_damage_given DECIMAL NOT NULL
);