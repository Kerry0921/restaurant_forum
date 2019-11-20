<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class common extends Model
{
   public $table = "common";
   protected $fillable=[
      'fid',
      'mid',
      'rid',
      'common',
      'point',
   ];

}