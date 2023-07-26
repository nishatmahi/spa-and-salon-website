<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','tel_number','email','res_date','stylists_id'];
    public function stylist()
    {
        return $this->belongsTo(Stylist::class, 'stylists_id');
    }
}
