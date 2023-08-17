Trong Docker Compose, links và depends_on đều là những chỉ dẫn cho Docker về các mối quan hệ giữa các dịch vụ. Tuy nhiên, chúng có những khác biệt quan trọng.

links:

links dùng để thiết lập kết nối giữa các dịch vụ.
Khi một dịch vụ được liên kết với một dịch vụ khác thông qua links, Docker sẽ thêm thông tin về dịch vụ được liên kết vào /etc/hosts của dịch vụ liên kết. Điều này cho phép dịch vụ liên kết gọi dịch vụ được liên kết bằng tên.
Chỉ dẫn links cũng đảm bảo rằng dịch vụ được liên kết sẽ được khởi động trước dịch vụ liên kết.
Tuy nhiên, links không đảm bảo rằng dịch vụ được liên kết sẽ hoàn thành khởi động (ví dụ: database đã sẵn sàng phục vụ) trước khi dịch vụ liên kết được khởi động.
Cần lưu ý là tính năng links đã được đánh dấu là lỗi thời (deprecated) và có thể sẽ không được hỗ trợ trong tương lai.
depends_on:

depends_on dùng để chỉ định thứ tự khởi động các dịch vụ.
Khi một dịch vụ được khai báo là phụ thuộc vào một dịch vụ khác thông qua depends_on, Docker sẽ đảm bảo rằng dịch vụ được phụ thuộc sẽ được khởi động trước khi dịch vụ phụ thuộc được khởi động.
Tuy nhiên, giống như links, depends_on cũng không đảm bảo rằng dịch vụ được phụ thuộc sẽ hoàn thành khởi động trước khi dịch vụ phụ thuộc được khởi động.
Để đảm bảo rằng dịch vụ phụ thuộc chỉ được khởi động khi dịch vụ được phụ thuộc hoàn toàn sẵn sàng, bạn cần sử dụng một công cụ bên ngoài như wait-for-it, dockerize, hoặc shoutrrr.
Tóm lại, links và depends_on đều cho phép bạn chỉ định mối quan hệ giữa các dịch vụ trong Docker Compose, nhưng links còn cung cấp tính năng mạng thêm vào đó, trong khi depends_on chỉ cung cấp quy định về thứ tự khởi động dịch vụ.


ssl cho localhost:
https://github.com/FiloSottile/mkcert#installation

Sự khác nhau giữa RUN, CMD, ENTRYPOINT trong Dockerfile
https://www.youtube.com/watch?v=4a24iYZhKCE


docker-Compose
https://www.youtube.com/watch?v=WX0YLs1Jnjs

php-extension
https://github.com/mlocati/docker-php-extension-installer

ko chuan
https://techmaster.vn/posts/36513/su-khac-biet-giua-run-cmd-va-entrypoint-trong-dockerfile


install-php-extensions
https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions

ioncube_loader
https://www.tecmint.com/install-ioncube-loader-in-ubuntu-debian/

php5x -> php70
  echo "deb http://archive.debian.org/debian stretch main" > /etc/apt/sources.list
  apt-get -y install --fix-missing apt-utils build-essential git curl libcurl3 libcurl3-openssl-dev zip openssl apt-utils vim wget dialog libxslt1.1 libxslt1-dev libmcrypt4 libmcrypt-dev libmagickwand-dev imagemagick mcrypt libmemcached-dev libmemcachedutil2 libmemcached11 unixodbc unixodbc-dev


