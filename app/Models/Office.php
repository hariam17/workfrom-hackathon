<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $table='offices';

    protected  $fillable=[
        'user_id', 'nama', 'alamat', 'provinsi', 'kota', 'jml_lantai', 'urlimage'
    ];

    public function user(){
         return $this->belongsTo(User::class);
    }
}
