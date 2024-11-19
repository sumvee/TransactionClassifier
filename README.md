<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Transaction Classification tool

## Description

This project is a web application built using Laravel and Vue.js. It includes features such as CSV file upload, transaction management, and category association.

## Features

- CSV file upload and processing
- One-to-many relationship between categories and transactions
- Validation of CSV file uploads
- Event, Listener auto configured for CSV file processing
- User authentication and authorization

## Requirements
  - Install [DDev](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/) on local machine

## Installation

1. Clone the repository:
    ```sh
    git clone git@github.com:sumvee/TransactionClassifier.git
    cd TransactionClassifier
    ```

2. Install dependencies:
    ```sh
    ddev start
    composer install
    ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```sh
    cp .env.example .env
    ```

4. Generate an application key:
    ```sh
    php artisan key:generate
    ```

5. Run the migrations:
    ```sh
    php artisan migrate
    ```
   
6. Symlink storage
    ```sh
    php artisan storage:link
    ```



## Usage

- Run 
    ```sh
    ddev describe
    ```
- Access the application at the addresses for ( db, web, mailpit) given in description.
- Log in or register a new account.
- Upload CSV files and manage classification of transactions.

# @todo
 Implement classification using machine learning models
## License

The code base is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
