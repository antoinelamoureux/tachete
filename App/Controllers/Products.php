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
        $products = Product::getProduct($output);
        View::renderTemplate('Products/price.html', [
            'products' => $products
        ]);
    }

    public function setPriceAction() {
        $product = $_POST['product'];
        $newprice = $_POST['newprice'];
        $price = Product::setPrice($product, $newprice);
        View::renderTemplate('Products/newprice.html', [
            'newprice' => $newprice 
        ]);
    }

}