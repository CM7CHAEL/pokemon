#create project laravel
  create-project --prefer-dist laravel/laravel app-name
  php artisan serve

#configuration git clone
  .env
  APP_NAME=Laravel
  APP_ENV=local
  APP_KEY=base64:s4HmVWua3/TjpETl/PrfBlDhS+lAzuuwZy/O28I5qkk=
  APP_DEBUG=true
  APP_URL=http://localhost

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=pokemon
  DB_USERNAME=root
  DB_PASSWORD=
  #commands 
    php artisan key:generate
    php artisan cache:clear
    php artisan config:cache
