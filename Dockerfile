FROM debian:buster

RUN apt update && \
    apt install -y vim && \
    apt install -y mariadb-server && \
    apt install -y nginx

CMD service nginx start && \
    bash