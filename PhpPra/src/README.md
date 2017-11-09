# How to build PhpPra container

## Steps.

1. `git clone (this repo)` and move into it.
1. `docker-compose up --build -d`
    1. If it failed then maybe you want to check the phase installing composer in `PhpPra/Dockerfile` or `LaravelApp/Dockerfile`
1. `curl http://localhost:8081`

## To check data

1. `PGPASSWORD=root psql -h 0.0.0.0 -U root mydb`
