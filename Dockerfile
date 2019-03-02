FROM php:7.3-cli

ARG USER_ID=1000
ARG USER_GID=1000

RUN apt-get update
RUN apt-get install -y wget zip git

# Install Composer
RUN EXPECTED_SIGNATURE="$(wget -q -O - https://composer.github.io/installer.sig)" && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    ACTUAL_SIGNATURE="$(php -r "echo hash_file('SHA384', 'composer-setup.php');")" && \
    if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ] ; then >&2 echo 'ERROR: Invalid installer signature' && rm composer-setup.php && exit 1 ; fi && \
    php composer-setup.php -q && \
    RESULT=$? && \
    mv composer.phar /bin/composer && \
    rm composer-setup.php && \
    exit $RESULT

# Create User
RUN groupadd --gid "${USER_GID}" "default" && \
    useradd \
      --uid ${USER_ID} \
      --gid ${USER_GID} \
      --create-home \
      --shell /bin/bash \
      default

COPY . /usr/src/data-transfer
WORKDIR /usr/src/data-transfer
USER default