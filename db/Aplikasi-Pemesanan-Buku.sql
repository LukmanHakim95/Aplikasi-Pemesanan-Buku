DROP TABLE IF EXISTS Buku;
CREATE TABLE Buku
(
id INT(5) NOT NULL PRIMARY KEY auto_increment,
JudulBuku VARCHAR(50) NOT NULL,
Jumlah VARCHAR(50) NOT NULL,
Pengarang VARCHAR(50) NOT NULL,
Penerbit VARCHAR(50) NOT NULL,
KotaTerbit VARCHAR(50) NOT NULL,
TahunTerbit VARCHAR(50) NOT NULL,
Harga VARCHAR(50) NOT NULL,
Deskripsi TEXT,
Sampul VARCHAR(50)
)ENGINE=INNODB;

DROP TABLE IF EXISTS Account;
CREATE TABLE Account
(
id INT(5) NOT NULL PRIMARY KEY auto_increment,
username VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
sex ENUM("male","female") NOT NULL,
adress text NOT NULL
)ENGINE=INNODB;
