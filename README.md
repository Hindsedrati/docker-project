## Git project

### Installation

```bash
git clone https://github.com/Hindsedrati/docker-project && cd docker-project
```

### Usage
1. You have to launch bdd services
    ```bash
    docker-compose -f docker-compose-bdd.yml up -d
    ```
    This will launch a postgresql database and a adminer interface to manage it.
    You have now access to a database with these credentials:
    - host: postgres
    - port: 5432
    - user: postgres
    - password: postgres
    - database: postgres
    - adminer: http://localhost:8080


2. You have to launch php services
    ```bash
    docker-compose -f docker-compose-php.yml up -d
    ```
   This will launch the php/apache server to preview the website.

3. The website won't be available until you create .env file
    ```bash
      cp ./app/.env.example ./app/.env
    ```
   You have to fill the .env file with these credentials:
   - DB_CONNECTION=pgsql
   - DB_HOST=postgres
   - DB_PORT=5432
   - DB_DATABASE=postgres
   - DB_USERNAME=postgres
   - DB_PASSWORD=postgres
   

   You have now access to the website at http://localhost:8000
   
