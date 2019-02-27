# symfony4-fos-catalog-api

Introduction
It is a Symfony4 project for creating basic REST-based APIs. Behat is used for unit-testing and docker as a container for the database. Doctrine ORM is used.

EndPoints for JSON APIs are :

<i>List All Products </i><br/>
Method : GET <br/>
Endpoint : {localhost}/product

List All Categories <br/>
Method : GET <br/>
Endpoint : {localhost}/category

Get Single Product<br/>
 Method : GET <br/>
 Endpoint : {localhost}/product/2

//TODO :: Update ModifiedAt entry on updation of the record<br/>
Create a new Product<br/>
Method : POST<br/>
Endpoint : {localhost}/product<br/>
JSON data:<br/>
<code>{<br/>
"name": "Fony UHD HDR 55 4k TV",<br/>
"category": "TVs and Accessories",<br/>
"sku": "A0004", <br/>"price": 1499.99,<br/>
"quantity": 5<br/>
}</code>

Update Product via PUT<br/>
Method : PUT<br/>
Endpoint : {localhost}/product/3<br/>
JSON data:<br/>
<code>{<br/>
"name": "Fony UHD HDR 55 4k TV",<br/>
"category": "TVs and Accessories",<br/>
"sku": "A0004", <br/>"price": 1499.99,<br/>
"quantity": 23<br/>
}</code><br/>

Update Product via PATCH<br/>
Method : PUT<br/>
Endpoint : {localhost}/product/3<br/>
JSON data:<br/>
<code>{
"quantity": 23
}</code>

Delete a Product<br/>
Method : DELETE<br/>
Endpoint : {localhost}/product/3<br/>
