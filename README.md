# Cookmates

Cookmates is a dashboard for managing a cooking recipes website.  
Built with Laravel 10.

---

## Features

### Admin Dashboard
- Login with email and password  
- View all recipes  
- Edit or delete recipes  
- Search recipes by title  
- Add new recipes  
- Add new admins via the register page  
- Logout  

### Public API
For mobile app integration  

- Fetch all recipes  
- Fetch details of a recipe  
- Add a recipe to favorites by sending `device_id` and `recipe_id`  
- Remove a recipe from favorites by sending `device_id` and `recipe_id`  

---

## Requirements
- PHP >= 8.1  
- Composer  
- MySQL  
- Laravel 10  

---

## Installation
```bash
# Clone the repository
git clone <repo-url>
cd cookmates

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Configure .env with your database credentials

# Run migrations
php artisan migrate

# Start the development server
php artisan serve
```

---

# API Examples

## Get all recipes
- GET /api/cookmates

## Get recipe details
- GET /api/cookmates/5

## Get all favorites
- GET api/favorites/Dell-3500

## Add recipe to favorites
- POST /api/favorites
- Content-Type: application/json
- {
-   "device_id": "12345",
-   "recipe_id": 10
- }

## Remove recipe from favorites
- DELETE /api/favorites/Dell-3500/5

---

# Developed by
- **Yousef Altohamy**

---

# To connect
- [GitHub/yousef](https://github.com/YousefAlTohamy)
