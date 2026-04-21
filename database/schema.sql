-- ES: Estructura de la tabla
-- EN: Table structure

CREATE TABLE tecnicos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(100) UNIQUE,
  nombre VARCHAR(100),
  rol VARCHAR(100),
  whatsapp VARCHAR(20),
  email VARCHAR(100),
  facebook VARCHAR(255),
  instagram VARCHAR(255),
  linkedin VARCHAR(255),
  web VARCHAR(255),
  logo VARCHAR(255)
);