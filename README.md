# WildConnect Forum

## Project Description

WildConnect Forum is an online community platform designed for wildlife and nature enthusiasts. It provides a space for users to connect, share knowledge, and engage in discussions about various aspects of the natural world, including conservation efforts, biodiversity, and environmental challenges.

## Features

*   User Registration and Login
*   Forum Categories and Topics
*   Posting and Replying to Topics
*   Admin Panel for content and user management
*   Display of Research Papers
*   Information Pages on various wildlife aspects
*   Events and Meetups Listing

## Technologies Used

*   PHP
*   PDO (for database interaction)
*   MySQL (Database)
*   HTML
*   CSS (with Bootstrap)
*   JavaScript (with jQuery)

## Setup and Installation

To set up the WildConnect Forum locally, you will need a web server with PHP and MySQL support (e.g., using MAMP, XAMPP, or setting up Apache/Nginx, PHP, and MySQL manually).

1.  **Clone the repository:**
    ```bash
    git clone [repository_url]
    ```
    (Replace `[repository_url]` with the actual URL of your repository)

2.  **Set up the database:**
    *   Create a new MySQL database. You can name it `forum_db_new` or update the database name in `config.php`.
    *   Import the database schema from the `forum_db_new.sql` file located in the project root. You can do this using a database management tool like phpMyAdmin or the MySQL command line:
        ```bash
        mysql -u your_username -p your_database_name < forum_db_new.sql
        ```
        (Replace `your_username` and `your_database_name` with your MySQL username and the name of the database you created)

3.  **Configure the database connection:**
    *   Open the `config.php` file in the project root.
    *   Update the database connection details (`DB_SERVER`, `DB_USERNAME`, `DB_PASSWORD`, `DB_NAME`) to match your MySQL setup.

4.  **Place project files on your web server:**
    *   Move the project files to your web server's document root directory (e.g., `htdocs` for Apache, `www` for Nginx).

5.  **Access the application:**
    *   Open your web browser and navigate to the URL where you placed the project files (e.g., `http://localhost/wildconnect-forum`).

## Usage

*   **Guest Users:** Can view categories, topics, replies, information pages, and events.
*   **Registered Users:** Can register, login, logout, create new topics, and post replies.
*   **Admin Users:** Have access to the admin panel to manage categories, topics, replies, and users.

  


