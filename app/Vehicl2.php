<?php

namespace App;

class Vehicl2
{
    public $items = null;
    public $totalQty = 0;
    public $totalprice = 0;

    public function __construct($oldVehicl2)
    {
    	if($oldVehicl2) {
    		$this->items = $oldVehicl2->items;
    		$this->totalQty = $oldVehicl2->totalQty;
    		$this->totalprice = $oldVehicl2->totalprice;
    	}
    }

    public function add($item, $id) {
    	$storedItem = ['qty' => 0, 'price' =>$item->price, 'item' =>$item ];
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
