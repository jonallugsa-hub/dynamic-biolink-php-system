# dynamic-biolink-php-system
PHP-based dynamic bio link system with MySQL, multi-channel contact integration (WhatsApp, email, social media) | Sistema bio link dinámico en PHP con MySQL e integración de múltiples canales

# 🔗 Dynamic BioLink PHP System

**EN:**
A dynamic bio link system built with PHP and MySQL, designed to centralize multiple contact channels (WhatsApp, Email, Social Media) into a single customizable page.

**ES:**
Sistema dinámico de enlaces tipo BioLink desarrollado en PHP y MySQL, diseñado para centralizar múltiples canales de contacto (WhatsApp, correo electrónico, redes sociales) en una sola página personalizable.

---

## 🚀 Features | Funcionalidades

**EN:**

* Dynamic user profiles via URL slug
* WhatsApp integration with pre-filled message
* Email integration (Gmail / mailto)
* Social media links (Facebook, Instagram, LinkedIn, Website)
* Contact export as `.vcf` (vCard)
* Responsive design (mobile-first)
* Lightweight and fast

**ES:**

* Perfiles dinámicos mediante slug en la URL
* Integración con WhatsApp con mensaje predefinido
* Integración con correo electrónico (Gmail / mailto)
* Enlaces a redes sociales (Facebook, Instagram, LinkedIn, Web)
* Exportación de contacto en formato `.vcf` (vCard)
* Diseño responsive (adaptado a móviles)
* Ligero y rápido

---

## 🛠️ Technologies | Tecnologías

* PHP (Core backend)
* MySQL (Database)
* JavaScript (Interactivity)
* CSS3 (Custom styling)
* HTML5

---

## 📂 Project Structure | Estructura del Proyecto

```
dynamic-biolink-php-system/
├── index.php        # Main dynamic page
├── vcf.php          # vCard generator
├── db.php           # Database connection (demo)
├── db.example.php   
├── .htaccess        # URL rewriting
│
├── css/
│   └── style.css
├── js/
│   ├── email.js
│   └── carousel.js
├── img/             # Icons & images
├── video/           # Optional background video
├── database/
│   ├── schema.sql
│   └── seed.sql
│
├── .gitignore
└── README.md
```

---

## ⚙️ Installation | Instalación

**EN:**

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/dynamic-biolink-php-system.git
   ```
2. Move project to your local server (XAMPP, WAMP, etc.)
3. Create a MySQL database (e.g. `biolink_demo`)
4. Import your table (`tecnicos`)
5. Configure `db.php`
6. Open in browser:

   ```
   http://localhost/biolink/?t=your-slug
   ```

**ES:**

1. Clona el repositorio:

   ```bash
   git clone https://github.com/your-username/dynamic-biolink-php-system.git
   ```
2. Coloca el proyecto en tu servidor local (XAMPP, WAMP, etc.)
3. Crea una base de datos (ej: `biolink_demo`)
4. Importa la tabla (`tecnicos`)
5. Configura `db.php`
6. Abre en el navegador:

   ```
   http://localhost/biolink/?t=tu-slug
   ```

---

## 🔐 Security Note | Nota de Seguridad

**EN:**
This repository uses demo credentials. Never upload real database credentials or sensitive company data.

**ES:**
Este repositorio utiliza credenciales de ejemplo. Nunca subas credenciales reales ni datos sensibles de empresas.

---

## 📸 Screenshots | Capturas

<img width="1866" height="911" alt="image" src="https://github.com/user-attachments/assets/5047b128-1d7b-45b1-873f-8dc4763bad35" />

---

## 🌐 Deployment | Despliegue

**EN:**
This project requires a PHP server. It will not run on GitHub Pages.

**ES:**
Este proyecto requiere un servidor con PHP. No funcionará en GitHub Pages.

---

## 👨‍💻 Author | Autor

Developed by **Jonathan Llugsa**

---

## 📄 License | Licencia

This project is for educational and portfolio purposes.

Este proyecto es para fines educativos y de portafolio.

