<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','description','image'];
    
    public function catagories()
{
    return $this->belongsToMany(Catagory::class, 'catagory_package');
}
}
