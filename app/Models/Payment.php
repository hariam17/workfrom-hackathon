<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table='payments';

    protected  $fillable=[
        'user_id', 'office_id', 'room_id'
    ];

    public function user(){
         return $this->belongsTo(User::class);
    }
    public function office(){
         return $this->belongsTo(Office::class);
    }
    public function room(){
         return $this->belongsTo(Room::class);
    }
}
