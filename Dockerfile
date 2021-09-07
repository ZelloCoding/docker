FROM node:14 AS builder
WORKDIR /var/www/html

# Copying our package.json containing all the necessary dependencies
COPY src/package.json ./package.json


# Copy all the Gulp related files
COPY src/gulp ./gulp
COPY src/gulpfile.js ./gulpfile.js
COPY src/themes/ ./themes

# Installing Gulp and other necessary packages
RUN npm i
RUN npm run build

FROM wordpress:latest
WORKDIR /var/www/html

COPY src/plugins/ /var/www/html/wp-content/plugins
COPY src/themes/ /var/www/html/wp-content/themes
COPY src/uploads/ /var/www/html/wp-content/uploads


COPY --from=builder /var/www/html/themes/freightcenter/js ./wp-content/themes/freightcenter/js