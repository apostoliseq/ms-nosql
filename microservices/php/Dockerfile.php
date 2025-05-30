FROM php:8.4-alpine

COPY --from=composer:2.8.9 /usr/bin/composer /usr/bin/composer

# Install MongoDB extension
RUN apk add --no-cache autoconf gcc g++ make openssl-dev && \
    pecl install mongodb && \
    docker-php-ext-enable mongodb && \
    apk del autoconf gcc g++ make

WORKDIR /app

COPY composer.json .
RUN composer install

COPY index.php .

EXPOSE 5000

CMD ["php", "-S", "0.0.0.0:5000", "index.php"]