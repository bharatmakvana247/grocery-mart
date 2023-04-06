<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_name', 'brand_name'
    ];

    public function product_list()
    {
        return $this->hasMany(Product::class, 'category_name', 'category_id');
        //                       Model           Product tbl,   Category tbl
    }
}
