<?php

namespace App\Models;
use App\Models\RModel;


class Produto extends RModel
{
   

    protected $fillable;
    public $timestamps = false;
     
    public function produtos()
    {
        return $this->belongsTo(Categoria::class);
    }

}
