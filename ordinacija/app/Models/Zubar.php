<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rezervacija;

class Zubar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'kategorija',
    ];

    public function rezervacije(){
        return $this->hasMany(Rezervacija::class);
    }
}
