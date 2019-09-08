<?php
    $file="products.csv";
    $document = file_get_contents($file);
    $lines = explode("\n",$document);
    $products = array();
    foreach ($lines as $newline){
        $info = explode(",",$newline);
        $product = array(
            "name" => $info[0],
            "price" => $info[1],
            "description" => $info[2],
            "size" => $info[count($info)-5],
            "category" => $info[count($info)-4],
            "gender" => $info[count($info)-3],
            "brand" => $info[count($info)-2]
        );
        $product["images"] = array();
        for ($i = 3; $i < count($info)-5; $i++ ){
            array_push($product["images"],$info[$i]);
        }
        array_push($products,$product);
    }

    function get_product_by_name($name, $products){
        foreach ($products as $product){
            if ($name == $product["name"]){
                return $product;
            }
        }
        return NULL;
    }

?>