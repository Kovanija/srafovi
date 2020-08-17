<?php

namespace App;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Cart
{
    public $items = null;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
        }
    }

    public function add($id, $quantity)
    {

        // if ($this->items) {
        //     if (array_key_exists($id, $this->items)) {
        //         $storedItem = ['quantity' => $quantity];
        //     } else {
        //         $storedItem = ['quantity' => $quantity];
        //     }
        // } else {
        $detail = Detail::with('product')->where('id', $id)->first();
        $storedItem = ['name' => $detail->product->name, 'dim1' => $detail->dim1, 'dim2' => $detail->dim2, 'pack' => $detail->pack, 'quantity' => $quantity, 'category' => $detail->product->category_id];
        // }
        $this->items[$id] = $storedItem;
    }

    public function delete($id)
    {
        if (array_key_exists($id, $this->items)) {
            unset($this->items[$id]);
        }
    }
}
