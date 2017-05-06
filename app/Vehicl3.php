<?php

namespace App;

class Vehicl3
{
    public $items = null;
    public $totalQty = 0;
    public $totalprice = 0;

    public function __construct($oldVehicl3)
    {
    	if($oldVehicl3) {
    		$this->items = $oldVehicl3->items;
    		$this->totalQty = $oldVehicl3->totalQty;
    		$this->totalprice = $oldVehicl3->totalprice;
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
