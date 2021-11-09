<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discompose extends Model
{
    use HasFactory;

    protected $table = 'discomposes';

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
