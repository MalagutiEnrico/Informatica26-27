CREATE TABLE Medici(
    idMedico                    INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20)            NOT NULL,
    cognome VARCHAR(20)         NOT NULL,
    codiceFiscale CHAR(16)      NOT NULL UNIQUE,
    numeroAlbo INT UNSIGNED     NOT NULL UNIQUE,
    telefono VARCHAR(15)        NOT NULL UNIQUE,
    email VARCHAR(100)          NOT NULL UNIQUE
)