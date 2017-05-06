<?php

namespace App;

class Vehicl1
{
    public $items = null;
    public $totalQty = 0;
    public $totalprice = 0;

    public function __construct($oldVehicl1)
    {
    	if($oldVehicl1) {
    		$this->items = $oldVehicl1->items;
    		$this->totalQty = $oldVehicl1->totalQty;
    		$this->totalprice = $oldVehicl1->totalprice;
    	}
    }

    public function add($item, $id) {
    	$storedItem = ['qty' => 0, 'price' =>$item->price, 'item' =>$item];
    	if($this->items){
    		if(array_key_exists($id, $this->items)) {
    			$storedItem = $this->items[$id];
    		}
    	}
    	$storedItem['qty']++;
    	$storedItem['price'] = $item->price * $storedItem['qty'];
    	$this->items[$id] = $storedItem;
    	$this->totalQty++;
    	$this->totalprice += $item->price;
    }
}
