# lab1_it434
### prerquests 🍌
1. xampp app
2. add folder to htdocs
3. clone it inside the floder
4. create table calles user
```mysql
CREATE DATABASE my_db;
CREATE TABLE `users` ( 
 `uid` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 `name` varchar(255) DEFAULT NULL, 
 `email` varchar(255) DEFAULT NULL, 
 `mobile` varchar(255) DEFAULT NULL, 
 `password` varchar(255) DEFAULT NULL 
);
```

### run xampp localhost and navigate to index.html 

Have A good time testing!
