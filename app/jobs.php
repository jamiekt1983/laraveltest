<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
  protected $fillable = [
         'pageType',
         'contactDetailsLeft',
         'contactDetailsRight',
         'contactStatus',
         'slug',
         'created_at',
         'updated_at',
      ];

}