php71
   apt-get update && apt-get -y upgrade
   apt-get -y install --fix-missing apt-utils build-essential git curl libcurl4 libcurl4-openssl-dev zip openssl apt-utils vim wget dialog libxslt1.1 libxslt1-dev libmcrypt4 libmcrypt-dev libmagickwand-dev imagemagick mcrypt libmemcached-dev libmemcachedutil2 libmemcached11 unixodbc unixodbc-dev
   curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

 php7.0 - php7.1 - php7.2
   pecl install xdebug-2.6.0

 php7.3 - php7.4
   pecl install xdebug-2.9.8
   
 php8.0 - php8.1
  pecl install xdebug-3.1.0

   docker-php-ext-enable xdebug

   yes '' | pecl install mcrypt
   docker-php-ext-enable mcrypt && php -m | grep mcrypt

   yes '' | pecl install imagick
   docker-php-ext-enable imagick && php -m | grep imagick

    wget -O /tmp/pear/download/ioncube_loaders_lin_x86-64.tar.gz  http://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz
    tar -xf /tmp/pear/download/ioncube_loaders_lin_x86-64.tar.gz -C /tmp/pear/download/
    cp /tmp/pear/download/ioncube/ioncube_loader_lin_7.1.so /usr/local/lib/php/extensions/no-debug-non-zts-*
    docker-php-ext-enable /usr/local/lib/php/extensions/no-debug-non-zts-*/ioncube_loader_lin_*

    docker-php-ext-install xsl

    wget -O /usr/local/bin/install-php-extensions https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions
    chmod +x /usr/local/bin/install-php-extensions
    install-php-extensions php-memcached-dev/php-memcached@8f106564e6bb005ca6100b12ccc89000daafa9d8

   memcached -d -u memcache -m 1024 -l 127.0.0.1 -p 11211

   apt-get update

   php7.2
   pecl install https://pecl.php.net/get/sqlsrv-4.3.0.tgz
   docker-php-ext-enable sqlsrv && php -m | grep sqlsrv
   pecl install https://pecl.php.net/get/pdo_sqlsrv-4.3.0.tgz
   docker-php-ext-enable pdo_sqlsrv && php -m | grep pdo_sqlsrv


   php7.3 - php7.4
   pecl install https://pecl.php.net/get/sqlsrv-5.10.1.tgz
   docker-php-ext-enable sqlsrv && php -m | grep sqlsrv
   pecl install https://pecl.php.net/get/pdo_sqlsrv-5.10.1.tgz
   docker-php-ext-enable pdo_sqlsrv && php -m | grep pdo_sqlsrv

   php8.0 - php8.1
   pecl install https://pecl.php.net/get/sqlsrv-5.11.0.tgz
   docker-php-ext-enable sqlsrv && php -m | grep sqlsrv
   pecl install https://pecl.php.net/get/pdo_sqlsrv-5.11.0.tgz
   docker-php-ext-enable pdo_sqlsrv && php -m | grep pdo_sqlsrv

   apt-get install redis -y
   #redis-server --daemonize yes
   yes '' | pecl install redis
   docker-php-ext-enable redis && php -m | grep redis

   docker-php-ext-install gd

   yes '' |  pecl install xlswriter
   docker-php-ext-enable xlswriter && php -m | grep xlswriter

   docker-php-ext-install pdo_mysql mysqli
   #docker-php-ext-configure pdo_odbc --with-pdo-odbc=unixODBC,/usr
   apt-get install unixodbc unixodbc-dev -y \
   && docker-php-ext-configure pdo_odbc --with-pdo-odbc=unixodbc,/usr \
   && docker-php-ext-install pdo_odbc
   
   php7.1 - php7.2
   set -x \
    && /usr/local/bin/phpize \
    && sed -ri 's@^ *test +"\$PHP_.*" *= *"no" *&& *PHP_.*=yes *$@#&@g' configure \
    && ./configure --with-unixODBC=shared,/usr \
    && docker-php-ext-install odbc
   php -m | grep odbc

   php7.3 - php7.4
   set -x \
   && cd /usr/src/php/ext/odbc \
   && phpize \
   && sed -ri 's@^ *test +"\$PHP_.*" *= *"no" *&& *PHP_.*=yes *$@#&@g' configure \
   && ./configure --with-unixODBC=shared,/usr \
   && docker-php-ext-install odbc
   php -m | grep odbc

#bí thuật odbc
set -ex; 	docker-php-source extract; 	{ 		echo '# https://github.com/docker-library/php/issues/103#issuecomment-271413933'; 		echo 'AC_DEFUN([PHP_ALWAYS_SHARED],[])dnl'; 		echo; 		cat /usr/src/php/ext/odbc/config.m4; 	} > temp.m4; 	mv temp.m4 /usr/src/php/ext/odbc/config.m4; 	docker-php-ext-configure odbc --with-unixODBC=shared,/usr; 	docker-php-ext-install odbc; 	docker-php-source delete


## I. Gải thích trong docker-compose.yml

    extra_hosts:
      - "host.docker.internal:host-gateway"


extra_hosts: Định nghĩa tên máy chủ bổ sung cho container. Trong trường hợp này, nó định nghĩa tên "host.docker.internal" ánh xạ đến "host-gateway".

`extra_hosts` là một tính năng trong Docker giúp thêm một số entry vào file `/etc/hosts` của container. Điều này cho phép bạn ánh xạ một tên miền hoặc tên máy chủ bổ sung tới một địa chỉ IP cụ thể.

Trong trường hợp của bạn:
```
extra_hosts:
  - "host.docker.internal:host-gateway"
```
Cấu hình này thêm một entry vào file `/etc/hosts` của container, nơi "host.docker.internal" sẽ được giải quyết tới địa chỉ IP của "host-gateway".

`host-gateway` là một tính năng mới trong phiên bản gần đây của Docker, giúp ánh xạ đến IP của máy chủ Docker (hoặc máy chủ chứa Docker daemon). Trong nhiều trường hợp, `host.docker.internal` là một cách tiện lợi để cho phép ứng dụng trong container giao tiếp với các dịch vụ chạy trên máy chủ Docker, nhưng mặc định nó chỉ hoạt động trên môi trường desktop như Docker Desktop trên macOS và Windows. Sử dụng `host-gateway` giúp mở rộng tính năng này cho các môi trường khác như Linux.