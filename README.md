![exel](https://i.imgur.com/tnZC9wk.png)
# Getting started

The goal of the application is to display table of cars only making one eloquent call which would inner join table and include 4 relationships: oneToMany(3) and ManyToMany(1)

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com:Saltibarsciai/eloquent-task.git

Switch to the repo folder

    cd eloquent-task

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:Saltibarsciai/eloquent-task.git
    cd eloquent-task
    composer install
    cp .env.example .env
    php artisan key:generate

    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with seed data with relationships . This can help you to quickly start testing**


Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8000/
