<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projekategori extends Model
{
    use HasFactory;
    protected $table = "projekategoris";
    public $timestamps = false;

    public function kategoriyelisteleproje(){
        return $this->hasMany(proje::class,'proje_kat_id','id');
    }

}
