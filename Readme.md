If u use Xampp, go to localhost/phpmyadmin and run the ciblog.sql query
Or else, run the ciblog.sql query to setup the database

then in application/config/config.php set the base url (if running at the root of localhost, write "localhost")

then in application/config/database.php setup the user and password for the database u are using.

then clear the users table and try to log in without and user

Good luck!
