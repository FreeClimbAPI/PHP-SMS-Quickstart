FROM php:8.3-alpine

WORKDIR /PHP-SMS-Quickstart

# Install and update composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer self-update

# Copy composer files to install dependencies
COPY composer.json composer.json
COPY composer.lock composer.lock

# Install dependencies
RUN composer install

# Copy the source code into the container
COPY . .

# Run the application.
ENTRYPOINT [ "php", "-S", "0.0.0.0:3000" ]
