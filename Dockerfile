FROM debian:buster

# Update and installation of the necessary programs
RUN apt-get update && \
	apt-get install -y nginx wget mariadb-server mariadb-client openssl \
						php-mbstring php-zip php-gd \
						php7.3 php7.3-fpm php7.3-mysql \
						php-common php7.3-cli php7.3-common \
						php7.3-json php7.3-opcache php7.3-readline \
						php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip

# Param nginx
COPY srcs/nginx.conf /etc/nginx/sites-available/localhost
RUN mkdir /var/www/localhost && \
    export AUTOINDEX="on" && \
    ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost

# Param OpenSSL
RUN mkdir /etc/nginx/ssl && \
    openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=paul/CN=localhost"

# Download and param wordpress
RUN mkdir /var/www/localhost/wordpress && \
    wget http://wordpress.org/latest.tar.gz && \
    tar -xzf latest.tar.gz --strip-components=1 -C /var/www/localhost/wordpress && \
    rm -rf latest.tar.gz

# Download and param phpmyadmin
RUN mkdir /var/www/localhost/phpmyadmin && \
    wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz && \
    tar -xzf phpMyAdmin-latest-all-languages.tar.gz --strip-components=1 -C /var/www/localhost/phpmyadmin && \
    rm -rf phpMyAdmin-latest-all-languages.tar.gz

COPY srcs/run.sh ./root/
COPY srcs/autoindex.sh ./root/
COPY srcs/test.php /var/www/localhost/
COPY srcs/config.inc.php /var/www/localhost/phpmyadmin/
COPY srcs/wp-config.php /var/www/localhost/wordpress/

EXPOSE 80 443

HEALTHCHECK --interval=30s --timeout=30s --start-period=5s --retries=3 \ 
	CMD curl --fail https://localhost/ || exit 1

CMD bash root/autoindex.sh && bash /root/run.sh

