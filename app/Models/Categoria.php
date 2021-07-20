<?php

namespace App\Models;
use App\Models\RModel;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    protected $fillable;
    public $timestamps = false;
   

    public function categorias()
    {
        return $this->hasMany(Produto::class);
    }
}
