<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',  'lname', 'email', 'password', 'phone',  'address', 'role', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
    public function creater()
    {
        return $this->belongsTo(User::class, 'c_id');
    }
    public function quotes()
    {
        return $this->hasMany(Quote::class, 'client_id')->orderBy('id', 'DESC');
    }
    public function needs()
    {
        return $this->hasMany(Needs::class, 'client_id')->orderBy('id', 'DESC');
    }
}
