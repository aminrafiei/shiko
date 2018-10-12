<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Cart extends Model
{

    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQuantity = $oldCart->totalQuantity;
        }
    }

    public function add($item, $size)
    {

        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item, 'size' => $size];
        if ($this->items) {
            if (array_key_exists($item->id + $size, $this->items)) {
                if ($this->items[$item->id + $size]['size'] == $size) {
                    $storedItem = $this->items[$item->id + $size];
                }

            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $storedItem['qty'] * $item->price;
        $this->items[$item->id + $size] = $storedItem;

        $this->totalQuantity++;
        $this->totalPrice += $item->price;

    }

    public static function deleteItem($oldCart, $id)
    {
        $item = $oldCart->items[$id];
        $newCart = $oldCart;
        $newCart->totalPrice -= $item['price'];
        $newCart->totalQuantity -= $item['qty'];
        unset($newCart->items[$id]);

        return $newCart;

    }

    //must be changed
    public static function changeQty($oldCart, $id, $action)
    {
        $newCart = $oldCart;
        $item = $newCart->items[$id]['item'];
        if (strcmp($action, 'plus') == 0) {

            $newCart->items[$id]['qty']++;
            $newCart->totalQuantity++;
            $newCart->items[$id]['price'] = $newCart->items[$id]['qty'] * $item->price;
            $newCart->totalPrice += $item['price'];

        } else {

            $newCart->totalQuantity--;
            $newCart->items[$id]['qty']--;
            $newCart->items[$id]['price'] = $newCart->items[$id]['qty'] * $item->price;
            $newCart->totalPrice -= $item['price'];
        }
        return $newCart;
    }

}
