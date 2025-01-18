#!/bin/bash

echo "Loading database dump"
mysql -uroot -pstudent -hadmin-mysql_db BE_193036 < /tmp/sql/dump.sql

echo "Updating URLs in database"
mysql -uroot -pstudent -hadmin-mysql_db -e "UPDATE ps_configuration SET value = 'localhost:19303' WHERE name LIKE '%SHOP_DOMAIN%'" BE_193036
mysql -uroot -pstudent -hadmin-mysql_db -e "UPDATE ps_shop_url SET domain = 'localhost:19303', domain_ssl = 'localhost:19303' WHERE id_shop = 1" BE_193036

exec apache2-foreground