FROM php:7.4-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    git \
    zip \
    unzip \
    wget \
    python \
    graphicsmagick \
    libmemcached-dev \
    libz-dev \
    libpq-dev \
    libzip-dev \
    libxml2-dev \
    libssl-dev \
    libmcrypt-dev \
    libonig-dev \
    locales

RUN apt-get update && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
    docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
    docker-php-ext-install gd

RUN docker-php-ext-install \
    mysqli \
    opcache \
    soap \
    zip \
    mbstring \
    pdo \
    pdo_mysql \
    bcmath \
    intl \
    ctype \
    tokenizer

RUN pecl install apcu && docker-php-ext-enable apcu
RUN pecl install xdebug-3.1.5 && docker-php-ext-enable xdebug

RUN openssl req -x509 -nodes -days 3650 -newkey rsa:2048 \
    -keyout /etc/ssl/private/ssl-cert-docker.key \
    -out /etc/ssl/certs/ssl-cert-docker.pem \
    -subj "/C=us/ST=state/L=city/O=company/OU=ltd/CN=Docker"

RUN a2enmod ssl rewrite

EXPOSE 443
