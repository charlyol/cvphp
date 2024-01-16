server {
listen 80;
server_name adminer.local;
index index.php;
root /var/www/adminer;
location ~ \.php$ {
include snippets/fastcgi-php.conf;
fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
}
}