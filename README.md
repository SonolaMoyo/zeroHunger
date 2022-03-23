## GDSC Laravel

GDSC Laravel is a web application built using Laravel web framework during the Google Solution Challenge Team Zero Hunger.  Laravel is a web application framework with expressive, elegant syntax built using PHP

## Contributing To The Project

### Installation 

- Make sure [Composer](https://getcomposer.org/) and [Laravel](https://laravel.com) is installed.

- Make sure a relational database(MySQL or Postgres) is installed.

- Fork and clone the repository


```bash
cd zeroHunger
```
Add upstream 
```bash
git remote add upstream https://github.com/SonolaMoyo/zeroHunger.git
```
Pull upstream changes
```bash
git pull upstream main
```
Install the requirements
```bash
composer install
```

Copy the .env file to your project
```bash
cp .env.example .env
```
Generate your application key
```bash
php artisan key:generate
```
Start the server
```bash
php artisan serve
```
Visit localhost:8000 in your browser


### Make Changes
Pull upstream changes
```bash
git pull upstream main
```
- Make your changes

Add changes
```bash
git add .
```
Commit changes
```bash
git commit -m "commit message"
```

- Make Sure there is no conflict.

Push changes to downstream branch
```bash
git push origin <branch_name> _ **here master**
```

- Create pull request to the upstream main branch

- **Also include your issue number in the commit message with a close action e.g "...this commit close #10" which automatically closes the issue with #10 on merge** <br>

## Features Of The Project

- Authentication (Login and Authentication)
- Basic CRUD functionalities
- API Endpoints 

# Contribution Guide
