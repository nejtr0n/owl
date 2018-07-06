# Readme
### Для запуска

* ```git clone https://github.com/nejtr0n/owl.git owl```
* ```cd owl```
* ```docker-compose up -d```
* ```docker exec -it -u 1000 owl_php_1 bash```
* ```composer install```
* ```cp .env.example .env```
* ```php artisan key:generate```
* ```php artisan migrate:refresh --seed```

### Открыть
http://localhost/login

```
login: admin@localhost
pass: secret
```

Откроется админка

Обращаю Ваше внимание, что вариант с
https://github.com/nejtr0n/owl/blob/d9c517ef111eac462882153619104edb9c73f67b/www/app/Http/Controllers/HomeController.php#L28:L33
выполняется быстрее.