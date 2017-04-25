<?php
//Item.php

/**
*Item.php stores a class named Item for storing food truck menu items
*
* More stuff about the class
*
*<code>
* $myClass = new someClass('Joe');
*</code>
*
* @package 
* @author 
* @version 
* @link 
* @license 
* @see Order.php
* @todo none
*/

// kd - from the starter code for P2: Food Truck
// https://docs.google.com/document/d/1BBlcPL4T5g6AV5nBgcqROkklojnKOQbvW94g2rySd60/edit?usp=sharing 

class Item
{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();
    
    public function __construct($ID,$Name,$Description,$Price)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
        
    }#end Item constructor
    
    public function addExtra($extra)
    {
        $this->Extras[] = $extra;
        
    }#end addExtra()

}#end Item class