# short-url
Download the zip file and unzip it. You’ll get a folder name with short_url, paste it in htdocs folder of xampp.
 open this folder, and check  there should be a url.sql file. 
Now Open localhost/phpmyadmin on your browser and create a database name with url then import the url.sql file and all required tables,
columns will be automatically created. That’s it for localhost users.
***********************************************************************
if any error shown related to database, open the config.php file and do the changes which are mentioned in that file.
{ Database username,Database password,Database name }.
