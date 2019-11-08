<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class index extends Model
{
   public $table = "restaurant";
   protected $restaurant=[
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