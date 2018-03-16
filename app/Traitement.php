<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
  protected $table = "traitements" ;
  protected $fillable  = [
    'description' ,
    'duree' ,
    'ticket_id',
    'user_id'
  ] ;
}
