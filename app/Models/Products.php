<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description'];
    public $table = 'products';

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
