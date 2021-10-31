<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Needs extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
