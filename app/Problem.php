<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
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
    public function subcontractor()
    {
        return $this->belongsTo(User::class, 'contractor_id');
    }
    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
