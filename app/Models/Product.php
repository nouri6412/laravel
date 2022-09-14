<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail'
    ];

    public function getNameAttribute($name)
    {
        return $name.' '.'paswand';
    }

    public function setDetailAttribute($value)
    {
        $this->attributes['detail'] = Hash::make($value);
    }
}
