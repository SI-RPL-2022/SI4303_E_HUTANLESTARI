<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Florafauna extends Model
{
    use HasFactory;

    protected $table = 'donasi_flora';

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
