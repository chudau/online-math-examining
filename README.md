# Prerequisites
1. Laravel 7.x and PHP 7.2.5.
2. MySQL/MongoDB.
3. Database user with all granted priviliges on database named `math_exam_dblab`.

# How to run?
Run following commands:
```
git clone [https://github.com/chudau/online-math-examining.git](https://github.com/chudau/online-math-examining.git)
cd OnlineMathExamining
composer install
cp .env.example .env
php artisan key:generate
nano .env
```
Create a database named: `online_math_exam`
Edit these fields with your database credentials
```
DB_USERNAME=<username>
DB_PASSWORD=<password>
```
Save .env and run:
```
php artisan migrate
```
Use dumped data inside `database/data/` to feed into database for testing.

To make sure css and js work properly, run:
```
npm install
npm run dev
```

Point local web server to `public/` or simply `php artisan serve`.


