# FROM mcr.microsoft.com/devcontainers/javascript-node:0-18
FROM php:latest

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1

# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer  
# RUN composer global require squizlabs/php_codesniffer 
# RUN composer global require friendsofphp/php-cs-fixer
# RUN echo 'export PATH=$HOME/.composer/vendor/bin:$PATH' >> /root/.bashrc

# RUN composer global require "squizlabs/php_codesniffer:~3.7.2"
# RUN composer global require "composer-plugin-api:0.6.2"

# RUN composer config --list --global

# RUN ~/.composer/vendor/bin/phpcs -h
# RUN ~/.composer/vendor/bin/phpcbf -h

# RUN export PATH="/home/node/.composer/vendor/bin:$PATH"

COPY --from=composer /usr/bin/composer /usr/bin/composer

# RUN COMPOSER_HOME="/composer" composer global require --prefer-dist --no-progress --dev squizlabs/php_codesniffer
# RUN COMPOSER_HOME="/composer" composer global require --prefer-dist --no-progress --dev slevomat/coding-standard
RUN composer global require "squizlabs/php_codesniffer"
RUN composer global require "slevomat/coding-standard"

ENV PATH /composer/vendor/bin:${PATH}

RUN git clone -b master https://github.com/WordPress/WordPress-Coding-Standards.git /wpcs
RUN phpcs --config-set installed_paths /wpcs

ENV LC_ALL=ja_JP.UTF-8  