# Machinarium

## Getting started

## Installation:

1. Make a copy of the .env.example
    ```bash
    cp .env.example .env
    ```
2. Create and start all containers
    ```bash
   docker-compose up -d
    ```
3. Connect to app container
    ```bash
    docker-compose exec -u www app sh
    ```
4. Install laravel dependencies:
   ```bash
   composer i
   ``` 
5. Generate the application key for the Laravel application
    ```bash
    php artisan key:generate
    ``` 
6. Refresh database using command:
   ```bash
   php artisan migrate:fresh --seed
   ```  
7. To quit from container:
   ```bash
   exit 
8. Restart containers to apply key:
   ```bash
   docker-compse down && docker-compose up -d
   ```
