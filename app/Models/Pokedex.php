<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;

    protected $table = 'pokedexes';

    // อนุญาตให้แก้ไขข้อมูลในคอลัมน์เหล่านี้ได้ (Mass Assignment)
    protected $fillable = [
        'name', 'type', 'species', 'height', 'weight',
        'hp', 'attack', 'defense', 'image_url'
    ];
}
