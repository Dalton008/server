FROM debian:buster

RUN apt-get update && apt-get upgrade && apt-get install -y \
	wget \
	nginx \
	sysvinit-utils \
	mariadb-server \
	php-mysql \
	php7.3-fpm \
	php7.3-mysql \
	openssl \
	vim \
	php7.3-xml php-cgi php-common php-fpm php-pear php-mbstring php-zip php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath 

COPY ./srcs/default /etc/nginx/sites-available/default
WORKDIR /var/www/html

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz \
	&& tar xvf phpMyAdmin-5.1.0-all-languages.tar.gz \
	&& rm -rf phpMyAdmin-5.1.0-all-languages.tar.gz \
	&& mv phpMyAdmin-5.1.0-all-languages phpmyadmin

RUN wget https://wordpress.org/latest.tar.gz \
	&& tar -xzvf latest.tar.gz \
	&& rm -rf latest.tar.gz

COPY ./srcs/config.inc.php /var/www/html/phpmyadmin
COPY ./srcs/wp-config.php /var/www/html/wordpress
COPY ./srcs/init.sh /var/www/html

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=RU/ST=Republic of Tatarstan/L=Kazan/O=21 school/OU=IT/CN=localhost"

CMD bash init.sh