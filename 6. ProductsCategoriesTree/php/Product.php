<?php
class Product
{
    private static $counter = 1;
    private $id;
    private $categoryID;
    private $name;
    private $idInCatalog = -1;

    public function ID(int $aID=null)
    {
        if ($aID === null)
            return $this->id;
        else
            $this->id = $aID;
    }

    public function CategoryID(int $aCatID=null)
    {
        if ($aCatID === null)
            return $this->categoryID;
        else
            $this->categoryID = $aCatID;
    }

    public function Name(string $aName=null)
    {
        if ($aName === null)
            return  $this->name;
        else
            $this->name = $aName;
    }

    public function IDinCatalog(int $aID=null)
    {
        if ($aID === null)
            return $this->idInCatalog;
        else
            $this->idInCatalog = $aID;
    }

    public function __construct(int $aCatID,string $aName )
    {
        $this->id = Product::$counter++;
        $this->categoryID = $aCatID;
        $this->name = $aName;
    }

}