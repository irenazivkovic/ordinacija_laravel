<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zubar;
use App\Models\Klijent;

class Rezervacija extends Model
{
    use HasFactory;

    public function zubar(){
        return $this->belongsTo(Zubar::class);
    }

    public function klijent(){
        return $this->belongsTo(Klijent::class);
    }
}
