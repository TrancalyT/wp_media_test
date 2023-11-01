# How to implement it ?

Your environment will need a web server such as Apache. If you don't have one, [**Laragon**](https://laragon.org/) can provide you with an easy-to-install, user-friendly one.

Follow these steps to implement the project:

1. Clone this project in your desired directory

   ```shell
    git clone <repository>
    ```
2. Switch to master branch

    ```shell
    git checkout master
    ```
3. Copy .env.example to .env and configure your .env. The crawler will use the URL with the project path, so the APP_NAME variable must have the same name (ie: laragon/www/wp-test-media, my APP_NAME will be wp-test-media). Also remember to modify the environment variables for database configuration, especially these ones :
    ```shell
    APP_NAME
    DB_CONNECTION
    DB_HOST
    DB_PORT
    DB_DATABASE
    DB_USERNAME
    DB_PASSWORD
    ```

4. In project directory execute these commands :

    ```shell
    composer install
    npm install
    npm run dev
    php artisan migrate
    php artisan db:seed:all
    php artisan key:generate
    ```
5. You must boot the crontab for the automatic crawling scheduler to work (ie: on Linux) :
    ```shell
    crontab -e
    ```
6. Add these lines :
    ```shell
    * * * * * php <path_to_project_directory> schedule:run
    ```
7. Launch your local server : 
    ```shell
    php artisan serv
    ```

# How it works ?

Feel free to browse the site, the use of features is intuitive. The administration page can be found at the following URL: localhost/admin, here are your login details:
    ```
    USERNAME: admin
    PASSWORD: KTrhuTYv6Go3fw
    ```