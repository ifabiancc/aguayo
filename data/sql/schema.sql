CREATE TABLE album (id INT AUTO_INCREMENT, artist_id INT NOT NULL, genre_id INT NOT NULL, year_production_id INT NOT NULL, name VARCHAR(45) NOT NULL, image VARCHAR(45) NOT NULL, price VARCHAR(45) NOT NULL, stock INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX artist_id_idx (artist_id), INDEX genre_id_idx (genre_id), INDEX year_production_id_idx (year_production_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE artist (id INT, name VARCHAR(45) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE genre (id INT AUTO_INCREMENT, name VARCHAR(45) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE stock_hystory (id INT AUTO_INCREMENT, album_id INT NOT NULL, description VARCHAR(225) NOT NULL, alue INT NOT NULL, INDEX album_id_idx (album_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE year_production (id INT, date BIGINT, PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE album ADD CONSTRAINT album_year_production_id_year_production_id FOREIGN KEY (year_production_id) REFERENCES year_production(id);
ALTER TABLE album ADD CONSTRAINT album_genre_id_genre_id FOREIGN KEY (genre_id) REFERENCES genre(id);
ALTER TABLE album ADD CONSTRAINT album_artist_id_artist_id FOREIGN KEY (artist_id) REFERENCES artist(id);
ALTER TABLE stock_hystory ADD CONSTRAINT stock_hystory_album_id_album_id FOREIGN KEY (album_id) REFERENCES album(id);
