# 🔗 Dynamic BioLink PHP System

A dynamic bio link system built with **PHP + MySQL**, designed to centralize multiple contact channels (WhatsApp, Email, Social Media) into a single customizable landing page.

Sistema de enlaces tipo BioLink desarrollado en **PHP + MySQL**, diseñado para centralizar múltiples canales de contacto (WhatsApp, correo, redes sociales) en una sola página personalizable.

---

## 🚀 Features | Funcionalidades

### EN
- Dynamic user profiles via URL slug
- WhatsApp integration with pre-filled message
- Email integration (mailto / Gmail)
- Social media links (Facebook, Instagram, LinkedIn, Website)
- Contact export as `.vcf` (vCard)
- Responsive design (mobile-first)
- Lightweight and fast performance

### ES
- Perfiles dinámicos mediante slug en la URL
- Integración con WhatsApp con mensaje predefinido
- Integración con correo electrónico (mailto / Gmail)
- Enlaces a redes sociales (Facebook, Instagram, LinkedIn, Web)
- Exportación de contacto en formato `.vcf` (vCard)
- Diseño responsive (mobile-first)
- Ligero y rápido

---

## 🛠️ Technologies | Tecnologías

- PHP (Backend)
- MySQL (Database)
- JavaScript (Interactivity)
- HTML5
- CSS3

---

## 📂 Project Structure | Estructura del Proyecto


dynamic-biolink-php-system/
├── index.php # Main dynamic page
├── vcf.php # vCard generator
├── db.php # Database connection (local use)
├── db.example.php # Example config (safe template)
├── .htaccess # URL rewriting
│
├── css/
│ └── style.css
│
├── js/
│ ├── email.js
│ └── carousel.js
│
├── img/ # Icons & images
│ ├── default.png
│ ├── wpp.png
│ ├── gmail.png
│ └── redes.png
│
├── video/ # Optional background video
│
├── database/
│ ├── schema.sql # Database structure
│ └── seed.sql # Demo data
│
├── .gitignore
└── README.md


---

## ⚙️ Installation | Instalación

### EN

git clone https://github.com/your-username/dynamic-biolink-php-system.git

1. Move project to local server (XAMPP / WAMP / Laragon)  
2. Create a MySQL database: biolink_demo  
3. Import database structure: database/schema.sql  
   (Optional) database/seed.sql  
4. Configure db.php with your database credentials  
5. Open in browser: http://localhost/dynamic-biolink-php-system/?t=your-slug  

---

### ES

git clone https://github.com/your-username/dynamic-biolink-php-system.git  

1. Mueve el proyecto a tu servidor local (XAMPP / WAMP / Laragon)  
2. Crea una base de datos MySQL: biolink_demo  
3. Importa la estructura: database/schema.sql  
   (Opcional) database/seed.sql  
4. Configura db.php con tus credenciales  
5. Abre en el navegador: http://localhost/dynamic-biolink-php-system/?t=tu-slug  

---

## 🗄️ Database Setup | Base de Datos

### EN
The project includes a database/ folder:
- schema.sql → Creates tables and structure  
- seed.sql → Inserts demo data  

### ES
El proyecto incluye la carpeta database/:
- schema.sql → Crea tablas y estructura  
- seed.sql → Inserta datos de prueba  

---

## 🔐 Security Note | Seguridad

### EN
This project uses demo configuration files. Never upload real credentials to GitHub.

### ES
Este proyecto usa archivos de ejemplo. No subas credenciales reales a GitHub.

---

## 📸 Screenshots | Capturas

<img width="1866" height="911" alt="image" src="https://github.com/user-attachments/assets/5047b128-1d7b-45b1-873f-8dc4763bad35" />

---

## 🌐 Deployment | Despliegue

### EN
Requires a PHP server (XAMPP, hosting, VPS). Not compatible with GitHub Pages.

### ES
Requiere un servidor PHP (XAMPP, hosting o VPS). No funciona en GitHub Pages.

---

## 👨‍💻 Author | Autor

Developed by Jonathan Llugsa

---

## 📄 License | Licencia

This project is for educational and portfolio purposes only.  
Este proyecto es solo para fines educativos y de portafolio.
