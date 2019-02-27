# symfony4-fos-catalog-api

Introduction
It is a Symfony4 project for creating basic REST-based APIs. Behat is used for unit-testing and docker as a container for the database. Doctrine ORM is used.

EndPoints for JSON APIs are :

List All Products Method : GET Endpoint : {localhost}/product

List All Categories Method : GET Endpoint : {localhost}/category

Get Single Product Method : GET Endpoint : {localhost}/product/2

//TODO :: Update ModifiedAt entry on updation of the record
Create a new Product
Method : POST
Endpoint : {localhost}/product
JSON data:
{
"name": "Fony UHD HDR 55 4k TV",
"category": "TVs and Accessories",
"sku": "A0004", "price": 1499.99,
"quantity": 5
}

Update Product via PUT
Method : PUT
Endpoint : {localhost}/product/3
JSON data:
{
"name": "Fony UHD HDR 55 4k TV",
"category": "TVs and Accessories",
"sku": "A0004", "price": 1499.99,
"quantity": 23
}

Update Product via PATCH
Method : PUT
Endpoint : {localhost}/product/3
JSON data:
{
"quantity": 23
}

Delete a Product
Method : DELETE
Endpoint : {localhost}/product/3
