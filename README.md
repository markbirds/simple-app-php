## Simple App - PHP

### Requirements

XAMPP installed. Get xampp [here](https://www.apachefriends.org/).

### What is XAMPP?

XAMPP is one of the widely used cross-platform web servers, which helps developers to create and test their programs on a local webserver. It consists of Apache HTTP Server, MariaDB, and interpreter for the different programming languages like PHP and Perl.

### PHP Documentation

https://www.php.net/manual/en/

### Download source code

```
git clone https://github.com/markbirds/simple-app-php.git

Note:
Clone the repository inside htdocs folder.
```

### Database setup
```
- Run MySQL database using XAMPP.
- Access phpmyadmin here -> http://localhost/phpmyadmin/
- Copy the sql script in db/scripts/schema.sql and execute in phpmyadmin.
- Test your database connection. Edit the db config in config/define.php.
```

### Running the app

```
- Run Apache Web Server and MySQL Database using XAMPP.
- Open the app at http://localhost/simple-app-php/
```
