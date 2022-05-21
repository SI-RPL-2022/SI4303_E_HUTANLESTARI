<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $table = 'volunteer';

    public function users(){
        return $this->belongsTo(User::class , 'user_id' , 'id' );
    }

    public function campaignss(){
        return $this->belongsTo(Campaign::class, 'campaign_id' , 'id');
    }
}
