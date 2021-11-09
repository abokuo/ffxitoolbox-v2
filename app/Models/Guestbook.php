<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
    use HasFactory;

    protected $table = 'guestbooks';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guestName',
        'guestSubject',
        'guestEmail',
        'guestWebsite',
        'guestComment',
        'adminReply',
    ];
}
