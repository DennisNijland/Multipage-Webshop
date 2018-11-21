<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Products';

    public $primaryKey = 'id';

    public function getProduct($id)
    {

    }
}
