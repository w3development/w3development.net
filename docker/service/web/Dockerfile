FROM php:7.4-apache
LABEL name="Elvis Tavasja"
LABEL email="<elvis@w3development.net>"

# Variables
ENV DOMAIN local.w3development.net
ENV WORKDIR /var/www/html
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
ENV APACHE_LOG_DIR /var/www/html/logs
ENV SSL_C AL
ENV SSL_ST Shkoder
ENV SSL_L Shkoder
ENV SSL_O Security
ENV SSL_OU Development
ENV SSL_CN ${DOMAIN}

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
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
        libjpeg-dev \
        libxml2-dev \
        libfreetype6-dev \
        libssl-dev \
        libmcrypt-dev \
        libonig-dev \
        locales

##########################################
## Setting locales
##########################################

RUN echo "en_US.UTF-8 UTF-8" >> /etc/locale.gen && locale-gen


###########################################
# Setting up php libraries
###########################################

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

# RUN pecl install xdebug && docker-php-ext-enable xdebug


###########################################
# gd: Install the PHP gd library
###########################################

# RUN docker-php-ext-install gd && \
 #   docker-php-ext-configure gd \
  #      --enable-gd-native-ttf \
   #     --with-jpeg-dir=/usr/lib \
    #    --with-freetype-dir=/usr/include/freetype2 && \
    #docker-php-ext-install gd

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -keyout /etc/ssl/private/ssl-cert-snakeoil.key \
        -out /etc/ssl/certs/ssl-cert-snakeoil.pem \
        -subj "/C=${SSL_C}/ST=${SSL_ST}/L=${SSL_L}/O=${SSL_O}/OU=${SSL_OU}/CN=${SSL_CN}"

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
        && a2enmod rewrite \
        && a2ensite default-ssl \
        && a2enmod ssl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.34.0/install.sh | bash

WORKDIR ${WORKDIR}

EXPOSE 80
EXPOSE 443
EXPOSE 9000
