FROM kininhat/php-apache:5.6.40

# Insure an SSL directory exists
RUN mkdir -p /etc/apache2/ssl

# Enable SSL support
RUN a2enmod ssl && a2enmod rewrite

# Enable apache modules
RUN a2enmod rewrite headers

# Cleanup
RUN rm -rf /usr/src/*   

# Chạy apache
ENTRYPOINT ["/usr/local/bin/apache2-foreground"]

