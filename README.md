Steps to start working on this project

## Download source
git clone git clone https://github.com/w3development/w3development.net.git .

git checkout develop

ddev start

## Setup
ddev composer install
ddev import-db --file=docker/db/dump/db-dump-2023-10-14.sql






## System requirements
Operating System:
    Linux, Microsoft Windows or macOS (this also includes hosting on all common cloud environments)
Webserver:
    Apache httpd, Nginx, Microsoft IIS, Caddy Server
Supported Browsers
- Chrome (latest)
- Edge (latest)
- Firefox (latest)
- Safari (latest)
Composer	Composer >= 2.1
Database	MariaDB >= 10.3.0 <= 10.11.99
MySQL >= 8.0.0 <= 8.0.99
PostgreSQL >= 10.0
SQLite >= 3.8.3
Hardware	RAM >= 256 MB
PHP	PHP >= 8.1.0 <= 8.2.99