# Dhruv Patel – Portfolio Website

## Technology stack
- **Front-End:** HTML5, CSS3, JavaScript
- **Back-End:** PHP
- **Database:** MySQL

## Run locally with XAMPP
1. Install and open XAMPP.
2. Start **Apache** and **MySQL**.
3. Copy this project folder into `xampp/htdocs/` (for example, `htdocs/portfolio-website`).
4. Open `http://localhost/phpmyadmin` in your browser.
5. Import the included `database.sql` file using phpMyAdmin's **Import** tab. This creates the `dhruv_portfolio` database and `messages` table.
6. Check `config.php`. The default XAMPP MySQL username is `root` and password is blank; update them if yours are different.
7. Visit `http://localhost/portfolio-website/`.
8. Submit the Contact form. Messages will be saved in the `messages` table.

## Project notes
- The contact form uses PHP and PDO prepared statements to save messages safely.
- Both browser-side and server-side validation are included.
- This project requires a PHP/MySQL hosting environment. It will not run as a PHP backend by opening the file directly or by hosting only on GitHub Pages.
