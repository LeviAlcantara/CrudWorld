use crud_world;

-- Inserir continentes
INSERT INTO continentes (nome) VALUES
('América'),
('Europa'),
('África'),
('Ásia'),
('Oceania');

-- Inserir países para a América
INSERT INTO paises (nome, continente) VALUES
('Brasil', 1),
('Argentina', 1),
('Chile', 1),
('Colômbia', 1),
('México', 1);

-- Inserir países para a Europa
INSERT INTO paises (nome, continente) VALUES
('França', 2),
('Alemanha', 2),
('Itália', 2),
('Espanha', 2),
('Portugal', 2);

-- Inserir países para a África
INSERT INTO paises (nome, continente) VALUES
('Nigéria', 3),
('Egito', 3),
('África do Sul', 3),
('Quênia', 3),
('Marrocos', 3);

-- Inserir países para a Ásia
INSERT INTO paises (nome, continente) VALUES
('China', 4),
('Japão', 4),
('Índia', 4),
('Rússia', 4),
('Coreia do Sul', 4);

-- Inserir países para a Oceania
INSERT INTO paises (nome, continente) VALUES
('Austrália', 5),
('Nova Zelândia', 5),
('Papua Nova Guiné', 5),
('Fiji', 5),
('Ilhas Salomão', 5);

-- Brasil (ID = 1)
INSERT INTO cidades(nome,pais) VALUES
('São Paulo', 1),
('Rio de Janeiro', 1),
('Brasília', 1),
('Salvador', 1),
('Fortaleza', 1);

-- Argentina (ID = 2)
INSERT INTO cidades(nome,pais) VALUES
('Buenos Aires', 2),
('Córdoba', 2),
('Rosário', 2),
('Mendoza', 2),
('La Plata', 2);

-- Chile (ID = 3)
INSERT INTO cidades(nome,pais) VALUES
('Santiago', 3),
('Valparaíso', 3),
('Concepción', 3),
('Antofagasta', 3),
('La Serena', 3);

-- Colômbia (ID = 4)
INSERT INTO cidades(nome,pais) VALUES
('Bogotá', 4),
('Medellín', 4),
('Cali', 4),
('Barranquilla', 4),
('Cartagena', 4);

-- México (ID = 5)
INSERT INTO cidades(nome,pais) VALUES
('Cidade do México', 5),
('Guadalajara', 5),
('Monterrey', 5),
('Puebla', 5),
('Cancún', 5);

-- França (ID = 6)
INSERT INTO cidades(nome,pais) VALUES
('Paris', 6),
('Marselha', 6),
('Lyon', 6),
('Nice', 6),
('Toulouse', 6);

-- Alemanha (ID = 7)
INSERT INTO cidades(nome,pais) VALUES
('Berlim', 7),
('Munique', 7),
('Hamburgo', 7),
('Frankfurt', 7),
('Colônia', 7);

-- Itália (ID = 8)
INSERT INTO cidades(nome,pais) VALUES
('Roma', 8),
('Milão', 8),
('Nápoles', 8),
('Turim', 8),
('Palermo', 8);

-- Espanha (ID = 9)
INSERT INTO cidades(nome,pais) VALUES
('Madri', 9),
('Barcelona', 9),
('Valência', 9),
('Sevilha', 9),
('Bilbao', 9);

-- Portugal (ID = 10)
INSERT INTO cidades(nome,pais) VALUES
('Lisboa', 10),
('Porto', 10),
('Coimbra', 10),
('Braga', 10),
('Faro', 10);

-- Nigéria (ID = 11)
INSERT INTO cidades(nome,pais) VALUES
('Lagos', 11),
('Abuja', 11),
('Kano', 11),
('Ibadan', 11),
('Benin City', 11);

-- Egito (ID = 12)
INSERT INTO cidades(nome,pais) VALUES
('Cairo', 12),
('Alexandria', 12),
('Giza', 12),
('Luxor', 12),
('Aswan', 12);

-- África do Sul (ID = 13)
INSERT INTO cidades(nome,pais) VALUES
('Joanesburgo', 13),
('Cidade do Cabo', 13),
('Durban', 13),
('Pretória', 13),
('Bloemfontein', 13);

-- Quênia (ID = 14)
INSERT INTO cidades(nome,pais) VALUES
('Nairóbi', 14),
('Mombaça', 14),
('Kisumu', 14),
('Nakuru', 14),
('Eldoret', 14);

-- Marrocos (ID = 15)
INSERT INTO cidades(nome,pais) VALUES
('Casablanca', 15),
('Rabat', 15),
('Fez', 15),
('Marrakech', 15),
('Agadir', 15);

-- China (ID = 16)
INSERT INTO cidades(nome,pais) VALUES
('Pequim', 16),
('Xangai', 16),
('Cantão', 16),
('Shenzhen', 16),
('Chengdu', 16);

-- Japão (ID = 17)
INSERT INTO cidades(nome,pais) VALUES
('Tóquio', 17),
('Osaka', 17),
('Quioto', 17),
('Sapporo', 17),
('Nagoya', 17);

-- Índia (ID = 18)
INSERT INTO cidades(nome,pais) VALUES
('Nova Délhi', 18),
('Mumbai', 18),
('Bangalore', 18),
('Chennai', 18),
('Hyderabad', 18);

-- Rússia (ID = 19)
INSERT INTO cidades(nome,pais) VALUES
('Moscou', 19),
('São Petersburgo', 19),
('Novosibirsk', 19),
('Ecaterimburgo', 19),
('Kazan', 19);

-- Coreia do Sul (ID = 20)
INSERT INTO cidades(nome,pais) VALUES
('Seul', 20),
('Busan', 20),
('Incheon', 20),
('Daegu', 20),
('Daejeon', 20);

-- Austrália (ID = 21)
INSERT INTO cidades(nome,pais) VALUES
('Sydney', 21),
('Melbourne', 21),
('Brisbane', 21),
('Perth', 21),
('Adelaide', 21);

-- Nova Zelândia (ID = 22)
INSERT INTO cidades(nome,pais) VALUES
('Auckland', 22),
('Wellington', 22),
('Christchurch', 22),
('Hamilton', 22),
('Dunedin', 22);

-- Papua Nova Guiné (ID = 23)
INSERT INTO cidades(nome,pais) VALUES
('Port Moresby', 23),
('Lae', 23),
('Madang', 23),
('Mount Hagen', 23),
('Goroka', 23);

-- Fiji (ID = 24)
INSERT INTO cidades(nome,pais) VALUES
('Suva', 24),
('Nadi', 24),
('Lautoka', 24),
('Labasa', 24),
('Ba', 24);

-- Ilhas Salomão (ID = 25)
INSERT INTO cidades(nome,pais) VALUES
('Honiara', 25),
('Gizo', 25),
('Auki', 25),
('Kirakira', 25),
('Buala', 25);
