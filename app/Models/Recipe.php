<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $table = 'recipes';

    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "guild",
        "skillrank",
        "name",
        "skill",
        "crystal",
        "material1",
        "material2",
        "material3",
        "material4",
        "material5",
        "material6",
        "material7",
        "material8",
        "HQ1",
        "HQ2",
        "HQ3",
        "type1",
        "item1",
        "type2",
        "item2",
        "type3",
        "item3",
        "type4",
        "item4",
    ];
}
