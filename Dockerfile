FROM debian:buster

RUN apt update && \
	apt install -y vim && \
	apt install -y wget php-mysql php-json php-fpm php-mbstring && \
	apt install -y mariadb-server && \	
	apt install -y nginx && \
	rm -rf /var/www/html/index.nginx-debian.html

RUN	wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz && \
	tar -xzvf phpMyAdmin-5.0.1-english.tar.gz && \
	mv phpMyAdmin-5.0.1-english /var/www/html/phpmyadmin && \
	chown -R www-data:www-data /var/www/html/phpmyadmin

RUN wget https://es.wordpress.org/latest-es_ES.tar.gz && \
	tar -xzvf latest-es_ES.tar.gz && \
	mv wordpress /var/www/html/wordpress

RUN chmod 700 /etc/ssl/private &&\
	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=SP/ST=Spain/L=Madrid/O=42/CN=127.0.0.1" -keyout /etc/ssl/private/nginx_server.key -out /etc/ssl/certs/nginx_server.crt && \
	openssl dhparam -out /etc/nginx/dhparam.pem 1000

COPY srcs/index.html /var/www/html/
COPY srcs/default /etc/nginx/sites-enabled/
COPY srcs/config.inc.php /var/www/html/phpmyadmin
COPY srcs/start.sql /
COPY srcs/wordpress.sql /
COPY srcs/wp-config.php /var/www/html/wordpress

RUN chown -R www-data:www-data /var/www/* && chmod -R 755 /var/www/*

CMD service mysql start && \
	mysql -u root < /start.sql && \
	mysql -u root wordpress < /wordpress.sql && \
	service php7.3-fpm start && \
	service nginx start && \
	bash