<?php

namespace App\Models;
use App\Enums\StylistStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','image'];

    public function reservation()
    {
        return $this->hasMany(reservation::class);
    }
}

