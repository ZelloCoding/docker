FROM node:14
WORKDIR /var/www/html

# Copying our package.json containing all the necessary dependencies
COPY package.json /var/www/html/package.json

# Installing Gulp, BrowserSync and other necessary packages
RUN npm i

# Copy all the Gulp related files
COPY gulp ./gulp
COPY ./gulpfile.js ./gulpfile.js

RUN npm run build

FROM wordpress:latest
WORKDIR /var/www/html

COPY src/plugins/ /var/www/html/wp-content/plugins
COPY src/themes/ /var/www/html/wp-content/themes
COPY src/uploads/ /var/www/html/wp-content/uploads