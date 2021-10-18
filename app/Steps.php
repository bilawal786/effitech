<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    public function subcontractor()
    {
        return $this->belongsTo(User::class, 'contractor_id');
    }
    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }
}
