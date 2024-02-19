# 🐋 DAMP-Docker 🐋
------
Files needed to make a DAMP (Apache, MariaDB, and PHP) server in docker.

Webpage is served on port 80 and Adminer can be accessed on port 8080.

To install just clone the directory and run.
To install make sure you have [docker installed](https://docs.docker.com/desktop/install/mac-install/) then just clone the repo and run

To pass files into the container just add them to the ./DAMP-Docker/php folder. 

------

```
git clone https://github.com/RoundDoor/DAMP-Docker.git 

cd DAMP-Docker  

docker-compose up -d
``` 

-------

To add more exstenstions to your PHP envimorent edit the Dockerfile as needed.

--------

Composer is installed inside the Docker web container. Access the container terminal to use. 


