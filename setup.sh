#!/bin/bash

#Create and build images/containers
docker-compose up -d --build

#Create the laravel project inside the src directory
docker-compose run --rm composer create-project laravel/laravel .

#Config the .env file to match with docker-compose.yml

#Migrate database
docker-compose run --rm php /var/www/html/artisan migrate

#Maybe add some users using tinker
docker-compose exec -it php /var/www/html/artisan tinker

#Connenct to mysql using command line interface(cli)
#mysql -u user -p -h 0.0.0.0 -P 3307
#Or maybe using:
#docker-compose exec -it mysql mysql -u user -p -h 0.0.0.0 -P 3306
