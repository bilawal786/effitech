<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
}
