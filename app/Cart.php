<?php

namespace App;

class Cart
{
  public $items = null;
  public $totalQty = 0;
  public $totalPrice = 0;
  public function __construct($oldCart)
  {
      if ($oldCart && sizeOf($oldCart->items) != 0) {
          $this->items = $oldCart->items;
          $this->totalQty = $oldCart->totalQty;
          $this->totalPrice = $oldCart->totalPrice;
      } else {
        $this->items = null;
        $this->totalQty = 0;
        $this->totalPrice = 0;
      }
  }
  public function add($item, $id) {
      $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
      if ($this->items) {
          if (array_key_exists($id, $this->items)) {
              $storedItem = $this->items[$id];
          }
      }
      $storedItem['qty']++;
      $storedItem['price'] = $item->price * $storedItem['qty'];
      $this->items[$id] = $storedItem;
      $this->totalQty++;
      $this->totalPrice += $item->price;
  }

  public function remove($id){
    if ($this->items) {
      if (array_key_exists($id, $this->items)) {
        $this->totalPrice -= $this->items[$id]['price'];
        $this->totalQty -= $this->items[$id]['qty'];
         unset($this->items[$id]);
      }
    }

  }
}