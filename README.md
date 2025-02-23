<!-- 1.Clone the Repository -->

git clone https://github.com/your-username/laravel-url-shortener.git
cd laravel-url-shortener

<!-- 2.Install Dependencies -->

composer install
npm install && npm run dev

<!-- 3.Set Up Environment -->

cp .env.example .env

<!-- 4.Generate Application Key -->

php artisan key:generate

<!-- 5. Migrate the Database tables -->
php artisan migrate

<!-- 6. (Optional) Seed the Database -->

php artisan db:seed

<!-- 7. Run the Application -->

php artisan serve
