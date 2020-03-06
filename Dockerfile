FROM debian:buster

RUN apt update && \
	apt install -y vim && \
	apt install -y wget php-mysql php-json php-fpm php-mbstring php-json php-mbstring && \
	apt install -y mariadb-server && \	
	apt install -y nginx && \
	rm -rf /var/www/html/index.nginx-debian.html

RUN	wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz && \
	tar -xzvf phpMyAdmin-5.0.1-english.tar.gz && \
	mv phpMyAdmin-5.0.1-english /var/www/html/phpmyadmin && \
	chown -R www-data:www-data /var/www/html/phpmyadmin

COPY srcs/index.html /var/www/html/
COPY srcs/default /etc/nginx/sites-enabled/
COPY srcs/config.inc.php /var/www/html/phpmyadmin
COPY srcs/start.sql /

CMD service mysql start && \
	mysql -u root < /start.sql && \
	service php7.3-fpm start && \
	service nginx start && \
	bash