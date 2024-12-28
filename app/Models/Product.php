<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table = 'Products';
    protected $fillable=['Pro_Name','Pro_Detail','Category_Id','Pro_Price','Pro_Img'];
    public function category():BelongsTo{
        return $this->belongsTo(Category::class,'Category_Id','id');
    }
}
