CREATE DATABASE bd_mundo;
USE bd_mundo;

CREATE TABLE continentes (
    continente VARCHAR(50) PRIMARY KEY NOT NULL
);

CREATE TABLE paises (
    pais INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    populacao BIGINT,
    idioma VARCHAR(50),
    continente VARCHAR(50),
    
    FOREIGN KEY (continente) REFERENCES continentes(continente)
);

CREATE TABLE cidades (
    cidade INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    populacao BIGINT,
    pais INT,
    
    FOREIGN KEY (pais) REFERENCES paises(pais)
);

INSERT INTO continentes (continente) VALUES
('América'),
('Europa'),
('África'),
('Ásia'),
('Oceania');

INSERT INTO paises (nome, populacao, idioma, continente) VALUES
('Brasil', 212812405, 'Português', 'Américas'),
('Estados Unidos', 347275807, 'Inglês', 'Américas'),
('México', 131946900, 'Espanhol', 'Américas'),
('Canadá', 40126723, 'Inglês/Francês', 'Américas'),
('Argentina', 45851378, 'Espanhol', 'Américas');

INSERT INTO paises (nome, populacao, idioma, continente) VALUES
('Alemanha', 84075075, 'Alemão', 'Europa'),
('França', 66650804, 'Francês', 'Europa'),
('Espanha', 47889958, 'Espanhol', 'Europa'),
('Itália', 59456023, 'Italiano', 'Europa'),
('Reino Unido', 67530172, 'Inglês', 'Europa');

INSERT INTO paises (nome, populacao, idioma, continente) VALUES
('Nigéria', 237527782, 'Inglês', 'África'),
('Egito', 118365995, 'Árabe', 'África'),
('África do Sul', 64747319, 'Inglês', 'África'),
('Quênia', 56606407, 'Suaíli/Inglês', 'África'),
('Etiópia', 125395000, 'Amárico', 'África');

INSERT INTO paises (nome, populacao, idioma, continente) VALUES
('China', 1444216107, 'Chinês Mandarim', 'Ásia'),
('Índia', 1462879828, 'Hindi/Inglês', 'Ásia'),
('Japão', 123951692, 'Japonês', 'Ásia'),
('Coreia do Sul', 51840000, 'Coreano', 'Ásia'),
('Indonésia', 276361783, 'Indonésio', 'Ásia');

INSERT INTO paises (nome, populacao, idioma, continente) VALUES
('Austrália', 26750000, 'Inglês', 'Oceania'),
('Nova Zelândia', 5130000, 'Inglês', 'Oceania'),
('Fiji', 939000, 'Inglês/Fijiano', 'Oceania'),
('Papua Nova Guiné', 9570000, 'Inglês/Tok Pisin', 'Oceania'),
('Ilhas Salomão', 731000, 'Inglês/ Pijin', 'Oceania');

INSERT INTO cidades (nome, populacao, pais) VALUES
('São Paulo', 11904961, 1),
('Rio de Janeiro', 6730729, 1),
('Brasília', 2996899, 1),
('Fortaleza', 2578483, 1),
('Salvador', 2564204, 1),
('Nova Iorque', 8419600, 2),
('Los Angeles', 3980400, 2),
('Chicago', 2716000, 2),
('Houston', 2328000, 2),
('Phoenix', 1690000, 2),
('Cidade do México', 9209944, 3),
('Guadalajara', 1495182, 3),
('Monterrey', 1135512, 3),
('Puebla', 1434062, 3),
('Tijuana', 1387472, 3),
('Toronto', 2731571, 4),
('Montreal', 1768506, 4),
('Vancouver', 675218, 4),
('Calgary', 1239220, 4),
('Ottawa', 994837, 4),
('Buenos Aires', 3075646, 5),
('Córdoba', 1391000, 5),
('Rosário', 1274000, 5),
('Mendoza', 1150000, 5),
('La Plata', 795000, 5);

