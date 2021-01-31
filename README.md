<p align="center"><img src="https://github.com/OSSNAPI/Submission-Images/blob/main/logo.png?raw=true" width="200" height="200"></p>


## OSSN SERVER PHP 
Open Source Social Networking API built in PHP

This is a server side implementation of [OSSNAPI spec](https://github.com/OSSNAPI/OpenAPI-spec) built using [Scrawler PHP](https://github.com/scrawler-php/framework).This project was created during **Postman API Hackathon**

## Links to Useful Resources
- OpenAPI 3.0 specification file - https://github.com/OSSNAPI/OpenAPI-spec
- Blog Posts about the project and hackathon - https://physcocode.com/category/postman/
- API documents - https://documenter.getpostman.com/view/1722111/TW6tLq53
- Postman public workspace - https://www.postman.com/pranjalshop/workspace/the-social-network-api-s/overview
- Generator built for making this - https://github.com/OSSNAPI/Php-Controller-Generator

## How to use
- Download Apache, Mysql and PHP for your OS
  - Linux - LAMP stack (https://ampps.com/download)
  - Windows - WAMP stack (https://ampps.com/download)
  - Mac OS - MAMP stack (https://ampps.com/download)
  - Mac OS (Recommended) - Valet (https://laravel.com/docs/8.x/valet)
- Download latest release and copy your files to `htdocs` folder
- Goto the root of your working directory and run `composer install` [Note: This repo currently uses scrawler 3.0 Beta]
- Goto `config/app.php` and add your database details
- Use the `OSSNAPI - Dev with Visualize` collection inside public workspace (https://www.postman.com/pranjalshop/workspace/the-social-network-api-s/overview) to test your social network API !

Note: Database tables are automatically created by scrawler when post requests are utilized to create new entities

## Rodmap for 1.0.0 release
- [x] Basic Implementation of user,posts,activity,likes,comments,message api collection
- [ ] Automatically add to activity feed on new like,new comment,new relation action
- [ ] Basic validation on new entities 
- [ ] Better message when nothing is deleted/updated
- [ ] Filesystem API implementation
- [ ] Oauth 2.0 for API security



## License

OSSN Server PHP is created by [Pranjal Pandey](https://www.physcocode.com) and released under
the MIT License.
