FROM ubuntu:latest  
RUN apt-get update && apt-get install -y nginx php php-fpm php-mysql mysql-client  
RUN mkdir -p /run/php  
COPY index.php /var/www/html
COPY entrypoint /entrypoint  
COPY site-config /etc/nginx/sites-enabled/default  
RUN chmod 0755 /entrypoint

ENTRYPOINT ["/entrypoint"]
