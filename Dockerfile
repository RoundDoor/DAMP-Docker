FROM php:8.3.2-apache-bullseye

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

CMD ["apache2-foreground"]

RUN apt-get update \ 
    && apt-get -y --no-install-recommends install \ 
	default-mysql-client \
	libssl-dev  \ 
    && pecl install xdebug  \ 
    && docker-php-ext-enable xdebug \ 
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && apt-get clean \ 
    && rm -rf /var/lib/apt/lists/* /tmp/* /usr/share/doc/*
    
# Install Composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && PHP=$(which php) \
    && $PHP composer-setup.php --quiet --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php



