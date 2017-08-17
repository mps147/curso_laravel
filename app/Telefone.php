<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model {

  protected $fillable = [
      "tel_id",
      "tel_ddd",
      "tel_numero",
      "pe_id"
  ];
  protected $table = "telefones";
  
}
