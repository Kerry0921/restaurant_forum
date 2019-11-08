<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
        protected $member=[
           'mid',
           'mName',
           'mBirthday',
           'mEmail',
           'mPhone',
           'fid',
           'mType',
        ];
     
        public function restaurant()
        {
           return $this->hasOne(restaurant::class);
        }
     
}
