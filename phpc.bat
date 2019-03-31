@echo off

docker exec -it --user root --workdir /app php-executive-dev bash -c "php %*"
