<?php

namespace App\Models;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    protected $table = 'donasi_dana';
    
    public function users(){
        return $this->belongsTo(User::class , 'user_id' , 'id' );
    }

    public function campaignss(){
        return $this->belongsTo(Campaign::class, 'campaign_id' , 'id');
    }
}

