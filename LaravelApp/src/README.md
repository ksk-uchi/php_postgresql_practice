# How to build LaravelApp container

## Steps.

1. `git clone (this repo)` and move into it.
1. `docker-compose up --build -d`
    1. If it failed then maybe you want to check the phase installing composer in `PhpPra/Dockerfile` or `LaravelApp/Dockerfile`
1. `docker exec -it phppostgresqlpractice_laravelapp_1 bash`
    1. `cd /var/www/html/blog`
    1. `composer install`
    1. `cp .env.example .env`
    1. `php artisan key:generate`
    1. `chmod 777 -R storate`
    1. `chmod 777 -R bootstrap/cache`
1. `curl localhost:8082`

## To check data

1. `PGPASSWORD=root psql -h 0.0.0.0 -U root mydb`
