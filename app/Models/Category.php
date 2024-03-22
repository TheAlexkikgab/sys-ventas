<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory;
    //protected $table='category';
    //protected $fillable = ['name', 'status', ''];
    protected $guarded = [];
    protected function status():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value== 1 ?'Active' : "Inactive",
        );
    }
}
