#!/usr/bin/env bash

username=$1

docker exec -it laravel-login-workshop-db mysql -u $username -p laravel_login_workshop
