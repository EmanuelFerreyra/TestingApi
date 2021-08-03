<?php

require '../vendor/autoload.php';


use testapi\connection\Connection;
use testapi\query\QueryMysqli;



$mysql = new QueryMysqli( new Connection() );


print $mysql->setTable('Product')
            ->querySelectById($_GET['id'])
            ->ViewJson();


