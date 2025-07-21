
# Stanlay Laravel Task

This project is developed as part of the assignment given by **Asian Contec Ltd. (Stanlay)**.  
It demonstrates the implementation of Laravel Repository Pattern with Migrations, Seeders, and RESTful APIs.

---

##  Features Implemented:
-  Laravel 10 Repository Pattern (Clean Code Architecture)
-  Categories & Products CRUD Operations
-  Migration with Eloquent Relationships
-  Database Seeders with Sample Data
-  Soft Deletes Implemented on Products
-  Tested using Postman (CRUD API Collection included)
-  Optional Blade Frontend for Product Listing

---

##  Project Structure:

```
app/
 └── Repositories/
     ├── Interfaces/
     │    └── ProductRepositoryInterface.php
     └── ProductRepository.php
 └── Http/
     └── Controllers/
         └── ProductController.php

database/
 └── migrations/
 └── seeders/

routes/
 └── api.php
 └── web.php
```

---

##  API Endpoints:

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/products` | Get all products |
| GET | `/api/products/{id}` | Get product by ID |
| POST | `/api/products` | Create/Update product |
| DELETE | `/api/products/{id}` | Soft delete product |

---

##  How to Run:

```bash
git clone https://github.com/SujataCodeDiary/stanlay-laravel-task.git
cd stanlay-laravel-task
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

---

##  API Testing:

-  Use the provided **Postman Collection** in `postman/` folder
-  Test all CRUD APIs with provided example data  


##  Thank You!
Task Completed by **Sujata Mottha**  
Laravel Backend Developer  
