<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaravelList extends Model
{
    protected $table = 'laravel_list';
	protected $guarded = array('id');
    public $timestamps = false;
}
