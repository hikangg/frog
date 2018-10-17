<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model 
{
    protected $table = 'cruds';
    public $timestamps = true;
	protected $connection = 'mysql';
}