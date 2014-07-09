<?php

	$categories = array(
		array(
			"id"				=> 1,
			"name" 			=> "Fruits",
			"parent"  	=> null,
      "products"  => array(1,2,3,4),
		),
		array(
			"id"      => 2,
      "name"    => "Yellow Fruits",
      "parent"  => 1,
      "products"  => array(1),
    ),
		array(
      "id"      => 3,
      "name"    => "Green Fruits",
      "parent"  => 1,
      "products"  => array(2,3,4),
    ),


	);

 print json_encode(array("categories" => $categories));
