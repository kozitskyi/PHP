<?php
class Category
{
    private static $counter = 1;
    private $id;
    private $parentID;
    private $categoryName;
    private $innerItems;
    private $idInCatalog = -1;

    public function __construct(int $aParentID, string $aCategoryName )
    {
        $this->id = Category::$counter++;
        $this->parentID = $aParentID;
        $this->categoryName = $aCategoryName;
        $this->innerItems =[];
    }

    public function ID(int $aID=null)
    {
        if ($aID === null)
            return $this->id;
        else
            $this->id = $aID;
    }

    public function ParentID(int $aParentID=null)
    {
        if ($aParentID === null)
            return $this->parentID;
        else
            $this->parentID = $aParentID;
    }

    public function CategoryName(string $aCategoryName=null)
    {
        if ($aCategoryName === null)
            return $this->categoryName;
        else
            $this->categoryName = $aCategoryName;
    }
    public function IDinCatalog(int $aID=null)
    {
        if ($aID === null)
            return $this->idInCatalog;
        else
            $this->idInCatalog = $aID;
    }
}