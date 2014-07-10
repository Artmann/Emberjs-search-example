<?php

	$productData = array(
		array(
			"id" => 1,
			"name" => "Yellow Banana",
			"text" => "A timeless classic. It's way better then a pear",
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
    array(
      "id" => 5,
      "name" => "Tomato",
      "text" => "Everyone loves tomatoes",
      "price" => 18,
      "category" => 1,
    ),
    array(
      "id" => 6,
      "name" => "Red Apple",
      "text" => "Bring your teacher one!",
      "price" => 11,
      "category" => 1,
    ),
    array(
      "id" => 7,
      "name" => "Lemon",
      "text" => "Yay lemons!",
      "price" => 32,
      "category" => 2,
    ),

	);

$categoryFilter = array();
if(isset($_GET["category_id"])) {
	$cid = $_GET["category_id"];
	foreach($productData as $product) {
		if($product["category"] == $cid) {
			$categoryFilter[] = $product;
		}
	}
	$productData = $categoryFilter;
}


if(isset($_GET['ids'])) {
	$products = array();
	foreach($productData as $product) {
		if(in_array($product["id"], $_GET['ids'])) {
			$products[] = $product;
		}
	}
}
elseif( isset($_GET['query']) && !empty($_GET['query']) ){
	$query = strtolower(str_replace(".php", "", $_GET['query']));
  $products = array();
  foreach($productData as $product) {
    if( strpos(strtolower($product["name"]), $query) !== FALSE || strpos(strtolower($product["text"]), $query) !== FALSE) {
      $products[] = $product;
    }
  }
}
else {
	$products = $productData;
}

print json_encode(array("products" => $products));
