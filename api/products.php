<?php

	$productData = array(
		array(
			"id" => 1,
			"name" => "Yellow Banana",
			"text" => "A timeless classic.",
			"price" => 50,
			"category" => 2,
		),
		array(
      "id" => 2,
      "name" => "Green Banana",
      "text" => "I think this one will need some more time",
      "price" => 20,
      "category" => 3,
    ),
		array(
      "id" => 3,
      "name" => "Green Apple",
      "text" => "Tired of witches giving you poisoned apples? Won't happen with a green one!",
      "price" => 100,
      "category" => 3,
    ),
		array(
      "id" => 4,
      "name" => "Pear",
      "text" => "Pears are quite awesome",
      "price" => 11,
      "category" => 3,
    ),
	);



if(isset($_GET['ids'])) {
	$products = array();
	foreach($productData as $product) {
		if(in_array($product["id"], $_GET['ids'])) {
			$products[] = $product;
		}
	}
}
elseif(isset($_GET['query'])){
	$query = $_GET['query'];
  $products = array();
  foreach($productData as $product) {
    if(strpos($query, $product["title"]) !== FALSE || strpos($query, $product["text"]) !== FALSE) {
      $products[] = $product;
    }
  }
}
else {
	$products = $productData;
}

print json_encode(array("products" => $products));
