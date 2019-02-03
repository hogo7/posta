HI

if it's your first time  using this app you must know some first things



app/config/config.php

there is a all app constant such as database username password and etc,
 if your main app folder is not posta you must change it from here



public/.htaccess

if you Named app folder posta you good to go else you must enter app folder in name in this file

ln 4 :   RewriteBase /posta/public =>   RewriteBase /FOLDER NAME/public 



posta.sql
its DB of site you must import it to your phpMyAmdin.  I used unicode  UTF-8 ci for that  

PS : you can change databace name from config/config.php