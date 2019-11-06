<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class LinhVuc extends Model
{
	use Notifiable;
	use SoftDeletes;
    protected $table = 'linh_vuc';
  
}
