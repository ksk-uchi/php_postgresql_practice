# How to use

1. Checkout and move into this Repo.
1. `docker-compose up --build -d`
    1. If it failed then maybe you want to check the phase installing composer in `MainApp/Dockerfile`
1. `curl http://localhost`

## To check data

1. `PGPASSWORD=root psql -h 0.0.0.0 -U root mydb`
