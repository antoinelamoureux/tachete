<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Product;

class Products extends \Core\Controller {
    public function indexAction() {
        $products = Product::getAll();
        View::renderTemplate('Products/index.html', [
            'products' => $products
        ]);
    }

    public function submitAction() {
        $output = $_GET['product'];
        print_r($output);
        //$input = $_GET['product'];
        $product = Product::getProduct($output);
        View::renderTemplate('Products/price.html', [
            'product' => $product
        ]);
    }

    public function setPriceAction() {
        $input = $_POST['price'];
        $price = Product::setPrice($input);
        View::renderTemplate('Products/price.html', [
            'price' => $price
        ]);
    }

}