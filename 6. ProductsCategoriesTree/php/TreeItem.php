<?php
class State
{
    public $opened;
    public $disabled;
    public $selected;
    function __construct(bool $aOpened, bool $aDisabled, bool $aSelected)
    {
        $this->opened = $aOpened;
        $this->selected = $aSelected;
        $this->disabled = $aDisabled;
    }
}

class TreeItem
{
    public $id;
    public $text;
    public $parent;
    public $state;
    public $icon;
    function __construct(int $aID, string $aText, $aParent, string $aIcon = "", bool $aOpened = false,
                         bool $aDisabled = false, bool $aSelected = false, array $aLi_attr = [], array $aA_attr = [] )
    {
        $this->id = $aID;
        $this->text=$aText;
        $this->parent=$aParent;
        $this->state = new State($aOpened, $aDisabled, $aSelected);
        $this->li_attr = $aLi_attr;
        $this->a_attr = $aA_attr;
        $this->icon = $aIcon;
    }
}