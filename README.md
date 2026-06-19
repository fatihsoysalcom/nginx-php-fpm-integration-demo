# Nginx PHP FPM Integration Demo

This example demonstrates a simple PHP script designed to be served by Nginx and processed by PHP-FPM. It outputs key server variables and PHP environment details, illustrating how Nginx passes requests to the FastCGI Process Manager. This setup is common for high-performance PHP web applications.

## Language

`php`

## How to Run

1. Save the code as `index.php` in your web server's document root (e.g., `/var/www/html/`).
2. Ensure Nginx and PHP-FPM are installed and running on your system.
3. Configure Nginx to pass `.php` requests to your PHP-FPM socket (e.g., `fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;`). Reload Nginx.
4. Access the file via your web browser (e.g., `http://localhost/index.php`).

## Original Article

This example accompanies the Turkish article: [Nginx ve PHP-FPM Entegrasyonu Nasıl Yapılır?](https://fatihsoysal.com/blog/nginx-ve-php-fpm-entegrasyonu-nasil-yapilir/).

## License

MIT — see [LICENSE](LICENSE).
