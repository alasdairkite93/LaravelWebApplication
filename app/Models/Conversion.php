<?php

namespace App\Models;

class Conversion
{

    public $action;
    public $quantity;
    public $item_code;
    public $product_name;
    public $colour;
    public $size;

    public function __construct($action, $quantity, $item_code, $product_name, $colour, $size) {
        $this->action = $action;
        $this->quantity = $quantity;
        $this->item_code = $item_code;
        $this->product_name = $product_name;
        $this->colour = $colour;
        $this->size = $size;
    }


    public static function create($arr){
        $val = explode(';' , strval($arr[0]), -1);
        $collection = Str::of($arr[0])->explode(';');
        return "$collection[0]";
    }
}
