DROP TABLE IF EXISTS Veicolo;
DROP TABLE IF EXISTS BMW;
DROP TABLE IF EXISTS MercedesBenz;

CREATE TABLE Veicolo (
  Marca VARCHAR(20),
  Modello VARCHAR(25),
  Anno INT,
  Colore VARCHAR(20),
  Prezzo FLOAT,
  TipoCarburante VARCHAR(20),
  ConsumoWhKm DOUBLE,
  CapacitaLitri DOUBLE,
  VelocitaMax DOUBLE
);

INSERT INTO Veicolo(Marca, Modello, Anno, Colore, Prezzo, TipoCarburante, ConsumoWhKm, CapacitaLitri, VelocitaMax)

VALUES('BMW', 'Serie 3', '2023', 'Blu', '45000', 'Benzina', '6.5', '480', '250'),
('MercedesBenz', 'Classe C', '2023', 'Nero', '48000', 'Benzina', '6.8', '455', '240'),
('Audi', 'A4', '2023', 'Grigio', '43000', 'Benzina', '6.0', '460', '245'),
('Volkswagen', 'Golf', '2023', 'Bianco', '28000', 'Benzina', '5.2', '380', '220'),
('Ferrari', '488 GTB', '2023', 'Rosso', '250000', 'Benzina', '11.4', '230', '330'),
('Lamborghini', 'Huracan', '2023', 'Giallo', '220000', 'Benzina', '12.3', '150', '325'),
('Porsche', '911', '2023', 'Argento', '150000', 'Benzina', '9.0', '132', '308'),
('Tesla', 'Model S', '2023', 'Bianco', '85000', 'Elettrico', '15.5', '804', '322'),
('Ford', 'Mustang', '2023', 'Rosso', '55000', 'Benzina', '12.0', '408', '250'),
('Chevrolet', 'Camaro', '2023', 'Giallo', '60000', 'Benzina', '14.0', '258', '290'),
('Toyota', 'Corolla', '2023', 'Bianco', '27000', 'Ibrido', '4.5', '361', '180'),
('Honda', 'Civic', '2023', 'Argento', '35000', 'Benzina', '6.8', '420', '220'),
('Nissan', 'Qashqai', '2023', 'Blu', '32000', 'Ibrido', '5.3', '430', '200'),
('Mazda', 'MX-5', '2023', 'Rosso', '30000', 'Benzina', '6.9', '130', '220'),
('Jaguar', 'F-Type', '2023', 'Verde', '90000', 'Benzina', '10.7', '310', '275');

SELECT * FROM Veicolo;