<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pricing_details extends Model
{
     //table name
     protected $table  = 'pricing-details';
     //primary key
     public $primaryKey= 'pricing_id';
     public $timestamps= 'true';
}
