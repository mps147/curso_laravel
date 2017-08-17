<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
  protected $fillable = [
      "pe_id",
      "pe_nome"
  ];
  protected $table = "pessoas";
  
  public function telefone(){
    return $this->hasMany(Telefone::class, "pe_id");
  }
}
