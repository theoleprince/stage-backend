# blog-backend
This is a standalone application for blog, its formed by Laravel Back-End and Angular Front-End.
Made with :heart: by V_CAM

Trello Board: https://trello.com/b/x8mYoUPC/stage-trello

# Application deployment procedure.

## Back-End Laravel

0. Clone the repository
```
$ git clone https://github.com/theoleprince/stage-backend.git
```

1. Move yourself on backend directory
```
$ cd stage-backend
```

2. Install all dependencies
```
$ composer install
```

3. Copy `.env.example` to `.env` and edit the file according to your environment
```
$ cp .env.example .env
```

4. Generate the app key
```
$ php artisan key:generate
```

5. create the stage-backend database in phpMyAdmin and enter this in the .env file on DB_DATABASE 
```
DB_DATABASE=stage-backend

```

6. Run migrations to set up tables into databse and fill them up with initials datas (seed)
```
$ php artisan migrate --seed
```
7. Start the app on the default port (:8000)
```
$ php artisan serve
```
