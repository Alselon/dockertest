FROM ubuntu:20.04

ENV TZ=Europe/Moscow

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt update -y
RUN apt install -y nginx php-fpm php-mysql
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN mkdir /run/php-fpm

CMD php-fpm7.4 ; nginx
#CMD nginx

EXPOSE 80
