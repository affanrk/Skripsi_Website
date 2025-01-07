## Gym Movement Classification
Classify your movement with an easy-to-use platform to these class : Benchpress, Squat, Deadlift
<br><br>
Framework :
- Laravel
- Flask API

## Skripsi
Judul : KLASIFIKASI CITRA GERAKAN OLAHRAGA DALAM GYM MENGGUNAKAN GRAPH CONVOLUTIONAL NETWORK<br>
Nama  : Affan Rifqy Kurniadi<br>
NPM   : 140810200003

# Quick Start - Project With Laravel 8.x
[Laravel Documentation](https://laravel.com/docs/8.x)

### Step by step
Clone this Repository
```sh
git clone https://github.com/affanrk/Skripsi_Website.git my-project
```


Create the .env file
```sh
cd my-project/
cp .env.example .env
```


Update environment variables in .env
```dosini
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=http://127.0.0.1
DB_PORT=3306
DB_DATABASE=name_you_want_db
DB_USERNAME=root
DB_PASSWORD=
```


Install project dependencies
```sh
composer install
```


Generate the Laravel project key
```sh
php artisan key:generate
```


Run the database migrations (Set the database connection in .env before migrating)
```sh
php artisan migrate
```


Storage Link
```sh
php artisan storage:link
```

Start the local development server (Don't forget to start your local database)
```sh
php artisan serve
```


Access the project
[http://localhost:8000](http://localhost:8000)
