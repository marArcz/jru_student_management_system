<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/marArcz/jru_student_management_system/mz/public/images/jru-logo.png" width="200" alt="Laravel Logo"></a></p>


# <p align="center">JRU STUDENT MANAGEMENT SYSTEM</p>

#### Created using the Laravel framework

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).



## PREREQUISITES 
Before you begin, make sure you have the following installed on your system:

- PHP (>= 7.3.0)
- Composer
- Node.js
- NPM or Yarn
- Laravel CLI
- MySQL Database | XAMPP 


## SETTING UP THE PROJECT
#### Open the project and follow the steps below 
#### 1. **Install composer dependencies**
##### Open a terminal and run the following command
##### <pre>composer install</pre>

#### 2. **Install NPM dependencies**
##### Run the following command in the terminal
##### <pre>npm install</pre>

#### 3. **Create .env file**
##### Run the following command in the terminal
##### <pre>copy .env.example .env</pre>

#### 4. **Generate application key**
##### Run the following command in the terminal
##### <pre>php artisan key:generate</pre>

#### 5. **Migrating and seeding database**
##### Run the following command in the terminal
##### (Make sure that your MySQL database is running.)

##### <pre>php artisan migrate --seed</pre>
##### The command above will ask to create the database, select yes and continue.

#### 6. **Building and compiling assets**
##### Run the following command in the terminal
##### <pre>npm run build</pre>
##### This will compile the assets of the application such as images, CSS stylesheets and javascript and store them in a build folder in the public directory of the project.


## **Running the application**
##### Run the following command in the terminal
##### <pre>php artisan serve</pre>


##### After successfully running the commands above. You can now access the application in the url:
#### http://127.0.0.1:8000


## <p style="color:#12a1e9">Default Admin Account (Admin portal)</p>
#### You can access the admin portal using the default admin account

#### email: <u>admin@gmail.com</u>
#### password: <u>admin</u>


