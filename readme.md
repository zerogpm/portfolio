

## About Dockerized Laravel 5.6

Some other commands you’ll be running often in a Laravel project:

## Create a throwable composer
`docker run --rm -v $(pwd):/app composer install`

## config .env
`cp .env.example .env`

## bring up laravel and all services
`docker-compose up`

## APP key
`docker-compose exec app php artisan key:generate`

## Set permission

`sudo chmod -R 777 bootstrap/cache/`

`sudo chmod -R 777 storage/`

## Install nodejs
`sudo apt-get install curl`

`curl -sL https://deb.nodesource.com/setup_10.x | sudo -E bash -
sudo apt-get install -y nodejs`

## Install npm
`npm install`

## run npm
`sudo npm run watch`

## Check the site
`localhost:3000` 

## Enjoy!
