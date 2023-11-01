# Introduction

First of all, I'd like to tell you about my relationship with this test. This is the 1st time I've been confronted with SEO, so I had to read up on the subject, how SEO works in the context of an application, how to apply it to development, what is a crawl, what is a sitemap ... 

So the test was very rewarding. At the moment, I'm still not sure whether it's relevant to the subject or not, but I'm still satisfied with it: what I've been able to put in place is functional, clean and intuitive. 

However, I deplore the lack of these points in my test:

- Little commented code
- Not very responsive
- Little security (form, access ...)
- Missing user authentication
- User communication
- Not very user-friendly
- Content editing 
- Use of relevant tags
- Saving homepage.html in case of changes

Most of these points are not specific to the instruction, but I do like to develop an application in its entirety. I'm sorry that my availability didn't allow me to invest more time in these points, and I also didn't find the time to integrate the bonus points except for the dynamic content.

# The problem to be solved in your own words 

It was necessary to set up a crawl administration system in order to gain control over a key element of SEO ranking, without which it could be at a disadvantage. Setting up an administration page including results and the ability to launch a crawl can therefore help alleviate the problem highlighted.

# A technical specification of your design, explaining how it works

- Architecture : The use of Laravel offers the possibility of fully exploiting the MVC architecture I've chosen for this project, but with a certain flexibility.
- Technology: Laravel 10, PHP 8.1, Javascript, MySQL
- Database: The database model is designed to store news articles, tour information, album details, crawl tasks, task statuses, extracted hyperlinks and crawl errors. Foreign keys are used to establish relationships between the various tables.
- Deployment: [see How to implement it ?](#how-to-implement-it)
- Navigation : Feel free to browse the site, the use of features is intuitive. The administration page can be found at the following URL: localhost/admin, here are your login details: 
    ```USERNAME: admin```
    ```PASSWORD: KTrhuTYv6Go3fw```

# The technical decisions you made and why.

I decided to use a library available on Laravel (spatie/crawler), concerning the Crawl. It allows you to easily crawl all the urls in your application. I've limited the crawl to an internal scan, so as to control only the content of the application itself. The construction of the sitemap depends on the last crawl, in fact, the sitemap will be built according to the result of the hyperlinks found during the last crawl. Previous crawls will be set to inactive status, so the sitemap visible will always be the current sitemap. The sitemap is not really deleted, it remains stored in the database but is not used. I thought it would be useful to keep a historical record of the structural state of our application, and it might be interesting to develop a future feature showing the evolution of the sitemap. Errors during the last crawl will also be notified on the administration page in the Crawl tab.

# How your solution achieves the admin’s desired outcome per the user story

1. Data Extraction:
    - Your solution begins by crawling the specified website, starting with the homepage.
	- The crawler extracts hyperlinks from the homepage, which represent internal pages of the website.
2. Link Management:
	- All extracted hyperlinks are stored in a data structure (e.g., an array or a database) to keep track of them.
3. Storing Results:
	- As the crawler progresses, the internal hyperlinks are stored in the database, allowing the admin to access and manage this data.
4. Admin Interaction:
    - The admin interacts with the solution through a web-based interface.
    - The admin can initiate a crawl manually by clicking a button or set it to run automatically at regular intervals (e.g., every hour).
5. Display of Results:
	- The solution displays the results of the crawl on an admin page. This can be presented in a structured format to provide a clear overview of the internal hyperlinks found.

## How to implement it ?

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

Happy surfing ;)

Anthony REINA