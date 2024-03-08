# Use the Nginx-PHP base image
FROM adithm123/magento2-php

# Copy Magento 2 codebase into the image
COPY . /var/www/html

# Set ownership and permissions
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 775 {} \; \
    && find /var/www/html -type f -exec chmod 664 {} \; \
    && chmod u+x /var/www/html/bin/magento

# Optionally, configure Nginx server block
# COPY nginx-config.conf /etc/nginx/conf.d/default.conf

# Expose ports if needed
# For example:
# EXPOSE 80

# Start Nginx-PHP service
# CMD ["nginx", "-g", "daemon off;"]
