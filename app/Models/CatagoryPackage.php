<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatagoryPackage extends Model
{
    use HasFactory;
    protected $table = 'catagory_package';

    public function category()
    {
        return $this->belongsTo(Category::class, 'catagory_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
