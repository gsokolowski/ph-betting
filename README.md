Phalcon Betting Import  for Catenamedia


Documentation of the application in terms of architecture, installation,
dependencies, configuration and running options


How to install
1. Clone from git repository https://github.com/gsokolowski/ph-betting
2. cd ph-betting
3. composer install to install dependencies
4. create new mysql database called ph-betting
5. use phalcon migration to create tables
phalcon migration run
or
you can call script sql script which is located in
ph-betting/
db.sql
6. Setup virtual host on you local environment
7. Add this host to host file
8. Restart web server and call to make import
http://ph-betting.local/williamhill

9. you should see --- Import Done!

10. Check db tables - you should see imported data


Source code/data dumps necessary to run the code
https://github.com/gsokolowski/ph-betting


Any technical decision or assumptions taken should also be documented

Used phalcon and guzzlehttp as suggested
Decided to have for tables to store data
categories to keep root category WilliamHill and classes
types to store types
markets to store markets
and participants to store participants

All these tables are in relation

Code is here:
controllers/Reader/
ThirdPartyInterface.php
Base.php  - base class for extension in concrete classes like Xml.php
Xml.php - concrete class
Json.php - just a suggestion how this concrete class could be implemented for data received from json response

