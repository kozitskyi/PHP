<?php
include_once ("Product.php");
include_once ("Category.php");
include_once ("TreeItem.php");

class Catalog
{
    private static $catalogItemID = 1;
    private $allProducts = [];
    private $allCategories = [];
    private $catalog = [];

    public function Catalog()
    {
        return $this->catalog;
    }

    public function __construct(array $aAllCategories = null, array $aAllProducts = null)
    {
        $this->addCategoriesRange($aAllCategories);
        $this->addProductsRange($aAllProducts);
    }


    //returns ID in catalog for item or 0 if item not found
    private function convertParentIDtoCatalogID(int $parentID) : int
    {
        if ($parentID === -1)
            return -1;
        if (isset($this->allCategories[$parentID]))
            return $this->allCategories[$parentID]->IDinCatalog();
        return 0;
    }


    public function createCatalogTree() : string
    {
        foreach ($this->allCategories as $i => $item)
        {
           $parentCatalogID = $this->convertParentIDtoCatalogID($item->ParentID());
           if ($parentCatalogID === 0)
               continue;
           $parentCatalogID = $parentCatalogID === -1 ? "#" : $parentCatalogID; //checking if parent is root
           array_push($this->catalog, new TreeItem($item->IDinCatalog(), $item->CategoryName(), $parentCatalogID));
        }

        foreach ($this->allProducts as $i => $item)
        {
            $parentCatalogID = $this->convertParentIDtoCatalogID($item->CategoryID());
            if ($parentCatalogID === 0)
                continue;
            $parentCatalogID = $parentCatalogID === -1 ? "#" : $parentCatalogID; //checking if parent is root
            array_push($this->catalog, new TreeItem($item->IDinCatalog(), $item->Name(), $parentCatalogID, "jstree-file"));
        }
        return json_encode($this->catalog);
    }

    //adds the category (if it has valid parent)
    public function addCategory(Category $c) : bool
    {
        if(array_key_exists($c->ID(), $this->allCategories))
            return false;//such category already exists
        if (!array_key_exists($c->ParentID(), $this->allCategories) && $c->ParentID() !== -1)
            return false;//no such a parent category exists
        $c->IDinCatalog(Catalog::$catalogItemID++);
        $this->allCategories[$c->ID()] = $c;
        return true;
    }

    //adds the range of categories (if they have valid parents)
    public function addCategoriesRange($c) : bool
    {
        if ($c === null)
            return false;
        $someCategoriesAdded = false;
        foreach ($c as $cat_item)
        {
            $result = $this->addCategory($cat_item);
            if ($result !== false)  //category successfully added
                $someCategoriesAdded = true;
        }
        return $someCategoriesAdded;
    }


    //removes category and all subcategories and products in it
    public function removeCategory(int $categoryID) : bool
    {
        $categoryToRemove = $this->allCategories[$categoryID];
        if ($categoryToRemove === null)
            return false;
        foreach($this->allProducts as $i=>$item)
        {
            if ($item->CategoryID() == $categoryID)
                unset($this->allProducts[$i]);
        }
        foreach ($this->allCategories as $i=>$item)
        {
            if ($item->ParentID() == $categoryID)
                $this->removeCategory($i);
        }
        return true;
    }

    //adds the product (if it has valid parent)
    public function addProduct(Product $p) : bool
    {
        if (array_key_exists($p->ID(), $this->allProducts))
            return false; //can't add a product: such product already exists
        //checking if such category exists:
        if (array_key_exists($p->CategoryID(), $this->allCategories))
        {
            $p->IDinCatalog(Catalog::$catalogItemID++);
            $this->allProducts[$p->ID()] = $p;
            return true;
        }
        return false; //can't add a product: the category of this product is absent in allCategories

    }

    //adds the range of products (if they have valid parents)
    public function addProductsRange($p) : bool
    {
        if ($p === null)
            return false;
        $someProductsAdded = false;
        //standardizing an array:
        foreach($p as $i=>$item)
        {
            $result = $this->addProduct($item);
            if($result !== false)   //some product was successfully added
                $someProductsAdded = true;
        }
        return $someProductsAdded;
    }

    //removes product (if exists)
    public function removeProduct(int $productID) : bool
    {
        if (key_exists($productID, $this->allProducts))
        {
            unset($this->allProducts[$productID]);
            return true;
        }
        return false;
    }
}



