service nginx start
service mysql start

mysql -e "CREATE DATABASE mysql_db;"
mysql -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mysql -e "GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin' WITH GRANT OPTION;"
mysql -e "FLUSH PRIVILEGES"

service php7.3-fpm start

bash