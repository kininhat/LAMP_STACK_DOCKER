# LAMP_STACK_DOCKER

LAMP_STACK_DOCKER

## A basic LAMP stack environment built using Docker Compose. It consists of the following:

* PHP
* Apache
* MySQL
* phpMyAdmin

## As of now, we have several different PHP versions. Use appropriate php version as needed:

* 5.6.40
* 7.0.33
* 7.1.33
* 7.2.33
* 7.3.33
* 7.4.33
* 8.0.33
* 8.1.0
* 8.2.8
* latest = 8.2.8

## I. Installation

* Clone this repository on your local computer
* Configure file in [.env](./.env)
* Run the **docker-compose up -d**

```bash
git clone https://github.com/kininhat/LAMP_STACK_DOCKER.git
cd LAMP_STACK_DOCKER
docker-compose up -d
##visit localhost
##Your LAMP stack is now ready!! You can access it via http://localhost.
```

## II. PHP extension support

### php5.6.40

```bash
[PHP Modules]
bcmath
Core
ctype
curl
date
dom
ereg
fileinfo
filter
ftp
gd
hash
iconv
imagick
intl
ionCube Loader
json
libxml
mbstring
mcrypt
memcached
mhash
mssql
mysqli
mysqlnd
odbc
openssl
pcre
PDO
pdo_mysql
PDO_ODBC
pdo_sqlite
Phar
posix
readline
redis
Reflection
session
SimpleXML
SPL
sqlite3
standard
tokenizer
xdebug
xml
xmlreader
xmlwriter
zip
zlib

[Zend Modules]
Xdebug
the ionCube PHP Loader + ionCube24
```

### php7.0.33 -> latest = php8.2.8

```bash
[PHP Modules]
Core
ctype
curl
date
dom
fileinfo
filter
ftp
gd
hash
iconv
imagick
ionCube Loader
json
libxml
mbstring
mcrypt
memcached
mysqli
mysqlnd
odbc
openssl
pcre
PDO
pdo_mysql
PDO_ODBC
pdo_sqlite
pdo_sqlsrv
Phar
posix
random
readline
redis
Reflection
session
SimpleXML
sodium
SPL
sqlite3
sqlsrv
standard
tokenizer
xdebug
xlswriter
xml
xmlreader
xmlwriter
xsl
zlib

[Zend Modules]
Xdebug
the ionCube PHP Loader
```

## III. Config vhosts

* Vhosts config at dir: [config/vhosts](https://github.com/kininhat/LAMP_STACK_DOCKER/tree/main/config/vhosts)
