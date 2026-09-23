# Tasks for Today Management System

A CodeIgniter 4 task-management application created for IT0049 Web System Technologies. The Welcome page filters tasks to the current date, while the Task List page displays every task in chronological order. The project also includes a database-backed Profile page and a static About page.

## Requirements

- PHP 8.2 or newer
- Composer
- MySQL or MariaDB
- CodeIgniter 4

## Local setup

1. Copy the project into `C:\xampp\htdocs\tasks-today`.
2. Start Apache and MySQL in XAMPP.
3. Create a MySQL database named `tasks_for_today`.
4. Copy `env` to `.env` if `.env` is not present.
5. Install dependencies with `composer install`.
6. Create the tables and sample records:

```powershell
php spark migrate
php spark db:seed DemoDataSeeder
```

7. Start the local server:

```powershell
php spark serve --port 8082
```

8. Open `http://localhost:8082/`.

As an alternative to migrations and seeding, import `database/tasks_for_today.sql` through phpMyAdmin.

## Pages

- `/` - tasks scheduled for today only
- `/tasks` - all tasks ordered by date
- `/profile` - the single demo user
- `/about` - project and developer information

## Database structure

The application uses the `tasks` and `users` tables. `TaskModel` provides the date-filtered query for the Welcome page, and both pages retrieve their records through CodeIgniter models and Query Builder.

## Deployment

Set the production database credentials and hosted base URL using environment variables or a server-side `.env` file. Never commit database passwords.

## Submission links

- GitHub repository: Add after creating the repository
- Hosted application: Add after deployment
