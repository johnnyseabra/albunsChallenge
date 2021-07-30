# Albuns Challenge
PHP Task Challenge


1) To deploy this code on AWS, create an Elastic Beanstalk type LAMP.
2) Use this commands on Codebuild buildspec:
## BEGIN COMMANDS
version: 0.2
phases:
   install:
     runtime-versions:
         php: 7.4
         nodejs: 12.x
     commands:
         - apt-get update -y
         - apt-get install -y libpq-dev libzip-dev
         - apt-get install -y php-pgsql
         - curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
   pre_build:
     commands:
         - composer install
         - npm install
   build:
     commands:
         - cp .env.example .env
         - npm run production
         - php artisan env
         - php artisan migrate:fresh --force
         - php artisan db:seed
artifacts:
   files:
         - '**/*'
   name: $(date +%Y-%m-%dT%H:%M:%S).zip
proxy:
   upload-artifacts: yes
   logs: yes
   
### END COMMANDS
3) Copy your enviroment variables (file .example.env) to BuildSpec and ElasticBean enviroment variables:
DB_CONNECTION
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
