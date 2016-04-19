CREATE DATABASE IF NOT EXISTS wordpress;
UPDATE mysql.user SET Password = PASSWORD('RootPassword') WHERE User = 'root';
grant all privileges on wordpress.* to 'root'@'%' identified by 'RootPassword' with grant option;
FLUSH PRIVILEGES;