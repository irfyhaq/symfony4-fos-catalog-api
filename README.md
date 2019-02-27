# Symfony4 REST API Project for Inventory Management using FOSRESTBundle, Docker, Doctrine and Behat.


<small>It is a Symfony4 project for creating basic REST-based APIs using <b>FOSRESTBundle</b>. <b>Behat</b> is used for unit-testing and <b>docker</b> as a container for the database. <b>Doctrine ORM</b> is also used.</small>

<small><b>Behat</b> is used for Unit testing as just like <b>Kahlan</b>, it is also a Behavior-Driven Development framework for PHP. I've kept it seperate of the root as I was experimenting with couple of ways to create this API project simultaneously, hence to avoid the repitition, it is kept as a seperate repo.</small><br/>

<i>The Behat Unit Test Project repository is at: </i>
<url>https://github.com/irfyhaq/behat-unit-test-symfony</url>

<small>EndPoints for JSON APIs are :</small>
<small>
<ul>

<li>
<i><u>List All Products </u></i><br/>
Method : GET <br/>
Endpoint : /product
</li>

<li>
<i><u>List All Categories</u></i><br/>
Method : GET <br/>
Endpoint : /category
</li>

<li>
<i><u>Get Single Product</u></i><br/>
Method : GET <br/>
Endpoint : /product/{id}
</li>
 
<li>
<i><u>Add a new Product</u></i><br/>
Method : POST<br/>
Endpoint : {localhost}/product<br/>
JSON data:<br/>

```json
{
"name": "Fony UHD HDR 55 4k TV",
"category": "TVs and Accessories",
"sku": "A0004",
"price": 1499.99,
"quantity": 5
}
```

</li>

<li>
<i><u>Update Product via PUT</u></i><br/>
Method : PUT<br/>
Endpoint : {localhost}/product/{id}<br/>
JSON data:<br/>

```json
{
"name": "Fony UHD HDR 55 4k TV",
"category": "TVs and Accessories",
"sku": "A0004", 
"price": 1499.99,
"quantity": 23
}
```

</li>

<li>
<i><u>Update Product via PATCH</u></i><br/>
Method : PUT<br/>
Endpoint : {localhost}/product/{id}<br/>
JSON data:<br/>

```json
{
"quantity": 23
}
```
</li>

<li>
<i><u>Delete a Product</u></i><br/>
Method : DELETE<br/>
Endpoint : {localhost}/product/{id}<br/>
</small>
</li>
</ul>

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
<small><i><b>--purge-with-truncate</b></i> is optional but advised to run it so that no duplication of data takes place.</small>

## TODO
<ul>
<li>Make ModifiedAt flag update on PUT and PATCH request.</li>
<li>Create ORM relation between Category and Product Entities. OneToMany and ManyToOne respectively.</li>
<li><b>User Authentication Module</b></li>
<li>Move to Production Environment</li>
</ul>


## License
[MIT](https://choosealicense.com/licenses/mit/)
