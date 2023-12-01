# PHP CRUD Application

This is a simple PHP CRUD application that allows users to perform basic CRUD operations on a database through posts.

## Features

- **Create:** Add new posts to the database.
- **Read:** Display existing posts from the database.
- **Update:** Modify and update existing posts in the database.
- **Delete:** Delete posts from the database.

## Technologies Used

- **PHP with Laravel:** Utilized Laravel framework for backend development.
- **SQLite3:** Database management system used for data storage.

## Installation

1. Clone this repository: `git clone https://github.com/NoOPeEKS/user-crud-app-laravel.git`
2. Run the following command: `php artisan serve`

## Usage

- Access the application via the browser through url `http://127.0.0.1:8000`.
- Register and log in with your credentials.
- Use the provided forms to create, view, edit, or delete posts.

## General File Structure

- **app:** Contains the core application code.
  - **Http:** Handles HTTP requests and responses.
    - **Controllers:** Contains controllers for handling requests.
  - **Models:** Contains the application's data models.
- **config:** Configuration files for the application.
- **database:** Contains database-related files (migrations, seeds).
- **public:** The web server's document root.
  - **css:** CSS files for styling.
  - **js:** JavaScript files.
  - **index.php:** Main entry point for the application.
- **resources:** Contains views, language files, and raw assets.
  - **views:** Blade templates for UI.
- **routes:** Contains route definitions.
- **storage:** Stores framework-generated files (logs, caches).
- **tests:** Contains automated tests.

## License

This project is licensed under the [MIT License](LICENSE).

## Author

[NoOPeEKS](https://github.com/NoOPeEKS)