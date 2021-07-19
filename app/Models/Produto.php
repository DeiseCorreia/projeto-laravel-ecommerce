<?php

namespace App\Models;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
   

    protected $fillable;
    public $timestamps = false;
     
    public function produtos()
    {
        return $this->belongsTo(Categoria::class);
    }

}
