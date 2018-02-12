<?php

include("Catalog.php");

$catalog = new Catalog();
$categoriesArray = [
    //categories, having no parent:
    new Category(-1, "Computers"),              //1
    new Category(-1, "Printers"),               //2
    new Category(-1, "Computer accessorise"),   //3
    //subcategories (first stage):
    new Category(1, "PCs"),                     //4
    new Category(1, "Laptops"),                 //5
    new Category(2, "Laser printers"),          //6
    new Category(2, "Matrix printers"),         //7
    new Category(3, "Keypads"),                 //8
    new Category(3, "Mouses"),                  //9
    new Category(3, "Web-cameras"),             //10
    //subcategories (second stage):
    new Category(4, "Monoblocks"),              //11
    new Category(4, "Home PCs")                 //12
];


$catalog->addCategoriesRange($categoriesArray);

/* tests:
echo $catalog->removeCategory(1);
echo $catalog->removeCategory(25);
echo $catalog->removeCategory(2);
*/


$productsArray = [

    new Product(5, "Laptop1"),
    new Product(5, "Laptop2"),
    new Product(5, "Laptop3"),
    new Product(5, "Laptop4"),
    new Product(6, "LPrinter1"),
    new Product(6, "LPrinter2"),
    new Product(6, "LPrinter3"),
    new Product(6, "LPrinter4"),
    new Product(7, "MPrinter1"),
    new Product(7, "MPrinter2"),
    new Product(8, "Keypad1"),
    new Product(8, "Keypad2"),
    new Product(8, "Keypad3"),
    new Product(8, "Keypad4"),
    new Product(9, "Mouse1"),
    new Product(9, "Mouse2"),
    new Product(9, "Mouse3"),
    new Product(9, "Mouse4"),
    new Product(10, "Web-cam1"),
    new Product(10, "Web-cam2"),
    new Product(11, "Monoblock1"),
    new Product(11, "Monoblock2"),
    new Product(11, "Monoblock3"),
    new Product(12, "PC1"),
    new Product(12, "PC2"),
    new Product(12, "PC3")
];


$catalog->addProductsRange($productsArray);

/* tests:
echo "Product 2 removed" . $catalog->removeProduct(2) . "<br>";
echo "Product 45 removed" . $catalog->removeProduct(45) . "<br>";
*/
/*
echo "<pre>";
var_dump($catalog);
echo "</pre>";
*/
if(isset($_GET["id"]))
{
    header('Content-Type: application/json; charset=utf-8');
    echo $catalog->createCatalogTree();
}