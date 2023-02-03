# Site Pessoal
## Seja bem vindo

Este site apresenta informações pessoais 
e profissionais como habilidades, portfólio, projetos, 
redes sociais, dados de contato, desenvolvido.

## Vizualização do projeto

Para a visualização deste projeto o site encontra-se 
hospedados no seguinte link:
https://alessandropassaf1.websiteseguro.com/site/


## Sobre o projeto

Este projeto foi desenvolvido utilizando HTML, CSS e Javascript



## Pré requisitos

Antes de iniciar o projeto, certifique-se que você tenha o docker e o Docker Compose instalado em seu ambiente.

## Criando a imagem do docker

Dentro dos projetos, existe um arquivo Dockerfile
Ele é responsável por definir a composição da camada da construção da imagem que iremos utilizar.

### Criando imagen

```bash
FROM php:5.6-apache
RUN docker-php-ext-install mysqli


# INSTALL PHP EXTENSIONS
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
#RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# ANABLE APACHE MOD REWRITE
RUN a2enmod rewrite

# ANABLE APACHE MOD HEADER
RUN a2enmod headers

# UPDATE APT-GET AND INSTALL LIBS
RUN apt-get update -y
RUN apt-get install -y openssl zip unzip git libnss3 libpng-dev

```

## docker-compose

O docker-compose.yml está configurado o services.

```yml
version: '3'

services:
  php:
    container_name: PHP
    build: .
    ports:
    - "80:80"
    - "443:443"
    volumes:
    - ./html:/var/www/html
    - ./custom.php.ini:/usr/local/etc/php/php.ini

```

## Terminal

Para iniciar e visualizar o status dos containers
execute os seguintes comandos.


```bash
# Supondo que esteja na raiz do projeto
cd docker-compose

# Iniciar os containers
$ docker-compose up -d

# Vizualizar o status dos containers
$ docker-compose ps
```

O site estará disponível em [http://localhost](http://localhost/)


