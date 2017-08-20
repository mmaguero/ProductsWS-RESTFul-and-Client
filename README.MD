# RESTful web services in codeigniter / ReactJS Single Page App Client

---

## RESTful web services

### Api | Products

#### GET
All, http://localhost/restful-services-in-codeigniter/index.php/api/products/
By id, http://localhost/restful-services-in-codeigniter/index.php/api/productById/id/1

#### POST
New, http://localhost/restful-services-in-codeigniter/index.php/api/addProduct

### Api2 | Categories

#### GET
All, http://localhost/restful-services-in-codeigniter/index.php/api2/categories/
By id, http://localhost/restful-services-in-codeigniter/index.php/api2/categoryById/id/1

#### POST
New, http://localhost/restful-services-in-codeigniter/index.php/api2/addCategory
Set Product/Category, http://localhost/restful-services-in-codeigniter/index.php/api2/addProductCategory

Source: https://programmerblog.net/create-restful-web-services-in-codeigniter/

---

## ReactJS Single Page App Client

### Dev
http://localhost:3000/ (npm start)

### Build
http://localhost/ (see directions below)

Source: https://github.com/ericvicenti/intro-to-react

---

## Tools

+ XAMPP 7.1.7 (Linux), https://www.apachefriends.org/es/faq_linux.html
+ CodeIgniter 3.1.5, https://codeigniter.com/download
+ npm, https://github.com/facebookincubator/create-react-app/blob/master/packages/react-scripts/template/README.md
+ HTTP Requester (Mozilla Firefox) for Testing, https://addons.mozilla.org/es/firefox/addon/httprequester/

---

## Content

+ htdocs
 - restful-services-in-codeigniter
 - static
 - files of 'npm build'
+ SPA_Products
 - src
 - build
 - node_modules
 - public
+ db.sql (MySQL schema and data populate)

---

## Directions

+ Install XAMPP and initialize services
+ Run db.sql in MySQL
+ Merge folder htdocs to XAMPP_folder_instalation/htdocs
+ Copy SPA_Products/build content to XAMPP_folder_instalation/htdocs
+ Explore links above

---

Disponible en https://github.com/mmaguero
