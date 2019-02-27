# symfony4-fos-catalog-api

<small>It is a Symfony4 project for creating basic REST-based APIs using <b>FOSRESTBundle</b>. <b>Behat</b> is used for unit-testing and <b>docker</b> as a container for the database. <b>Doctrine ORM</b> is also used.</small>

<small>EndPoints for JSON APIs are :</small>
<small>
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
</small>

<h2><b>INSTALLATION</b></h2>
<small>Start with downloading all the dependencies of the project by running.</small><br/>
<code>php composer.phar install
</code><br/><br/>

<small>Commented Both Volumes <code>docker-compose.yml</code> file definition.</small></br><br/>
<small>created <code>Makefile</code> to ease up the docker run and down commands. This could be implemented by:</small><br/>

<code>make dev</code><br/>
<code>make down</code><br/>

<p>The content of the file is:</p>

      dev:
          @docker-compose down && \
              docker-compose build --pull --no-cache && \
              docker-compose \
                  -f docker-compose.yml \
              up -d --remove-orphans
      
      down:
          @docker-compose down
          

 


<small>Change the credentials in <code>.env</code> file if you want to update the database credentials and port and then run the migration commands</small><br/>
<small>By default the credentials are as following:</small><br/>
<code>php bin/console make:migration</code><br/>
<code>php bin/console doctrine:migration:migrate</code>

<small>Also In order to put dummy data for users and categories, run doctrine fixtures.</small><br/>
<code>php bin/console doctrine:fixtures:load  --purge-with-truncate</code><br/>
