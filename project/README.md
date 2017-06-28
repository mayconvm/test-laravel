# Instalação

## Passo-a-passo

### Utilizando o docker para obter o MYSQL
* cd test-laravel/project/infra
* docker-compose up -d
* docker exec test_db bash -c "mysql -psenha-test --execute='CREATE DATABASE teste;'"


### Instalando dependências
* cd test-laravel/project/test
* composer install
* cp .env.example .env
* Abra o arquivo .env utilizando um editor de texto e altere os parâmetros abaixo:
** DB_CONNECTION=mysql
** #DB_HOST=127.0.0.1
** #DB_PORT=3306
** #DB_DATABASE=homestead
** #DB_USERNAME=homestead
** #DB_PASSWORD=secret
* ./artisan key:generate
* php artisan migrate:install
* php artisan migrate:refresh --seed
* ./artisan serve
* 