INSERT INTO cidades (nome, populacao, pais) VALUES
('Berlim', 3769000, 6),
('Hamburgo', 1841000, 6),
('Munique', 1472000, 6),
('Colônia', 1086000, 6),
('Frankfurt', 764000, 6),
('Paris', 2161000, 7),
('Marselha', 861635, 7),
('Lyon', 516092, 7),
('Toulouse', 486828, 7),
('Nice', 347060, 7),
('Madrid', 3266000, 8),
('Barcelona', 1620343, 8),
('Valência', 791413, 8),
('Sevilha', 703206, 8),
('Zaragoza', 675301, 8),
('Roma', 2873000, 9),
('Milão', 1366180, 9),
('Nápoles', 962003, 9),
('Turim', 870952, 9),
('Palermo', 663401, 9),
('Londres', 8982000, 10),
('Birmingham', 1141000, 10),
('Glasgow', 635640, 10),
('Liverpool', 498042, 10),
('Manchester', 553230, 10);

INSERT INTO cidades (nome, populacao, pais) VALUES
('Lagos', 14900000, 11),
('Kano', 3626068, 11),
('Ibadan', 3565108, 11),
('Abuja', 3600000, 11),
('Port Harcourt', 1700000, 11),
('Cairo', 10230350, 12),
('Alexandria', 5120000, 12),
('Giza', 8700000, 12),
('Shubra El-Kheima', 1070000, 12),
('Port Said', 680000, 12),
('Joanesburgo', 5585757, 13),
('Cidade do Cabo', 433688, 13),
('Durban', 3440000, 13),
('Pretória', 741651, 13),
('Port Elizabeth', 312392, 13),
('Nairóbi', 4397073, 14),
('Mombasa', 1208333, 14),
('Kisumu', 409928, 14),
('Nakuru', 518562, 14),
('Eldoret', 475716, 14),
('Addis Ababa', 5060000, 15),
('Dire Dawa', 394000, 15),
('Mekelle', 321000, 15),
('Gondar', 324000, 15),
('Bahir Dar', 335000, 15);

INSERT INTO cidades (nome, populacao, pais) VALUES
('Xangai', 24870895, 16),
('Pequim', 21893095, 16),
('Chongqing', 16382376, 16),
('Tianjin', 13678000, 16),
('Guangzhou', 13500000, 16),
('Mumbai', 20411274, 17),
('Delhi', 31870000, 17),
('Bangalore', 13600000, 17),
('Hyderabad', 10000000, 17),
('Ahmedabad', 8880000, 17),
('Tóquio', 13929286, 18),
('Yokohama', 3750000, 18),
('Osaka', 2715000, 18),
('Nagoya', 2300000, 18),
('Sapporo', 1952356, 18),
('Seul', 9733509, 19),
('Busan', 3375000, 19),
('Incheon', 2945000, 19),
('Daegu', 2420000, 19),
('Daejeon', 1500000, 19),
('Jacarta', 10770487, 20),
('Surabaya', 2960000, 20),
('Bandung', 2410000, 20),
('Medan', 2190000, 20),
('Bekasi', 2250000, 20);

INSERT INTO cidades (nome, populacao, pais) VALUES
('Sydney', 5312163, 21),
('Melbourne', 5078193, 21),
('Brisbane', 2514184, 21),
('Perth', 2128580, 21),
('Adelaide', 1352000, 21),
('Auckland', 1747000, 22),
('Wellington', 212000, 22),
('Christchurch', 404000, 22),
('Hamilton', 178500, 22),
('Tauranga', 163000, 22),
('Suva', 88400, 23),
('Nadi', 52900, 23),
('Lautoka', 70700, 23),
('Labasa', 26300, 23),
('Levuka', 1700, 23),
('Port Moresby', 364000, 24),
('Lae', 148000, 24),
('Mount Hagen', 52600, 24),
('Madang', 48600, 24),
('Goroka', 36000, 24),
('Honiara', 55900, 25),
('Auki', 7000, 25),
('Gizo', 6500, 25),
('Noro', 5000, 25),
('Tulagi', 3000, 25);