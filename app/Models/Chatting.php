<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatting extends Model
{
    use HasFactory;
    protected $table='chatting';

    protected  $fillable=[
        'from_user_id','to_user_id', 'text_chat'
    ];

    public function fromUser(){
        return $this->belongsTo(User::class);
   }
    public function toUser(){
        return $this->belongsTo(User::class);
   }
}
