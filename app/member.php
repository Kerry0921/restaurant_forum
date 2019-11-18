<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
   public $table = "member";
        protected $fillable=[
           'mid',
           'mName',
           'Email',
           'Phone',
           'password',
           'fid',
           'mType',
        ];
      //關聯
      //   public function restaurant()
      //   {
      //      return $this->hasOne(restaurant::class);
      //   }
     
}
