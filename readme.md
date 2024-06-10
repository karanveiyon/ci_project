# Basic step to start Codeigniter 3 Project

- Official site: https://codeigniter.com/ 

- To download the fresh Codeigniter 3 project, we need to download the boilerplate here [Download link](https://codeigniter.com/download "Codeigniter 3 Download").

- After unzipping it in htdocs folder of Xampp, the first and premost thing that we need to do is to create an .htaccess file with the following code in it.

## .htaccess file
```
RewriteEngine on
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
```

which will help to skip the index.php in the base directory and make us to react the default controller.

## Configuration of Application

* In the base directory we have two important folders one is Application and another is system and new folders may appear depend upto our third external libraries.

* But all our coding things will handled inside that application directory.

* inside application folder we will have another directory called as **config (application/config)** where we need to modify certain files inorder to configure the project.

### autoload.php 

* In the  application/config directory, the first file will be **autoload.php** where developer can autoload the following things throughout this project

1. Packages
2. Libraries
3. Drivers
4. Helper files
5. Custom config files
6. Language files
7. Models

initially we can load ***url*** which will enable us to use base_url() inside
```php
$autoload['helper'] = array('url');
```
### config.php 

* In the  application/config directory, the second file will be **config.php** where developer can config the base url of the site.

* Commonly we use to directly put as mentioned below
```php
$config['base_url'] = 'http://localhost/ci_project/';
```
but, the proper method is to put like,
```php
$root  = "http://".$_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$config['base_url']    = $root;
```

### database.php
* The next important file is ***database.php*** where we use config our database settings,
in this primarly we need to add only hostname, username, password and database name.
```php
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'ci_project',
```
### routes.php
* The last basic thing that we need to config is ***routes.php*** where we can provide the
url routes for the entier site and initially we need alter the default configure (usually it will be 'welcome') if we create
any new controller as such,
```php
$route['default_controller'] = 'index';
```

* below are some example for custom routing

#### Using Placeholders:

```php
$route['products'] = 'catalog/products';
$route['product/(:num)'] = 'catalog/product_lookup/$1';
$route['blog/(:any)'] = 'blog/post/$1';
```

* This maps URLs like http://example.com/product/123 to the product_lookup method of the Catalog controller, passing 123 as a parameter. (:num) is a placeholder for a segment containing only numbers.

* This maps URLs like http://example.com/blog/anything to the post method of the Blog controller, passing anything as a parameter. (:any) is a placeholder for a segment containing any character except for a forward slash (/).

#### Regular Expressions in Routes
You can use regular expressions for more complex patterns:

```php
$route['product/([a-z]+)/(\d+)'] = 'catalog/product_by_category/$1/$2';
```
This maps URLs like http://example.com/product/category/123 to the product_by_category method of the Catalog controller, passing category and 123 as parameters.

#### Redirect old URL to new URL
```php
$route['old-route'] = 'new-route';
```

#### Handle 404 errors with a custom page
```php
$route['404_override'] = 'errors/page_missing';
```

----
###### congradulations we now succeed the Configuration, we shall move to coding now!
----
<br>