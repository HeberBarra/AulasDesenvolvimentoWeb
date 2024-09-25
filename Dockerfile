FROM php:8-apache-bookworm

RUN docker-php-ext-install mysqli
