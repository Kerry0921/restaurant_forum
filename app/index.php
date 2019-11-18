<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class index extends Model
{
   public $table = "restaurant";
   protected $fillable=[
      'rid',
      'rFavorite',
      'category',
      'rDescription',
      'rBHour',
      'rOffer',
      'rAddress',
      'rName',
      'rType',
      'rPhoto',
      'mid',
      
   ];

}