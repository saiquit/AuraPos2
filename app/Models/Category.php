<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class Category extends Model 
{
    protected $table = 'categories';
    use HasFactory;
    protected $gurded = ['id'];

    public function products(){
        return $this->hasMany(Product::class);
    }
    
}
