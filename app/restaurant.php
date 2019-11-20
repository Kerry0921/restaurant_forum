<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
   public $table = "restaurant";
   protected $fillable=[
      'rid',
      'rName',
      'rDescription',
      'rBHour',
      'rOffer',
      'rAddress',
      'rPhoto',
      'mid',
      'rType',
   ];
 
 }