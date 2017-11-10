# How to build CodeIgniterApp container

## Steps.

1. `git clone (this repo)` and move into it.
1. `docker-compose up --build -d`
    1. If it failed then maybe you want to check the phase installing composer in `PhpPra/Dockerfile`, `LaravelApp/Dockerfile` or `CodeIgniterApp/Dockerfile`
1. `curl localhost:8083`

## To check data

1. `PGPASSWORD=root psql -h 0.0.0.0 -U root mydb`
