FROM debian:buster

RUN apt update && \
    apt install -y vim && \
    apt install -y mariadb-server && \
    apt install -y nginx && \
    apt -y install sudo && \
    apt install -y wget php php-cgi php-mysqli php-pear php-mbstring php-gettext libapache2-mod-php php-common php-phpseclib php-mysql

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.zip && \
    apt install -y unzip && \
    unzip phpMyAdmin-4.9.0.1-all-languages.zip && \
    sudo mv phpMyAdmin-4.9.0.1-all-languages /usr/share/phpmyadmin && \
    sudo chown -R www-data:www-data /usr/share/phpmyadmin

CMD service nginx start && \
    bash