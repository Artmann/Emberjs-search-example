<?php

	$categories = array(
		array(
			"id"				=> 1,
			"name" 			=> "Red Fruits",
      "products"  => array(5,6),
		),
		array(
			"id"      => 2,
      "name"    => "Yellow Fruits",
      "products"  => array(1,7),
    ),
		array(
      "id"      => 3,
      "name"    => "Green Fruits",
      "products"  => array(2,3,4),
    ),


	);

 print json_encode(array("categories" => $categories));
