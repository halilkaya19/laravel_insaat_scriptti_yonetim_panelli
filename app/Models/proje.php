<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proje extends Model
{
    use HasFactory;

    public function projekategoribul(){
        return $this->hasOne(projekategori::class,'id','proje_kat_id');
    }

}
