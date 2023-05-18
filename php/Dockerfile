FROM alpine:3.17

# Install dependencies
RUN apk update && apk add --no-cache \
    apache2 \
    apache2-ssl \
    apache2-utils \
    php8 \
    php8-apache2 \
    php8-openssl \
    php8-pdo \
    php8-pdo_pgsql \
    php8-intl \
    php8-zip \
    php8-calendar \
    php8-dom \
    php8-mbstring \
    php8-gd \
    php8-xsl \
    php8-apcu \
    postgresql-dev \
    nano \
    locales \
    git \
    g++ \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    libxslt-dev \
    unzip

# Set locales
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
    && echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen \
    && locale-gen

# Configure Apache
RUN sed -i 's/^#ServerName .*/ServerName localhost/' /etc/apache2/httpd.conf

WORKDIR /var/www/html
