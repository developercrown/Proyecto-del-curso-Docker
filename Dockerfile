FROM php:7.4.4
RUN apt-get update && apt-get install -y lsb-base mcrypt libmcrypt4 libmcrypt-dev && apt-get clean
RUN apt-get -y -f install default-mysql-client
RUN apt-get install -y libmagickwand-dev --no-install-recommends && apt-get clean
RUN apt-get install -y libzip-dev && apt-get clean
RUN pecl install imagick
RUN docker-php-ext-enable imagick
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install zip
WORKDIR /app
LABEL Name="proyecto-docker-1"
LABEL Version="0.0.1"
