#! /bin/bash

# Check if environment variable AUTOINDEX is off and change in nginx conf file
if [ "$AUTOINDEX" = "off" ]
then
    sed -i "s/autoindex on/autoindex $AUTOINDEX/g" /etc/nginx/sites-available/localhost
fi