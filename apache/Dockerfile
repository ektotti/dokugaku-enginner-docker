FROM ubuntu

ENV APATCHE_CONF_DIR=/etc/conf/

RUN apt update \
  && apt install -y apache2

RUN echo "ServerName localhost" > /etc/apache2/conf-available/fqdn.conf \
  && a2enconf fqdn

WORKDIR /var/www/html

COPY ./index.html /var/www/html/

CMD ["apachectl", "-D", "FOREGROUND"]