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
