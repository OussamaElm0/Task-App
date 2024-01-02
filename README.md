# Laravel TaskApp

This is a simple task management application built with Laravel.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/OussamaElm0/TaskApp.git
   ```

2. Install the dependencies:

   ```bash
   composer install
   ```

3. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration in the `.env` file.

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Run the database migrations:

   ```bash
   php artisan migrate
   ```

6. Start the development server:

   ```bash
   php artisan serve
   ```

## Usage

- Access the application in your browser at `http://localhost:8000`.
- Register a new account or log in with an existing one.
- Create, update, and delete tasks.
- Mark tasks as completed.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
