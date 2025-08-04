# Examen 1 – Taller de Aplicaciones de Internet

## Docente  
**Ing. Víctor Pérez Rojas**

## Fecha de entrega  
**04/08/2025**

---

## Proyecto Laravel: API con Sanctum  
Este proyecto fue desarrollado como parte del primer examen parcial. Contiene una API RESTful con autenticación usando **Laravel Sanctum** y operaciones **CRUD para Marcas y Productos**.

---

## Requisitos
- PHP >= 8.1  
- Composer  
- Laravel 10  
- MySQL  
- Postman  

---

## ⚙️ Pasos para correr el proyecto

1. Clonar el repositorio:
   git clone https://github.com/luisdavid159/Examen1--Neobyte.git
   cd Examen1--Neobyte
# Instalar dependencias
composer install

# Configurar base de datos en .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=neobytedb
DB_USERNAME=root
DB_PASSWORD=
# Ejecutar migraciones
php artisan migrate

# Ejecutar seeders
php artisan db:seed

# Iniciar el servidor de desarrollo
php artisan serve

