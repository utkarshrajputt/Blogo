# Blogo

Blogo is a blogging site where authors and readers can interact. It features user authentication, article publishing, liking, commenting, and more. Built primarily with PHP, CSS, and JavaScript.

## Features

- User registration and login
- Role-based access: Authors and Readers
- Create, edit, and delete blog posts (Authors)
- Like and comment on posts
- Responsive UI for mobile and desktop
- User profile management
- Secure authentication and authorization

## Tech Stack

- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Database:** MySQL (or your choice; update as needed)
- **Other:** [List any frameworks or libraries used, e.g., Bootstrap, jQuery, etc.]

## Getting Started

### Prerequisites

- PHP >= 7.4
- MySQL/MariaDB
- Web server (e.g., Apache, Nginx)
- Composer (if your project uses it)

### Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/utkarshrajputt/Blogo.git
    cd Blogo
    ```

2. **Set up your database:**
    - Create a new MySQL database (e.g., `blogo`).
    - Import the provided SQL schema (if available).

3. **Configure environment:**
    - Copy `.env.example` to `.env` (if present) and update database credentials.
    - Or, edit the config file (e.g., `config.php`) with your DB settings.

4. **Install dependencies:**  
   If using Composer:
    ```bash
    composer install
    ```
   Run migrations/seeders (if applicable).

5. **Start your web server and visit the project in your browser.**

## Usage

- Register a new user account.
- As an author, create new blog posts.
- Like and comment on posts as a reader or author.

## Contributing

Contributions are welcome! Please open issues or submit pull requests for any improvements or bug fixes.

## License

MIT (or your license of choice).
